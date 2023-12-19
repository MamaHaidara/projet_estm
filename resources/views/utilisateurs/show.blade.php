@extends('../template')



@section('contenu')

<div class="card col-6 offset-3" style="width: 50%;">
    <div class="card-body">
      <h5 class="card-title fw-bold fs-2 "> <span class="bi bi-person px-2" ></span>{{ $utilisateur->nom }} {{ $utilisateur->prenom }}</h5>
      <p class="card-text"> 
        <h4 > <span>Login :</span> {{ $utilisateur->login }}</h4>
        <h4> <span>Profil :</span> {{ $utilisateur->profil }}</h4>
      </p>
      <a class="btn btn-outline-danger" href="{{ route('utilisateurs.index') }}" title="Détails">Retour</a>
    </div>
  </div>
    
@endsection
