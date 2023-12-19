@extends('../template')



@section('contenu')
    

    <section class="col-6 offset-3">
        <div class="card">
            <div class="card-header fw-bold fs-2">
              Détails
            </div>
            <div class="card-body">
              <h5 class="card-title fs-3">Formation: {{ $formation->libelle }} </h5>
              <p class="card-text">
                <h3 class="fs-3">Description de la formation</h3>
                <p>{{ $formation->description}}</p>
              </p>
              <a class="btn btn-outline-danger" href="{{ route('formations.index') }}" title="Détails">Retour</a>
            </div>
          </div>
    </section>
@endsection
