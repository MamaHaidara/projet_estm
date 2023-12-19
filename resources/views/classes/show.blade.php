@extends('../template')



@section('contenu')
    <h1>Détail de {{ $classe->libelle }}</h1>

    @csrf


    <div class="card-body">
        <table id="classe" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Identifiant</th>
                    <th>Libelle</th>
                    <th>Formation</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $classe->id }}</td>
                    <td>{{ $classe->libelle }}</td>
                    <td>{{ $classe->formation->libelle }}</td>

                </tr>
            </tbody>

        </table>
        <a class="btn btn-outline-danger" href="{{ route('classes.index') }}" title="Détails">Retour</a>
    </div>
@endsection
