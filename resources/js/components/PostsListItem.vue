<template>
  <article class="post">
    <!-- @include($post->viewType('home')) -->

    <div class="content-post">
      <post-header :post="post"></post-header>
      
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
            <router-link :to="{name: 'tags_posts', params: {tag: tag.url}}">
              #{{ tag.name }}
            </router-link>
          </span>
        </div>
      </footer>
    </div>
  </article>
</template>

<script>
  export default {
    props: ['post']
  }
</script>