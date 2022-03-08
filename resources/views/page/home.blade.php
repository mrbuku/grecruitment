@extends('layouts.app')
@section('title', 'Home')

@section('body')

    <section class="hero bg-white flex items-center justify-center py-20 xl:py-30">
        <img src="{{ asset('img/7451.jpg')  }}" class="object-cover-absolute" alt="hero image">
        <div class="w-full z-100">
            <div class="container">
                <div class="w-full lg:w-8/12 xl:w-6/12 mx-auto text-center">
                    <h1 class="text-white mb-4">Hire the world’s best artists in games, film, media & entertainment</h1>
                    <p class="text-white">games artists jobs is the industry’s largest job board for media & entertainment art positions. It enables studios to promote job opportunities to the world’s largest community of professional artists.</p>
                </div>
            </div>
        </div>
    </section>

@endsection
