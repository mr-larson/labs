@extends('layouts.appFront')

@section('content')
    <x-app-layout>
        <section class="py-12">
            <h2 class="text-center py-3 mx-10 mb-6 text-4xl font-bold rounded-lg shadow-lg overlay2 bg-green-300 text-purple-800">Section comment</h2>
            <div class="container">
                @can('create', App\models\Comment::class)
                    <div class="max-w-6xl mx-auto  flex justify-center my-2">
                        <a class="site-btn hover:bg-purple-500 hover:text-green-300 text-purple-500 px-2 rounded-lg m-2 w-auto text-center" href="/comment/create">+ Create</a>
                    </div>
                @endcan
                <div class="col-3">
                @foreach ($comments as $comment)
                    <div class="rounded w-96 overflow-hidden shadow-lg p-14 flex flex-col justify-center align-center items-center overlay2 bg-purple-800">
                        <div class="">
                            <h2 class="text-gray-300 text-opacity-80">{{ $comment->h2 }}</h2>
                            <p class="text-gray-300 text-opacity-80">{{ $comment->p }}</p>
                            <p class="text-gray-300 text-opacity-80">{{ $comment->confirm }}</p>
                            <div class="py-6">
                                <img class="h-80" src="{{asset("img/blog/" . $comment->img)}}" alt="img">
                            </div>
                            <div class="buttons flex justify-center">
                                @can('update', $comment)
                                    <a href="{{route('comment.edit',$comment->id) }}" class="bg-gradient-to-r from-green-400to-purple-500 hover:text-purple-300 text-white py-1 px-4 rounded-lg m-2 w-auto text-center">Edit</a>
                                @endcan
                                @can('delete', $comment)
                                    <form action="{{ route('comment.destroy',$comment->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-gradient-to-r from-red-400 to-purple-500 text-white py-1 px-4 rounded-lg m-2 w-auto text-center hover:text-purple-300">Delete</button>
                                    </form>
                                @endcan
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
        </section>
    </x-app-layout>
@endsection