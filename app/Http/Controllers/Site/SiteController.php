<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Category;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Slider;
use App\Models\Url;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUsMail;

class SiteController extends Controller
{
    public function index() {
        $slider = Slider::where('status', Slider::ACTIVE_STATUS)->get();
//        return $slider;
        $urls = Url::where('status', Url::ACTIVE_STATUS)->get();
//        return $urls;
        $about = User::with('profile')->get();
//        return $about;
        $skills = Skill::where('status', 'active')->get();
//        return $skills;
        $services = Service::where('status', Service::ACTIVE_STATUS)->get();
//        return $services;
        $clients = Client::where('status', Client::ACTIVE_STATUS)->get();
//        return $clients;
        $categories = Category::with('projects')->where('status', Category::ACTIVE_STATUS)->get();
//        return $categories;
        $projects = Project::with('user', 'category')->where('status', Project::PUBLISHED)->get();
//        return $projects;
       $blog_posts =  Post::with('user')->where('status', Post::PUBLISHED)->latest()->simplePaginate(3);
//       return $blog_posts;

        return view('site.index', compact('slider', 'urls', 'about', 'skills', 'services', 'clients', 'categories', 'projects', 'blog_posts'));
    }

    public function store(ContactRequest $request) {
//        return $request->all();
        
        $contact_info_detail = [
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'address' => $request->address,
                'message' => $request->message,
        ];
        // return $contact_info_detail;

        // Send an Email...
        Mail::to('sonjoy.profile@gmail.com')->send(new ContactUsMail($contact_info_detail));
        
        $contact_info = Contact::create($contact_info_detail);
        
        if($contact_info) {
                Toastr::success('Your Mail Info Has Been Send Successfully Done.', 'Success');
                return redirect()->back();

        } else {
                Toastr::error('Your Mail Info Has Not Been Send, Please Try Again!.', 'Error');
                return redirect()->back();
        }


    }

}
