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
				<h2>Video Editing</h2>
				<p>Video is essential for marketing your business regardless of the industry you're in. And here we are to make that easy for you.</p>
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
								<h2 class="title">Concept</h2>
							</div>
							<div class="main-content">
								<p>The most significant parts of a high-quality production are planning and concept development.</p>
							</div>
						</div>
					</li>
					<li class="item">
						<div class="content">
							<div class="heading">
								<h4 class="step">Step 2</h4>
								<h2 class="title">Material Source</h2>
							</div>
							<div class="main-content">
								<p>Here comes the primary source material for editing, which is raw footage. Our clients provide this. At the request of our clients, we also shoot on-location and in-studio.</p>
							</div>
						</div>
					</li>
					<li class="item">
						<div class="content">
							<div class="heading">
								<h4 class="step">Step 3</h4>
								<h2 class="title">Execution</h2>
							</div>
							<div class="main-content">
								<p>This step executes video editing, voiceover recording, 508 Compliance, 2D and 3D Animation, and other post-production.</p>
							</div>
						</div>
					</li>
					<li class="item">
						<div class="content">
							<div class="heading">
								<h4 class="step">Step 4</h4>
								<h2 class="title">Show the World</h2>
							</div>
							<div class="main-content">
								<p>Last but not least, place the finished product in the desired location.</p>
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
						<i class="fad fa-poll-people"></i>
					</div>
					<div class="heading">
						<h4>Grabbing Engagement</h4>
					</div>
					<div class="content">
						<p>Multimedia forms such as videos and graphics are frequently used to provide audience material. Consider how memes and Instagram surged in popularity in the last decade, coinciding with a substantial increase in mobile usage.</p>
					</div>
				</div>
				<div class="blurb">
					<div class="icon">
						<i class="fad fa-comment-alt-smile"></i>
					</div>
					<div class="heading">
						<h4>Increase Conversion Rates</h4>
					</div>
					<div class="content">
						<p>When seeing an audiovisual narrative, a viewer is more likely to cry than when reading it. Visual and aural stimulation can even affect taste receptors when viewing a cooking show. Because they engage the human senses, videos leave an incredible impression.</p>
					</div>
				</div>
				<div class="blurb">
					<div class="icon">
						<i class="fad fa-trophy-alt"></i>
					</div>
					<div class="heading">
						<h4>Getting and Managing Clients</h4>
					</div>
					<div class="content">
						<p>A high-quality video with a high-quality voiceover will amaze your users and solve their concerns effectively. These positive experiences will not only drive people to your product but will also keep them following your content.</p>
					</div>
				</div>
				<div class="blurb">
					<div class="icon">
						<i class="fad fa-ellipsis-h"></i>
					</div>
					<div class="heading">
						<h4>More Convenient
						</h4>
					</div>
					<div class="content">
						<p>If a picture is worth a thousand words, film and clips are worth twice as much. Digital audiences prefer videos for various reasons, one of which is that they are simple, convenient, and painless to consume.</p>
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
								<img src="{{asset('assets/images/tools/pr.svg')}}" alt="Premiere Pro">
							</div>
							<div class="heading">
								<h4>Adobe Premiere Pro</h4>
							</div>
							<div class="content">
								<p>Adobe Premiere Pro is a widely used software application for video editing. Premiere Pro is used for editing videos, commercials, and other films, television, and online video. It is a comprehensive video editing software application and is also available in the Adobe Creative Cloud set of applications.</p>
							</div>
						</div>
						<div class="splide__slide slide-item">
							<div class="brand">
								<img src="{{asset('assets/images/tools/ae.svg')}}" alt="After Effect">
							</div>
							<div class="heading">
								<h4>Adobe After Effects</h4>
							</div>
							<div class="content">
								<p>Adobe After Effects is a digital visual effect, motion graphics, and compositing application developed by Adobe Systems and used in the post-production process of film making, video games, and television production. Among other things, After Effects can be used for keying, tracking, compositing, and animation.</p>
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
					<a href="{{route('uiux')}}">
						<div class="service-item">
							<div class="icon">
								<img src="{{asset('assets/images/contents/ui.svg')}}" alt="ui/ux">
							</div>
							<div class="heading">
								<h3>UI/UX</h3>
							</div>
							<div class="content">Design a product that is convenient to use, attractive, and effective.</div>
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
