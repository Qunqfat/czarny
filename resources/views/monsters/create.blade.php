@extends('layouts.app')

@section('myContent')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dodawanie potwora</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('monsters.store') }}">
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
                            <label for="defend" class="col-md-4 col-form-label text-md-end">Obrona</label>

                            <div class="col-md-6">
                                <input id="defend" type="text" class="form-control @error('defend') is-invalid @enderror" name="defend" value="{{ old('defend') }}" required autocomplete="defend">

                                @error('defend')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="lvl" class="col-md-4 col-form-label text-md-end">Poziom</label>

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
                            <label for="life" class="col-md-4 col-form-label text-md-end">Życie</label>

                            <div class="col-md-6">
                                <input id="life" type="text" class="form-control @error('life') is-invalid @enderror" name="life"
                                value="{{ old('life') }}" required autocomplete="life">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Dodaj
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
