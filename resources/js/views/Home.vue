<template>
	<section class="posts container">
		<!-- @if (isset($title))
				<h3>{{ $title }}</h3>
		@endif -->

		<article v-for="post in posts" class="post">
			<!-- @include($post->viewType('home')) -->

			<div class="content-post">
					<!-- @include('posts.header') -->
					<header class="container-flex space-between">
						<div class="date">
							<span class="c-gris">
								{{ post.published_date }} / {{ post.owner.name }}
							</span>
						</div>
						<!-- @if ($post->category) -->
							<div class="post-category">
								<span class="category">
									<a href="#">{{ post.category.name }}</a>
<!-- 									<a href="{{ route('categories.show', $post->category) }}">

									</a> -->
								</span>
							</div>
						<!-- @endif -->
					</header>

					<h1 v-text="post.title"></h1>

					<div class="divider"></div>
					<p v-html="post.excerpt"></p>
					<footer class="container-flex space-between">
						<div class="read-more">
							<router-link :to="{name: 'post_show', params: {url: post.url}}"
                class="text-uppercase c-green">
								Leer más...
							</router-link>
						</div>

						<!-- @include('posts.tags') -->
						<div class="tags container-flex">
							<span class="tag c-gris" v-for="tag in post.tags">
								<a href="#">#{{ tag.name }}</a>
							</span>
						</div>
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