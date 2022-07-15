<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
	<title>Canva</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	<div class="ss-site-wrapper">
		<header class="ss-site-header ss-navbar">
			<ul class="ss-navbar__nav  ss-nav-right">
				<li class="ss-nav__item">
					<a data-modal-target="ss-modal" href="#" class="btn btn-secondary">Log in</a>
				</li>
				<li class="ss-nav__item">
					<a data-modal-target="ss-modal" href="#" class="btn btn-primary">Sign up</a>
				</li>
			</ul>
		</header> <!-- /.site-header -->

		<main class="ss-site-content">
			<section id="ss-modal" class="ss-modal mt-10">
				<div class="ss-modal__container">
					<span class="ss-modal__close"><i class="icon-close"></i></span>
					<div class="ss-modal__row">
						<div class="ss-modal__content-block">
							<h2>Log in or sign up in seconds</h2>
							<p>Use your email or another service to continue with Canva (it's free)!</p>
							<div class="ss-btn-group">
								<div class="ss-btn-group__item">
									<a href="#" class="btn btn-secondary btn-block">Continue with Google</a>
								</div>
								<div class="ss-btn-group__item">
									<a href="#" class="btn btn-secondary btn-block">Continue with Facebook</a>
								</div>
								<div class="ss-btn-group__item">
									<a href="#" class="btn btn-primary btn-block">Continue with email</a>
								</div>
								<div class="ss-btn-group__item">
									<a href="#" class="btn btn-transparent btn-block">Continue another way</a>
								</div>
								<span class="ss-legal">By continuing, you agree to Canva's <a href="#">Terms of Use.</a>
									Read our <a href="#">Privacy Policy.</a></span>
								<a href="#" class="btn btn-link btn-block text-left"><i class="icon-building"></i> Sign up with your work email</a>
							</div>
						</div>
						<div class="ss-modal__img-block">
							<picture class="ss-modal__img-cover">
								<source srcset="assets/images/ss-modal-cover.webp" type="image/webp">
								<source srcset="assets/images/ss-modal-cover.jpg" type="image/jpg">
								<img src="assets/image/ss-modal-cover.jpg" alt="Modal Cover" width="384" height="592" loading="lazy">
							</picture>
						</div>
					</div>
				</div>
			</section> <!-- /.modal -->
		</main> <!-- /.site-content -->

		<footer class="ss-site-footer">

		</footer><!-- /.footer -->
	</div>

	<script src="assets/js/main.js"></script>
</body>

</html>