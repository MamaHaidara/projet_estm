@extends('../template')

@section('titre')
    Faire une evaluation
@endsection

@section('contenu')
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-8  offset-2">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title fw-bold fs-3">Faire une evaluation</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form method="POST" action="{{ route('evaluers.store') }}">
                                    @csrf

                                    <div class="col-12 my-2">
                                        <label for="idEC">EC:</label>

                                        <select name="idEC" class="w-50">
                                            <option value=""></option>
                                            @foreach ($ECS as $EC)
                                                <option value="{{ $EC->id }}" >
                                                    {{ $EC->libelle }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12 my-2">
                                        <label for="idEtudiant">Etudiant:</label>

                                        <select name="idEtudiant" class="w-50">
                                            <option value=""></option>
                                            @foreach ($utilisateurs as $utilisateur)
                                                <option value="{{ $utilisateur->id }}" >
                                                    {{ $utilisateur->prenom }} {{ $utilisateur->nom}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12 my-2">
                                        <label for="pointsForts">Points Forts:</label>
                                        <input type="text" class="form-control" name="pointsForts" required>
                                    </div>
                                     <div class="col-12 my-2">
                                        <label for="pointsFaibles">Points Faibles:</label>
                                        <input type="text" class="form-control" name="pointsFaibles"  required>
                                    </div>
                                     <div class="col-12 my-2">
                                        <label for="note">Note:</label>
                                        <input type="text" class="form-control" name="note" required>
                                    </div>
                                     <div class="col-12 my-2">
                                        <label for="date">Date</label>
                                        <input type="date" class="form-control" name="date" required>
                                    </div>
                                

                                    <div class="col-12 my-2">
                                        <a class="btn btn-danger" href="{{ route('evaluers.index') }}" title="Détails">Retour</a>
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
