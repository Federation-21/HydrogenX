@extends('layouts.main')
@section('content')
    <section id="cb-hero-bg">
        <div class="hero-bg"></div>
        <div class="container">
            <div class="wrapper">
                <div class="heading">
                    <h2>We are dedicated to make your buisness bigger and smoother.</h2>
                </div>
                <div class="why-choose-us">
                    <ul>
                        <li>Created 40+ unique sections</li>
                        <li>Very easy customization</li>
                        <li>Super fast loading speed</li>
                        <li>Fully responsive</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section Closed -->
    <section id="cards">
        <div class="blob-bg">
            <div class="blob blob-1">
                <img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
            </div>
            <div class="blob blob-2">
                <img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
            </div>
        </div>
        <div class="container z-10 relative">
            <div class="wrapper">
                <div class="card">
                    <h1>04</h1>
                    <h4 class="desc">Years in Operation</h4>
                </div>
                <div class="card">
                    <h1>13</h1>
                    <h4 class="desc">Completed Web Projects</h4>
                </div>
                <div class="card">
                    <h1>3</h1>
                    <h4 class="desc">Completed Hospital Maintenance Software</h4>
                </div>
                <div class="card">
                    <h1>1</h1>
                    <h4 class="desc">Completed Billing Software</h4>
                </div>
            </div>
        </div>
    </section>
    <!-- Terms & Conditons Closed -->

    <!-- Learn More About Us -->
    <section id="cb-learn-more-about-us">
        <div class="blob-bg">
            <div class="blob blob-1">
                <img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
            </div>
            <div class="blob blob-2">
                <img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
            </div>
        </div>
        <div class="container z-10 relative">
            <div class="wrapper">
                <div class="sec-heading">
                    <h2>Step up to get closer to the sweet smell of success now.</h2>
                    <br>
                    <h2>Join Us and start your journey.</h2>
                </div>
                <div class="slider">
                    <div class="splide py-8" id="team-slider">
                        <div class="splide__track">
                            <div class="splide__list">
                                <div class="splide__slide slide-item">
                                    <div class="icon">
                                        <i class="fad fa-leaf"></i>
                                    </div>
                                    <div class="title">
                                        <h4>Friendly Enviroment</h4>
                                    </div>

                                    <div class="content">
                                        <p>Most of full time employees spend an average of 9 hours a day at the office, and
                                            generally
                                            speaking most of us spend more time engaging with colleagues and co-workers than
                                            engaging with
                                            family and friends and if it is not a friendly environment it is going to be
                                            HUGE problem.</p>
                                    </div>
                                </div>
                                <div class="splide__slide slide-item">
                                    <div class="icon">
                                        <i class="fal fa-users-crown"></i>
                                    </div>
                                    <div class="title">
                                        <h4>Team Work</h4>
                                    </div>

                                    <div class="content">
                                        <p>We believe teamwork can be a great weapon to utilize work hours efficiently.
                                            Teamwork helps in
                                            increasing collaboration and has a scope for brainstorming, which results in
                                            getting more ideas.
                                            Therefore you can see a growth in productivity. To solve complex problems and to
                                            complete
                                            difficult tasks, the team works better than an individual.</p>
                                    </div>
                                </div>
                                <div class="splide__slide slide-item">
                                    <div class="icon">
                                        <i class="fal fa-seedling"></i>
                                    </div>
                                    <div class="title">
                                        <h4>Career Growth Opportunities</h4>
                                    </div>

                                    <div class="content">
                                        <p>Opportunities in the workplace give employees a sense of getting better at
                                            something and always
                                            expanding into new areas. It is a universal human need. We become bored,
                                            distracted, and
                                            disengaged when we feel that our work is routine and repetitive. People crave
                                            work experiences
                                            that challenge their minds and their skills, and that offers them the chance to
                                            rise to the
                                            occasion and excel even in high-stress situations.</p>
                                    </div>
                                </div>
                                <div class="splide__slide slide-item">
                                    <div class="icon">
                                        <i class="fal fa-medal"></i>
                                    </div>
                                    <div class="title">
                                        <h4>Competitive Environment</h4>
                                    </div>

                                    <div class="content">
                                        <p>Many people are naturally competitive. Tapping into this instinct can be an easy
                                            and effective
                                            way to get employees to achieve more than they otherwise would have.
                                            Competition can naturally reduce indifference and laziness. By changing the work
                                            atmosphere and
                                            attitude, employers can motivate people who would be more naturally inclined to
                                            just get by with
                                            minimal effort.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="splide__arrows block">
                            <button class="splide__arrow splide__arrow--prev">
                                <i class="fad fa-long-arrow-left"></i>
                            </button>
                            <button class="splide__arrow splide__arrow--next">
                                <i class="fad fa-long-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact Us -->
    <section id="cb-contact-us">
        <div class="blob-bg">
            <div class="blob blob-1">
                <img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
            </div>
            <div class="blob blob-2">
                <img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
            </div>
        </div>
        <div class="container z-10 relative">
            <div class="wrapper">
                <div class="sec-heading">
                    <h2>Take your business to the next level with our team.</h2>
                    <a href="{{ route('contact') }}" class="btn">Contact Us</a>
                </div>
                <div class="contents">
                    <p><b>Our Team is your team. We are a family. Your busines growth is our top priority. </p>
                    <p><b>We have extremely throrough screening method to discover the quality talent, from the
                            establishment,
                            UXUI design, and development. We are constantly searching for notable troubles which we solve
                            with ardour
                            and drive,
                            those are the team members your organization will work with for the growth of your company. </b>
                    </p>
                </div>
            </div>
        </div>
    </section>


    <!-- Our Members -->
    <section id="cb-team">
        <div class="blob-bg">
            <div class="blob blob-1">
                <img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
            </div>
            <div class="blob blob-2">
                <img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
            </div>
        </div>
        <div class="container z-10 relative">
            <div class="sec-title">
                <h2>Our Team</h2>
            </div>
            <div class="wrapper">
                <div class="buttons">
                    <button class="team active" id="founder">Founders</button>
                    <button class="team" id="developer">Developers</button>
                    <button class="team" id="video">Video Editor</button>
                    <button class="team" id="marketing">Marketing</button>
                </div>
                <div class="members">
                    <div class="member founder">
                        <div class="member-img">
                            <img src="{{ asset('assets/images/contents/team-members/saifur.jpg') }}" alt="founder">
                        </div>
                        <div class="content">
                            <h5>Founder</h5>
                            <h3>Md. Saifur Rahman</h3>
                        </div>
                    </div>
                    <div class="member founder">
                        <div class="member-img">
                            <img src="{{ asset('assets/images/contents/team-members/enan.png') }}" alt="CIO">
                        </div>
                        <div class="content">
                            <h5>CIO</h5>
                            <h3>S.M Shahriar Mahmud</h3>
                        </div>
                    </div>
                    <div class="member founder">
                        <div class="member-img">
                            <img src="{{ asset('assets/images/contents/team-members/shakil.png') }}" alt="CEO">
                        </div>
                        <div class="content">
                            <h5>CEO</h5>
                            <h3>Shakil Ahmed</h3>
                        </div>
                    </div>
                    <div class="member founder">
                        <div class="member-img">
                            <img src="{{ asset('assets/images/contents/avatar.svg') }}" alt="chairperson">
                        </div>
                        <div class="content">
                            <h5>Chairperson</h5>
                            <h3>Golam Jakaria</h3>
                        </div>
                    </div>
                    <div class="member developer">
                        <div class="member-img">
                            <img src="{{ asset('assets/images/contents/team-members/anik.jpg') }}" alt="front-end developer">
                        </div>
                        <div class="content">
                            <h5>Front-End Developer</h5>
                            <h3>Aritro Anik</h3>
                        </div>
                    </div>
                    <div class="member developer">
                        <div class="member-img">
                            <img src="{{ asset('assets/images/contents/team-members/shakil.png') }}" alt="Back-end developer">
                        </div>
                        <div class="content">
                            <h5>Back-End Developer</h5>
                            <h3>Shakil Ahmed</h3>
                        </div>
                    </div>
                    <div class="member developer">
                        <div class="member-img">
                            <img src="{{ asset('assets/images/contents/team-members/saifur.jpg') }}" alt="Full-Stack">
                        </div>
                        <div class="content">
                            <h5>Full Stack Developer</h5>
                            <h3>Md. Saifur Rahman</h3>
                        </div>
                    </div>
                    <div class="member marketing">
                        <div class="member-img">
                            <img src="{{ asset('assets/images/contents/team-members/yy.jpg') }}" alt="VP of Social Media">
                        </div>
                        <div class="content">
                            <h5>VP of Social Media</h5>
                            <h3>Fazlay Rabbi Shawon</h3>
                        </div>
                    </div>
                    <div class="member video">
                        <div class="member-img">
                            <img src="{{ asset('assets/images/contents/team-members/sunny.jpg') }}" alt="Video Editor">
                        </div>
                        <div class="content">
                            <h5>Video Editor</h5>
                            <h3>Saimon Hasan Sunny</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Opportunity -->
    <section id="cb-job-opportunity">
        <div class="blob-bg">
            <div class="blob blob-1">
                <img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
            </div>
            <div class="blob blob-2">
                <img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
            </div>
        </div>
        <div class="container z-10 relative">
            <div class="sec-title">
                <h2>Grab an opportunity work with us!</h2>
            </div>
            <div class="wrapper">
                <ul class="job-oppotunity">
                    <li class="item">
                        <div class="job-title">
                            <a href="{{route('jobCareer')}}">
                                <h4>Web Development</h4>
                            </a>
                        </div>
                        <div class="type">
                            <i class="fad fa-briefcase"></i>
                            <span class="text-content">Full Time</span>
                        </div>
                        <div class="location">
                            <i class="fal fa-map-marked-alt"></i>
                            <span class="text-content">Remote Job</span>
                        </div>
                    </li>
                    <li class="item">
                        <div class="job-title">
                            <a href="{{route('jobCareer')}}">
                                <h4>UI/UX Design</h4>
                            </a>
                        </div>
                        <div class="type">
                            <i class="fad fa-briefcase"></i>
                            <span class="text-content">Full Time</span>
                        </div>
                        <div class="location">
                            <i class="fal fa-map-marked-alt"></i>
                            <span class="text-content">Remote Job</span>
                        </div>
                    </li>
                    <li class="item">
                        <div class="job-title">
                            <a href="{{route('jobCareer')}}">
                                <h4>Front-end Developer</h4>
                            </a>
                        </div>
                        <div class="type">
                            <i class="fad fa-briefcase"></i>
                            <span class="text-content">Full Time</span>
                        </div>
                        <div class="location">
                            <i class="fal fa-map-marked-alt"></i>
                            <span class="text-content">Remote Job</span>
                        </div>
                    </li>
                    <li class="item">
                        <div class="job-title">
                            <a href="{{route('jobCareer')}}">
                                <h4>Video Editor/Motion Graphics Designer</h4>
                            </a>
                        </div>
                        <div class="type">
                            <i class="fad fa-briefcase"></i>
                            <span class="text-content">Full Time</span>
                        </div>
                        <div class="location">
                            <i class="fal fa-map-marked-alt"></i>
                            <span class="text-content">Remote Job</span>
                        </div>
                    </li>
                    <li class="item">
                        <div class="job-title">
                            <a href="{{route('jobCareer')}}">
                                <h4>Marketing</h4>
                            </a>
                        </div>
                        <div class="type">
                            <i class="fad fa-briefcase"></i>
                            <span class="text-content">Full Time</span>
                        </div>
                        <div class="location">
                            <i class="fal fa-map-marked-alt"></i>
                            <span class="text-content">Remote Job</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@stop
