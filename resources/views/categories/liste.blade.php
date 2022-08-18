@foreach( $post->categories as $categorie)
<li><a href="{{ URL::route('categories.show', ['categorie'=>$categorie->id]) }}">{{ $categorie->nom }}</a></li>
@endforeach
