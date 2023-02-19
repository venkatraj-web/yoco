@extends('layouts.main_master')
@section('content')
    
		<section class="about-hero-section">
			<div class="about-hero container grid grid--cols-2">
				<div class="about-hero-text-box">
					<p class="about-hero-primary-text">About</p>
					<p class="about-hero-secondary-text">YOCO Labs</p>
					<summary class="about-hero-summary">
						YOCO Labs is a software development company based in Chennai, India
						and founded in 2021.<br />
						Driven by the need to have a powerful AI tool base supported
						application YOCO Labs has created a state-of-the-art enterprise
						software solution that can be deployed for a very large range of
						sizes and applications to handle security in public places for
						detection and real-time reporting of crimes and abnormal behavior of
						people and also enables object detections.<br />
						We create a world class security standard driven solution that is
						easily deployed and maintained by users who need a highly effective
						crime detection system.
					</summary>
				</div>
				<div class="about-hero-img-box">
					<img
						class="about-hero-img"
						src="assets/about/hero-img.png"
						alt="A computer with AI bot controlling the data it gets"
					/>
				</div>
			</div>
			<div class="about-hero-banner">
				<img
					class="about-hero-banner-img"
					src="assets/about/hero-banner.png"
					alt="Multiple camera's surveillancing over with AI enabled service"
				/>
			</div>
		</section>
		<section class="about-offering-section">
			<div class="about-offering container grid grid--cols-2">
				<div class="about-offering-video-box">
					<iframe
						class="about-offering-video"
						width="560"
						height="315"
						src="https://www.youtube.com/embed/Q2BgPWmYSYs?rel=0&showinfo=0&autohide=1&modestbranding=1"
						title="YOCO Labs company profile video"
						frameborder="0"
						allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
						allowfullscreen
					></iframe>
				</div>
				<div class="about-offering-text-box">
					<p class="about-offering-title">
						YOCO Labs offers the entire solution for a video Surveillance
						solution with
					</p>
					<div class="about-offering-list-container">
						<ul class="about-offering-list">
							<li class="about-offering-list-item">
								<img src="assets/about/tick-icon.svg" alt="Tick Icon" />
								<span class="about-offering">Hardware</span>
							</li>
							<li class="about-offering-list-item">
								<img src="assets/about/tick-icon.svg" alt="Tick Icon" />
								<span class="about-offering">Camera</span>
							</li>
							<li class="about-offering-list-item">
								<img src="assets/about/tick-icon.svg" alt="Tick Icon" />
								<span class="about-offering">Monitor</span>
							</li>
							<li class="about-offering-list-item">
								<img src="assets/about/tick-icon.svg" alt="Tick Icon" />
								<span class="about-offering">Storage</span>
							</li>
						</ul>
						<ul class="about-offering-list">
							<li class="about-offering-list-item">
								<img src="assets/about/tick-icon.svg" alt="Tick Icon" />
								<span class="about-offering">Accessories</span>
							</li>
							<li class="about-offering-list-item">
								<img src="assets/about/tick-icon.svg" alt="Tick Icon" />
								<span class="about-offering">System Software</span>
							</li>
							<li class="about-offering-list-item">
								<img src="assets/about/tick-icon.svg" alt="Tick Icon" />
								<span class="about-offering">Video Management Software</span>
							</li>
							<li class="about-offering-list-item">
								<img src="assets/about/tick-icon.svg" alt="Tick Icon" />
								<span class="about-offering">Services</span>
							</li>
						</ul>
					</div>
					<p class="about-offering-text">
						YOCO Labs touches all aspects of video surveillance from drawing
						board to deployment.
					</p>
				</div>
			</div>
		</section>
@endsection