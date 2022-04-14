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
				<h2>Search Engine Optimization</h2>
				<p>Search Engine Optimization (SEO) will help your business mark as popular. So you'll get more visitors, more notice, and great value from your clients.</p>
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
								<h2 class="title">Target audience</h2>
							</div>
							<div class="main-content">
								<p>Proper explanation about your business will help us target the right audiences for your website.</p>
							</div>
						</div>
					</li>
					<li class="item">
						<div class="content">
							<div class="heading">
								<h4 class="step">Step 2</h4>
								<h2 class="title">Identify Topics and Keywords</h2>
							</div>
							<div class="main-content">
								<p>After targeting the audience, let's identify content topics and keywords that will attract that audience.</p>
							</div>
						</div>
					</li>
					<li class="item">
						<div class="content">
							<div class="heading">
								<h4 class="step">Step 3</h4>
								<h2 class="title">Content Planning</h2>
							</div>
							<div class="main-content">
								<p>We'll prepare the content of your website based on the keywords we got in the last steps.</p>
							</div>
						</div>
					</li>
					<li class="item">
						<div class="content">
							<div class="heading">
								<h4 class="step">Step 4</h4>
								<h2 class="title">Link-Building</h2>
							</div>
							<div class="main-content">
								<p>To increase your domain authority, we'll generate backlinks for your website. It will help your content to rank on Google.</p>
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
						<i class="fad fa-expand-wide"></i>
					</div>
					<div class="heading">
						<h4>Expands Trustworthiness</h4>
					</div>
					<div class="content">
						<p>Search engines often regard a site that ranks high on search engine results pages as high quality and trustworthy, which increases your company's reputation.</p>
					</div>
				</div>
				<div class="blurb">
					<div class="icon">
						<i class="fad fa-hand-receiving"></i>
					</div>
					<div class="heading">
						<h4>Competitive Edge</h4>
					</div>
					<div class="content">
						<p>Start by identifying your competitors, assessing their strengths and shortcomings, and developing and maintaining an online reputation. Then make sure your site loads quickly and is mobile-friendly, provide the most acceptable content you can, and concentrate on offering the best user experience possible.</p>
					</div>
				</div>
				<div class="blurb">
					<div class="icon">
						<i class="fad fa-poll-people"></i>
					</div>
					<div class="heading">
						<h4>More Users Attention</h4>
					</div>
					<div class="content">
						<p>Make a list of the keywords you want to rank for. Then, to enlarge it, utilize keyword research tools. Finally, do competitive research to narrow your list by determining your competitors, what keywords they rank for, and where they have backlinks. Use this information to improve your SEO approach and get more users attention</p>
					</div>
				</div>
				<div class="blurb">
					<div class="icon">
						<i class="fad fa-trophy-alt"></i>
					</div>
					<div class="heading">
						<h4>Client Acquisition & Retention</h4>
					</div>
					<div class="content">
						<p>If your clients get you with easy-to-use UX/UI from any search engine will astonish your users and solve their concerns effectively. These positive experiences will not only drive people to your product but will also keep them using it.</p>
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
								<img src="{{asset('assets/images/tools/search-console.svg')}}" alt="Google Search Console">
							</div>
							<div class="heading">
								<h4>Google Search Console</h4>
							</div>
							<div class="content">
								<p>Search Console may help you understand how Google and its users see your website and assist you to adjust for better performance in Google search results as an SEO checking tool. It's significant for new websites since site owners can submit web pages for indexing by search engines.</p>
							</div>
						</div>
						<div class="splide__slide slide-item">
							<div class="brand">
								<img src="{{asset('assets/images/tools/semrush.svg')}}" alt="SEMRush">
							</div>
							<div class="heading">
								<h4>SEMRush</h4>
							</div>
							<div class="content">
								<p>We can quickly compare your website to its competition using SEMRush. This tool will allow us to compare keywords and domains while looking for analytics reports to understand better your website's search data, traffic, or even competition.</p>
							</div>
						</div>
						<div class="splide__slide slide-item">
							<div class="brand">
								<img src="{{asset('assets/images/tools/spyfu.svg')}}" alt="SpyFu">
							</div>
							<div class="heading">
								<h4>SpyFu</h4>
							</div>
							<div class="content">
								<p>We can quickly determine the number of times a keyword is searched each month and the difficulty of ranking for that phrase. We can also conduct competitor research to know which keywords they utilize.</p>
							</div>
						</div>
						<div class="splide__slide slide-item">
							<div class="brand">
								<img src="{{asset('assets/images/tools/woorank.svg')}}" alt="Woorank">
							</div>
							<div class="heading">
								<h4>Woorank</h4>
							</div>
							<div class="content">
								<p>Woorank can assist us in identifying duplicate content, downtime, and security concerns and providing recommendations for how to resolve them. We can plug in your competitors' keywords to see the ones they're going after so we can overlap with them.</p>
							</div>
						</div>
						<div class="splide__slide slide-item">
							<div class="brand">
								<img src="{{asset('assets/images/tools/ahref.svg')}}" alt="Ahref" class="!h-auto">
							</div>
							<div class="heading">
								<h4>Ahref</h4>
							</div>
							<div class="content">
								<p>We utilize Ahrefs to locate the most linked to material within your area, inspect and mend broken links on your website, and receive an overview of your best-performing pages, as well as determine your competitor's backlinks to use as a starting point for your brand.</p>
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
								<img src="{{asset('assets/images/contents/video-editing.svg')}}" alt="video editing">
							</div>
							<div class="heading">
								<h3>Video Editing</h3>
							</div>
							<p class="content">Make Your Own Promotional Video (Animation/2D/3D). Enhance the aesthetics of your company.</p>
						</div>
					</a>
					<a href="{{route('uiux')}}">
						<div class="service-item">
							<div class="icon">
								<img src="{{asset('assets/images/contents/software.svg')}}" alt="software">
							</div>
							<div class="heading">
								<h3>UI/UX</h3>
							</div>
							<div class="content">Design a product that is convenient to use, attractive, and effective.</div>
						</div>
					</a>

				</div>
			</div>
		</div>
	</section>
	<!-- Closed -->

    <x-talk-to-us/>

@stop
