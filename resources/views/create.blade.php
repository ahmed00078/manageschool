@extends('layout')

@section('content')
<h1>Ajouter un Étudiant</h1>

<!-- Formulaire Bootstrap pour créer un nouvel étudiant -->
<form action="{{ route('students.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nom</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="mb-3">
        <label for="tel" class="form-label">Téléphone</label>
        <input type="text" class="form-control" id="tel" name="tel" required>
    </div>
    <div class="mb-3">
        <label for="section" class="form-label">Section</label>
        <input type="text" class="form-control" id="section" name="section" required>
    </div>
    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
@endsection
