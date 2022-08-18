
<?php
/*
 ../resources/views/posts/listeCategorie.blade.php
 */
?>

@foreach($posts as $post )
<li><a href="{{ URL::route('posts.show', ['post'=>$post->id]) }}">{{ $post->nom }}</a></li>
@endforeach
