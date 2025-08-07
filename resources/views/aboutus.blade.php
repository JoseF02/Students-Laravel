@extends('Layouts.app')

@section('scripts')
    <script>
        alert('hi')
    </script>
@endsection

@section('content')
    <main>
        <h2>About Us</h2>
        <p>This is a simple HTML and CSS template to start your project.</p>
        <p>Name: {{$name}}</p>
        <p>ID: {{$id}}</p>
    </main>
@endsection 

@section('styles')
@endsection 