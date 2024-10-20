@extends('layouts.app')

@section('content')
    <h1>{{ $article->title }}</h1>

    <div>
        {!! nl2br(e($article->content)) !!}
    </div>

    <hr>

    <p>Created at: {{ $article->created_at->format('F d, Y H:i') }}</p>
    <p>Last updated: {{ $article->updated_at->format('F d, Y H:i') }}</p>

    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary">Edit</a>
    <a href="{{ route('articles.index') }}" class="btn btn-secondary">Back to List</a>

    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this article?')">Delete</button>
    </form>
@endsection
