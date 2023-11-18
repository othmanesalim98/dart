@extends("layouts.master")

@section("content")

    <div class="card">
        <div class="card-body">
            <div class="card-title">
               <h3> Personnes</h3>
            </div>
            <div class="card-body">

            <div class="d-flex justify-content-end">
        <a href="{{ route('personnes.create') }}" class="btn btn-primary">Ajouter</a>

    </div>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">CIN</th>
            <th scope="col">Full Name</th>
            <th scope="col">Tel</th>
        </tr>
        </thead>
        <tbody>
        @foreach($personnes as $e)
        <tr>
            <th scope="row"> {{$loop->index + 1}} </th>
            <td>{{ $e->cin }}</td>
            <td>{{ $e->full_name }}</td>
            <td>{{ $e->tel }}</td>
        </tr>
        @endforeach

        </tbody>
    </table>


            </div>
        </div>
    </div>


@endsection
