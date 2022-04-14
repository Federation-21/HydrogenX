@extends('layouts.main')
@section('content')

    	<!-- Page Title -->
	<section id="cb-page-title" class="bg-gray-100 overflow-hidden dark:bg-deepdark relative lg:py-20 pt-20">
		<div class="blob-bg">
			<div class="blob blob-1">
				<img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
			</div>
			<div class="blob blob-2">
				<img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
			</div>
		</div>
		<div class="container relative">
			<div class="sec-heading">
				<h2>Work With Us</h2>
				<p class="text-center">To us, our employees have acquired the facilities to work virtually. So we're working around the world, wherever you are. With a job at our company, you have exciting new possibilities to follow your curiosity wherever it takes you.</p>
			</div>
			<div class="section-images">
				<div class="left-img">
					<img src="{{ asset('assets/images/contents/team-members/enan.png') }}" alt="Enan">
				</div>
				<div class="right-img">
					<img src="{{ asset('assets/images/contents/team-members/shakil.png') }}" alt="Shakil">
				</div>
			</div>
		</div>
	</section>
	<!-- Closed -->

	<!-- Hero section Closed -->
	<section id="cb-careers" class="bg-gray-100 overflow-hidden dark:bg-deepdark relative py-20">
		<div class="blob-bg">
			<div class="blob blob-1">
				<img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
			</div>
			<div class="blob blob-2">
				<img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
			</div>
		</div>
		<div class="container z-10 relative">
			<div class="why-work-you">
				<div class="sec-heading text-center">
						<h2>Why work with us?</h2>
				</div>
				<div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-8 pt-8">
					<div class="card">
						<div class="icon">
							<i class="far fa-usd-circle"></i>
						</div>
						<div class="content">You'll get paid on a project-based, weekly, or monthly based for your work.</div>
					</div>
					<div class="card">
						<div class="icon">
							<i class="fal fa-smile"></i>
						</div>
						<div class="content">You can work from anywhere as a freelancer. Just follow up on the deadline.</div>
					</div>
					<div class="card">
						<div class="icon">
							<i class="fad fa-calendar-star"></i>
						</div>
						<div class="content">You do not need to attend physically at the office without essential. All the meetings are conducted online.</div>
					</div>
					<div class="card">
						<div class="icon">
							<i class="far fa-heart-circle"></i>
						</div>
						<div class="content">You'll get a strong developer-friendly team to collaborate on your project issues.</div>
					</div>
					<div class="card">
						<div class="icon">
							<i class="fad fa-abacus"></i>
						</div>
						<div class="content">We track every step of your issues for workouts quickly. Sorting and solving out bugs is our internal mission.</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Closed -->

	<section id="cb-career-opportunities" class="bg-gray-100 overflow-hidden dark:bg-deepdark relative">
		<div class="blob-bg">
			<div class="blob blob-1">
				<img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
			</div>
			<div class="blob blob-2">
				<img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
			</div>
		</div>
		<div class="container z-10 relative">
			<div class="lg:flex">
				<div class="w-2/5">
					<div class="career-opportunities-big-img">
						<img src="{{ asset('assets/images/contents/team-members/sunny.jpg') }}" alt="sunny">
					</div>
				</div>
				<div class="lg:w-3/5 w-full">
					<div class="sec-heading">
						<h2>Career Opportunities</h2>
					</div>
					<div class="accordion">
						<div class="items open">
							<div class="accordion-title">
								<div class="title">
									<h1>Front-end Developer</h1>
								</div>
								<div class="cls">
									<i class="fad fa-plus text-xl"></i>
								</div>
							</div>
							<div class="content">
								You can join us as a front-end developer to develop a unique UI/UX. Get paid for every project, get commissions for ThemeForest project contributions, and much more.
							</div>
						</div>
						<div class="items">
							<div class="accordion-title">
								<div class="title">
									<h1>Back-end Developer</h1>
								</div>
								<div class="cls">
									<i class="fad fa-plus text-xl"></i>
								</div>
							</div>
							<div class="content">
								Join us as a back-end developer to prove that you're the best at programing. We have many clients who require unique and custom features for their projects. Let's sort out their problems with your logic.
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</section>
	<!-- Closed -->


	<section id="cb-employees" class="bg-gray-100 overflow-hidden dark:bg-deepdark relative">
		<div class="container z-10 relative">
			<div class="employee-slide">
				<div class="sec-heading">
					<h2>What our emploees says</h2>
				</div>
				<div class="splide py-8" id="employees">
					<div class="splide__arrows block">
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
								<div class="employees-body">
									<figure class="speech">
										<q class="">I am satisfied to work with Codebumble. I've made myself more professional here. My experience here is fantastic.</q>
										<figcaption class="py-3 font-bold">
											&mdash; Aritro Anik, <cite>Front-end Developer</cite>
										</figcaption>
									</figure>
									<img src="{{ asset('assets/images/contents/team-members/anik.jpg') }}" alt="anik" class="author">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="cb-apply-for-job">
				<div class="sec-heading">
					<h2>Apply for positon</h2>
					<p class="">So, let's apply for a job in your desired position now. Do not hesitate to utilize your experience with us! We can talk to you in a friendly manner.</p>
				</div>
				<div class="apply">
					<form>
						<div class="input-group">
							<div class="input-item">
								<input type="text" name="fullname" autocomplete="off" required>
								<label class="label-name" for="fullname">
									<span class="content">Full Name</span>
								</label>
							</div>
						</div>
						<div class="input-group">
							<div class="input-item">
								<input type="text" name="email" autocomplete="off" required>
								<label class="label-name" for="email">
									<span class="content">Email</span>
								</label>
							</div>
						</div>
						<div class="input-item">
							<div class="position">
								<select name="position" required>
									<option class="hidden"></option>
									<option value="1">Front-end Developer</option>
									<option value="2">Back-end Developer</option>
									<option value="3">UI/UX Designer</option>
									<option value="4">Web Programer</option>
									<option value="5">SEO Expert</option>
									<option value="6">Motion Graphics</option>
									<option value="7">Video Editor</option>
									<option value="8">Social Marketer</option>
								  </select>
								<label class="label-name" for="email">
									<span class="content">Choose Position</span>
								</label>
							</div>
						</div>
						<div class="input-group">
							<div class="input-item">
								<input type="text" name="cvurl" autocomplete="off" required>
								<label class="label-name" for="cvurl">
									<span class="content">CV Url (google docs or pdf link)</span>
								</label>
							</div>
						</div>
						<div class="input-group">
							<div class="input-item about-you">
								<textarea name="about-you" id="about-you" required></textarea>
								<label class="label-name" for="about-you">
									<span class="content">About You</span>
								</label>
							</div>
						</div>
						<button class="btn" type="submit">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Closed -->

@stop
