@extends('layout')

@section('content')
    <h1>Détails de l'Étudiant</h1>

    <!-- Affichage détaillé des informations de l'étudiant -->
    <ul>
        <li><strong>Nom:</strong> {{ $student->name }}</li>
        <li><strong>Email:</strong> {{ $student->email }}</li>
        <li><strong>Téléphone:</strong> {{ $student->tel }}</li>
        <li><strong>Section:</strong> {{ $student->section }}</li>
    </ul>

    <a href="{{ route('students.index') }}" class="btn btn-primary">Retour à la liste</a>
@endsection
