@extends('layouts.main')
@section('content')
	<!-- Page Title -->
	<section id="cb-page-title" class="bg-gray-100 overflow-hidden dark:bg-deepdark relative lg:py-20 pt-28">
		<div class="blob-bg">
			<div class="blob blob-1">
				<img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
			</div>
			<div class="blob blob-2">
				<img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
			</div>
		</div>
		<div class="container z-10 relative">
			<div class="sec-heading">
				<h2>Web App/Site Development</h2>
				<p>By creating a simple, eye-catchy and attractive design for your website or app with user friendly UX design for your business, organization or institution. You'll gain greater attention from your clients. It will increase the value of your company.</p>
			</div>
		</div>
	</section>
	<!-- Closed -->

	<!-- How It Works -->
	<section id="cb-how-it-works" class="bg-gray-100 overflow-hidden dark:bg-deepdark relative">
		<div class="blob-bg">
			<div class="blob blob-1">
				<img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
			</div>
			<div class="blob blob-2">
				<img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
			</div>
		</div>
		<div class="container z-10 relative">
			<div class="sec-heading">
				<h2>How Does It Works</h2>
			</div>
			<div class="timeline">
				<ul>
					<li class="item">
						<div class="content">
							<div class="heading">
								<h4 class="step">Step 1</h4>
								<h2 class="title">Understanding Purpose</h2>
							</div>
							<div class="main-content">
								<p>Understanding the purpose of creating your website or web app is the most crucial part of being started.</p>
							</div>
						</div>
					</li>
					<li class="item">
						<div class="content">
							<div class="heading">
								<h4 class="step">Step 2</h4>
								<h2 class="title">Features Requirements</h2>
							</div>
							<div class="main-content">
								<p>After the purpose, note down the features required to drive your projects in depth. We also think about your clients-end satisfaction. So you will get the best recommendation from us if necessary.</p>
							</div>
						</div>
					</li>
					<li class="item">
						<div class="content">
							<div class="heading">
								<h4 class="step">Step 3</h4>
								<h2 class="title">Choosing the suitable Tech Stack</h2>
							</div>
							<div class="main-content">
								<p>Choosing the Tech Stack is a vital part. We select appropriate Tech Stack for your project according to your features requirements. Moreover, you can choose your own tech stack if you have something particular in mind.</p>
							</div>
						</div>
					</li>
					<li class="item">
						<div class="content">
							<div class="heading">
								<h4 class="step">Step 4</h4>
								<h2 class="title">Design Preference</h2>
							</div>
							<div class="main-content">
								<p>Developing UI/UX design and wireframes according to your requirements is part of moving forward with your project. A simple and gorgeous UI/UX design will attract your customers even more.</p>
							</div>
						</div>
					</li>
					<li class="item">
						<div class="content">
							<div class="heading">
								<h4 class="step">Step 5</h4>
								<h2 class="title">Review & Approval</h2>
							</div>
							<div class="main-content">
								<p>After completing all the tasks and assembling your project, you'll be asked to review the project to make sure if it meets all your necessities.  After the evaluation and some tweaking, we will hand it over to you with free training if necessary.</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</section>
	<!-- Closed -->

	<!-- Key Benefits -->
	<section id="cb-key-benefits" class="bg-gray-100 overflow-hidden dark:bg-deepdark relative">
		<div class="blob-bg">
			<div class="blob blob-1">
				<img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
			</div>
			<div class="blob blob-2">
				<img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
			</div>
		</div>
		<div class="container">
			<div class="sec-heading">
				<h2>Key Benefits</h2>
			</div>
			<div class="grid grid-cols-1 lg:grid-cols-2 gap-8 pt-8">
				<div class="blurb">
					<div class="icon">
						<i class="fad fa-trophy-alt"></i>
					</div>
					<div class="heading">
						<h4>Client Acquisition & Retention</h4>
					</div>
					<div class="content">
						<p>An attractive, functional, and easy-to-use Web App or Website will astonish your users and solve their concerns effectively. These positive experiences will not only drive people to your product but will also keep them using it.</p>
					</div>
				</div>
				<div class="blurb">
					<div class="icon">
						<i class="fad fa-sack-dollar"></i>
					</div>
					<div class="heading">
						<h4>Lower Expenses</h4>
					</div>
					<div class="content">
						<p>A well-designed product will demand less training, documentation, and development, both currently and in the future. This will let your team focus on growing the business rather than fixing false assumptions or illogical navigation that gets the user stuck.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Closed -->

	<!-- Tools We Use -->
	<section id="cb-tools-we-use" class="bg-gray-100 overflow-hidden dark:bg-deepdark relative">
		<div class="blob-bg">
			<div class="blob blob-1">
				<img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
			</div>
			<div class="blob blob-2">
				<img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
			</div>
		</div>
		<div class="container">
			<div class="sec-heading">
				<h2>Tools We Use</h2>
			</div>
			<div class="splide pb-8 tools-slider" id="tools-slider">
				<div class="splide__track">
					<div class="splide__list">
						<div class="splide__slide slide-item">
							<div class="brand">
								<img src="{{ asset('assets/images/tools/github.svg') }}" alt="github">
							</div>
							<div class="heading">
								<h4>GitHub</h4>
							</div>
							<div class="content">
								<p>GitHub is a for-profit company that provides Git repository hosting in the cloud. It essentially simplifies the usage of Git for version management and collaboration for individuals and teams.</p>
							</div>
						</div>
						<div class="splide__slide slide-item">
							<div class="brand">
								<img src="{{ asset('assets/images/tools/discord.svg') }}" alt="discord">
							</div>
							<div class="heading">
								<h4>Discord</h4>
							</div>
							<div class="content">
								<p>Discord is our decision to oversee project interchanges. We make a committed private channel with both colleagues and you (the customer) to examine everything identified with your task. This guarantees that your task's data is secure and that correspondence is consistently productive and straightforward.</p>
							</div>
						</div>
						<div class="splide__slide slide-item">
							<div class="brand">
								<img src="{{ asset('assets/images/tools/clickup.svg') }}" alt="clickup">
							</div>
							<div class="heading">
								<h4>ClickUp</h4>
							</div>
							<div class="content">
								<p>ClickUp was planned as a Task, bug and issue tracker. Today, the board device has advanced into work for a wide range of utilization cases. ClickUp is our focal centre point for work conveyance. We use it to sort out and deal with our plan and execution errands to continue to advance proficiently toward each delivery.</p>
							</div>
						</div>
						<div class="splide__slide slide-item">
							<div class="brand">
								<img src="{{ asset('assets/images/tools/devtool.svg') }}" alt="Chrome DevTool">
							</div>
							<div class="heading">
								<h4>Chrome DevTool</h4>
							</div>
							<div class="content">
								<p>Chrome DevTool we used to debug code. It has a Console panel, Sources Panel, Network panel, Performance panel, Memory panel, Security panel, Application panel, Memory panel, etc. So we can easily track everything about the performance of the app.</p>
							</div>
						</div>
						<div class="splide__slide slide-item">
							<div class="brand">
								<img src="{{ asset('assets/images/tools/npm.svg') }}" alt="NPM">
							</div>
							<div class="heading">
								<h4>NPM</h4>
							</div>
							<div class="content">
								<p>Npm helps us to build amazing things through essential JavaScript tools. It has functionalities for team management. NPM also provides security auditing features.</p>
							</div>
						</div>
						<div class="splide__slide slide-item">
							<div class="brand">
								<img src="{{ asset('assets/images/tools/vscode.svg') }}" alt="VSCODE">
							</div>
							<div class="heading">
								<h4>Visual Studio Code</h4>
							</div>
							<div class="content">
								<p>We use Visual Studio Code as our Editor/IDE. It has many extensions that make our coding experience more smooth. We have our colour theme out there on the visual studio marketplace.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Closed -->


	<!-- Other Serivices -->
	<section id="cb-otehr-services" class="bg-gray-100 overflow-hidden dark:bg-deepdark relative">
		<div class="blob-bg">
			<div class="blob blob-1">
				<img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
			</div>
			<div class="blob blob-2">
				<img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
			</div>
		</div>
		<div class="container">
			<div class="sec-heading">
				<h2>Other Services</h2>
			</div>
			<div class="services">
				<div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-8 lg:gap-16 pb-8">
					<a href="{{route('uiux')}}">
						<div class="service-item">
							<div class="icon">
								<img src="{{ asset('assets/images/contents/ui.svg') }}" alt="ui/ux">
							</div>
							<div class="heading">
								<h3>UI/UX</h3>
							</div>
							<div class="content">Design a product that is convenient to use, attractive, and effective.</div>
						</div>
					</a>
					<a href="{{route('video')}}">
						<div class="service-item">
							<div class="icon">
								<img src="{{ asset('assets/images/contents/video-editing.svg') }}" alt="video editing">
							</div>
							<div class="heading">
								<h3>Video Editing</h3>
							</div>
							<p class="content">Make Your Own Promotional Video (Animation/2D/3D). Enhance the aesthetics of your company.</p>
						</div>
					</a>
					<a href="{{route('seo')}}">
						<div class="service-item">
							<div class="icon">
								<img src="{{ asset('assets/images/contents/software.svg') }}" alt="software">
							</div>
							<div class="heading">
								<h3>Search Engine Optimization</h3>
							</div>
							<div class="content">Proper SEO means a website's content relevancy, link popularity, using appropriate keywords, etc.</div>
						</div>
					</a>

				</div>
			</div>
		</div>
	</section>
	<!-- Closed -->

    <x-talk-to-us/>

@stop
