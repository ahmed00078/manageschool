@extends('layout')

@section('content')
    <h1>Supprimer l'Étudiant</h1>

    <p>Êtes-vous sûr de vouloir supprimer l'étudiant "{{ $student->name }}"?</p>

    <!-- Formulaire Bootstrap pour supprimer un étudiant -->
    <form action="{{ route('students.destroy', $student->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Confirmer la suppression</button>
        <a href="{{ route('students.index') }}" class="btn btn-primary">Annuler</a>
    </form>
@endsection
