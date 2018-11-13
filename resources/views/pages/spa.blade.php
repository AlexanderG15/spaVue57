<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title>@yield('meta-title', config('app.name') . " | Blog")</title>
		<meta name="description" content="@yield('meta-description', 'Este es el blog de Zendero')">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="stylesheet" href="/css/normalize.css">
		<link rel="stylesheet" href="/css/framework.css">
		<link rel="stylesheet" href="/css/style.css">
		<link rel="stylesheet" href="/css/responsive.css">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

		<link href="{{ asset('css/app.css') }}" rel="stylesheet">
		<script src="{{ asset('js/app.js') }}" defer></script>

		@stack('styles')
	</head>
	<body>
		<div id="app">
			<div class="preload"></div>
			<header class="space-inter">
				<div class="container container-flex space-between">
					<figure class="logo">
						<img src="/img/logo.png" alt="">
					</figure>
						<nav class="custom-wrapper" id="menu">
							<div class="pure-menu">
								<a href="#" class="custom-toggle btn-bar" id="toggle"></a>
							</div>
							<ul class="container-flex list-unstyled">
								<li class="pure-menu-item">
									<router-link to="/" class="pure-menu-link c-gris-2 text-uppercase">
										Inicio
									</router-link>
								</li>
								<li class="pure-menu-item">
									<router-link to="/nosotros" class="pure-menu-link c-gris-2 text-uppercase">
										Nosotros
									</router-link>
								</li>
								<li class="pure-menu-item">
									<router-link to="/archivo" class="pure-menu-link c-gris-2 text-uppercase">
										Archivo
									</router-link>
								</li>
								<li class="pure-menu-item">
									<router-link to="/contacto" class="pure-menu-link c-gris-2 text-uppercase">
										Contacto
									</router-link>
								</li>
							</ul>
						</nav>
				</div>
			</header>

			<!-- Contenido -->
			<section class="posts container">
			{{-- @if (isset($title))
					<h3>{{ $title }}</h3>
			@endif --}}

			{{-- @forelse ($posts as $post) --}}
				<article class="post">
					{{-- @include($post->viewType('home')) --}}

					<div class="content-post">
							{{-- @include('posts.header') --}}

							{{-- <h1>{{ $post->title }}</h1> --}}

							<router-view></router-view>

							<div class="divider"></div>
							{{-- <p>{{ $post->excerpt }}</p> --}}
							<footer class="container-flex space-between">
								<div class="read-more">
									{{-- <a href="{{ route('posts.show', $post) }}" class="text-uppercase c-green">
										Leer más...
									</a> --}}
								</div>

								{{-- @include('posts.tags') --}}
							</footer>
						</div>
				</article>
				{{-- @empty --}}
					<article class="post">
						<div class="content-post">
							<h1>No hay publicaciones todavía.</h1>
						</div>
					</article>
			{{-- @endforelse --}}

			{{-- {{ $posts->appends(request()->all())->links() }} --}}
			</section>

			<section class="footer">
				<footer>
					<div class="container">
						<figure class="logo"><img src="/img/logo.png" alt=""></figure>
						<nav>
							<ul class="container-flex space-center list-unstyled">
								<li><a href="index.html" class="text-uppercase c-white">home</a></li>
								<li><a href="about.html" class="text-uppercase c-white">about</a></li>
								<li><a href="archive.html" class="text-uppercase c-white">archive</a></li>
								<li><a href="contact.html" class="text-uppercase c-white">contact</a></li>
							</ul>
						</nav>
						<div class="divider-2"></div>
						<p>Nunc placerat dolor at lectus hendrerit dignissim. Ut tortor sem, consectetur nec hendrerit ut, ullamcorper ac odio.
							Donec viverra ligula at quam tincidunt imperdiet. Nulla mattis tincidunt auctor.</p>
						<div class="divider-2" style="width: 80%;"></div>
						<p>© 2017 - Zendero. All Rights Reserved. Designed & Developed by <span class="c-white">Agencia De La Web</span></p>
						<ul class="social-media-footer list-unstyled">
							<li><a href="#" class="fb"></a></li>
							<li><a href="#" class="tw"></a></li>
							<li><a href="#" class="in"></a></li>
							<li><a href="#" class="pn"></a></li>
						</ul>
					</div>
				</footer>
			</section>
		</div>

		<script>
			(function (window, document) {
			var menu = document.getElementById('menu'),
					WINDOW_CHANGE_EVENT = ('onorientationchange' in window) ? 'orientationchange':'resize';

			function toggleHorizontal() {
					[].forEach.call(
							document.getElementById('menu').querySelectorAll('.custom-can-transform'),
							function(el){
									el.classList.toggle('pure-menu-horizontal');
							}
					);
			};

			function toggleMenu() {
					// set timeout so that the panel has a chance to roll up
					// before the menu switches states
					if (menu.classList.contains('open')) {
							setTimeout(toggleHorizontal, 500);
					}
					else {
							toggleHorizontal();
					}
					menu.classList.toggle('open');
					document.getElementById('toggle').classList.toggle('x');
			};

			function closeMenu() {
					if (menu.classList.contains('open')) {
							toggleMenu();
					}
			}

			document.getElementById('toggle').addEventListener('click', function (e) {
					toggleMenu();
					e.preventDefault();
			});

			window.addEventListener(WINDOW_CHANGE_EVENT, closeMenu);
			})(this, this.document);
		</script>

    <script src="{{ mix('js/app.js') }}"></script>

    @stack('scripts')
	</body>
</html>