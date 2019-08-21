@extends('admin.layout')

@section('content')

    <main>
        <div class='container'>
            <div class="row">
                <div class='col-md-6 offset-md-3'>
                    <div class='mt-4'>
                        <form action="{{ route('admin.blog.update', $post) }}" method='POST' class='form-group'>
                            @csrf

                            @method('PUT')
                            @include('admin.blog.form')
                            <button class='btn btn-primary mt-3' type='submit'>Atualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection