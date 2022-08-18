<?php
/*
../ressources/views/pages/menu.blade.php
 */
?>

<ul class="nav navbar-nav navbar-right">
@foreach($pages as $page)
    <li class="">

        <a href="{{ URL::route('pages.show', $page->id) }}">{{$page->onglet}}</a>

    </li>
@endforeach
</ul>
