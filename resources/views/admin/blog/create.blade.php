@extends('admin.layout')

@section('content')

<main>
    <div class='container'>
        <div class='mt-4'>
            <form action="{{ route('admin.blog.store') }}" method='POST' class='form-group'>
                @csrf
                <div class='row'>
                    <div class='col-md-3'>

                        <div class='mt-3'>
                            <label>Título</label>
                            <input type='text' class='form-control' name='name'/>
                        </div>

                    </div>
                
                    <div class='col-md-3'>
                        <div class='mt-3'>
                            <label>Descrição</label>
                            <textarea rows="4" cols="50" class='form-control' name='short_description'></textarea>
                        </div>
                    </div>
                    <div class='col-md-3'>
                        <button class='btn btn-primary mt-5' type='submit'>Criar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>

@endsection