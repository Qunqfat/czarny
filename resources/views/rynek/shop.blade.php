@extends('layouts.app')

@section('myContent')

<div class="container">
<div>
    <center><h2>Miejski rynek</h2></center>
</div>


<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Typ</th>
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
                <td>{{ $equipmen['type'] }}</td>
                <td>{{ $equipmen['name'] }}</td>
                <td>{{ $equipmen['attack'] }}</td>
                <td>{{ $equipmen['damage'] }}</td>
                <td>{{ $equipmen['price'] }}</td>
                <td>{{ $equipmen['lvl'] }}</td>
                <td>{{ $equipmen['amount'] }}</td>
                <td>
                    <a href="#">
                        <button class="btn btn-primary btn-sm ">Kup</button>
                    </a>


                </td>
            </tr>
      @endforeach
    </tbody>
  </table>
  {{-- {{ $equipment->links() }} --}}
</div>

@endsection
