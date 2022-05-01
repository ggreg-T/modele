@extends('layouts.main')

@section('main')
<h1>{{$titre}}</h1>
<p>Vous pouvez consulter les livres ici</p>

<!-- recuperation des données -->

    
    
    
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Ajouter un livre
    </button>
    
    <!---------------- Modal -------------->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    
                    <!------------ Bouton modal: pop-up ------------>
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un livre</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                    <!-- ------------Mettre dans un formulaire pour avoir la method post-------------- -->
                    
                    <form action="/livres" method="POST">
                        @csrf
                        
                        <!-- ------------DIV du modal-------------- -->
                        
                        <div class="mb-3">
                            <label for="titrelivre" class="form-label">Titre du livre</label>
                            <input type="titre"  name="titre" class="form-control" id="titrelivre" >
                        </div>
                        
                        <div class="mb-3">
                            <label for="prenomauteur" class="form-label">Prénom</label>
    <input type="prenom" name="prenom" class="form-control" id="prenomauteur">
</div>

<div class="mb-3">
    <label for="nomauteur" class="form-label">Nom</label>
    <input type="nom"  name="nom" class="form-control" id="nomauteur">
</div>

<button type="submit" class="btn btn-primary">Valider</button>
</form>
</div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        
    </div>
</div>
</div>
</div>

<div>
    <br><br><br>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Auteur</th>
            <th scope="col">Livre</th>
        </tr>
    </thead>
    <tbody>
        

    @foreach ($livres as $cle=> $livre) 
  
        <tr>
            <td><a href="/livres/{{$livre->id}}">{{$livre->titre}}</a></td>
            <td>({{$livre->auteur->nom}} , {{$livre->auteur->prenom}})</td>
        </tr>
        <tr>
            
            @endforeach
            </tbody>
        </table>
        
        
        
        
        
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        @endsection
        
        







