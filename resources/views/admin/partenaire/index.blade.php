@extends('admin.base-admin')
@section('content')
<h2 class='text-uppercase text-center text-primary text-decoration-underline fw-bold'>nos partenaires</h2>
<table class="table table-striped mt-3">
    <thead>
        <tr>
            <th>Nom</th>
            <th>Logo</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($partenaires as $partenaire )
            <tr>
                <td class="d-bloc align-items-center h-100" >
                    <form class='d-flex align-items-center' action={{route('admin.modifNomPartenaire', $partenaire->id)}} method="post">
                        @csrf
                        <input class="form-control form-control-sm w-50"  type="text" name='nom' aria-label=".form-control-sm example" value="{{$partenaire->nom}}" >
                        <button class="btn btn-primary mt-1 ms-3" type="submit">Valider</button>
                    </form>
                </td>
                <td  >
                    <button type="button" class="btn btn-light d-flex align-items-center justify-content-center" data-bs-toggle="modal" data-bs-target="#editLogo{{$partenaire->id}}">
                    {{-- <p>{{count($mediatheques)}}</p> --}}
                        {{-- @foreach ( $mediatheques as $media )
                            @if ($media->id == $partenaire->mediatheque_id)
                                @if($media->lien == "undefined") <image class="rounded-circle me-1" src="{{asset('/images/profil.svg')}}" width="38" height="38"/>
                                @else <image class="rounded-circle me-1" src="{{storage_path() . $media->lien}}" width="38" height="38"/>  
                            @else
                            @endif
                        @endforeach --}}
                        @if($partenaire->mediatheque == null || $partenaire->mediatheque->lien == null) <image class="rounded-circle me-1" src="{{asset('/images/profil.svg')}}" width="38" height="38"/>
                        {{-- @else <image class="rounded-circle me-1" src="{{storage_path() . $partenaire->mediatheque->lien}}" width="38" height="38"/> --}}
                        @else <image class="rounded-circle me-1" src="{{Storage::url($partenaire->mediatheque->lien)}}" width="38" height="38"/>
                        @endif
                    </button>
                </td>
                <td  >
                    <a class="link-underline-opacity-0 text-decoration-none d-inline-block" href={{route('admin.showPartenaire', $partenaire['id'])}}>
                        <img src="{{asset('/images/modifProfil.svg')}}" width="38" height="38"/>
                    </a>
                </td >
                <td >
                    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#supprimerPartenaire{{$partenaire->id}}">
                        <img src="{{asset('/images/corbeille.svg')}}" width="38" height="38"/>
                    </button>
                </td>
            </tr>
            <div class="modal" id='supprimerPartenaire{{$partenaire->id}}' tabindex="-1">
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
            <div class="modal fade" id='editLogo{{$partenaire->id}}' tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modifier le logo de {{$partenaire["nom"]}}</h5> 
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{ route('admin.saveImage') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="partenaire_id" value="{{ $partenaire->id }}">
                            <div class="modal-body form-group">
                                <label for="image">Sélectionner une image :</label>
                                <input type="file" class="form-control" name="image" >
                                
                            </div>
                            <div class="modal-footer form-group">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-primary form-control">Sauvegarder</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach 
    </tbody>
</table>

<span class=" badge bg-primary-subtle flex-direction-column text-primary-emphasis -flex align-items-center p-1 pe-2 border border-primary-subtle rounded-pill">
    <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#ajouterPartenaire">                
        <image class="me-1" src="{{asset('/images/plus.svg')}}" width="38" height="38"/>
        Ajouter un partenaire
    </button>
</span>
<div class="modal" id='ajouterPartenaire' tabindex="-1">
    <div class="modal-dialog">
        <form action={{route('admin.addPartenaire')}} method='post'>
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajouter un partenaire</h5> 
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @csrf
                <input class="form-control form-control-sm" type="text" name='nom' placeholder="Nom du partenaire" aria-label=".form-control-sm example">
                <textarea name='description'placeholder="Description du partenaire" class="form-control h-auto mt-1" id="floatingTextarea" rows="3"></textarea>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="submit" class="btn btn-primary" > Créer le partenaire </button>        </div>
            </div>
        </form>
    </div>
</div>
@stop
