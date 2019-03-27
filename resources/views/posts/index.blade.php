@extends('../layouts.app')

@section('content')

    <div class="row">
        @foreach ($posts as $post)
            <div class="offset-md-1"></div>
                <div class="col-12 col-md-4 card mt-5">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-6">
                                    <h3>{{ $post->title }}</h3>
                                </div>
                                <div class="col-6 text-right crud_buttons">
                                    <a href="{{ route('posts.show', $post->id) }}" class="btn btn-success"><i class="far fa-eye"></i></a>
                                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success"><i class="far fa-edit"></i></a>
                                    <form action="{{ route('posts.destroy', [$post->id]) }}" method="post">
                                        {!! method_field('delete') !!}
                                        {!! csrf_field() !!}
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <h4>Description</h4>
                            <p>{{ substr($post->description, 0, 100) }} {!! strlen($post->description) > 100 ? '<strong>...</strong>' : '' !!}</p>
                        </li>
                    </ul>
                </div>
            <div class="offset-md-1"></div>
        @endforeach
    </div>

    <div class="text-center mt-5 mb-5">
        <a href="{{ route('posts.create') }}" class="btn btn-primary">
            <i class="fas fa-plus" style="color: #fff"></i>
        </a>
    </div>

@endsection
