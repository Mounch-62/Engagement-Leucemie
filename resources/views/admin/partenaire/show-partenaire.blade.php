@extends('admin.base-admin')
@section('content')
<div class='d-flex align-items-center justify-content-center position-relative'>
    <h2 class='text-uppercase text-center text-primary fw-bold text-decoration-underline' style='padding-right: 20px'>{{$partenaire["nom"]}}</h2>
    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#supprimerPartenaire">
        <img src="../../../public/images/corbeille.svg" width="50px" height="50px"/>
    </button>
</div>
<div class="modal" id='supprimerPartenaire' tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Supprimer le partenaire {{$partenaire["nom"]}}</h5> 
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Êtes-vous sûr de vouloir supprimer le partenaire {{$partenaire["nom"]}}</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
            <form action={{route('admin.deletePartenaire', $partenaire->id)}} method='post'> @csrf @method('delete')<button type="submit" class="btn btn-primary" > Supprimer </button> </form>
        </div>
        </div>
    </div>
</div>
<form method="POST" action={{route('admin.editPartenaire', $partenaire['id'])}}>
    <div class="form-floating"> 
        <textarea name='description' class="form-control h-auto" id="floatingTextarea" rows="5">{{$partenaire['description']}} </textarea>
        <label for="floatingTextarea">Description</label>
        <button class="btn btn-primary mt-1" type="submit">Valider les modifications</button>
        @csrf
    </div>
</form>
  
<table class="table table-striped mt-3">
    <thead>
        <th>Nom</th>
        <th>Lien</th>
        <th >Tester le lien</th>
        <th>Supprimer</th>
    </thead>
    <tbody>
    @foreach ($liens as $lien )
        <tr>
            <form method="post" action={{route('admin.editLink', [$lien['id'], $partenaire['id']])}}>
            @csrf
            <td>{{$lien->nom}}</td>
            <td class='d-flex align-items-center'><input class="form-control form-control-sm w-50" type="text" name='lien' aria-label=".form-control-sm example" value={{$lien->lien}}><button class="btn btn-primary mt-1 ms-3" type="submit">Valider</button>
            </form></td>
            <td>
                <a href={{$lien->lien}} target='_blank' class="link-underline-opacity-0 text-decoration-none d-inline-block">
                    <img src="../../../public/images/lien.svg" width="30px" height="30px"/>
                </a>
            </td>
            <td >
            <div class="modal" id='supprimerLien{{$lien->id}}' tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Supprimer le lien {{$lien["nom"]}}</h5> 
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Êtes-vous sûr de vouloir supprimer le lien {{$lien["nom"]}}</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <form action={{route('admin.deleteLink', [$lien->id, $partenaire->id])}} method='post'> @csrf @method('delete')<button type="submit" class="btn btn-primary" > Supprimer </button> </form>
                    </div>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#supprimerLien{{$lien->id}}">
                <img src="../../../public/images/corbeille.svg" width="30px" height="30px"/>
            </button>

            </td>
             
        </tr>
    </tbody>
    @endforeach
    {{-- <div class='listPartenaires mt-4 d-flex flex-column ' >
        @foreach ($liens as $lien )
            <span style="width:fit-content" class=" badge bg-primary-subtle flex-direction-column text-primary-emphasis -flex align-items-center p-1 pe-2 border border-primary-subtle rounded-pill mb-3">
                {{$lien['lien']}}
               
                <a href={{route('admin.editLink', $lien['id'])}} class="link-underline-opacity-0 text-decoration-none d-inline-block">
                    <img src="../../../public/images/lien.svg" width="30px" height="30px"/>
                </a> 
            </span> 
        @endforeach
            <span style="width:fit-content" class="badge bg-primary-subtle flex-direction-column text-primary-emphasis -flex align-items-center p-1 pe-2 border border-primary-subtle rounded-pill mb-3">
                <a class="link-underline-opacity-0 text-decoration-none d-inline-block" href={{route('admin.addLink', [$partenaire['id']])}}>
                    <image class="me-1" src="../../../public/images/plus.svg" width="38" height="38"/>
                    Ajouter un lien
                </a>
            </span>
    </div> --}}
</table>
<span class=" badge bg-primary-subtle flex-direction-column text-primary-emphasis -flex align-items-center p-1 pe-2 border border-primary-subtle rounded-pill">
    <button class="btn" data-bs-toggle="modal" data-bs-target="#ajouterLien">
          <image class="me-1" src="../../../public/images/plus.svg" width="38" height="38"/>
        Ajouter un lien
    </button>
</span>

<div class="modal" id='ajouterLien' tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Ajouter un lien</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action={{route('admin.addLink', $partenaire->id)}}>
            <div class="modal-body">
                <input class="form-control form-control-sm" type="text" name='nom' placeholder="Nom du lien" aria-label=".form-control-sm example">
                <input class="form-control form-control-sm mt-1" type="text" name='lien' placeholder="Contenu du lien" aria-label=".form-control-sm example">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary" > Créer le lien </button>
            </div>
            </div>
        </form>
    </div>
</div>
@stop