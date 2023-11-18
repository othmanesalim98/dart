@extends("layouts.master")

@section("content")

    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h3>Bienvenue</h3>
            </div>

            <form action="{{ route('personne.mois') }}" method="get">
            <div class="row">

                <div class="col-md-6 mb-3">
                    <select class="form-control" name="mois">
                        <option value="">-</option>
                        @foreach($date as $d)
                        <option value="{{$d->id}}">{{$d->mois}} - {{$d->annee}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-6 mb-3">
                   <input type="submit" class="btn btn-primary" value="submit"/>
                </div>

            </div>
            
        </form>

    @if($personnes)
            <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">CIN</th>
            <th scope="col">Full Name</th>
            <th scope="col">Tel</th>
            <th scope="col">Montant</th>
        </tr>
        </thead>
        <tbody>
        @foreach($personnes as $e)
        <tr>
            <th scope="row"> {{$loop->index + 1}} </th>
            <td>{{ $e->cin }}</td>
            <td>{{ $e->full_name }}</td>
            <td>{{ $e->tel }}</td>
            <td>{{ $e->pivot->montant }}</td>
        
        </tr>
        @endforeach

        </tbody>
    </table>
    @endif

        </div>
    </div>


@endsection
