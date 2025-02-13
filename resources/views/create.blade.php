@extends('layouts.main')

@section('content')
    <div class="p-10 shadow rounded-lg">
        <h2 class="text-2xl font-semibold mb-4">Ajouter une Photo</h2>
        @livewire('create-photo')
    </div>


@endsection
