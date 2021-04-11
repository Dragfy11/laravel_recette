@extends('template.main')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/style.css')}}">

<h2 class="mt-5 mb-5 page-section-heading text-center text-uppercase"> recette</h2>
<div class="container">


<div class="table-wrapper"> 
    <div class="mt-4 mb-4">
        <a href="{{route('createRecette')}}" class="btn btn-primary scrollto">creer une recette</a></td>
    </div>
    <div class="mt-4 mb-4">
        <a href="{{route('createIngredient')}}" class="btn btn-primary scrollto">creer un ingredient</a></td>
    </div>
    <div class="mt-4 mb-4">
        <a href="{{route('IngredientBDD')}}" class="btn btn-primary scrollto">BDD ingrédient</a></td>
    </div>

    <table class="table table-bordered table-hover shadow">
        
        <thead>
        <tr class="bg-danger text-white text-center">
            <th>nom de la recette</th>
            <th class="pb-4">temps</th>
            <th>nbr personne</th>
            <th class="pb-4">nom des ingredients</th>
            <th class="pb-4">difficulte</th>
            <th>action proposer</th>
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