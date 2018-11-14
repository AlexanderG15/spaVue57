<template>
  <paginator
    url="/api/posts"
    component-name="posts-list"
  />
</template>

<script>
	export default {
		data() {
			return {
        posts: [],
        pagination: {}
			}
		},
		mounted() {
			// Obtener los Posts
			axios.get(`/api/posts?page=${this.$route.query.page || 1}`)
				.then(res => {
          this.pagination = res.data;
          this.posts = res.data.data;
          delete this.pagination.data;
				})
				.catch(err => {
					console.log(err);
				});
		},
    methods:{
      getActiveClass(page){
        return [
          ! this.$route.query.page && page == 1 ? 'active' : ''
        ];
      }
    }
	}
</script>

<style lang="scss">
  .pagination{
    a.active{
      background-color: #1abc9c;
      color: white;
    }
  }
</style>