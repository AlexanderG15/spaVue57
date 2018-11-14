<template>
  <posts-list :posts="posts"></posts-list>
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