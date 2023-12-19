@extends('../template')

@section('titre')
    Les classes
@endsection

@section('contenu')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-7 offset-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class=" text-center">Liste de toutes les classes</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="Classe" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Identifiants</th>
                                        <th>Libelle</th>
                                        <th>Formations</th>
                                        <th colspan='3'>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($classes as $classe)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $classe->libelle }}</td>
                                            <td>{{ isset($classe->formation->libelle) ? $classe->formation->libelle : "N/A"}}</td>

                                            {{-- <td class="col-1">
                                                <!-- Lien pour afficher un Classe : "classes.show" -->
                                                <a class="btn btn-info" href="{{ route('classes.show', $classe) }}"
                                                    title="Détails">DETAILS</a>
                                            </td> --}}
                                            <td class="col-1">
                                                <!-- Lien pour editer un Classe : "classes.edit" -->
                                                <a class="btn btn-primary bi bi-pencil-square" href="{{ route('classes.edit', $classe) }}"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Modifier"
                                                title="Modifier"></a>
                                            </td>
                                            <td class="col-1">
                                                <!-- Formulaire pour supprimer un Classe : "classes.destroy" -->
                                                <form method="POST" action="{{ route('classes.destroy', $classe) }}">
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
