@extends('layouts.app')
@section('title',  ' • My Projects')
@section('content')
<div class="card" style="width: 18rem;">
  <img src="images/favicon.png" class="card-img-top proj-image" alt="...">
  <div class="card-body">
    <h5 class="card-title">My Portfolio</h5>
    <p class="card-text">My own portfolio made in Laravel.</p>
    <a href="https://github.com/AmirAlagar/my-portfolio.git" class="btn btn-primary">View on GitHub</a>
  </div>
</div>
@endsection