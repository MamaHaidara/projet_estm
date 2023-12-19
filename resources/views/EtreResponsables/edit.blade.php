@extends('../template')

@section('titre')
    Modifier un Responsable
@endsection

@section('contenu')
    
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title fw-bold fs-3">Modifier Responsable</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form method="POST" action="{{ route('EtreResponsables.update', $EtreResponsable) }}">
                                    @csrf
                                    @method('PUT')
                                     <div class="my-3">
                                        <label for="idEnseignant" class="form-label"> Nom du Responsable</label>
                                        <select name="idEnseignant" id="idEnseignant" class="w-100">
                                            @foreach ($utilisateurs as $utilisateur)
                                                <option value="{{ $utilisateur->id }}">{{ $utilisateur->nom }}  {{$utilisateur->prenom}}
                                                </option>
                                            @endforeach
                                        </select>

                                     </div>
                                     <div class="my-3">
                                        <label for="idFormation" class="form-label">Formation</label>
                                        <select name="idFormation" id="idFormation" class="w-100">
                                            @foreach ($formations as $formation)
                                                <option value="{{ $formation->id }}">{{ $formation->libelle }}
                                                </option>
                                            @endforeach
                                        </select>
                                     </div>

                                     <div class="my-3">
                                        <label for="annee" class="form-label">Année</label>
                                        <input type="year" class="form-control" name="annee" id="annee" value="{{ $EtreResponsable->annee }}" required>
                                     </div>
                                     <div class="my-3">
                                        <a class="btn btn-danger" href="{{ route('EtreResponsables.index') }}" title="Détails">Retour</a>
                                        <button type="submit" class="btn btn-success">Modifier</button>
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

                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
@endsection
