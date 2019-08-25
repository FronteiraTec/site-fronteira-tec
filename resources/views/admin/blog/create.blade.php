@extends('admin.layout')

@section('content')

    <main>
        <div class='container'>
            <div class='mt-4'>
                <div class="col-md-6 offset-md-3">
                    <form action="{{ route('admin.blog.store') }}" method='POST' class='form-group'>
                        @csrf
                        @include('admin.blog.form')
                        <button class='btn btn-primary mt-3' type='submit'>Criar</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

@endsection