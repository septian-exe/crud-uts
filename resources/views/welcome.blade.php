@extends('layouts.app')

@section('title', 'Welcome to Septian Arif Blog')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Welcome to Septian Arif Blog</h1>
    <p class="lead">This is a simple blog application created using Laravel for the UTS project.</p>
    <hr class="my-4">
    <p>Explore articles or create your own to share your thoughts with the world.</p>
    <a class="btn btn-primary btn-lg" href="{{ route('articles.index') }}" role="button">View Articles</a>
    <a class="btn btn-success btn-lg" href="{{ route('articles.create') }}" role="button">Create Article</a>
</div>

<div class="row">
    <div class="col-md-4">
        <h2>Easy to Use</h2>
        <p>Our blog platform is designed to be intuitive and user-friendly. Start writing and sharing your ideas in minutes!</p>
    </div>
    <div class="col-md-4">
        <h2>Responsive Design</h2>
        <p>Access your blog from any device. Our responsive design ensures a great experience on desktop, tablet, and mobile.</p>
    </div>
    <div class="col-md-4">
        <h2>Secure & Reliable</h2>
        <p>Built with Laravel, our platform offers top-notch security and reliability for your blogging needs.</p>
    </div>
</div>
@endsection
