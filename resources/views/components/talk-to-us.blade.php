<!-- Talk To Us -->
	<section id="cb-talk-to-us" class="bg-gray-100 overflow-hidden dark:bg-deepdark relative py-20">
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
				<h2>Contact us now to get started on your project!</h2>
			</div>
			<div class="lg:flex dark:bg-darkviolet">
				<div class="lg:w-2/5 mb-4 lg:mb-0">
					<div class="cb-after-submit-form">
						<div class="heading">
							<h4>After you submit your form, this is what will happen!</h4>
						</div>
						<video id="videoPlayer" class="video-js vjs-big-play-centered" preload="auto" height="264"
							poster="" data-setup="{}">
							<source src="{{ asset('assets/videos/cbd.mp4') }}" type="video/mp4" />
							<p class="vjs-no-js">
								To view this video please enable JavaScript, and consider upgrading to a
								web browser that
								<a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5
									video</a>
							</p>
						</video>
						<div class="point">
							<ul>
								<li class="item">We will respond within 12 hours.</li>
								<li class="item">If an NDA is asked, we will sign one.</li>
								<li class="item">You'll speak with product and technology professionals, not any account or sales manager.
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="lg:w-3/5">
					<div class="book-a-call">
						<form>
							<div class="input-group">
								<div class="input-item">
									<input type="text" name="name" autocomplete="off" required>
									<label class="label-name" for="name">
										<span class="content">Name</span>
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
							<div class="input-group">
								<div class="input-item description">
									<textarea name="description" id="description" required></textarea>
									<label class="label-name" for="description">
										<span class="content">Project Description</span>
									</label>
								</div>
							</div>
							<div class="input-item">
								<div class="budget">
									<select name="budget" required>
										<option class="hidden"></option>
										<option value="1">< 30k</option>
										<option value="2">30 > 60k</option>
										<option value="3">60k > 100k</option>
										<option value="4">> 100k</option>
									</select>
									<label class="label-name" for="email">
										<span class="content">Budget</span>
									</label>
								</div>
							</div>
							<button class="btn" type="submit">Book A Call</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Closed -->
