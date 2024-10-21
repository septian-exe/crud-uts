@extends('layouts.app')

@section('content')
    <h1>Articles</h1>
    <a href="{{ route('articles.create') }}" class="btn btn-primary">Buat Artikel Baru</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
            <tr>
                <td>{{ $article->title }}</td>
                <td>
                    <a href="{{ route('articles.show', $article->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah kamu yakin?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
