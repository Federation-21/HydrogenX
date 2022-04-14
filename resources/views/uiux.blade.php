@extends('layouts.main')
@section('content')
    	<!-- Page Title -->
	<section id="cb-page-title" class="bg-gray-100 overflow-hidden dark:bg-deepdark relative lg:py-20 pt-28">
		<div class="blob-bg">
			<div class="blob blob-1">
				<img src="{{asset('assets/images/blob/blob-1.svg')}}" alt="blob-1">
			</div>
			<div class="blob blob-2">
				<img src="{{asset('assets/images/blob/blob-1.svg')}}" alt="blob-1">
			</div>
		</div>
		<div class="container z-10 relative">
			<div class="sec-heading">
				<h2>UX/UI</h2>
				<p>The UX / UI design of the app improves user experience and client satisfaction, which ultimately
					helps increase the number of satisfied clients of your website or mobile app.</p>
			</div>
		</div>
	</section>
	<!-- Closed -->

	<!-- How It Works -->
	<section id="cb-how-it-works" class="bg-gray-100 overflow-hidden dark:bg-deepdark relative">
		<div class="blob-bg">
			<div class="blob blob-1">
				<img src="{{asset('assets/images/blob/blob-1.svg')}}" alt="blob-1">
			</div>
			<div class="blob blob-2">
				<img src="{{asset('assets/images/blob/blob-1.svg')}}" alt="blob-1">
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
								<h2 class="title">Design Brief</h2>
							</div>
							<div class="main-content">
								<p>The design brief starts with product content made by us or equipped by you, with all
									the user stories, UX individuals, or a list of features analysis.</p>
							</div>
						</div>
					</li>
					<li class="item">
						<div class="content">
							<div class="heading">
								<h4 class="step">Step 2</h4>
								<h2 class="title">Initial Upshot</h2>
							</div>
							<div class="main-content">
								<p>We initiate by making the most important Meshes for your upshot. It lets you see
									exactly how your product will look and then approve the design.</p>
							</div>
						</div>
					</li>
					<li class="item">
						<div class="content">
							<div class="heading">
								<h4 class="step">Step 3</h4>
								<h2 class="title">Final UI/UX</h2>
							</div>
							<div class="main-content">
								<p>Once you are happy and approve the Fundamental design, we extend the design for the remaining casts and yield UX/UI.</p>
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
				<img src="{{asset('assets/images/blob/blob-1.svg')}}" alt="blob-1">
			</div>
			<div class="blob blob-2">
				<img src="{{asset('assets/images/blob/blob-1.svg')}}" alt="blob-1">
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
						<p>An attractive, functional, and easy-to-use UX/UI will astonish your users and solve their concerns effectively. These positive experiences will not only drive people to your product but will also keep them using it.</p>
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
				<img src="{{asset('assets/images/blob/blob-1.svg')}}" alt="blob-1">
			</div>
			<div class="blob blob-2">
				<img src="{{asset('assets/images/blob/blob-1.svg')}}" alt="blob-1">
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
								<img src="{{asset('assets/images/tools/figma.svg')}}" alt="figma">
							</div>
							<div class="heading">
								<h4>Figma</h4>
							</div>
							<div class="content">
								<p>Figma is an interface design application, presumably one of the most impressive applications for group-based cooperative plan projects. Figma's unified highlights permit our plan groups to cooperate progressively on a document to develop wireframes and models.</p>
							</div>
						</div>
						<div class="splide__slide slide-item">
							<div class="brand">
								<img src="{{asset('assets/images/tools/discord.svg')}}" alt="discord">
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
								<img src="{{asset('assets/images/tools/clickup.svg')}}" alt="clickup">
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
								<img src="{{asset('assets/images/tools/marvel.svg')}}" alt="marvel">
							</div>
							<div class="heading">
								<h4>Marvel</h4>
							</div>
							<div class="content">
								<p>Marvel App is a cooperative plan stage that permits you to create models from your artboards rapidly. Marvel is utilized high fidelity clickable prototypes to share confidently with all partners.</p>
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
				<img src="{{asset('assets/images/blob/blob-1.svg')}}" alt="blob-1">
			</div>
			<div class="blob blob-2">
				<img src="{{asset('assets/images/blob/blob-1.svg')}}" alt="blob-1">
			</div>
		</div>
		<div class="container">
			<div class="sec-heading">
				<h2>Other Services</h2>
			</div>
			<div class="services">
				<div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-8 lg:gap-16 pb-8">
					<a href="{{route('web')}}">
						<div class="service-item">
							<div class="icon">
								<img src="{{asset('assets/images/contents/webapp.svg')}}" alt="webapp">
							</div>
							<div class="heading">
								<h3>Web App Development</h3>
							</div>
							<div class="content">Create Your Own Website with low cost. Choose Your Website Type
								and Stand Your Own.</div>
						</div>
					</a>
					<a href="{{route('video')}}">
						<div class="service-item">
							<div class="icon">
								<img src="{{asset('ssets/images/contents/video-editing.svg')}}" alt="video editing">
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
								<img src="{{asset('assets/images/contents/software.svg')}}" alt="software">
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
