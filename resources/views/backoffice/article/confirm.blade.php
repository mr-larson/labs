@extends('layouts.appFront')

@section('content')
    <x-app-layout>
        <!--Section confirm d'article-->
        <section class="py-12">
            <h2 class="text-center py-3 mx-10 mb-6 text-4xl font-bold rounded-lg shadow-lg overlay2 bg-green-300 text-purple-800">Section Confirm</h2>
            @if ($errors->any())
                <ul class="bg-red-200 text-red-800 text-center py-3 mx-10 mb-6 text-xl font-light rounded-lg shadow-lg">

                    @foreach ($errors->all() as $message)
                        <li class="text-white">{{ $message }}</li>
                    @endforeach
            
                </ul>
            @endif
            <!--Edit confirm de article-->
            @foreach ($articles as $article)
                @if ($article->confirm === 0)
                    <div class="my-4 col-span-2">
                        <div class="post-content container">
                            <div class="grid grid-cols-1 overlay2 bg-purple-800 rounded shadow-lg mx-auto p-3 w-3/5 mb-4">
                                <h2 class="post-title">{{ $article->h2 }}</h2>
                                <div class="post-meta">
                                    <img src="{{ 'img/' . $article->img }}" alt="">
                                    <h4 class="card-title text-dark">{{ $article->user->nom }}</h4>
                                    <p class="card-text text-dark">{{ $article->p }}</p>
                                </div>
                            </div>
						</div>
                        <label class="text-white text-base">Validité d'un article</label>
                        <form method="POST" class="grid grid-cols-1 overlay2 bg-purple-800 rounded shadow-lg mx-auto p-3 w-3/5 mb-4" action="/confirmed/{{ $article->id }}">
                            @csrf
                            <button type="submit" class="bg-gradient-to-r from-green-400 to-purple-500 text-white font-bold py-2 px-4  mx-auto my-8 rounded hover:text-purple-300">Submit</button>
                        </form>
                    </div>
                @endif
            @endforeach
        </section>
    </x-app-layout>

@endsection