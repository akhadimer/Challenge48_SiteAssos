@extends('layouts.app')

@section('content')

<div class="container">

    <header class="jumbotron my-4">
        <center>
            <img class="img-assos" src="{{ $asso->url_image }}" alt="">
            <h1 class="display-3">{{ $asso->titre }}</h1>
        </center>
        <p class="lead">{{ $asso->description }}</p>
        <p class="lead site-web">📌 <a href="{{ $asso->url_site }}">Site Web</a></p>
    </header>

</div>

@endsection