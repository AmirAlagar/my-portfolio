@extends('layouts.app')
@section('title', ' • Contact me')
@section('content')

    <div class="jumbotron mt" style="background: rgba(0, 0, 0, 0.3)">
        <h1 class="display-4 font-color">You can reach/learn more about me via:</h1>
        <div class="row mt stack-col" style="margin-top: 30px">
            <div class="col-sm">
                <a href="https://github.com/AmirAlagar" style="text-decoration:none" target="_blank">
                    <img src="{{ asset('images/github_logo.png') }}" class="stack-logo">
                    <span class="lead font-color contact-font">GitHub</span>
                </a>
            </div>
            <div class="col-sm">
                <a href="mailto:amir.yc.alagar@gmail.com" style="text-decoration:none" target="_blank">
                    <img src="{{ asset('images/gmail_logo.png') }}" class="stack-logo" style="height: 80px; width:120px">
                    <span class="lead font-color contact-font">Gmail</span>
                </a>
            </div>
            <div class="col-sm">
                <a href="https://www.facebook.com/ahmz.alagar/" style="text-decoration:none" target="_blank">
                    <img src="{{ asset('images/fb_logo.png') }}" class="stack-logo">
                    <span class="lead font-color contact-font">Facebook</span>
                </a>
            </div>
            <div class="col-sm">
                <a href="https://www.linkedin.com/in/amir-yahya-alagar-7281471b5/" style="text-decoration:none" target="_blank">
                    <img src="{{ asset('images/linkedIn_logo.png') }}" class="stack-logo">
                    <span class="lead font-color contact-font">LinkedIn</span>
                </a>
            </div>
        </div>
    </div>
    
@endsection
