@extends('admin.layout')

@section('content')

<main>
    <div class='container'>
        <div class='mt-4 form-group'>
            <div class='row'>
                <div class='col-md-3'>

                    <form method='POST' action='#'>

                        <div>
                            <label>Título do Post</label>
                            <input type='text' class='form-control' name='title'/>
                        </div>

                        <div class='mt-3'>
                            <label>Descrição do Post</label>
                            <input type='text' class='form-control' name='description'/>
                        </div>

                        <button class='btn btn-primary mt-3' type='submit'>Criar</button>
                        
                    </form>

                </div>
            </div>
        </div>
    </div>
</main>

@endsection