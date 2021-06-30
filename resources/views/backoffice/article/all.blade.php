@extends('layouts.appFront')

@section('content')
    <x-app-layout>
        <section class="py-12">
            <h2 class="text-center py-3 mx-10 mb-6 text-4xl font-bold rounded-lg shadow-lg overlay2 bg-green-300 text-purple-800">Section article</h2>
            <div class="container">
                @can('create', App\models\Article::class)
                    <div class="max-w-6xl mx-auto  flex justify-center my-2">
                        <a class="site-btn hover:bg-purple-500 hover:text-green-300 text-purple-500 px-2 rounded-lg m-2 w-auto text-center" href="/article/create">+ Create</a>
                    </div>
                @endcan
                @foreach ($articles as $article)
                    <div class="col col-sm-3 my-4">
                        <div class="rounded w-96 overflow-hidden shadow-lg p-14 flex flex-col justify-center align-center items-center overlay2 bg-purple-800">
                            <div class="text-center">
                                <h2 class="text-white text-opacity-80 font-semi-bold pb-2">{{ $article->h2 }}</h2>
                                <p class="text-green-300 text-opacity-80 text-xl">{{ substr($article->p, 0, 185) }}...</p>
                                {{-- <p class="text-gray-300 text-opacity-80">{{ $article->confirm }}</p> --}}
                                <div class="py-6">
                                    <img class="h-40 m-auto" src="{{asset("img/blog/" . $article->img)}}" alt="img">
                                </div>
                                <div class="buttons flex justify-center">
                                    @can('update', $article)
                                        <a href="{{route('article.edit',$article->id) }}" class="hover:text-purple-300 bg-gradient-to-r from-green-400 to-purple-500 text-white py-1 px-3 rounded-lg m-2 w-auto text-center">Edit</a>
                                    @endcan
                                    @can('delete', $article)
                                        <form action="{{ route('article.destroy',$article->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="bg-gradient-to-r from-red-400 to-purple-500 text-white py-1 px-4 rounded-lg m-2 w-auto text-center hover:text-purple-300">Delete</button>
                                        </form>
                                    @endcan
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="flex justify-center">{{ $articles->links() }}</div>
        </section>
    </x-app-layout>
@endsection