@extends ('layouts.app')

@section('content')
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form method="POST" action="{{ route('project.update',$project->slug )}}">

    @csrf

    @method('PUT')

    <div class="container mt-5">

        <div class="wrapper py-3">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{old('title', $project->title)}}">
        </div>

        <div class=" wrapper py-3">
            <label for="description">Description</label>

            <textarea type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" aria-describedby="descriptionHlper" value="{{ old('description',$project->description) }}"></textarea>
        </div>

        <input type="submit" value="Submit">

    </div>

</form>

@endsection