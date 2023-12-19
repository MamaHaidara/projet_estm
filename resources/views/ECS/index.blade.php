@extends('../template')

@section('titre')
    Les ECS
@endsection

@section('contenu')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 offset-3">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title fw-bold">Liste de Tous les ECS</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="EC" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Identifiant</th>
                                        <th>EC</th>
                                        <th>UE</th>
                                        <th colspan='3'>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ECS as $EC)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $EC->libelle }}</td>
                                            <td>{{ $EC->UE->libelle }}</td>

                                            {{-- <td class="col-1">
                                                <!-- Lien pour afficher un EC : "ECs.show" -->
                                                <a class="btn btn-info bi bi-info-square" href="{{ route('ECS.show', $EC) }}"
                                                    title="Détails"></a>
                                            </td> --}}
                                            <td class="col-1">
                                                <!-- Lien pour editer un EC : "ECs.edit" -->
                                                <a class="btn btn-primary bi bi-pencil-square" href="{{ route('ECS.edit', $EC) }}"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Modifier"
                                                    title="Modifier"></a>
                                            </td>
                                            <td class="col-1">
                                                <!-- Formulaire pour supprimer un EC : "ECs.destroy" -->
                                                <form method="POST" action="{{ route('ECS.destroy', $EC) }}">
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
