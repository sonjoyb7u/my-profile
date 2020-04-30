<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        $skills = Skill::where('status', 'active')->get();
//        return $skills;
        $services = Service::where('status', 'active')->get();
//        return $services;
        $categories = Category::with('projects')->where('status', Category::ACTIVE_STATUS)->get();
//        return $categories;
        $projects = Project::with('user', 'category')->where('status', Project::PUBLISHED)->get();
//        return $projects;

        return view('site.index', compact('skills', 'services', 'categories', 'projects'));
    }

    public function catWiseProject($cat_id) {
        return $cat_id = base64_decode($cat_id);
        $catProjects = Category::with('projects')->find($cat_id);
//        return $catProjects;
        return view('site.test', compact('catProjects'));
    }
}
