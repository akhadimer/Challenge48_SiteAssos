@extends('layouts.app')

@section('content')
<div class="container">
    <header class="jumbotron my-4">
        <h2>Mon compte</h2><br>
        <div class="d-flex justify-content-between">
            <div class="d-flex flex-column">
                <p>E-mail : {{ Auth::user()->email }}</p>
                <p>Nom : {{ Auth::user()->name }}<br>
            </div>
            <div><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><input class="btn btn-danger deconnection" type="submit" value="Deconnexion"></div></a>
        </div>
        <div class="block">
            <h2 for="lname">Mes associations:</h2>
        </div>

        <div class="row text-center">
            @foreach($assos as $asso)
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card h-100">
                    <img class="card-img-top" src="{{ $asso->url_image }}" alt="">
                    <div class="card-body">
                        <h4 class="card-title">{{ $asso->titre }}</h4>
                        <div style="width:80%;">
                            <p class="card-text">{{ $asso->description }}</p>
                        </div>
                    </div>
                    <div class="card-footer d-flex flex-wrap">
                        <div class="p-1"><a href="{{ route('assos.show', $asso) }}" class="btn btn-primary">Détails</a></div><br><br>
                        <div class="p-1"><a href="{{ route('assos.edit', $asso) }}" class="btn btn-info">Modifier</a></div><br><br>
                        <div class="p-1"><a href="{{ route('delete_event', $asso) }}" class="btn btn-danger">Supprimer</a></div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </header>
</div>
@endsection