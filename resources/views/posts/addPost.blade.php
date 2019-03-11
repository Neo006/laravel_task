@extends('../layouts.app')

@section('content')

<h1>Create post</h1>

<form action="{{ route('storePost') }}" method="post">
    {{ csrf_field() }}
    <label>Title:
        <input type="text" name="title" class="form-control">
    </label>
    <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control" name="description" rows="5" colls="30" id="description"></textarea>
    </div>
    <div>
        <input type="submit" value="Save" class="btn btn-success pl-5 pr-5">
    </div>
</form>

@endsection
