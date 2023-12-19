@extends('../template')

@section('titre')
    Créer un EC
@endsection

@section('contenu')
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Creer un EC</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form method="POST" action="{{ route('ECS.store') }}">
                                    @csrf
                                    <div class="col-12 my-2">
                                        <label for="">Nom EC</label>
                                        <input type="text" class="form-control" name="libelle" required>
                                    </div> 
                                    <div class="col-12 my-2">
                                        <label for="idUE">UES</label>
                                        <select name="idUE" class="w-100">
                                            @foreach ($UES as $UE)
                                                <option value="{{ $UE->id }}">{{ $UE->libelle }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12 my-2">
                                        <a class="btn btn-danger" href="{{ route('ECS.index') }}" title="Détails">Retour</a>
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

            </div>
            <!-- /.container-fluid -->
        </section>


@endsection
