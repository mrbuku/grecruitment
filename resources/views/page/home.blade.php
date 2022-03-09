@extends('layouts.app')
@section('title', 'Home')
@section('body_css', 'home bg-gondola')

@section('body')

    <section class="hero flex items-center justify-center py-20 xl:py-30 mb-10">
        <img src="{{ asset('img/7451.jpg')  }}" class="object-cover-absolute" alt="hero image">
        <div class="w-full relative z-100">
            <div class="container">
                <div class="w-full lg:w-8/12 xl:w-6/12 mx-auto text-center">
                    <h1 class="heading-xl text-white mb-4">Hire the world’s best artists in games.</h1>
                    <p class="copy-l text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, accusamus architecto ex fugiat harum incidunt iure labore libero odio.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- featured -->
    <section class="featured-companies bg-gondola py-10">
        <div class="container">
            <h4 class="heading-xs text-white mb-4">{{ __('Popular studios') }}</h4>

            <div class="row flex flex-wrap">
                <div class="column w-full lg:w-6/12 xl:w-3/12">
                    <div class="relative rounded-5 bg-mirage px-4 py-4 flex items-center space-x-3">
                        <div class="flex-shrink-0">
                            <img class="w-60" src="{{ asset('img/riot-games.svg') }}" alt="riot games">
                        </div>
                        <div class="flex-1 ml-3 min-w-0 flex items-center">
                            <a href="#" class="focus:outline-none">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="copy font-bold text-white leading-1">Riot Games</p>
                                <p class="copy text-white truncate">20 Jobs</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- -->
                <div class="column w-full lg:w-6/12 xl:w-3/12">
                    <div class="relative rounded-5 bg-mirage px-4 py-4 flex items-center space-x-3">
                        <div class="flex-shrink-0">
                            <img class="w-50" src="{{ asset('img/rockstar-games.svg') }}" alt="rockstar games">
                        </div>
                        <div class="flex-1 ml-3 min-w-0 flex items-center">
                            <a href="#" class="focus:outline-none">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="copy font-bold text-white leading-1">Rockstar Games</p>
                                <p class="copy text-white truncate">80 Jobs</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- -->
                <div class="column w-full lg:w-6/12 xl:w-3/12">
                    <div class="relative rounded-5 bg-mirage px-4 py-4 flex items-center space-x-3">
                        <div class="flex-shrink-0">
                            <img class="w-40" src="{{ asset('img/epic-games-2.svg') }}" alt="epic games">
                        </div>
                        <div class="flex-1 ml-3 min-w-0 flex items-center">
                            <a href="#" class="focus:outline-none">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="copy font-bold text-white leading-1">Epic Games</p>
                                <p class="copy text-white truncate">26 Jobs</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- -->
                <div class="column w-full lg:w-6/12 xl:w-3/12">
                    <div class="relative rounded-5 bg-mirage px-4 py-4 flex items-center space-x-3">
                        <div class="flex-shrink-0">
                            <img class="w-40" src="{{ asset('img/ea-games.svg') }}" alt="ea games">
                        </div>
                        <div class="flex-1 ml-3 min-w-0 flex items-center">
                            <a href="#" class="focus:outline-none">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="copy font-bold text-white leading-1">EA Games</p>
                                <p class="copy text-white truncate">26 Jobs</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- -->
            </div>

        </div>
    </section>

    <!-- testimonials -->
    <section class="testimonials bg-gondola py-10 mb-10">
        <div class="container">
            <div class="row flex flex-wrap">

                <div class="column w-full xl:w-4/12">
                    <h2 class="heading-l text-white mb-4">{{ __('Our beloved members.') }}</h2>
                    <p class="copy text-white">We are very solid when online. Here are some of our members testimonials.</p>
                </div>

                <div class="column w-full xl:w-8/12">
                    <div class="row flex flex-wrap">

                        <div class="column w-full lg:w-6/12 mb-4">
                            <div class="w-full relative flex flex-col bg-mirage">
                                <div class="p-6">
                                    <p class="copy text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cum, doloremque iste obcaecati odit recusandae veritatis! Autem consequatur et magni minima ratione sapiente sed!.</p>
                                    <p class="copy text-white font-bold">Bertram Gonzales</p>
                                </div>
                            </div>
                        </div>

                        <div class="column w-full lg:w-6/12 mb-4">
                            <div class="w-full relative flex flex-col bg-mirage">
                                <div class="p-6">
                                    <p class="copy text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cum, doloremque iste obcaecati odit recusandae veritatis! Autem consequatur et magni minima ratione sapiente sed!.</p>
                                    <p class="copy text-white font-bold">Courtnie Hester</p>
                                </div>
                            </div>
                        </div>

                        <div class="column w-full lg:w-6/12 mb-4">
                            <div class="w-full relative flex flex-col bg-mirage">
                                <div class="p-6">
                                    <p class="copy text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cum, doloremque iste obcaecati odit recusandae veritatis! Autem consequatur et magni minima ratione sapiente sed!.</p>
                                    <p class="copy text-white font-bold">Jayden-James Mcleod</p>
                                </div>
                            </div>
                        </div>

                        <div class="column w-full lg:w-6/12">
                            <div class="w-full relative flex flex-col bg-mirage">
                                <div class="p-6">
                                    <p class="copy text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur cum, doloremque iste obcaecati odit recusandae veritatis! Autem consequatur et magni minima ratione sapiente sed!.</p>
                                    <p class="copy text-white font-bold">Kristofer Brooks</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- cta banner -->
    <section class="cta-banner bg-gondola w-full relative py-20">
        <img src="{{ asset('img/7445.jpg')  }}" class="object-cover-absolute object-cover-absolute--top" alt="hero image">
        <div class="w-full relative z-100">
            <div class="container">
                <div class="w-full xl:w-7/12">
                    <h1 class="heading-xl text-white mb-4">Ready for your own adventure?</h1>
                    <p class="copy text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur delectus enim error et facere incidunt inventore laudantium.</p>

                    <div class="w-full mt-4">
                        <a href="#" class="btn btn-white">{{ __('Join us now') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
