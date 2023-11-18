@extends("layouts.master")

@section("content")

@if($errors->any())

    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>

@endif

@if(session()->has("success"))
    <div class="alert alert-success">
        <h3>  {{ session()->get('success') }} </h3>
    </div>
@endif


<div class="card">
        <div class="card-body">
            <div class="card-title">
               <h3> Choose the personne with the dart Time</h3>
            </div>

<form method="post" action="{{ route('choose.store') }}">

    @csrf


    <div class="mb-3">
        <label  class="form-label">Date</label>
        <select class="form-control" name="mois">
            <option value="">-</option>
            @foreach($date as $d)
            <option value="{{$d->id}}">{{$d->mois}} - {{$d->annee}}</option>
            @endforeach
        </select>
    </div>

    
@foreach($personnes as $p)

 <div class="form-check">
  <input class="form-check-input" type="radio" name="personne" id="exampleRadios1" value="{{$p->id}}" >
  <label class="form-check-label" for="exampleRadios1">
  {{$p->full_name}}
  </label>
</div>
@endforeach


    <button type="submit" class="btn btn-primary mt-4">Submit</button>
    <button href="{{route('personnes')}}" class="mt-4 btn btn-danger">Annuler</button>
</form>
</div>
</div>

@endsection
