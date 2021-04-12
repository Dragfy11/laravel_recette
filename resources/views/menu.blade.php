@extends('template.main')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<h2 class="mt-5 mb-5 page-section-heading text-center text-uppercase bg-dark text-white mr-5 ml-5"> recette</h2>
<div class="container">


<div class="table-wrapper"> 
    <div class="d-flex align-items-start">

        <div class="mt-4 mb-4 mr-3">
            <a href="{{route('createRecette')}}" class="btn btn-primary scrollto">Créer une nouvelle recette</a></td>
        </div>
        <div class="mt-4 mb-4 mr-3">
            <a href="{{route('createIngredient')}}" class="btn btn-primary scrollto">Créer un nouveau ingrédient</a></td>
        </div>
        <div class="mt-4 mb-4">
            <a href="{{route('IngredientBDD')}}" class="btn btn-primary scrollto">Afficher tout les ingrédients</a></td>
        </div>
        
    </div>
    <table class="table table-bordered table-hover shadow">
        
        <thead>
        <tr class="bg-danger text-white text-center">
            <th class="pb-3">nom de la recette</th>
            <th class="pb-3">temps</th>
            <th class="pb-3">nbr personne</th>
            <th class="pb-3">nom des ingredients</th>
            <th class="pb-3">difficulte</th>
            <th class="pb-3">action proposer</th>
        </tr>
    </thead>
    <tbody>
       @foreach ( $dessert as $item)
        <tr>
            <td colspan="">{{$item->name}}</td>
            <td colspan="">{{$item->duree}}</td>
            <td colspan="">{{$item->nbrPersonne}}</td>
            <td colspan="">@foreach($item->ingredient as $ingredient)
                {{$ingredient->name}},
                @endforeach
            </td>
            <td colspan="">{{$item->difficulte}}</td>
                
            
            <td colspan="">
                <a href="{{route('editRecette',$item->id)}}" class="btn btn-warning scrollto">Edit</a>
                <a href="{{route('destroyRecette',$item->id)}}" class="btn btn-danger scrollto">Delete</a>
            </td>

        </tr> 
        
       @endforeach
    <tbody> 
    </table>
</div>
</div>
@endsection