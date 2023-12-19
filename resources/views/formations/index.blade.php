@extends('../template')

@section('titre')
    Les Formations
@endsection

@section('contenu')

    <!-- Main content -->
    <section class="content col-8 offset-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="fw-bold fs-4   text-center">Liste de Toutes les informations</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="formation" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Identifiant</th>
                                        <th>Libelle</th>
                                        <th colspan='3'>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($formations as $formation)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $formation->libelle }}</td>
                                            <td class="col-1">
                                                <!-- Lien pour afficher un formation : "formations.show" -->
                                                <a class="btn btn-info bi bi-info-square" href="{{ route('formations.show', $formation) }}"
                                                data-bs-toggle="tooltip" data-bs-title="Détails" data-bs-placement="top" 
                                                    title="Détails"></a>
                                            </td>
                                            <td class="col-1">
                                                <!-- Lien pour editer un formation : "formations.edit" -->
                                                <a class="btn btn-primary bi bi-pencil-square" href="{{ route('formations.edit', $formation) }}"
                                                data-bs-toggle="tooltip" data-bs-title="Editer" data-bs-placement="top" 
                                                    title="Modifier"></a>
                                            </td>
                                            <td class="col-1">
                                                <!-- Formulaire pour supprimer un formation : "formations.destroy" -->
                                                <form method="POST" action="{{ route('formations.destroy', $formation) }}">
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
