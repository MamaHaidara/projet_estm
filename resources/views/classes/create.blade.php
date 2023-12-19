@extends('../template')

@section('titre')
    Créer une Classe
@endsection

@section('contenu')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title fs-3 fw-bold">Creer une classe</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form method="POST" action="{{ route('classes.store') }}">
                            @csrf
                            
                            <div class="my-2">
                                <label for="nom">Nom de la classe</label>
                                <input type="text" name="libelle" id="nom" class="form-control" required>
                            </div>

                           <div class="my-2">
                                <label for="idFormation"> Nom de la formation</label>
                                <select name="idFormation" class="form-select" id="idFormation">
                                
                                    @foreach ($formations as $formation)
                                        <option value="{{ $formation->id }}">{{ $formation->libelle }}
                                        </option>
                                    @endforeach
                                </select>
                           </div>

                            <div class="my-2 align-content-center">
                                <a class="btn btn-danger" href="{{ route('classes.index') }}" title="Détails">Retour</a>
                                <button type="submit" class="btn btn-success">Créer</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->


                <!-- /.card -->
            </div>
        </div>
        <!-- /.col -->



    </div>
    <!-- /.container-fluid -->
</section>
@endsection
