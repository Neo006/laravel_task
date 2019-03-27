@extends('../layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12 card mt-5" style="width: 40%">
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
    </div>

    <div class="row mt-3">
        <a href="{{ route('posts.index') }}" class="btn btn-outline-info"><< Go Back</a>
    </div>

@endsection
