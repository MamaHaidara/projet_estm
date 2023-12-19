@extends('../template')



@section('contenu')

<div class="card col-6 offset-3">
    <div class="card-header fw-bold fs-3">
       Détails 
    </div>
    <div class="card-body">
        <div>
            <h5 class="fw-bold">Infomations de l'Enseignant </h5>
            <span class="card-text">Nom  :{{$EtreResponsable->utilisateur->nom }}</span><br/>
            <span class="card-text">Prénom  :{{$EtreResponsable->utilisateur->prenom }}</span><br/>
            <span class="card-text">Login  :{{$EtreResponsable->utilisateur->login }}</span><br/>
            <span>Année de nomination: {{$EtreResponsable->annee}}</span><br/>

        </div>

        <div class="mb-2">
            <h5 class="fw-bold">Infomations de la formation : </h5>
            <span>Libelle: {{ $EtreResponsable->formation->libelle }}</span><br/>
            <span>Description: {{$EtreResponsable->formation->description}}</span><br/>

        </div>

        <a class="btn btn-danger" href="{{ route('EtreResponsables.index') }}" title="Détails">Retour</a>
    </div>
</div>
   
@endsection
