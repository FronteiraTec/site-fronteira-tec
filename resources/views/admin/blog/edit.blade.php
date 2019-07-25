@extends('admin.layout')

@section('content')

    <main>
        <div class='container'>
            <div class='mt-4'>
                <form action="{{ route('admin.blog.update', $post->id) }}" method='POST' class='form-group'>
                    @csrf
                    @method('PUT')
                    
                    @include('admin.blog.form')
                    <button class='btn btn-primary mt-3' type='submit'>Atualizar</button>
                </form>
            </div>
        </div>
    </main>

@endsection