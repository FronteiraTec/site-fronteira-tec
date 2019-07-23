@extends('admin.layout')

@section('content')

<main class="container">

    <p class='mt-4 lead'>
        Dashboard content
    </p>
    <a class="btn btn-primary" href="{{ url('/create') }}">Novo Post</a>

</main>

@endsection