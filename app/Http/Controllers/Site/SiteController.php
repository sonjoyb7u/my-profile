<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Client;
use App\Models\Post;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Slider;
use App\Models\Url;
use App\Models\User;
use Illuminate\Http\Request;

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

}