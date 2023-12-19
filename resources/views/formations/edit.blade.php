@extends('../template')

@section('titre')
    Modifier une Formation
@endsection

@section('contenu')
    
<section class="col-6 offset-3">
    <div class="card px-4" >
        <div class="card-header">
            <h1 class="fs-3 text-center">Modifier la formation {{ $formation->libelle}}</h1>
        </div>

        <form method="POST"  action="{{ route('formations.update', $formation) }}">
            @csrf
            @method('PATCH')
    
            <div class="col-12 my-3">
                <label for="nom" class="label-form">Libelle:</label>
                <input type="text" class="form-control" name="libelle" value="{{ $formation->libelle }}" required>
            </div>
            <div class="col-12 my-3">
                <label for="description" class="label-form">Description</label>
                <input type="text" class="form-control" value="{{ $formation->description }}" name="description" required>
            </div>
        
            <div class="col-12 my-3 align-content-center">
                <a class="btn btn-danger w-25" href="{{ route('formations.index') }}" title="Détails">Annuler</a>
                <button type="submit" class="btn btn-success w-25 offset-1">Modifier</button>
            </div>
        </form>
        
      </div>
</section>
@endsection
