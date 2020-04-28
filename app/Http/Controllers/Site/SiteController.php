<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Skill;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        $skills = Skill::where('status', 'active')->get();
//        return $skills;
        $services = Service::where('status', 'active')->get();

        return view('site.index', compact('skills', 'services'));
    }
}
