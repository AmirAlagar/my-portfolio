@extends('layouts.app')
@section('title')
@section('content')

    <div class="jumbotron mt" style="background: rgba(0, 0, 0, 0.3)">
        <h1 class="display-4 font-color">Amir Yahya Alagar</h1>
        <p class="lead font-color font-desc">Hi there! I'm a Junior Web Developer who uses Laravel and always eager to learn new things. I enjoy working with a team and tend to be more productive when I bond with them.</p>
        <p class="lead font-color font-desc">Even though I specialize in Coding, I also love to do some Hardware specifically PC Building and Troubleshooting.</p>
        <p class="lead font-color font-desc">My Stacks: </p>
        <div class="row mt">
            <div class="col">
                <img src="{{ asset('images/laravel_logo.png') }}" class="stack-logo">
            </div>
            <div class="col">
                <img src="{{ asset('images/html_logo.png') }}" class="stack-logo">
            </div>
            <div class="col">
                <img src="{{ asset('images/css_logo.png') }}" class="stack-logo">
            </div>
            <div class="col">
                <img src="{{ asset('images/js_logo.png') }}" class="stack-logo">
            </div>
        </div>
        <div class="row mt" style="margin-top: 20px">
            <div class="col">
                <img src="{{ asset('images/mysql_logo.png') }}" class="stack-logo stack-logo-l">
            </div>
            <div class="col">
                <img src="{{ asset('images/tw_logo.png') }}" class="stack-logo stack-logo-l">
            </div>
            <div class="col">
                <img src="{{ asset('images/bootstrap_logo.png') }}" class="stack-logo">
            </div>
            <div class="col">
                <img src="{{ asset('images/git_logo.png') }}" class="stack-logo">
            </div>
        </div>
    </div>

@endsection
