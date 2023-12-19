@extends('../template')



@section('contenu')
    <h1>Détail de {{ $evaluer->libelle }}</h1>

    @csrf


    <div class="card-body">
        <table id="evaluer" class="table table-bordered table-hover">
            <thead>
             <tr>
                <th>Identifiant</th>
                <th>EC</th>
                <th>Etudiant</th>
                <th>Points Forts</th>
                <th>Points Faibles</th>
                <th>Note</th>
                <th>Date</th>

            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $evaluer->id }}</td>
                    <td>{{ $evaluer->EC->libelle }}</td>
                    <td>{{ $evaluer->utilisateur->prenom }} {{ $evaluer->utilisateur->nom }}</td>
                    <td>{{ $evaluer->pointsForts }}</td>
                    <td>{{ $evaluer->pointsFaibles }}</td>
                    <td>{{ $evaluer->note }}</td>
                    <td>{{ $evaluer->date }}</td>

                </tr>
            </tbody>

        </table>
        <a class="btn btn-outline-danger" href="{{ route('evaluers.index') }}" title="Détails">Retour</a>
    </div>
@endsection
