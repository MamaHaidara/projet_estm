@extends('../template')

@section('titre')
    Créer un Utilisateur
@endsection

@section('contenu')


<section id="contact" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center">Formulaire d'iscription</h2>

        <div class="row gy-4 mt-4">
            <div class="col-12 col-md-5">
                <img src="{{ asset('/img/utilisateurForm.jpg') }}" alt="Image d'une inscription" width="100%">
            </div>
            <div class="col-12 offset-md-1 col-md-6">

                <!-- Formulaire -->
                <form method="POST" action="{{ route('utilisateurs.store') }}" class="row">
                    @csrf
                    <div class="col-6 my-2">
                        <label for="nom" class="form-label">Nom</label>
                        <input name="nom" type="text" class="form-control @error('nom') is-invalid @enderror" value="{{ old('nom')}}" id="nom" required>

                        @error('nom')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-6 my-2">
                        <label for="prenom" class="form-label">Prénom</label>
                        <input name="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" value="{{ old('prenom')}}" id="prenom" required>
                       
                        @error('prenom')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12 my-2">
                        <label for="login" class="form-label">Login</label>
                        <input type="email" class="form-control @error('login') is-invalid @enderror" value="{{ old('login')}}"
                        id="login" name="login" placeholder="" required>
                       
                        @error('login')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12 my-2">
                        <label for="motPasse" class="form-label">Mot de passe</label>
                        <input type="password" class="form-control @error('motPasse') is-invalid @enderror" 
                        id="motPasse" name="motPasse" value="{{ old('motPasse')}}" required>

                        @error('motPasse')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-12 my-2">
                        <label for="profil" class="form-label">Profil</label>
                        <select class="form-select" name="profil">
                            <option value="etudiant">Etudiant</option>
                            <option value="enseignant">Enseignant</option>
                            <option value="admin">Admin</option>
                        </select>
                        
                    </div>
                    <div class="col-12 my-2 align-content-center">
                        <button class="btn btn-success w-25" type="submit">Envoyer</button>
                        <a class="btn btn-danger offset-1 w-25" href="{{ route('utilisateurs.index') }}" title="Détails">Retour</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
