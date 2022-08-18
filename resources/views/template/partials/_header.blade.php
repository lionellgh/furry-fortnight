
<?php
/*
 ../resources/views/template/partials/_header.blade.php
 */
?>


<div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="http://localhost/dynamique/public/pages/1"><img src="{{ asset ('img/logo.png') }}" alt="Basica"></a>
    </div>
    <div class="collapse navbar-collapse">
          @include('pages.menu')
    </div>
</div>
