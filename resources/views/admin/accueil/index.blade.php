@extends('admin.base-admin')
@section('content')


<link href="bureau.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<body>
    <div class="modal fade" id="exempleModale" tabindex="-1" aria-labelledby="exempleModale" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Ajouter un adhérent</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('admin.bureau.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="edit_nom">Nom</label>
                            <input type="text" class="form-control" id="edit_nom" name="nom">
                        </div>
                        <div class="form-group">
                            <label for="edit_prenom">Prénom</label>
                            <input type="text" class="form-control" id="edit_prenom" name="prenom">
                        </div>
                        <div class="form-group">
                            <label for="edit_role">Rôle</label>
                            <select class="form-control" id="edit_role" name="role">
                                <option value="Président">Président</option>
                                <option value="Bénévole">Bénévole</option>
                                <option value="yepyep">Yepyep</option>
                            </select>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary" style="background-color: #16A64C;">Enregistrer</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                
                <th scope="col"></th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Rôle</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach($personalbureau as $b)
            <tr>
                <th scope="col"></th>
                <td>{{$b->nom}}</td>
                <td>{{$b->prenom}}</td>
                <td>{{$b->role}}</td>
                <td>
                    <button type="button" class="bi-pencil-square" style="background-color: white;color:blue; border: 0px solid;" data-toggle="modal" data-target="#editModal{{$b['id']}}"></button>
                </td>
                <td>
                    <button type="button" class="bi-trash3" style="background-color: white;color:red; border: 0px solid ;" data-toggle="modal" data-target="#deleteModal{{$b['id']}}"></button>
                </td>
                <div class="modal fade" id="deleteModal{{$b['id']}}" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Supprimer un adhérent</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Êtes-vous sûr de vouloir supprimer cet adhérent ?
                            </div>
                            <div class="modal-footer">
                                <form action="{{ route('admin.bureau.destroy', $b['id']) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="editModal{{$b['id']}}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel">Modifier un adhérent</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div> 
                            <div class="modal-body">
                                <form action="{{ route('admin.bureau.update', $b['id']) }}" method="post">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="edit_nom">Nom</label>
                                        <input type="text" class="form-control" id="edit_nom" name="nom" value="{{ $b->nom }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="edit_prenom">Prénom</label>
                                        <input type="text" class="form-control" id="edit_prenom" name="prenom" value="{{ $b->prenom }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="edit_role">Rôle</label>
                                        <select class="form-control" id="edit_role" name="role">
                                            <option value="Président" {{ $b->role == 1 ? 'selected' : '' }}>Président</option>
                                            <option value="Bénévole" {{ $b->role == 2 ? 'selected' : '' }}>Bénévole</option>
                                            <option value="yepyep" {{ $b->role == 3 ? 'selected' : '' }}>Yepyep</option>
                                        </select>
                                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-primary" style="background-color: #16A64C;">Enregistrer</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </tr>
            @endforeach
        </tbody>
    </table>

    <td>
        <button type="button" class="bi-plus-circle-fill" style="background-color: white;color:#16A64C; border: 2px solid ; border-radius: 50px;" data-toggle="modal" data-target="#exempleModale"> Ajouter un adhérent</button>
    </td>

</body>
@stop

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

