@extends('layouts.app')

@section('title', 'Welcome to Septian Arif Blog')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Welcome to Septian Arif Blog</h1>
    <p class="lead">Ini adalah blog manga anime</p>
    <hr class="my-4">
    <p>ini adalah spoiler,jika tidak suka di spoiler mending skip</p>
    <a class="btn btn-primary btn-lg" href="{{ route('articles.index') }}" role="button">View Articles</a>
    <a class="btn btn-success btn-lg" href="{{ route('articles.create') }}" role="button">Create Article</a>
</div>

<div class="row">
    <div class="col-md-4">
        <h2>Daftar Anime</h2>
        <p>daftar anime dengan alur cerita terbaik,cocok untuk anime lovers newbie</p>
    </div>
    <div class="col-md-4">
        <h2>Daftar anime terlaris</h2>
        <p>Anime terlaris sepanjang masa,dengan alur yang tidak membosankan.</p>
    </div>
    <div class="col-md-4">
        <h2>Manga</h2>
        <p>Daftar manga yang sedang hangat-hangatnya dibahas.</p>
    </div>
</div>
@endsection
