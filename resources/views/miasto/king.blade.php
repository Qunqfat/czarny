@extends('layouts.app')

@section('myContent')

<div class="container">
    <div>
        <center><h2>Król</h2></center>
    </div>
<div>
    opis króla
</div>

    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">Możesz pomóc królestwu wpłacają złoto do skarbca</th>
          </tr>
        </thead>
        <tbody>

                <tr>
                    <td>
                        <a href="#">
                            <button class="btn btn-success btn-sm ">wpłać datek</button>
                        </a>
                    </td>
                </tr>

        </tbody>
      </table>
      {{-- {{ $monsters->links() }} --}}
    </div>

    @endsection
