@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Gestion R.D.Vs</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('create_rdv') }}"><button type="button" class="btn btn-default btn-lg btn-block">Ajouter Un RDV</button></a>
                    <br>
                    <a href="{{ route('list_rdv') }}"><button type="button" class="btn btn-default btn-lg btn-block">Annuler Un RDV</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection