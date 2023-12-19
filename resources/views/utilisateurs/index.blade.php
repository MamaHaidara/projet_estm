@extends('../template')

@section('titre')
    Les utilisateurs
@endsection

@section('contenu')

    <!-- Main content -->
    <section class="content col-8 offset-2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="fw-bold fs-4   text-center">Liste de Toutes les utilisateurs</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="utilisateur" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Identifiant</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        {{-- <th>Login</th>
                                        <th>profil</th> --}}
                                        <th colspan='3'>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($utilisateurs as $utilisateur)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ $utilisateur->nom }}</td>
                                            <td>{{ $utilisateur->prenom }}</td>
                                            {{-- Pas trop pertinant pour être afficher --}}
                                            {{-- <td>{{ $utilisateur->login }}</td> --}}
                                            {{-- <td>{{ $utilisateur->profil }}</td> --}}

                                            <td class="col-1">
                                                <!-- Lien pour afficher un utilisateur : "utilisateurs.show" -->
                                                <a class="btn btn-info bi bi-info-square"
                                                    data-bs-toggle="tooltip" data-bs-placement="left"
                                                    data-bs-title="Détails"
                                                    href="{{ route('utilisateurs.show', $utilisateur) }}"
                                                    title="Détails"></a>
                                            </td>
                                            <td class="col-1">
                                                <!-- Lien pour editer un utilisateur : "utilisateurs.edit" -->
                                                <a class="btn btn btn-success  bi bi-pencil-square"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                data-bs-title="Modifier"
                                                    href="{{ route('utilisateurs.edit', $utilisateur) }}"
                                                    title="Modifier"></a>
                                            </td>
                                            <td class="col-1">
                                                <!-- Formulaire pour supprimer un utilisateur : "utilisateurs.destroy" -->
                                                <form method="POST"
                                                    action="{{ route('utilisateurs.destroy', $utilisateur) }}">
                                                    <!-- CSRF token -->
                                                    @csrf
                                                    <!-- <input type="hidden" name="_method" value="DELETE"> -->
                                                    @method('DELETE')
                                                    <button type="submit" class="bi bi-trash btn btn-danger"
                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                    data-bs-title="Supprimer"
                                                    ></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
