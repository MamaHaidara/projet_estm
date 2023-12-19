@extends('../template')

@section('titre')
    Les Enseignements
@endsection

@section('contenu')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title fw-bold fs-3">Liste de Tous les enseignements</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="enseigner" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Identifiant</th>
                                        <th>Enseignant</th>
                                        <th>EC</th>
                                        <th>Annee</th>
                                        <th colspan='3'>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($enseigners as $enseigner)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $enseigner->utilisateur->login }}</td>
                                            <td>{{ $enseigner->EC->libelle }} </td>
                                            <td>{{ $enseigner->annee }}</td>
                                            <td class="col-1">
                                                <!-- Lien pour afficher un enseigner : "enseigners.show" -->
                                                <a class="btn btn-info bi bi-info-square" href="{{ route('enseigners.show', $enseigner) }}"
                                                data-bs-toggle="tooltip" data-bs-title="Détails" data-bs-placement="top"
                                                    title="Détails"></a>
                                            </td>
                                            <td class="col-1">
                                                <!-- Lien pour editer un enseigner : "enseigners.edit" -->
                                                <a class="btn btn-primary bi bi-pencil-square" href="{{ route('enseigners.edit', $enseigner) }}"
                                                data-bs-toggle="tooltip" data-bs-title="Modifier" data-bs-placement="top"
                                                    title="Modifier"></a>
                                            </td>
                                            <td class="col-1">
                                                <!-- Formulaire pour supprimer un enseigner : "enseigners.destroy" -->
                                                <form method="POST" action="{{ route('enseigners.destroy', $enseigner) }}">
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
