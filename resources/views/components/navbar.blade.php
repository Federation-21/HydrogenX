    <header class="my-4 lg:dark:text-white absolute w-full z-10">
        <div class="container">
            <div class="block lg:flex items-center justify-between max-h-12">
                <div class="brand-wrap">
                    <a href="{{ url('/') }}" class="">
                        <img src="{{ asset('assets/images/logo/code-white.svg') }}" alt="codebumble" class="w-36 lg:w-48">
                    </a>
                    <!-- logo -->
                    <div class="lg:hidden">
                        <a href="{{route('contact')}}"
                            class="bg-indigo-600 hover:bg-white hover:text-indigo-600 rounded-full mr-2 lg:mr-4 py-2 px-3 text-center uppercase antialiased text-xs transition-all font-bold text-white">book
                            a call</a>
                        <!-- responsive book a call button -->
                        <button class="hamburger hamburger--slider" type="button" id="menu-icon">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                        <!-- responsive  hamburger icon -->
                    </div>
                </div>
                <!-- .brand-wrap -->
                <nav class="cb-nav max-h-144 overflow-scroll lg:overflow-visible" id="vl-nav">
                    <ul class="block lg:flex" id="menu">
                        <li class="cb-nav-item"><a href="{{url('/')}}" class="cb-nav-link">Home</a></li>
                        <li class="cb-nav-item has-child">
                            <a class="cb-nav-link">Services
                                <i class="fad fa-chevron-down arrow"></i>
                            </a>
                            <ul class="cb-mega">
                                <li class="mega-items hover:bg-indigo-50">
                                    <a href="{{route('web')}}" class="mega-link">
                                        <div class="flex items-center">
                                            <div class="mr-3">
                                                <i class="fad fa-terminal opacity-80 text-xl text-indigo-600"></i>
                                            </div>
                                            <div>
                                                <h1 class="text-base text-gray-800">Web Development</h1>
                                            </div>
                                        </div>
                                        <p class="my-3">Create Your Own Website with low cost. Choose Your Website Type and
                                            Stand Your Own.</p>
                                    </a>
                                </li>

                                <li class="mega-items hover:bg-green-50">
                                    <a href="{{route('video')}}" class="mega-link">
                                        <div class="flex items-center">
                                            <div class="mr-3">
                                                <i class="fad fa-video opacity-80 text-xl text-green-600"></i>
                                            </div>
                                            <div>
                                                <h1 class="text-base text-gray-800">Video Production</h1>
                                            </div>
                                        </div>
                                        <p class="my-3">Make Your Own Promotional Video (Animation/2D/3D). Enhance the aesthetics of your company.</p>

                                    </a>
                                </li>

                                <li class="mega-items hover:bg-violet-50">
                                    <a href="{{route('uiux')}}" class="mega-link">
                                        <div class="flex items-center">
                                            <div class="mr-3">
                                                <i class="fad fa-pencil-paintbrush opacity-80 text-xl text-violet-600"></i>
                                            </div>
                                            <div>
                                                <h1 class="text-base text-gray-800">UI/UX Design</h1>
                                            </div>
                                        </div>
                                        <p class="my-3">Design a product that is convenient to use, attractive, and effective.</p>
                                    </a>
                                </li>


                                <li class="mega-items hover:bg-blue-50">
                                    <a href="{{route('seo')}}" class="mega-link">
                                        <div class="flex items-center">
                                            <div class="mr-3">
                                                <i class="fad fa-chart-line opacity-80 text-xl text-blue-600"></i>
                                            </div>
                                            <div>
                                                <h1 class="text-base text-gray-800">Search Engine Optimization</h1>
                                            </div>
                                        </div>
                                        <p class="my-3">Proper SEO means a website's content relevancy, link popularity, using appropriate keywords, etc.</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="cb-nav-item"><a href="{{route('about')}}" class="cb-nav-link">About Us</a></li>
                        <li class="cb-nav-item has-child">
                            <a class="cb-nav-link">Career
                                <i class="fad fa-chevron-down arrow"></i>
                            </a>

                            <ul class="cb-mega">
                                <li class="mega-items p-5 hover:bg-orange-50">
                                    <div class="flex items-center">
                                        <div class="mr-3">
                                            <i class="fad fa-user-graduate opacity-80 text-xl text-orange-600"></i>
                                        </div>
                                        <div>
                                            <h1 class="text-base text-gray-800">Get Training</h1>
                                        </div>
                                    </div>
                                    <p class="my-3">Change Your Life and Professional. Be Creative & Make your Self Perfect.</p>
                                    <ul>
                                        <li class="inner-mega-items"><a href="{{route('courses')}}" class="inner-mega-link">Our
                                                Courses</a></li>
                                        <li class="inner-mega-items"><a href="" class="inner-mega-link" disabled>Student Verification (Coming Soon)</a></li>
                                    </ul>
                                </li>
                                <li class="mega-items p-5 hover:bg-rose-50">
                                    <div class="flex items-center">
                                        <div class="mr-3">
                                            <i class="fad fa-laptop-house opacity-80 text-xl text-rose-600"></i>
                                        </div>
                                        <div>
                                            <h1 class="text-base text-gray-800">Get a Job</h1>
                                        </div>
                                    </div>
                                    <p class="my-3">Show Your Telents and Use Your Time Properly to Shine Yourself.</p>
                                    <ul>
                                        <li class="inner-mega-items"><a href="{{route('jobCareer')}}"
                                                class="inner-mega-link">Find your preferred Job</a></li>
                                        <li class="inner-mega-items"><a href="" class="inner-mega-link" disabled>Employee Verification (Coming Soon)</a></li>
                                    </ul>
                                </li>
                            </ul>

                        </li>
                    </ul>
                    <!-- navigation items -->
                    <a href="{{route('auth-login')}}"
                        class="hidden lg:block bg-indigo-600 text-white hover:bg-white hover:text-indigo-600 rounded-full mx-2 py-2 px-4 text-center uppercase antialiased text-xs transition-all">Sign In</a>
                </nav>
                <!-- .cb-nav closed -->
            </div>
        </div>
    </header>
    <!-- Header Closed -->
