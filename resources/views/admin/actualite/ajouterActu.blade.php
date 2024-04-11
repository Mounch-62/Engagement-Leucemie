@extends('admin.base-admin')
@section('content')

    <div class="container mt-5">
        <form method="post" action="{{ route('actualite.store')}}" class="needs-validation" novalidate>
        @csrf
        <div class="d-flex">
            <div class="mb-3 col-6">
                <label for="titre" class="form-label">Titre :</label>
                <input type="text" value="{{old('titre')}}" class="form-control" id="titre" name="titre" required >
                    @error('titre')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            <div class="mb-3 col-6">
                <label for="date" class="form-label">Date :</label>
                <input type="date" value="{{old('date')}}" class="form-control" id="date" name="date" required>
                    @error('date')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
        </div>
            <div class="mb-3 col-1">
                <label for="contenu" class="form-label">Contenu :</label>
                <textarea type="text" class="form-control" id="contenu" name="contenu" required>{{old('contenu')}}</textarea>
                    @error('contenu')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            
            <div class="mb-3">
                <label for="ville" class="form-label">Ville :</label>
                <input type="text" value="{{old('ville')}}" class="form-control" id="ville" name="ville" required>
                    @error('ville')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            <div class="mb-3">
                <label for="adresse" class="form-label">Adresse :</label>
                <input type="text" value="{{old('adresse')}}" class="form-control" id="adresse" name="adresse" required>
                    @error('adresse')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            <div class="mb-3">
                <label for="lieu" class="form-label">Lieu :</label>
                <input type="text" value="{{old('lieu')}}" class="form-control" id="lieu" name="lieu" required>
                    @error('lieu')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            <div class="mb-3">
                <label for="nbInscrit" class="form-label">Nombre d'inscrit :</label>
                <input type="number" value="{{old('nbInscrit')}}" class="form-control" id="nbInscrit" name="nbInscrit" required>
                    @error('nbInscrit')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            <div class="mb-3">
                <label for="nbParticipant" class="form-label">Nombre de participant :</label>
                <input type="number" value="{{old('nbParticipant')}}" class="form-control" id="nbParticipant" name="nbParticipant" required>
                    @error('nbParticipant')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" value="{{old('is_visible')}}" class="form-check-input" id="est_termine" name="est_termine">
                <label class="form-check-label" for="est_termine">Terminée ?</label>
                    @error('is_visible')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
            </div>
            <button type="submit" class="btn btn-primary">Créer</button>
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