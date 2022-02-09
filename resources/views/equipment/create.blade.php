@extends('layouts.app')

@section('myContent')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dodawanie przedmiotu</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('equipment.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">Nazwa</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="attack" class="col-md-4 col-form-label text-md-end">Atak</label>

                            <div class="col-md-6">
                                <input id="attack" type="text" class="form-control @error('attack') is-invalid @enderror" name="attack" value="{{ old('attack') }}" required autocomplete="attack" autofocus>

                                @error('attack')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="damage" class="col-md-4 col-form-label text-md-end">Obrażenia</label>

                            <div class="col-md-6">
                                <input id="damage" type="text" class="form-control @error('damage') is-invalid @enderror" name="damage" value="{{ old('damage') }}" required autocomplete="damage" autofocus>

                                @error('damage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-end">Cena</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price">

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="lvl" class="col-md-4 col-form-label text-md-end">Min.Lvl</label>

                            <div class="col-md-6">
                                <input id="lvl" type="text" class="form-control @error('lvl') is-invalid @enderror" name="lvl"
                                value="{{ old('lvl') }}" required autocomplete="new-lvl">

                                @error('lvl')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="amount" class="col-md-4 col-form-label text-md-end">Ilość</label>

                            <div class="col-md-6">
                                <input id="amount" type="text" class="form-control @error('lvl') is-invalid @enderror" name="amount"
                                value="{{ old('amount') }}" required autocomplete="amount">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Dodaj przedmiot
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
