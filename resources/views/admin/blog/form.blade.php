<div class='mt-3' style="height: fit-content;">
    <label>Título</label>
    
    <input type='text' class='form-control' name='name' value="{{ isset($post->name) ? $post->name : ''}}" />

    <label>Descrição</label>
    <textarea rows="4" cols="50" class='form-control' name='short_description'>{{ isset($post->short_description) ? $post->short_description : '' }}</textarea>
</div>

@if ($errors->any())
    <div class="alert alert-danger mt-1">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif