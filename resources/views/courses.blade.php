@extends('layouts.main')
@section('content')
    	<!-- Header Bottom -->
	<section id="cb-header-bottom">
		<div class="container z-10 relative lg:flex items-center min-h-25">
			<div class="left">
				<h3>The best way to learn.</h3>
				<p>Enroll in any course and get access to all training videos and necessary documents.</p>
			</div>
			<div class="right">
				<div class="search-courses">
					<h3>Search for courses</h3>
					<form>
						<div class="input-group">
							<div class="input-item">
								<input type="text" name="search" autocomplete="off" required>
								<label class="label-name" for="search">
									<span class="content">Search</span>
								</label>
							</div>
						</div>
						<button class="btn" type="submit">Search</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Closed -->


	<!-- Course Info -->
	<section id="cb-course-info" class="overflow-hidden bg-white dark:bg-deepdark relative pb-20">
		<div class="blob-bg">
			<div class="blob blob-1">
				<img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
			</div>
			<div class="blob blob-2">
				<img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
			</div>
		</div>
		<div class="container z-10">
			<div class="grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 gap-8 py-8">
				<div class="card">
					<div class="w-16">
						<img src="{{ asset('assets/images/contents/explain.svg') }}" alt="development">
					</div>
					<div class="content">
						<h2>Explanation</h2>
						<p>We explain it as simply as we can so that you can easily understand.</p>
					</div>
				</div>
				<div class="card">
					<div class="w-16">
						<img src="{{ asset('assets/images/contents/certificate.svg') }}" alt="development">
					</div>
					<div class="content">
						<h2>Certifications </h2>
						<p>After completing the course with a great test score, you will get a certificate. </p>
					</div>
				</div>
				<div class="card">
					<div class="w-16">
						<img src="{{ asset('assets/images/contents/example.svg') }}" alt="development">
					</div>
					<div class="content">
						<h2>Conveying Example</h2>
						<p>We loved to share real-life-based examples during solving problems so that you'll get accurate information about the issue.</p>
					</div>
				</div>
				<div class="card">
					<div class="w-16">
						<img src="{{ asset('assets/images/contents/learner-community.svg') }}" alt="development">
					</div>
					<div class="content">
						<h2>Friendly Community</h2>
						<p>We have a robust and friendly community. So you can share your problems there to work out by discussing with your mates. It will make your learning process more manageable.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Closed -->


	<!-- Our Courses -->
	<section id="cb-our-courses" class="overflow-hidden bg-white dark:bg-deepdark relative pb-20">
		<div class="blob-bg">
			<div class="blob blob-1">
				<img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
			</div>
			<div class="blob blob-2">
				<img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
			</div>
		</div>
		<div class="container z-10">
			<div class="our-course">
				<div class="search">
					<form>
						<div class="input-group">
							<div class="input-item">
								<input type="text" name="search2" autocomplete="off" required>
								<label class="label-name" for="search2">
									<span class="content">Search</span>
								</label>
							</div>
						</div>
					</form>
					<div class="buttons">
						<select name="sort" id="sort">
							<option value="">Popularity</option>
							<option value="">New</option>
							<option value="">Old</option>
						</select>
					</div>
				</div>
				<div class="course-tab">
					<div class="contents">
						<div class="content active" id="categories">
							<div class="filter-container">
								<div class="category-head">
									<ul>
										<li class="category-name active" id="all">
											<div>All</div>
										</li>
										<li class="category-name" id="js-ramework">
											<div>JS Framework</div>
										</li>
										<li class="category-name" id="php-framework">
											<div>PHP Framework</div>
										</li>
										<li class="category-name" id="vanilla-javaScript">
											<div>Vanilla JavaScript</div>
										</li>
										<li class="category-name" id="python">
											<div>Python</div>
										</li>
										<li class="category-name" id="WordPress">
											<div>WordPress</div>
										</li>
										<li class="category-name" id="wp-theme-development">
											<div>WP Theme Development</div>
										</li>
										<li class="category-name" id="wp-plugin-development">
											<div>WP Plugin Development</div>
										</li>
									</ul>
								</div>
								<div class="courses">
									<h2 class="dark:text-gray-200 text-gray-800 text-center text-3xl">No Courses have been published yet!!!
									</h2>
									<p class="dark:text-gray-200 text-gray-800 text-center text-xl mt-3">Please check back later. We're working on it.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Closed -->
@stop
