@extends('layouts.app')

@section('content')

<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
        <center>
            <img src="https://cap.img.pmdstatic.net/fit/http.3A.2F.2Fprd2-bone-image.2Es3-website-eu-west-1.2Eamazonaws.2Ecom.2Fcap.2F2019.2F01.2F10.2F20ce34e6-1fc1-4a29-9329-178a1c917574.2Ejpeg/750x375/background-color/ffffff/quality/70/creation-dune-association-choisir-le-bon-statut-1322815.jpg" alt="">
            <h1>J'inscris mon association :</h1><br>
            <form method="POST" action="{{ route('assos.store') }}">
                @csrf
                <label for="titre">Nom de l'association:</label><br>
                <input type="text" class="form-control" id="titre" name="titre"><br>
                <label for="description">Description:</label><br>
                <textarea class="form-control" id="description" rows="3" name="description"></textarea><br><br>
                <label for="lieu">Emplacement :</label>
                <input type="text" class="form-control" id="lieu" name="lieu"><br><br>
                <label for="url_image">Lien de l'image :</label>
                <input type="text" class="form-control" id="url_image" name="url_image">
                <input type="submit" value="Valider">
            </form>
        </center>
    </header>

    <!-- /.row -->

</div>

@endsection