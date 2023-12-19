@extends('../template')

@section('titre')
    Les Evaluations
@endsection

@section('contenu')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title fw-bold fs-3">Liste de Toutes les évaluations</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="EtreResponsable" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Enseignant</th>
                                        <th>Formation</th>
                                        <th>Annee</th>
                                        <th colspan='3'>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($EtreResponsables as $EtreResponsable)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $EtreResponsable->utilisateur->nom }} {{ $EtreResponsable->utilisateur->prenom}}</td>
                                            <td>{{ $EtreResponsable->formation->libelle }} </td>
                                            <td>{{ $EtreResponsable->annee }}</td>
                                            <td class="col-1">
                                                <!-- Lien pour afficher un EtreResponsable : "EtreResponsables.show" -->
                                                <a class="btn btn-info bi bi-info-square" href="{{ route('EtreResponsables.show', $EtreResponsable) }}"
                                                    data-bs-toggle="tooltip" data-bs-title="Détails" data-bs-placement="top"
                                                    title="Détails"></a>
                                            </td>
                                            <td class="col-1">
                                                <!-- Lien pour editer un EtreResponsable : "EtreResponsables.edit" -->
                                                <a class="btn btn-primary bi bi-pencil-square" href="{{ route('EtreResponsables.edit', $EtreResponsable) }}"
                                                data-bs-toggle="tooltip" data-bs-title="Modifer" data-bs-placement="top"
                                                    title="Modifier"></a>
                                            </td>
                                            <td class="col-1">
                                                <!-- Formulaire pour supprimer un EtreResponsable : "EtreResponsables.destroy" -->
                                                <form method="POST" action="{{ route('EtreResponsables.destroy', $EtreResponsable) }}">
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
