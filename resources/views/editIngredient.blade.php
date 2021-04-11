@extends('template.main')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">

<section class="page-section">
    <div class="container">

<div class="page-section-heading text-center text-uppercase mt-3 mb-4">
    <h2>Editez l'ingrédient</h2>
</div>
<a href="{{route('welcome')}}"><-revenir page accueil</a>
    <div class="table table-bordered table-hover shadow">
<form action="{{route('updateIngredient', $ingredient->id)}}" method="post">
@csrf

<div class="d-flex justify-content-around">

<input class="w-50 m-3 form-control @error('name') is-invalid @enderror" value="{{$ingredient->name}}" type="text" name="name" id="">
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

</div>

<div class="text-center m-4"><button class="btn btn-danger" type="submit">Editez l'ingrédient</button></div>

</form>
    </div>
    </div>
</section>

@stop