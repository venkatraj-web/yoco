<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta Tag -->
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="copyright" content="Yoco Labs" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
		/>
		<meta
			name="keywords"
			content="video survillance,cctv surveillance,motion intelligence,video analytics software,fraud detection,surveillance software,bestwireless security camera system,cctv camera for home with mobile connectivity."
		/>
		<meta
			name="description"
			content="To manage a high level of security at Public Places and in Offices / Factories etc, with a video surveillance that captures critical events as they happen using Artificial Intelligence & motion intelligence and presenting a decision making in case of anomalies and thereby help to solve crime using fraud detection. Our surveillance software application works with all types of cameras."
		/>

		<!-- Site Title -->
		<title>YOCO Labs Pvt Ltd | AI assisted video surveillance product</title>

		<!-- Fav Icon -->
		<link rel="icon" type="img/favicon.png" href="img/favicon.png" />

		<!-- Google Font -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
			rel="stylesheet"
		/>

		<link rel="stylesheet" href="{{ asset("styles/modal.css") }}" />
		<link rel="stylesheet" href="{{ asset("styles/contact-style.css") }}" />
		<link rel="stylesheet" href="{{ asset("styles/style.css") }}" />
		<link rel="stylesheet" href="{{ asset("styles/industries-style.css") }}" />
		<link rel="stylesheet" href="{{ asset("styles/product-style.css") }}" />
		<link rel="stylesheet" href="{{ asset("styles/ai-solutions-style.css") }}" />
		<link rel="stylesheet" href="{{ asset("styles/about-style.css") }}" />
		<link rel="stylesheet" href="{{ asset("styles/common-style.css") }}" />
	</head>
	<body class="no-select scroll-container">
		@include("layouts.body.header")
		<main class="main">
			@yield("content")
		</main>
		@include("layouts.body.footer")
		<script src="{{ asset("js/script.js") }}"></script>
		<script src="{{ asset("js/modal.js") }}"></script>
		<script src="{{ asset("js/expand.js") }}"></script>
		<script src="{{ asset("js/carousel.js") }}"></script>
	</body>
</html>
