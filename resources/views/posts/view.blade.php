@extends('../layouts.app')

@section('content')

<div class="row">
@foreach ($posts as $post)
    <div class="col-md-5 offset-md-1 card mt-5" style="width: 40%">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <h3>{{ $post->title }}</h3>
            </li>
            <li class="list-group-item">
                <h4>Description</h4>
                <p>{{ $post->description }}</p>
            </li>
        </ul>
    </div>
@endforeach
</div>

<div class="text-center mt-5 mb-5">
    <a href="{{ route('addPost') }}" class="btn btn-primary">
        <i class="fas fa-plus" style="color: #fff"></i>
    </a>
</div>

@endsection
