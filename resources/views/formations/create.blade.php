@extends('../template')

@section('titre')
    Créer un Formation
@endsection

@section('contenu')
<section class="content">
 <div class="container-fluid">
<div class="row">
     <div class="col-6 offset-3">
        <div class="card" >
            <div class="card-header">
                <h3 class="text-center">Créer un nouvel Formation</h3>
            </div>

            <div class="card-body">
            <form method="POST" action="{{ route('formations.store') }}" class="row">
                @csrf
               
                <div class="col-12 my-2">
                    <label for="nom" class="label-form">Libelle:</label>
                    <input type="text" class="form-control" name="libelle" required>
                </div>
                <div class="col-12 my-2">
                    <label for="description" class="label-form">Description</label>
                    <input type="text" class="form-control" name="description" required>
                </div>
            
                <div class="col-12 my-2 align-content-center">
                    <a class="btn btn-danger w-25" href="{{ route('formations.index') }}" title="Détails">Annuler</a>
                    <button type="submit" class="btn btn-success w-25">Créer</button>
                </div>
            </form>
            </div>
          </div>
     </div>
    
  </div>
 </div>
</section>
@endsection
