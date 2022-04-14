<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Routes extends Controller
{
    public function index(){
        $title = DB::table('meta')->where('route', 'index')->value('title');
        $description = DB::table('meta')->where('route', 'index')->value('description');
        $keywords = DB::table('meta')->where('route', 'index')->value('keywords');
        $page_style = DB::table('meta')->where('route', 'index')->value('style_name');
        $page_script = DB::table('meta')->where('route', 'index')->value('script_name');
        return view('home', compact('title', 'description', 'keywords', 'page_style', 'page_script'));
    }
    public function about(){
        $title = DB::table('meta')->where('route', 'about')->value('title');
        $description = DB::table('meta')->where('route', 'about')->value('description');
        $keywords = DB::table('meta')->where('route', 'about')->value('keywords');
        $page_style = DB::table('meta')->where('route', 'about')->value('style_name');
        $page_script = DB::table('meta')->where('route', 'about')->value('script_name');
        return view('about', compact('title', 'description', 'keywords', 'page_style', 'page_script'));
    }
    public function tos(){
        $title = DB::table('meta')->where('route', 'tos')->value('title');
        $description = DB::table('meta')->where('route', 'tos')->value('description');
        $keywords = DB::table('meta')->where('route', 'tos')->value('keywords');
        $page_style = DB::table('meta')->where('route', 'tos')->value('style_name');
        $page_script = DB::table('meta')->where('route', 'tos')->value('script_name');
        return view('tos', compact('title', 'description', 'keywords', 'page_style', 'page_script'));
    }
    public function privacy(){
        $title = DB::table('meta')->where('route', 'privacy')->value('title');
        $description = DB::table('meta')->where('route', 'privacy')->value('description');
        $keywords = DB::table('meta')->where('route', 'privacy')->value('keywords');
        $page_style = DB::table('meta')->where('route', 'privacy')->value('style_name');
        $page_script = DB::table('meta')->where('route', 'privacy')->value('script_name');
        return view('privacy-policy', compact('title', 'description', 'keywords', 'page_style', 'page_script'));
    }
    public function sitemap(){
        $title = DB::table('meta')->where('route', 'sitemap')->value('title');
        $description = DB::table('meta')->where('route', 'sitemap')->value('description');
        $keywords = DB::table('meta')->where('route', 'sitemap')->value('keywords');
        $page_style = DB::table('meta')->where('route', 'sitemap')->value('style_name');
        $page_script = DB::table('meta')->where('route', 'sitemap')->value('script_name');
        return view('sitemap', compact('title', 'description', 'keywords', 'page_style', 'page_script'));
    }
    public function jobCareer(){
        $title = DB::table('meta')->where('route', 'jobCareer')->value('title');
        $description = DB::table('meta')->where('route', 'jobCareer')->value('description');
        $keywords = DB::table('meta')->where('route', 'jobCareer')->value('keywords');
        $page_style = DB::table('meta')->where('route', 'jobCareer')->value('style_name');
        $page_script = DB::table('meta')->where('route', 'jobCareer')->value('script_name');
        return view('job-career', compact('title', 'description', 'keywords', 'page_style', 'page_script'));
    }
    public function courses(){
        $title = DB::table('meta')->where('route', 'courses')->value('title');
        $description = DB::table('meta')->where('route', 'courses')->value('description');
        $keywords = DB::table('meta')->where('route', 'courses')->value('keywords');
        $page_style = DB::table('meta')->where('route', 'courses')->value('style_name');
        $page_script = DB::table('meta')->where('route', 'courses')->value('script_name');
        return view('courses', compact('title', 'description', 'keywords', 'page_style', 'page_script'));
    }
    public function webApp(){
        $title = DB::table('meta')->where('route', 'webApp')->value('title');
        $description = DB::table('meta')->where('route', 'webApp')->value('description');
        $keywords = DB::table('meta')->where('route', 'webApp')->value('keywords');
        $page_style = DB::table('meta')->where('route', 'webApp')->value('style_name');
        $page_script = DB::table('meta')->where('route', 'webApp')->value('script_name');
        return view('web-app', compact('title', 'description', 'keywords', 'page_style', 'page_script'));
    }
    public function video(){
        $title = DB::table('meta')->where('route', 'video')->value('title');
        $description = DB::table('meta')->where('route', 'video')->value('description');
        $keywords = DB::table('meta')->where('route', 'video')->value('keywords');
        $page_style = DB::table('meta')->where('route', 'video')->value('style_name');
        $page_script = DB::table('meta')->where('route', 'video')->value('script_name');
        return view('video', compact('title', 'description', 'keywords', 'page_style', 'page_script'));
    }
    public function seo(){
        $title = DB::table('meta')->where('route', 'seo')->value('title');
        $description = DB::table('meta')->where('route', 'seo')->value('description');
        $keywords = DB::table('meta')->where('route', 'seo')->value('keywords');
        $page_style = DB::table('meta')->where('route', 'seo')->value('style_name');
        $page_script = DB::table('meta')->where('route', 'seo')->value('script_name');
        return view('seo', compact('title', 'description', 'keywords', 'page_style', 'page_script'));
    }
    public function uiux(){
        $title = DB::table('meta')->where('route', 'uiux')->value('title');
        $description = DB::table('meta')->where('route', 'uiux')->value('description');
        $keywords = DB::table('meta')->where('route', 'uiux')->value('keywords');
        $page_style = DB::table('meta')->where('route', 'uiux')->value('style_name');
        $page_script = DB::table('meta')->where('route', 'uiux')->value('script_name');
        return view('uiux', compact('title', 'description', 'keywords', 'page_style', 'page_script'));
    }
    public function contact(){
        $title = DB::table('meta')->where('route', 'contact')->value('title');
        $description = DB::table('meta')->where('route', 'contact')->value('description');
        $keywords = DB::table('meta')->where('route', 'contact')->value('keywords');
        $page_style = DB::table('meta')->where('route', 'contact')->value('style_name');
        $page_script = DB::table('meta')->where('route', 'contact')->value('script_name');
        return view('contact', compact('title', 'description', 'keywords', 'page_style', 'page_script'));
    }
}
