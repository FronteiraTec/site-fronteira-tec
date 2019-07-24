@extends('admin.layout')

@section('content')

<main class="container mt-4">
    <div class="row">
        @if($posts)
            @foreach($posts as $post)
                <div class='col-md-3'>
                    <div class="card bg-white mb-3" style="max-width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->name}}</h5>
                            <p class="card-text">{{$post->short_description}}</p>
                            <span class="badge badge-pill badge-light">{{$post->created_at->format('d/m/Y')}}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <a class="btn btn-primary" href="{{ route('admin.blog.create') }}">Novo Post</a>
</main>

@endsection