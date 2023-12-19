@extends('../template')

@section('titre')
    Les UES
@endsection

@section('contenu')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Liste de Toutes les UE</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="UE" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Identifiant</th>
                                        <th>Libelle</th>
                                        <th>Classe</th>
                                        <th colspan='3'>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($UES as $UE)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $UE->libelle }}</td>
                                            <td>{{ $UE->classe->libelle }}</td>

                                            {{-- <td class="col-1">
                                                <!-- Lien pour afficher un UE : "UEs.show" -->
                                                <a class="btn btn-info bi bi-info-square" href="{{ route('UES.show', $UE) }}"
                                                    title="Détails"></a>
                                            </td> --}}
                                            <td class="col-1">
                                                <!-- Lien pour editer un UE : "UEs.edit" -->
                                                <a class="btn btn-primary bi bi-pencil-square" href="{{ route('UES.edit', $UE) }}"
                                                    title="Modifier"></a>
                                            </td>
                                            <td class="col-1">
                                                <!-- Formulaire pour supprimer un UE : "UEs.destroy" -->
                                                <form method="POST" action="{{ route('UES.destroy', $UE) }}">
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
