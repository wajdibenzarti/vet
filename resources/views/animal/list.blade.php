@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Vos Animaux</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>Nom</th>
                            <th>Type</th>
                            <th>Espece</th>
                            <th>Supprimer</th>
                        </tr>
                        @foreach ($user_animals as $animal)
                            <tr>
                                <td>{{$animal->name}}</td>
                                <td>{{$animal->type}}</td>
                                <td>{{$animal->specie}}</td>
                                <td><a class="btn btn-danger" href="{{route('delete_pet',['id' => $animal->id])}}" role="button"><i class="fa fa-trash"></i>Supprimer</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection