@section('form')
    <div class='row'>

        <div class='col-md-4'>

            <div class='mt-3' style="height: fit-content;">
                <label>Título</label>
                
                <input type='text' class='form-control' name='name' value="{{isset($post->name) ? $post->name : ''}}" />

                <label>Descrição</label>
                <textarea rows="4" cols="50" class='form-control' name='short_description'>{{ isset($post->short_description) ? $post->short_description : '' }}</textarea>
            </div>
            @if($message)
                <div class="alert alert-danger mt-3" role="alert">
                    {{ $message }}
                </div>
            @endif
        </div>
    </div>
@show