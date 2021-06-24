@extends('layouts.appFront')

@section('content')
    <x-app-layout>
        <section class="py-12">
            <h2 class="text-center py-3 mx-10 mb-6 text-4xl font-light rounded-lg shadow-lg overlay2 bg-green-300">Section testimonial</h2>
            <div class="container">
                @can('create', App\models\Testimonial::class)
                    <div class="max-w-6xl mx-auto  flex justify-center my-2">
                        <a class="site-btn hover:bg-purple-500 text-white px-2 rounded-lg m-2 w-auto text-center" href="/testimonial/create">+ Create</a>
                    </div>
                @endcan
                @foreach ($testimonials as $testimonial)
                <div class="col col-sm-3 my-4">
                    <div class="rounded overflow-hidden shadow-lg p-14 flex flex-col justify-center align-center items-center overlay2 bg-purple-600 hover:bg-purple-800">
                        <div class="">
                            <h3 class="text-white">testimonial</h3>
                        </div>
                            <h2 class="text-green-300 text-opacity-80">{{ $testimonial->h2 }}</h2>
                            <div class="py-6">
                                <img class="" src="{{asset("img/avatar/" . $testimonial->img) }}" alt="img">
                            </div>
                            <p class="text-green-300 text-opacity-80">{{ $testimonial->p }}</p>
                            <p class="text-green-300 text-opacity-80">{{ $testimonial->p2 }}</p>
                            <div class="buttons flex justify-center">
                                @can('update', $testimonial)
                                    <a href="{{route('testimonial.edit',$testimonial->id) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-2 rounded-lg m-2 w-auto text-center">Edit</a>
                                @endcan
                                @can('delete', $testimonial)
                                    <form action="{{ route('testimonial.destroy',$testimonial->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-red-500 hover:bg-red-600 text-white px-1 rounded-lg m-2 w-auto text-center">Delete</button>
                                    </form>
                                @endcan
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </x-app-layout>
@endsection