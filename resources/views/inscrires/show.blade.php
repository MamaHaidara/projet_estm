@extends('../template')



@section('contenu')

<div class="card w-50 offset-3">
    <div class="card-header">
    <h1 class="card-title fw-bold">Détail de l'étudiant n° {{ $inscrire->id }}</h1>
    </div>
    <div class="card-body"> 
        <p><span class="fw-bold">Nom & Prénom : </span> {{ $inscrire->utilisateur->nom }} {{ $inscrire->utilisateur->prenom }}</p>
        <p><span class="fw-bold">Login : </span> {{ $inscrire->utilisateur->login }}</p>
        <p><span class="fw-bold">Classe : </span>{{ $inscrire->classe->libelle }}</p>
        <p><span class="fw-bold">Année d'inscription: </span>{{ $inscrire->annee }}</p>
        <a class="btn btn-danger" href="{{ route('inscrires.index') }}" title="Détails">Retour</a>
    </div>
  </div>
@endsection
