<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class meta extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('meta')->insert([
            'route' => 'index',
            'title' => 'Codebumble Inc - We develop corporate solutions of the era.',
            'description' => 'Codebumble is one of the growing industries of the technology era. Our corporate software development services include next-generation enterprise apps for the web and desktop.',
            'keywords' => 'Codebumble, Codebumble Incorporate, Codebumble Inc., programming, software, web development, course, e-learning, application, web application, management system, app development, development, bangladesh, top, growing, company, software company',
            'script_name' => 'home',
            'style_name' => 'home',
        ]);
        DB::table('meta')->insert([
            'route' => 'about',
            'title' => 'About Codebumble Inc. | Web Application Programming, Design, Integration &amp; Support.',
            'description' => 'About Codebumble Inc. Software development company. We have competitive benefits and advantages at Codebumble to provide service of the most high quality to your clients.',
            'keywords' => 'Codebumble, Codebumble Incorporate, Codebumble Inc., programming, software, web development, course, e-learning, application, web application, management system, app development, development, bangladesh, top, growing, company, software company',
            'script_name' => 'about-us',
            'style_name' => 'about-us',
        ]);
        DB::table('meta')->insert([
            'route' => 'contact',
            'title' => 'Contact - Codebumble Inc. | We develop corporate solutions of the era.',
            'description' => 'Contact Codebumble software development company to acquire an experienced insight into your business concept!',
            'keywords' => 'Codebumble, Codebumble Incorporate, Codebumble Inc., programming, software, web development, course, e-learning, application, web application, management system, app development, development, bangladesh, top, growing, company, software company',
            'style_name' => 'contact',
        ]);
        DB::table('meta')->insert([
            'route' => 'tos',
            'title' => 'Terms of Service - Codebumble Inc.',
            'description' => 'Codebumble\'s Terms of Service to provide the usage acceptance, ragulation etc.',
            'keywords' => 'Codebumble, Codebumble Incorporate, Codebumble Inc., programming, software, web development, course, e-learning, application, web application, management system, app development, development, bangladesh, top, growing, company, software company',
            'style_name' => 'terms-and-service'
        ]);
        DB::table('meta')->insert([
            'route' => 'privacy',
            'title' => 'Privacy Policy - Codebumble Inc.',
            'description' => 'Codebumble\'s Privacy policy to provide grade software programming services.',
            'keywords' => 'Codebumble, Codebumble Incorporate, Codebumble Inc., programming, software, web development, course, e-learning, application, web application, management system, app development, development, bangladesh, top, growing, company, software company',
            'style_name' => 'privacy-policy'
        ]);
        DB::table('meta')->insert([
            'route' => 'webApp',
            'title' => 'We have Web App Development Service. Build a website or app like your mind for your business. | Codebumble Inc.',
            'description' => 'We\'re Codebumble build websites, web app from scratch for your business. We\re Dedicated to provide you our best.',
            'keywords' => 'Codebumble, Codebumble Incorporate, Codebumble Inc., programming, software, web development, course, e-learning, application, web application, management system, app development, development, bangladesh, top, growing, company, software company',
            'style_name' => 'service-details',
            'script_name' => 'service-details',
        ]);
        DB::table('meta')->insert([
            'route' => 'courses',
            'title' => 'Courses - Codebumble Inc. | You have a chance to develop your skills with Codebumble.',
            'description' => 'Codebumble trains peoples like you to develop your skills. Let\'s enroll and grow yourself like a bird.',
            'keywords' => 'Codebumble, Codebumble Incorporate, Codebumble Inc., programming, software, web development, course, e-learning, application, web application, management system, app development, development, bangladesh, top, growing, company, software company',
            'style_name' => 'courses',
            'script_name' => 'courses',
        ]);
        DB::table('meta')->insert([
            'route' => 'jobCareer',
            'title' => 'Job Career - Codebumble Inc. | To us, our employees have acquired the facilities to work virtually. Let\'s give a chance to you.',
            'description' => 'Starting Job Career with Codebumble will let you work by freelance. You can do your work at your time from anywhere.',
            'keywords' => 'Codebumble, Codebumble Incorporate, Codebumble Inc., programming, software, web development, course, e-learning, application, web application, management system, app development, development, bangladesh, top, growing, company, software company',
            'style_name' => 'job-career',
            'script_name' => 'job-career',
        ]);
        DB::table('meta')->insert([
            'route' => 'video',
            'title' => 'We provide Video Production Service. Let\'s making video content with us. | Codebumble Inc.',
            'description' => 'Our Video Production service will amaze you. We have a fully dedicated team for Producting video. Codebumble will guide you to the best.',
            'keywords' => 'Codebumble, Codebumble Incorporate, Codebumble Inc., programming, software, web development, course, e-learning, application, web application, management system, app development, development, bangladesh, top, growing, company, software company',
            'style_name' => 'service-details',
            'script_name' => 'service-details',
        ]);
        DB::table('meta')->insert([
            'route' => 'uiux',
            'title' => 'UI/UX Design - Codebumble Inc.',
            'description' => 'UI/UX design can increase the impression of your business—no matter where you use your design.',
            'keywords' => 'Codebumble, Codebumble Incorporate, Codebumble Inc., programming, software, web development, course, e-learning, application, web application, management system, app development, development, bangladesh, top, growing, company, software company',
            'style_name' => 'service-details',
            'script_name' => 'service-details',
        ]);
        DB::table('meta')->insert([
            'route' => 'seo',
            'title' => 'Search Engine Optimization - Codebumble Inc.',
            'description' => 'Codebumble will do SEO for your website to engage more visitors and help to make them your clients.',
            'keywords' => 'Codebumble, Codebumble Incorporate, Codebumble Inc., programming, software, web development, course, e-learning, application, web application, management system, app development, development, bangladesh, top, growing, company, software company',
            'style_name' => 'service-details',
            'script_name' => 'service-details',
        ]);
    }
}
