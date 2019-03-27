@extends('../layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>Edit post</h1>
            <form action="{{ route('posts.update', $post->id) }}" method="post">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <label>Title:
                    <input type="text" name="title" class="form-control" value="{{ $post->title }}">
                </label>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" name="description" rows="5" colls="30" id="description">{{ $post->description }}</textarea>
                </div>
                <div>
                    <input type="submit" value="Save" class="btn btn-success pl-5 pr-5">
                </div>
            </form>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-12">
            <a href="{{ route('posts.index') }}" class="btn btn-outline-info"><< Go Back</a>
        </div>
    </div>

@endsection