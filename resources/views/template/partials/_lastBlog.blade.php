
<?php
/*
 ../resources/views/template/partials/_lastBlog.blade.php
 */
?>


<h2>Latest Blog Posts</h2>

@foreach($posts as $post)
<div class="row">
  <div class="col-xs-4"><a href="blog-post.html"><img src="{{ asset ('img/blog/'. $post->image) }}" alt="Post Title"></a></div>
  <div class="col-xs-8">
    <div class="caption"><a href="blog-post.html">{{ $post->nom }}</a></div>
    <div class="date">{{ $post->created_at }}</div>
    <div class="intro">{{ $post->texteLead }}<a href="{{ URL::route('posts.show', ['post'=>$post->id]) }}">Read more...</a></div>
  </div>
</div>
@endforeach
