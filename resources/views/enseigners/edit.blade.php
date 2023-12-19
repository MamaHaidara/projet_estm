@extends('../template')

@section('titre')
    Modifier un enseignement
@endsection

@section('contenu')
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title fw-bold fs-3">Modifier un enseignement</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form method="POST" action="{{ route('enseigners.update', $enseigner) }}">
                                    @csrf
                                    @method('PUT')
                                    <div class="col-12 my-2">
                                        <label for="idEc" class="label-form">Nom EC</label>
                                        <select name="idEC" class="w-100">
                                            @foreach ($ECS as $EC)
                                                <option value="{{ $EC->id }}">{{ $EC->libelle }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-12 my-2">
                                        <label id="idEnseignant" class="form-label">Enseignant</label>
                                        <select name="idEnseignant" class="w-100">
                                            @foreach ($utilisateurs as $utilisateur)
                                                <option value="{{ $utilisateur->id }}">{{ $utilisateur->nom }} {{ $utilisateur->prenom}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                    
                                    <div class="col-12 my-2">
                                        <input type="year" class="form-control" name="annee" value="{{ $enseigner->annee }}" required>
                                    </div>
                                    <div class="col-12 my-2">
                                        <a class="btn btn-danger" href="{{ route('enseigners.index') }}" title="Détails">Retour</a>
                                        <button type="submit" class="btn btn-success" >Modifier</button>                                
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                    </div>
                </div>
                <!-- /.col -->

                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
@endsection
