@extends('layouts.app')

@section('myContent')

<div class="container">
<div>
    <center><h2>Lista przedmiotów</h2></center>
</div>
<div>
    <a class="float-right" href="{{ route('equipment.create') }}">
        <button>Dodaj</button>
    </a>
</div>

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nazwa</th>
        <th scope="col">Atak</th>
        <th scope="col">Obrażenia</th>
        <th scope="col">Cena</th>
        <th scope="col">Min. Lvl</th>
        <th scope="col">Ilość</th>
        <th scope="col">Akcja</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($equipment as $equipmen)
            <tr>
                <th scope="row">{{ $equipmen['id'] }}</th>
                <td>{{ $equipmen['name'] }}</td>
                <td>{{ $equipmen['attack'] }}</td>
                <td>{{ $equipmen['damage'] }}</td>
                <td>{{ $equipmen['price'] }}</td>
                <td>{{ $equipmen['lvl'] }}</td>
                <td>{{ $equipmen['amount'] }}</td>
                <td>
                    <a href="{{ route('equipment.show', $equipmen->id) }}">
                        <button class="btn btn-primary btn-sm ">P</button>
                    </a>
                    <a href="{{ route('equipment.edit', $equipmen->id) }}">
                        <button class="btn btn-success btn-sm ">E</button>
                    </a>
                    <a href="{{ route('equipment.destroy', $equipmen->id) }}">
                        <button class="btn btn-danger btn-sm delete" data-id="{{ $equipmen->id }}">
                            X
                        </button>
                    </a>
                </td>
            </tr>
      @endforeach
    </tbody>
  </table>
  {{ $equipment->Links() }}
</div>
@endsection

{{-- @section('javascript')
    const deleteUrl = "{{ url('equipments')}}/";
@endsection
@section('js-file')
    <script src="{{ asset('js/delete.js') }}"></script>
@endsection --}}
