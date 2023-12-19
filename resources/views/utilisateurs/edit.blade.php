@extends('../template')

@section('titre')
    Modifier un utilisateur
@endsection

@section('contenu')
<section id="contact" class="py-5 bg-light">
<div class="container">
    <h2 class="text-center">Modifier {{ $utilisateur->nom }} , {{$utilisateur->prenom }}</h2>
    <div class="row gy-4 mt-4">
        <div class="col-12 col-md-5">
            <img src="{{ asset('/img/editForm.png') }}" alt="Image d'un téléphone" width="100%">
        </div>
        <div class="col-12 offset-md-1 col-md-6">
    <form method="POST" action="{{ route('utilisateurs.update', $utilisateur) }}"class="row">
        @csrf
        @method('PATCH')
        <div class="col-6 my-2">
            <label for="nom" class="form-label">Nom</label>
            <input name="nom" type="text" class="form-control @error('nom') is-invalid @enderror" value="{{ $utilisateur->nom }}" id="nom" required>

            @error('nom')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-6 my-2">
            <label for="prenom" class="form-label">Prénom</label>
            <input name="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" value="{{ $utilisateur->prenom }}" id="prenom" required>
           
            @error('prenom')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12 my-2">
            <label for="login" class="form-label">Login</label>
            <input type="email" class="form-control @error('login') is-invalid @enderror" value="{{ $utilisateur->login }}"
            id="login" name="login" placeholder="" required>
           
            @error('login')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12 my-2 disable">
            <label for="motPasse" class="form-label">Mot de passe</label>
            <input type="password" class="form-control @error('motPasse') is-invalid @enderror" 
            id="motPasse" name="motPasse" value="{{ $utilisateur->motPasse }}"required>

            @error('motPasse')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12 my-2">
            <label for="profil" class="form-label">Profil</label>
            <input type="text" class="form-control @error('profil') is-invalid @enderror" 
            id="profil" name="profil" value="{{ $utilisateur->profil }}" required>

            @error('profil')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12 my-2 align-content-center">
            <button class="btn btn-success w-25" type="submit">Modifier</button>
            <a class="btn btn-danger offset-1 w-25" href="{{ route('utilisateurs.index') }}" title="Détails">Retour</a>
        </div>

    </form>
</section>
@endsection
