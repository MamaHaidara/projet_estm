@extends('../template')



@section('contenu')
    <h1>Détail de {{ $EC->libelle }}</h1>

    @csrf


    <div class="card-body">
        <table id="EC" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Identifiant</th>
                    <th>EC</th>
                    <th>UE</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $EC->id }}</td>
                    <td>{{ $EC->libelle }}</td>
                    <td>{{ $EC->UE->libelle }}</td>

                </tr>
            </tbody>

        </table>
        <a class="btn btn-outline-danger" href="{{ route('ECS.index') }}" title="Détails">Retour</a>
    </div>
@endsection
