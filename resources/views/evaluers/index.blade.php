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
                            <h3 class="card-title">Liste de Toutes les évaluations</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="evaluer" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>EC</th>
                                        <th>Etudiant</th>
                                        <th>Points Forts</th>
                                        <th>Points Faibles</th>
                                        <th>Note</th>
                                        <th>Date</th>
                                        <th colspan='3'>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($evaluers as $evaluer)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $evaluer->EC->libelle }}</td>
                                            <td>{{ $evaluer->utilisateur->prenom }} {{ $evaluer->utilisateur->nom }}</td>
                                            <td>{{ $evaluer->pointsForts }}</td>
                                            <td>{{ $evaluer->pointsFaibles }}</td>
                                            <td>{{ $evaluer->note }}</td>
                                            <td>{{ $evaluer->date }}</td>


                                            {{-- <td class="col-1">
                                                <!-- Lien pour afficher un evaluer : "evaluers.show" -->
                                                <a class="btn btn-info bi bi-info-square" href="{{ route('evaluers.show', $evaluer) }}"
                                                    title="Détails"></a>
                                            </td> --}}
                                            <td class="col-1">
                                                <!-- Lien pour editer un evaluer : "evaluers.edit" -->
                                                <a class="btn btn-primary bi bi-pencil-square" href="{{ route('evaluers.edit', $evaluer) }}"
                                                data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Editer"
                                                    title="Modifier"></a>
                                                
                                            </td>
                                            <td class="col-1">
                                                <!-- Formulaire pour supprimer un evaluer : "evaluers.destroy" -->
                                                <form method="POST" action="{{ route('evaluers.destroy', $evaluer) }}">
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
