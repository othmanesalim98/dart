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
               <h3> Ajouter Personnes</h3>
            </div>

<form method="post" action="{{ route('personnes.store') }}">

    @csrf

    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">CIN </label>
        <input type="text" name="cin"  class="form-control">
    </div>

    <div class="mb-3">
        <label  class="form-label">Full Name</label>
        <input type="text" name="full_name" class="form-control" id="exampleInputPassword1">
    </div>

    <div class="mb-3">
        <label  class="form-label">Tel</label>
        <input type="text" name="tel" class="form-control" id="exampleInputPassword1">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
    <button href="{{route('personnes')}}" class="btn btn-danger">Annuler</button>
</form>
</div>
</div>



@endsection
