@extends('../template')



@section('contenu')
    <h1>Détail de {{ $UE->libelle }}</h1>

    @csrf


    <div class="card-body">
        <table id="UE" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Identifiant</th>
                    <th>Libelle</th>
                    <th>Classe</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $UE->id }}</td>
                    <td>{{ $UE->libelle }}</td>
                    <td>{{ $UE->classe->libelle }}</td>

                </tr>
            </tbody>

        </table>
        <a class="btn btn-outline-danger" href="{{ route('UES.index') }}" title="Détails">Retour</a>
    </div>
@endsection
