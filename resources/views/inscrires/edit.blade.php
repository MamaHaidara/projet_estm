@extends('../template')

@section('titre')
    Modifier une inscription
@endsection

@section('contenu')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Modifier une inscription</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form method="POST" action="{{ route('inscrires.update', $inscrire) }}">
                            @csrf
                            @method('PUT')
                        
                            <div class="my-2">
                                <label for="idEtudiant" class="label-form">Etudiant</label>
                                <select name="idEtudiant" id="idEtudiant" class="w-100">
                                    @foreach ($utilisateurs as $utilisateur)
                                        <option value="{{ $utilisateur->id }}">{{ $utilisateur->nom }} {{$utilisateur->prenom}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        
                           <div class="my-2">
                                <label for="idClasse" class="label-form">Classe</label>
                                <select name="idClasse" id="idClasse" class="w-100">
                                    @foreach ($classes as $classe)
                                        <option value="{{ $classe->id }}">{{ $classe->libelle }}
                                        </option>
                                    @endforeach
                                </select>
                           </div>
                           <div class="my-2">
                                <label for="idClasse" class="label-form">Année</label>
                                <input type="year" class="form-control" name="annee" value="{{$inscrire->annee }}">
                           </div>
                       
                            <div class="my-2 align-content-center">
                                <a class="btn btn-danger" href="{{ route('inscrires.index') }}" title="Détails">Retour</a>
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

        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</section>
                    
@endsection
