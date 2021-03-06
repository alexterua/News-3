<!doctype html>
<html lang="ru">
	<head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title><?php echo $article->title; ?></title>
		<!--[if lte IE 8]><script src="templates/assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="templates/assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="templates/assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="templates/assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="single">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
                        <h1><a href="/">Новости Украины</a></h1>
                        <nav class="links">
                            <ul>
                                <li><a href="/">Главная</a></li>
                            </ul>
                        </nav>
                        <nav class="main">
                            <ul>
                                <li class="search">
                                    <a class="fa-search" href="#search">Search</a>
                                    <form id="search" method="get" action="#">
                                        <input type="text" name="query" placeholder="Search" />
                                    </form>
                                </li>
                                <li class="menu">
                                    <a class="fa-bars" href="#menu">Menu</a>
                                </li>
                            </ul>
                        </nav>
					</header>

				<!-- Menu -->
					<section id="menu">

						<!-- Search -->
							<section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Search" />
								</form>
							</section>

						<!-- Links -->
							<section>
								<ul class="links">
									<li>
										<a href="#">
											<h3>Lorem ipsum</h3>
											<p>Feugiat tempus veroeros dolor</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Dolor sit amet</h3>
											<p>Sed vitae justo condimentum</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Feugiat veroeros</h3>
											<p>Phasellus sed ultricies mi congue</p>
										</a>
									</li>
									<li>
										<a href="#">
											<h3>Etiam sed consequat</h3>
											<p>Porta lectus amet ultricies</p>
										</a>
									</li>
								</ul>
							</section>

						<!-- Actions -->
							<section>
								<ul class="actions vertical">
									<li><a href="#" class="button big fit">Log In</a></li>
								</ul>
							</section>

					</section>

				<!-- Main -->
					<div id="main">

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a><?php echo $article->title; ?></a></h2>
										<p>Lorem ipsum dolor amet nullam consequat etiam feugiat</p>
									</div>
									<div class="meta">
										<time class="published" datetime="2015-11-01">November 1, 2015</time>
										<a href="#" class="author"><span class="name">Jane Doe</span><img src="templates/images/avatar.jpg" alt="" /></a>
									</div>
								</header>
								<span class="image featured"><img src="templates/images/<?php echo $article->image; ?>" alt="" /></span>
								<p><?php echo $article->content; ?></p>
								<footer>
                                    <ul class="actions">
                                        <li><a href="/" class="button big">Назад</a></li>
                                    </ul>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon fa-heart">28</a></li>
										<li><a href="#" class="icon fa-comment">128</a></li>
									</ul>
								</footer>
							</article>

					</div>

				<!-- Footer -->
					<section id="footer">
						<ul class="icons">
							<li><a href="#" class="fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="fa-rss"><span class="label">RSS</span></a></li>
							<li><a href="#" class="fa-envelope"><span class="label">Email</span></a></li>
						</ul>
						<p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a href="http://unsplash.com">Unsplash</a>.</p>
					</section>

			</div>

		<!-- Scripts -->
			<script src="templates/assets/js/jquery.min.js"></script>
			<script src="templates/assets/js/skel.min.js"></script>
			<script src="templates/assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="templates/assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="templates/assets/js/main.js"></script>

	</body>
</html>