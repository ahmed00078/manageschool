
@extends('layout')

@section('title', 'Manage School')

@section('content')
    <h1>Liste des Étudiants</h1>

    <!-- Tableau Bootstrap pour afficher la liste des étudiants -->
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Section</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->tel }}</td>
                <td>{{ $student->section }}</td>
                <td>
                    <a href="{{ route('students.show', $student->id) }}" class="btn btn-info">Voir</a>
                    <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Modifier</a>
                    <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="{{ route('students.create') }}" class="btn btn-success">Ajouter un étudiant</a>
@endsection
