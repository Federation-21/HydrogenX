@extends('layouts.main')
@section('content')
    {{--  --}}
    <section id="cb-bg-video" class="overflow-hidden cb-hero relative">
        <div class="gradient-overlay"></div>
        <video id="getVideo" class="video-background" muted autoplay loop>
            <source src="" type="video/mp4">
            <script>
                var videoBackground = document.querySelector("#getVideo");
                var videoSource = videoBackground.querySelector("source");
                var videoDesktop = './assets/videos/cbd.mp4';
                var videoMobile = './assets/videos/cbm.mp4';
                if (window.innerWidth <= 1023 && videoMobile) {
                    videoSource.setAttribute("src", videoMobile);
                } else {
                    videoSource.setAttribute("src", videoDesktop);
                }
                videoBackground.load();
                videoBackground.play();
            </script>
        </video>
        <div class="container py-20">
            <div class="flex flex-col justify-center h-75vh text-white">
                <h2 class="tracking-widest text-md lg:text-2xl font-bold mb-4">We are Codebumble Inc.</h2>
                <p class="lg:text-5xl text-2xl font-bold lg:leading-tight leading-snug lg:w-2/3 capitalize lg:mb-3">
                    Focused on your Web Application & Software Development. Upgrade your Business.
                </p>
                <a href="{{ route('contact') }}"
                    class="rounded bg-indigo-600 lg:py-4 lg:px-4 px-2 py-2 hover:bg-gray-100 hover:text-indigo-600 text-center antialiased w-40 lg:w-44 font-bold text-xl mt-4 transition shadow-lg border-2 border-transparent hover:border-indigo-600">Let's
                    Talk</a>
            </div>
        </div>
    </section>
    <!-- Hero section Closed -->

    <section id="cb-service" class="overflow-hidden bg-white dark:bg-deepdark relative py-20">
        <div class="blob-bg">
            <div class="blob blob-1">
                <img src="{{ asset('assets/images/blob/blob-1') }}.svg" alt="blob-1">
            </div>
            <div class="blob blob-2">
                <img src="{{ asset('assets/images/blob/blob-1') }}.svg" alt="blob-1">
            </div>
        </div>
        <div class="container z-10">
            <span class="bg-blue-200 text-blue-800 rounded-full px-7 py-1 z-10">Service</span>
            <div class="py-5 block lg:flex justify-between items-center">
                <h2 class=" text-3xl lg:text-5xl font-bold dark:text-gray-300">Our new features we build great.</h2>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 py-8">
                <div class="card">
                    <div class="w-16">
                        <img src="{{ asset('assets/images/contents/developer.svg') }}" alt="development">
                    </div>
                    <div class="card-about">
                        <h2>Development</h2>
                        <p>Constantly Developing Script Gives Extra Aesthetic Vibe and It gives a good feed back from the
                            users.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="w-16 ">
                        <img src="{{ asset('assets/images/contents/secure.svg') }}" alt="information">
                    </div>
                    <div class="card-about">
                        <h2>Security</h2>
                        <p>Giving Security is our primary goal. Script without Security is like a plane in the space</p>
                    </div>
                </div>
                <div class="card">
                    <div class="w-16">
                        <img src="{{ asset('assets/images/contents/high-performance') }}.svg" alt="Stability">
                    </div>
                    <div class="card-about">
                        <h2>Stability </h2>
                        <p>Providing Stable Script gives you Fresh Works. </p>
                    </div>
                </div>
                <div class="card">
                    <div class="w-16">
                        <img src="{{ asset('assets/images/contents/bug-problem') }}.svg" alt="Bug">
                    </div>
                    <div class="card-about">
                        <h2>Bug Fixing</h2>
                        <p>Fixing Bug less than one day and giving an update to the clients.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="w-16">
                        <img src="{{ asset('assets/images/contents/dashboard-interface') }}.svg" alt="Interface">
                    </div>
                    <div class="card-about">
                        <h2>User-Friendly Interface</h2>
                        <p>User-Friendly Interface Gives You some extra facilities and reduce your time for any work.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="w-16">
                        <img src="{{ asset('assets/images/contents/creative-idea') }}.svg" alt="Creativity">
                    </div>
                    <div class="card-about">
                        <h2>Creativity</h2>
                        <p>Creative Script and Apps give you more experiance and make you life easier.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Closed -->

    <section id="work-process" class="overflow-hidden relative dark:bg-deepdark py-20 bg-darkwhite">
        <div class="blob-bg">
            <div class="blob blob-1">
                <img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
            </div>
            <div class="blob blob-2">
                <img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
            </div>
        </div>
        <div class="container z-10 flex justify-between items-center flex-col lg:flex-row">
            <div class="process-img">
                <img src="{{ asset('assets/images/contents/processing.svg') }}" alt="process-image" class="image">
            </div>
            <div class="tree-section z-10">
                <span class="bg-blue-200 text-blue-800 rounded-full px-7 py-1 z-10 w-40">Programming Work Process.</span>
                <div class="service-heading py-5 block lg:flex justify-between items-center">
                    <h2 class="dark:text-gray-300 text-3xl lg:text-5xl font-bold">How do we work?</h2>
                </div>
                <div class="single-card">
                    <h2 class="sc-heading">1. Making A Perfect Algorithm and Flow Chart</h2>
                    <p>It is helpful for all the coders to work and understand the plan and the Script. Anyone can Start
                        from any part and save the time.</p>
                </div>
                <div class="single-card">
                    <h2 class="sc-heading">2. Making A Good UI/UX</h2>
                    <p>UI/UX is such an essential Part of Frontend development. A Better UI/UX will always create an
                        excellent impression to the Client.</p>
                </div>
                <div class="single-card">
                    <h2 class="sc-heading">3. Bug Fixing, Build & Run</h2>
                    <p>Checking All the Features is an integral part of development. Fixing bugs and rechecking the Code
                        will help you to get some good feed back at all</p>
                </div>
                <div class="single-card">
                    <h2 class="sc-heading">4. Unit Testing, Production Build & Emitted</h2>
                    <p>Unit testing is a process with which we can test the logical codes of the program. And if it passes
                        all the tests, they are prepared for production build and handed over to you.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Work Process Closed -->

    <section id="solutions" class="overflow-hidden relative dark:bg-gray-900 py-20 bg-white">
        <div class="blob-bg">
            <div class="blob blob-1">
                <img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
            </div>
            <div class="blob blob-2">
                <img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
            </div>
        </div>
        <div class="container z-10">
            <span class="bg-blue-200 text-blue-800 rounded-full px-7 py-1 z-10">Products</span>
            <div class="service-heading py-5">
                <h2 class=" text-3xl lg:text-5xl font-bold dark:text-gray-300">One Platform Many <span
                        class="text-indigo-700">Solutions</span></h2>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-5 py-8">
                <div class="prod-card" id="ms">
                    <div class="w-16">
                        <img src="{{ asset('assets/images/contents/salesman.svg') }}" alt="Managemanet System"
                            class="">
                    </div>
                    <div class="prod-card-about">
                        <h2>Management System</h2>
                    </div>
                </div>
                <div class="prod-card">
                    <div class="w-16">
                        <img src="{{ asset('assets/images/contents/web-app.svg') }}" alt="Web Application"
                            class="">
                    </div>
                    <div class="prod-card-about">
                        <h2>Web Applications</h2>
                    </div>
                </div>
                <div class="prod-card">
                    <div class="w-16">
                        <img src="{{ asset('assets/images/contents/basket.svg') }}" alt="ecommmerce" class="">
                    </div>
                    <div class="prod-card-about">
                        <h2>eCommerce</h2>
                    </div>
                </div>
                <div class="prod-card">
                    <div class="w-16">
                        <img src="{{ asset('assets/images/contents/designs.svg') }}" alt="designs and development"
                            class="">
                    </div>
                    <div class="prod-card-about">
                        <h2>Design & Development</h2>
                    </div>
                </div>
                <div class="prod-card">
                    <div class="w-16">
                        <img src="{{ asset('assets/images/contents/employees.svg') }}" alt="CRM" class="">
                    </div>
                    <div class="prod-card-about">
                        <h2>CRM</h2>
                    </div>
                </div>
                <div class="prod-card">
                    <div class="w-16">
                        <img src="{{ asset('assets/images/contents/video-tutorials.svg') }}" alt="Consulting"
                            class="">
                    </div>
                    <div class="prod-card-about">
                        <h2>Consulting</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="transform translate-y-full p-10 rounded-lg bg-indigo-800 w-full overflow-hidden h-[95%] text-gray-100 fixed bottom-0 z-40 transition-all duration-300"
            id="modal" data-modal>
            <div class="text-right flex justify-end sticky -top-3 -right-3 text-xl cursor-pointer w-fit mr-0 ml-auto"
                id="close"><i class="fad fa-times"></i></div>
            <div class="products">
                <h2 class="text-gray-200 text-center text-3xl">No Product have been released yet!!!
                </h2>
                <p class="text-gray-200 text-center text-xl mt-3">Please check back later. We're working on it. or submit a
                    <a href="{{ route('contact') }}" class="underline decoration-indigo-100 underline-offset-2">Call
                        Back</a> request!
                </p>
            </div>
        </div>
    </section>
    <!-- Product solutions Closed -->

    <section id="team" class="overflow-hidden relative dark:bg-deepdark py-20 bg-darkwhite">
        <div class="blob-bg">
            <div class="blob blob-1">
                <img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
            </div>
            <div class="blob blob-2">
                <img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
            </div>
        </div>
        <div class="container">
            <span class="bg-blue-200 text-blue-800 rounded-full px-7 py-1 z-10">Team</span>
            <div class="py-5 block lg:flex justify-between items-center">
                <h2 class=" text-3xl lg:text-5xl font-bold dark:text-gray-300">Our <span class="text-indigo-700">Mind
                        Power</span></h2>
            </div>

            <div class="splide py-8" id="team-slider">
                <div class="splide__track">
                    <div class="splide__list">
                        <div class="splide__slide slide-item">
                            <div class="slide-item-body">
                                <img src="{{ asset('assets/images/contents/team-members/saifur.jpg') }}"
                                    alt="team-member" class="rounded-lg h-350">
                                <div class="social">
                                    <ul class="flex">
                                        <li class="mr-4 hover:text-blue-600 transition-all duration-500"><a
                                                href="https://www.facebook.com/mdsaifurrahmann" class="text-2xl"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-facebook">
                                                    <path
                                                        d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                                    </path>
                                                </svg></a></li>
                                        <li class="mr-4 hover:text-blue-600 transition-all duration-500"><a
                                                href="https://www.github.com/mdsaifurrahmann" class="text-2xl"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-github">
                                                    <path
                                                        d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                                    </path>
                                                </svg></a></li>
                                        <li class="mr-4 hover:text-blue-600 transition-all duration-500"><a
                                                href="mailto:md.saifurrahmann029@gmail.com" class="text-2xl">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-at-sign">
                                                    <circle cx="12" cy="12" r="4"></circle>
                                                    <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                                </svg></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="my-3 text-gray-800 dark:text-white">
                                <h2 class="text-2xl font-bold hover:text-indigo-700 transition-all duration-500">Md. Saifur
                                    Rahman</h2>
                                <p class="dark:text-gray-300">Founder of Codebumble</p>
                            </div>
                        </div>
                        <div class="splide__slide slide-item">
                            <div class="slide-item-body">
                                <img src="{{ asset('assets/images/contents/team-members/shakil.png') }}"
                                    alt="team-member" class="rounded-lg h-350">
                                <div class="social">
                                    <ul class="flex">
                                        <li class="mr-4 hover:text-blue-600 transition-all duration-500"><a
                                                href="https://www.facebook.com/shakilofficialdll" class="text-2xl"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-facebook">
                                                    <path
                                                        d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                                    </path>
                                                </svg></a></li>
                                        <li class="mr-4 hover:text-blue-600 transition-all duration-500"><a
                                                href="https://github.com/shakilofficial0" class="text-2xl"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-github">
                                                    <path
                                                        d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                                    </path>
                                                </svg></a></li>
                                        <li class="mr-4 hover:text-blue-600 transition-all duration-500"><a
                                                href="mailto:shakilofficial0@gmail.com" class="text-2xl">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-at-sign">
                                                    <circle cx="12" cy="12" r="4"></circle>
                                                    <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                                </svg></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="my-3 text-gray-800 dark:text-white">
                                <h2 class="text-2xl font-bold hover:text-indigo-700 transition-all duration-500">S. M.
                                    Shakil Ahmed</h2>
                                <p class="dark:text-gray-300">Chief Executive Officier</p>
                            </div>
                        </div>
                        <div class="splide__slide slide-item">
                            <div class="slide-item-body">
                                <img src="{{ asset('assets/images/contents/team-members/enan.png') }}" alt="team-member"
                                    class="rounded-lg h-350">
                                <div class="social">
                                    <ul class="flex">
                                        <li class="mr-4 hover:text-blue-600 transition-all duration-500"><a
                                                href="https://www.facebook.com/shahriar.enan" class="text-2xl"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-facebook">
                                                    <path
                                                        d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                                    </path>
                                                </svg></a></li>
                                        <li class="mr-4 hover:text-blue-600 transition-all duration-500"><a
                                                href="mailto:enan.codebumble@gmail.com" class="text-2xl">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-at-sign">
                                                    <circle cx="12" cy="12" r="4"></circle>
                                                    <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                                </svg></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="my-3 text-gray-800 dark:text-white">
                                <h2 class="text-2xl font-bold hover:text-indigo-700 transition-all duration-500">Shariar
                                    Enan</h2>
                                <p class="dark:text-gray-300">Cheif Information Officier</p>
                            </div>
                        </div>
                        <div class="splide__slide slide-item">
                            <div class="slide-item-body">
                                <img src="{{ asset('assets/images/contents/team-members/yy.jpg') }}" alt="team-member"
                                    class="rounded-lg h-350">
                                <div class="social">
                                    <ul class="flex">
                                        <li class="mr-4 hover:text-blue-600 transition-all duration-500"><a
                                                href="https://www.facebook.com/swnyy" class="text-2xl"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-facebook">
                                                    <path
                                                        d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                                    </path>
                                                </svg></a></li>
                                        <li class="mr-4 hover:text-blue-600 transition-all duration-500"><a
                                                href="https://www.github.com/yyshawon" class="text-2xl"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-github">
                                                    <path
                                                        d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                                    </path>
                                                </svg></a></li>
                                        <li class="mr-4 hover:text-blue-600 transition-all duration-500"><a
                                                href="mailto:yyshawon@gmail.com" class="text-2xl">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-at-sign">
                                                    <circle cx="12" cy="12" r="4"></circle>
                                                    <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                                </svg></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="my-3 text-gray-800 dark:text-white">
                                <h2 class="text-2xl font-bold hover:text-indigo-700 transition-all duration-500">Fazlay
                                    Rabby Shawon</h2>
                                <p class="dark:text-gray-300">VP of Social Media</p>
                            </div>
                        </div>
                        <div class="splide__slide slide-item">
                            <div class="slide-item-body">
                                <img src="{{ asset('assets/images/contents/team-members/sunny.jpg') }}" alt="team-member"
                                    class="rounded-lg h-350">
                                <div class="social">
                                    <ul class="flex">
                                        <li class="mr-4 hover:text-blue-600 transition-all duration-500"><a
                                                href="https://www.facebook.com/incognitoSTS" class="text-2xl"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-facebook">
                                                    <path
                                                        d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                                    </path>
                                                </svg></a></li>
                                        <li class="mr-4 hover:text-blue-600 transition-all duration-500"><a
                                                href="https://github.com/S47Y4NW35HI" class="text-2xl"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-github">
                                                    <path
                                                        d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                                    </path>
                                                </svg></a></li>
                                        <li class="mr-4 hover:text-blue-600 transition-all duration-500"><a
                                                href="mailto:saimonhasan.1436@gmail.com" class="text-2xl">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-at-sign">
                                                    <circle cx="12" cy="12" r="4"></circle>
                                                    <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                                </svg></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="my-3 text-gray-800 dark:text-white">
                                <h2 class="text-2xl font-bold hover:text-indigo-700 transition-all duration-500">Saimon
                                    Hasan Sunny</h2>
                                <p class="dark:text-gray-300">Motion graphics designer and video editor</p>
                            </div>
                        </div>
                        <div class="splide__slide slide-item">
                            <div class="slide-item-body">
                                <img src="{{ asset('assets/images/contents/team-members/anik.jpg') }}" alt="team-member"
                                    class="rounded-lg h-350">
                                <div class="social">
                                    <ul class="flex">
                                        <li class="mr-4 hover:text-blue-600 transition-all duration-500"><a
                                                href="https://www.facebook.com/anik.aritro" class="text-2xl"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-facebook">
                                                    <path
                                                        d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                                    </path>
                                                </svg></a></li>
                                        <li class="mr-4 hover:text-blue-600 transition-all duration-500"><a
                                                href="https://github.com/anik-hossain" class="text-2xl"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-github">
                                                    <path
                                                        d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22">
                                                    </path>
                                                </svg></a></li>
                                        <li class="mr-4 hover:text-blue-600 transition-all duration-500"><a
                                                href="mailto:anikhossain9120@gmail.com" class="text-2xl">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-at-sign">
                                                    <circle cx="12" cy="12" r="4"></circle>
                                                    <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                                </svg></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="my-3 text-gray-800 dark:text-white">
                                <h2 class="text-2xl font-bold hover:text-indigo-700 transition-all duration-500">Aritro
                                    Anik</h2>
                                <p class="dark:text-gray-300">Senior Web Programer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Closed -->

    <section id="testimonial" class="overflow-hidden relative dark:bg-gray-900 py-20 bg-white">
        <div class="blob-bg">
            <div class="blob blob-1">
                <img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
            </div>
            <div class="blob blob-2">
                <img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
            </div>
        </div>
        <div class="container">
            <div class="flex flex-col justify-center items-center">
                <span class="bg-blue-200 text-blue-800 rounded-full px-7 py-1 z-10">Testimonial</span>
                <div class="py-5 block lg:flex justify-between items-center text-center">
                    <h2 class=" text-3xl lg:text-5xl font-bold dark:text-gray-300">Important <span
                            class="text-indigo-700">Clients Review</span></h2>
                </div>
            </div>
            <div class="splide py-8" id="testimonial-slider">
                <div class="splide__arrows hidden lg:block">
                    <button class="splide__arrow splide__arrow--prev">
                        <i class="fad fa-long-arrow-left"></i>
                    </button>
                    <button class="splide__arrow splide__arrow--next">
                        <i class="fad fa-long-arrow-right"></i>
                    </button>
                </div>
                <div class="splide__track">
                    <div class="splide__list">
                        <div class="splide__slide slide-item py-8">
                            <div class="testimonial-body">
                                <figure class="speech">
                                    <q class="">It's a great place to learn Web development and other programming
                                        languages, even for beginners who do not have previous knowledge about coding.</q>
                                    <figcaption class="py-3 font-bold">
                                        &mdash; Ahad Raiyan
                                    </figcaption>
                                </figure>
                                <img src="{{ asset('assets/images/contents/ahad.jpg') }}" alt="client" class="author">
                            </div>

                        </div>

                        <div class="splide__slide slide-item py-8">
                            <div class="testimonial-body">
                                <figure class="speech">
                                    <q class="">This is a great institute to learn web development.</q>
                                    <figcaption class="py-3 font-bold">
                                        &mdash; Asif Iqbal
                                    </figcaption>
                                </figure>
                                <img src="{{ asset('assets/images/contents/asif.jpg') }}" alt="client" class="author">
                            </div>

                        </div>
                        <div class="splide__slide slide-item py-8">
                            <div class="testimonial-body">
                                <figure class="speech">
                                    <q class="">Very helpful for beginners. It's a good journey 😊</q>
                                    <figcaption class="py-3 font-bold">
                                        &mdash; Prioti Saha
                                    </figcaption>
                                </figure>
                                <img src="{{ asset('assets/images/contents/avatar.svg') }}" alt="client"
                                    class="author">
                            </div>

                        </div>
                        <div class="splide__slide slide-item py-8">
                            <div class="testimonial-body">
                                <figure class="speech">
                                    <q class="">It's a great place to learn Web development and other programming
                                        languages, even for beginners who do not have previous knowledge about coding.</q>
                                    <figcaption class="py-3 font-bold">
                                        &mdash; Ahad Raiyan
                                    </figcaption>
                                </figure>
                                <img src="{{ asset('assets/images/contents/avatar.svg') }}" alt="client"
                                    class="author">
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Testimonial Closed -->

    <section id="contact" class="overflow-hidden relative dark:bg-deepdark py-20 bg-darkwhite">
        <div class="container">
            <div class="flex justify-center items-center flex-col text-center dark:text-white">
                <h2 class="font-bold text-3xl">Have <span class="text-indigo-600">Question?</span> Get in touch!</h2>
                <p class="lg:w-2/4 my-5 text-lg">Start working with <span
                        class="text-indigo-600 font-bold">Codebumble</span>, providing everything you need to generate
                    awareness, drive traffic, connect.</p>
                <a href="{{ route('contact') }}" class="btn flex justify-center items-center"><i
                        class="fas fa-phone-alt mr-3"></i>Contact Us</a>
            </div>
        </div>
    </section>
    <!-- Contact Closed -->

@stop
