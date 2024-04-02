@extends('admin.base-admin')
@section('content')

    <div class="container mt-5">
    <form method="post" action="" class="needs-validation" novalidate>
    @csrf
        <div class="mb-3">
            <label for="titre" class="form-label">Titre :</label>
            <input type="text" value="{{$actualite->titre}}" class="form-control" id="titre" name="titre" required>
        </div>
        <div class="mb-3">
            <label for="contenu" class="form-label">Contenu :</label>
            <textarea type="text" value="{{$actualite->contenu}}" class="form-control" id="contenu" name="contenu" required>{{$actualite->contenu}}</textarea>
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Date :</label>
            <input type="date" value="{{$actualite->date}}" class="form-control" id="date" name="date" required>
        </div>
        <div class="mb-3">
            <label for="ville" class="form-label">Ville :</label>
            <input type="text" value="{{$actualite->ville}}" class="form-control" id="ville" name="ville" required>
        </div>
        <div class="mb-3">
            <label for="adresse" class="form-label">Adresse :</label>
            <input type="text" value="{{$actualite->adresse}}" class="form-control" id="adresse" name="adresse" required>
        </div>
        <div class="mb-3">
            <label for="lieu" class="form-label">Lieu :</label>
            <input type="text" value="{{$actualite->lieu}}" class="form-control" id="lieu" name="lieu" required>
        </div>
        <div class="mb-3">
            <label for="nbInscrit" class="form-label">Nombre d'inscrit :</label>
            <input type="number" value="{{$actualite->nombre_inscrit}}" class="form-control" id="nbInscrit" name="nbInscrit" required>
        </div>
        <div class="mb-3">
            <label for="nbParticipant" class="form-label">Nombre de participant :</label>
            <input type="number" value="{{$actualite->nombre_participant}}" class="form-control" id="nbParticipant" name="nbParticipant" required>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" value="1" {{ $actualite->is_visible ? 'checked' : '' }} class="form-check-input" id="est_termine" name="est_termine">
            <label class="form-check-label" for="est_termine">Terminée ?</label>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const textarea = document.getElementById('contenu');
    textarea.addEventListener('input', autoResize, false);

    function autoResize() {
        this.style.height = 'auto';
        this.style.height = (this.scrollHeight + 2) + 'px';
    }
});
</script>

 @stop