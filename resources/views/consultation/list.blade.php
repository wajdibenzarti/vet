@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Vos RDVs</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped table-hover">
                        <tr>
                            <th>Nom Animal</th>
                            <th>Type RDV</th>
                            <th>Veterinaire</th>
                            <th>Date RDV</th>
                            <th>Supprimer</th>
                        </tr>
                        @foreach ($consultations as $consultation)
                            <tr>
                                <td>{{$pets[$consultation->pet_id]->name}}</td>
                                <td>{{$consultation->type}}</td>
                                <td>{{$vets[$consultation->vet_id]->name}}</td>
                                <td>{{$consultation->date}}</td>
                                <td><a class="btn btn-danger" href="{{route('delete_rdv',['id' => $consultation->id])}}" role="button"><i class="fa fa-trash"></i>Supprimer</a></td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection