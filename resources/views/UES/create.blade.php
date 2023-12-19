@extends('../template')

@section('titre')
    Créer une UE
@endsection

@section('contenu')
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 offset-3">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="card-title fw-bold">Creer une UE</h2>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form method="POST" action="{{ route('UES.store') }}">
                                    @csrf
                            
                                    <div class="col-12 my-2">
                                        <label for="libelle" class="label-form">Libelle</label>
                                        <input type="text" class="form-control" name="libelle" required>
                                    </div>
                                    <div class="col-12 my-2">
                                        <label for="idClasse" class="w-25"> Classe</label>
                                        <select name="idClasse" class="w-75">
                                            @foreach ($classes as $classe)
                                                <option value="{{ $classe->id }}">{{ $classe->libelle }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-12 my-2">
                                        <a class="btn btn-danger" href="{{ route('UES.index') }}" title="Détails">Retour</a>
                                        <button type="submit" class="btn btn-success">Créer</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.col -->
                
            </div>
            <!-- /.container-fluid -->
        </section>


@endsection
