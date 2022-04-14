@extends('layouts.main')
@section('content')
    	<section id="cb-hero-bg" class="overflow-hidden cb-hero relative">
		<div class="gradient-overlay image"></div>
		<img src="{{ asset('assets/images/contents/hero.jpg') }}" class="overlay image" alt="">
		<div class="container">
			<div class="flex flex-col justify-center text-white">
				<h2 class="lg:text-5xl text-2xl font-bold lg:leading-tight leading-snug lg:mb-3 mx-auto">Contact Us</h2>
				<p class="mx-auto md:text-base xs:text-sm text-center">Book a call with a product expert to evaluate your project.</p>
			</div>
		</div>
	</section>
	<!-- Hero section Closed -->
	<section id="cb-contact" class="bg-gray-100 overflow-hidden dark:bg-deepdark relative py-20">
			<div class="blob-bg">
				<div class="blob blob-1">
					<img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
				</div>
				<div class="blob blob-2">
					<img src="{{ asset('assets/images/blob/blob-1.svg') }}" alt="blob-1">
				</div>
			</div>
			<div class="container z-10 relative">
				<div class="lg:flex shadow-lg rounded-lg bg-gray-100 dark:bg-darkviolet">
					<div class="lg:w-1/3 mb-4 lg:mb-0">
						<div class="cb-contact-info">
							<div class="heading">
								<h2>Contact Information</h2>
								<p>Want to talk about your project? Let's Talk.</p>
							</div>
							<ul class="cb-contact-method lg:pb-0 pb-4">
								<li>
									<a href="tel:09638-825488">
										<i class="fad fa-phone"></i>
										09638-825488
									</a>
								</li>
								<li>
									<a href="mailto:contact@codebumble.com">
										<i class="far fa-envelope-open-text"></i>
										contact@codebumble.com
									</a>
								</li>
									<li>
										<i class="far fa-location"></i>
										Dhaka, Bangladesh
									</li>
							</ul>
							<ul class="cb-social">
								<li>
									<a target="_blank" href="https://facebook.com/">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/></svg>
									</a>
								</li>
								<li>
									<a target="_blank" href="https://instagram.com/">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
									</a>
								</li>
								<li>
									<a target="_blank" href="https://linkedin.in/">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>
									</a>
								</li>
								<li>
									<a target="_blank" href="https://twitter.com/">
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
									</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="lg:w-2/3">
						<div class="contact-form">
							<form>
								<div class="input-group">
									<div class="input-item">
										<input type="text" name="firstname" autocomplete="off" required>
										<label class="label-name" for="firstname">
											<span class="content">First Name</span>
										</label>
									</div>
									<div class="input-item">
										<input type="text" name="lastname" autocomplete="off" required>
										<label class="label-name" for="lastname">
											<span class="content">Last Name</span>
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
									<div class="input-item">
										<input type="text" name="phone" autocomplete="off" required>
										<label class="label-name" for="phone">
											<span class="content">Phone</span>
										</label>
									</div>
								</div>
								<div class="type-of-service">
									<h2 class="heading">What type of service do you want?</h2>
									<ul class="items">
										<li>
											<input type="checkbox" id="checkboxOne" value="WebDesign">
											<label for="checkboxOne">Web Design</label>
										</li>
										<li>
											<input type="checkbox" id="checkboxTwo" name="serviceType" value="webDevelopment">
											<label for="checkboxTwo">Web Development</label>
										</li>
										<li>
											<input type="checkbox" id="checkboxThree" name="serviceType" value="videoEditing">
											<label for="checkboxThree">Video Editing</label>
										</li>
										<li>
											<input type="checkbox" id="checkboxFour" name="serviceType" value="UI/UX">
											<label for="checkboxFour">UI/UX Design</label>
										</li>
										<li>
											<input type="checkbox" id="checkboxFive" name="serviceType" value="Marketing">
											<label for="checkboxFive">Social Media Marketing</label>
										</li>
										<li>
											<input type="checkbox" id="checkboxSix" name="serviceType" value="other">
											<label for="checkboxSix">Other</label>
										</li>
									</ul>
								</div>
								<div class="input-group">
									<div class="input-item message">
										<textarea name="message" id="message" required></textarea>
										<label class="label-name" for="message">
											<span class="content">Message</span>
										</label>
									</div>
								</div>
								<button class="btn" type="submit">Send Message</button>
							</form>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- Terms & Conditons Closed -->
@stop
