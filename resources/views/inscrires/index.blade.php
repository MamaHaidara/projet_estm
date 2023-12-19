@extends('../template')

@section('titre')
    Les Inscriptions
@endsection

@section('contenu')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title text-center fw-bold fs-3">Liste de Toutes les Inscriptions</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="inscrire" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Identifiant</th>
                                        <th>Etudiant</th>
                                        <th>Classe</th>
                                        <th>Annee</th>
                                        <th colspan='3'>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($inscrires as $inscrire)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $inscrire->utilisateur->nom  }} {{ $inscrire->utilisateur->prenom  }}</td>
                                            <td>{{ $inscrire->classe->libelle }} </td>
                                            <td>{{ $inscrire->annee }}</td>
                                            <td class="col-1">
                                                <!-- Lien pour afficher un inscrire : "inscrires.show" -->
                                                <a class="btn btn-info bi bi-info-square" href="{{ route('inscrires.show', $inscrire) }}"
                                                    title="Détails"></a>
                                            </td>
                                            <td class="col-1">
                                                <!-- Lien pour editer un inscrire : "inscrires.edit" -->
                                                <a class="btn btn-primary bi bi-pencil-square" href="{{ route('inscrires.edit', $inscrire) }}"
                                                    title="Modifier"></a>
                                            </td>
                                            <td class="col-1">
                                                <!-- Formulaire pour supprimer un inscrire : "inscrires.destroy" -->
                                                <form method="POST" action="{{ route('inscrires.destroy', $inscrire) }}">
                                                    <!-- CSRF token -->
                                                    @csrf
                                                    <!-- <input type="hidden" name="_method" value="DELETE"> -->
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger bi bi-trash"></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
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
    <!-- /.content -->
@endsection
