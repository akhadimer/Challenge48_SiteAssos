@extends('layouts.app')

@section('content')

<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
        <h1 class="display-3">Bienvenue sur BdxAssos !</h1>
        <p class="lead">BdxAssos est un site répertoriant de nombreuses associations, toutes présentes sur Bordeaux ou ses communes, afin de les promouvoir et ainsi
            espérer qu'elles puissent vous intéresser.</p>
        <p class="lead">Plus qu'un site, BdxAssos organise mensuellement des rencontres entre ces associations et les particuliers qui souhaitent s'informer.
        </p>
        <a href="{{ url('about' ) }}" class="btn btn-primary btn-lg">Plus de détails ici !</a>
    </header>

    <!-- Page Features -->
    <div class="row text-center">
        @foreach($assos as $asso)
        <div class="col-lg-3 col-md-6 mb-4">

            <div class="card h-100">
                <img class="card-img-top" src="{{ $asso->url_image }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">{{ $asso->titre }}</h4>
                    <p class="card-text">{{ $asso->description }}</p>

                </div>
                <div class="card-footer">
                    <a href="{{ route('assos.show', $asso) }}" class="btn btn-primary">Détails</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

@endsection