@extends('../template')

@section('titre')
    Modifier une Classe
@endsection

@section('contenu')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 offset-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title fs-3 fw-bold">Modifier la Classe</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                            <form method="POST" action="{{ route('classes.update', $classe) }}">
                                @csrf
                                @method('PUT')
                                <div class="my-3">
                                    <label for="libelle" class="label-form">libelle:</label>
                                    <input type="text" class="form-control" name="libelle" value="{{ $classe->libelle }}" required>
                                </div>
                                <div class="my-3">
                                    <label for="idFormation" class="label-form">Formation:</label>
                                    <select name="idFormation" id="idFormation" class="w-100">
                                        @foreach ($formations as $formation)
                                            <option value="{{ $formation->id }}" {{ $formation->id == $classe->idFormation ? 'selected' : '' }}>
                                                {{ $formation->libelle }}</option>
                                        @endforeach
                                    </select>
                        
                                </div>
                                <div class="col-12 my-3">
                                    <a class="btn btn-danger w-25" href="{{ route('classes.index') }}" title="Détails">Annuler</a>
                                    <button type="submit" class="btn btn-success w-25">Modifier</button>
                                </div>

                            </form>
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
