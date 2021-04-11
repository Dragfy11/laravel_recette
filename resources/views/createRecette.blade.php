@extends('template.main')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">

<section class="page-section">
    <div class="container">

       <div>
           <h2 class="page-section-heading text-center text-uppercase mt-3 mb-4">creer une recette</h2>
       </div>

       <a href="{{route('welcome')}}"><-revenir page accueil</a>
        <div class="table table-bordered table-hover shadow">
            <form class="d-flex flex-column  align-items-start mx-auto w-50" action="{{route('storeRecette')}}" method="POST">
                @csrf
                <label for="" class="mt-4 font-weight-bold">Nom de la recette:</label>
                    <input class="w-50" type="text" name="name">
                <label for="" class="mt-4 font-weight-bold">Temps de réalisation:</label>
                    <input class="w-50" type="text" name="duree">
                <label for="" class="mt-4 font-weight-bold">Nombre de personne:</label>
                    <input class="w-50" type="text" name="nbrPersonne">
                <label for="" class="mt-4 font-weight-bold">Difficulte:</label>
                    <textarea class="w-50"  name="difficulte"></textarea>
                <label for="" class="mt-4 mb-3 font-weight-bold">Ingredient:</label>
                <div class="form-group">
                    @foreach($ingredient as $item)
                        
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="ingredient[]" value="{{$item->id}}">
                                {{$item->name}}
                            </label>
                        </div>
                    @endforeach
                </div>
                <input class="w-50 mb-4 bg-primary text-white " type="submit" value='Enregistrer'>
            </form>
        </div>
    </div>
</section>
@endsection
