@extends('../template')



@section('contenu')

<div class="card col-6 offset-3">
    <div class="card-header fw-bold fs-3">
       Détails 
    </div>
    <div class="card-body">
        <div>
            <h5 class="fw-bold">Infomations de l'Enseignant </h5>
            <span class="card-text">Nom  :{{$enseigner->utilisateur->nom }}</span><br/>
            <span class="card-text">Prénom  :{{$enseigner->utilisateur->prenom }}</span><br/>
            <span class="card-text">Login  :{{$enseigner->utilisateur->login }}</span><br/>
        </div>

        <div class="mb-2">
            <h5 class="fw-bold">Infomations de l'EC : </h5>
            <span>Libelle: {{ $enseigner->EC->libelle}}</span><br/>
            <span>Année: {{ $enseigner->annee}}</span><br/>
        </div>

        <a class="btn btn-danger" href="{{ route('enseigners.index') }}" title="Détails">Retour</a>
    </div>
</div>
   
@endsection
