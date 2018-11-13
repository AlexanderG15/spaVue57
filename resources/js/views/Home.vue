<template>
	<section class="posts container">
		<!-- @if (isset($title))
				<h3>{{ $title }}</h3>
		@endif -->

		<article v-for="post in posts" class="post">
			<!-- @include($post->viewType('home')) -->

			<div class="content-post">
					<!-- @include('posts.header') -->

					<h1 v-text="post.title"></h1>

					<div class="divider"></div>
					<p v-html="post.excerpt"></p>
					<footer class="container-flex space-between">
						<div class="read-more">
							<!-- <a href="{{ route('posts.show', $post) }}" class="text-uppercase c-green">
								Leer más...
							</a> -->
						</div>

						<!-- @include('posts.tags') -->
					</footer>
				</div>
		</article>
		<!-- @empty -->
		<article class="post" v-if="! posts.length">
			<div class="content-post">
				<h1>No hay publicaciones todavía.</h1>
			</div>
		</article>
		<!-- @endforelse -->

		<!-- {{ $posts->appends(request()->all())->links() }} -->
	</section>
</template>

<script>
	export default {
		data() {
			return {
				posts: []
			}
		},
		mounted() {
			// Obtener los Posts
			axios.get('/api/posts')
				.then(res => {
					this.posts = res.data.data;
				})
				.catch(err => {
					console.log(err);
				});
		}
	}
</script>