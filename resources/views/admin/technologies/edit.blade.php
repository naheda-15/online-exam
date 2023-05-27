@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <form action="{{ route('technology.update', ['id' => $technology->id]) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="technology_name" class="form-label">Technology</label>
            <input type="text" class="form-control" name="name" placeholder="php" class="@error('name') is-invalid @enderror" value="{{ $technology ? $technology->name : '' }}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>    
</div>
@endsection