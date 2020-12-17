@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Prendre Un R.D.V</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('add_rdv') }}">
                        @csrf
                        <input type="hidden" name="user_id" value="{{auth()->id()}}"/>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom Animal') }}</label>

                            <div class="col-md-6">
                                <select id="name" class="form-control" name="pet_id" required>
                                    @if ($pets->count())
                                        @foreach ($pets as $pet)
                                            <option value="{{$pet->id}}">{{$pet->name}}</option>
                                        @endforeach
                                    @endif                            
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('Type Consultation') }}</label>

                            <div class="col-md-6">
                                <select id="type" class="form-control" name="type" required>
                                    <option>Controle</option>
                                    <option>Vaccin</option>
                                    <option>Chirurgie</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="vet" class="col-md-4 col-form-label text-md-right">{{ __('Nom Du Veterinaire') }}</label>

                            <div class="col-md-6">
                                <select id="vet" class="form-control" name="vet_id">
                                    @foreach ($vets as $vet)
                                        <option value="{{$vet->id}}">{{$vet->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="specie" class="col-md-4 col-form-label text-md-right">{{ __('Date RDV') }}</label>

                            <div class="col-md-6">
                                <input id="rdv" type="date" class="form-control" name="date" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ajouter') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection