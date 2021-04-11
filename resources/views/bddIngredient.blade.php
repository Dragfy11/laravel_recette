@extends('template.main')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<section class="page-section">
    <div class="container ">
<div class="page-section-heading text-center text-uppercase mt-3 mb-4"><h2 class="">Base de données pour les ingrédients</h2></div>
<a href="{{route('welcome')}}"><-revenir page accueil</a>
    
<table class="table table-bordered table-hover shadow">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nom de l'ingrédient</th>
        <th>Actions: Edit, Destroy</th>
    </tr>
    </thead>
    <tbody>
    @foreach($ingredient as $item)
        <tr>
            <td colspan="">{{ $item->id }}</td>
            <td colspan="">{{ $item->name }}</td>
            <td colspan="">
                <a href="{{route('editIngredient', $item->id)}}"><button class="btn btn-outline-success m-1">Editez l'ingrédient</button></a>
                <a href="{{route('destroyIngredient', $item->id)}}"><button class="btn btn-outline-danger m-1">Supprimer l'ingrédient</button></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
    
    </div>
</section>

   

@stop
  