@extends('layouts.app')

@section('myContent')

<div class="container">
<div>
    <center><h2>Lista potworów</h2></center>
</div>
<div>
    <a class="float-right" href="{{ route('monsters.create') }}">
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
        <th scope="col">Obrona</th>
        <th scope="col">Poziom</th>
        <th scope="col">Życie</th>
        <th scope="col">Akcja</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($monsters as $monster)
            <tr>
                <th scope="row">{{ $monster['id'] }}</th>
                <td>{{ $monster['name'] }}</td>
                <td>{{ $monster['attack'] }}</td>
                <td>{{ $monster['damage'] }}</td>
                <td>{{ $monster['defend'] }}</td>
                <td>{{ $monster['lvl'] }}</td>
                <td>{{ $monster['life'] }}</td>
                <td>
                    <a href="{{ route('monsters.show', $monster->id) }}">
                        <button class="btn btn-primary btn-sm ">P</button>
                    </a>

                    <a href="{{ route('monsters.edit', $monster->id) }}">
                        <button class="btn btn-success btn-sm ">E</button>
                    </a>

                    <button class="btn btn-danger btn-sm delete" data-id="{{ $monster['id'] }}">
                        X
                    </button>

                </td>
            </tr>
      @endforeach
    </tbody>
  </table>
  {{ $monsters->links() }}
</div>

@endsection


@section('javascript')

<script>

$(function() {
    $('.delete').click(function() {

        swal.fire({
            title: 'Czy na pewno chcesz usunąć rekord?',
            text: "Nie można cofnąć tej akcji!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Anuluj',
            confirmButtonText: 'Tak, usuń!'
            }).then((result) => {
                if (result.isConfirmed) {

                $.ajax({
                    method: "DELETE",
                    url: "http://czarny.test/monsters/" + $(this).data("id")
                    // data: { name: "John", location: "Boston" }
                })
                    .done(function( response ) {
                        window.location.reload();
                })
                    .fail(function( response ) {
                        alert( "Error");
                })
            }
            }
        )
    });
});

</script>

@endsection
