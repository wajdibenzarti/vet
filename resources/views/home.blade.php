@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Accueil</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="#"><button type="button" class="btn btn-default btn-lg btn-block">Gestion Des Animaux</button></a>
                    <br>
                    <a href="#"><button type="button" class="btn btn-default btn-lg btn-block">Gestion Des RDV</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
