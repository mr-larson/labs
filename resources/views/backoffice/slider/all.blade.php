@extends('layouts.appFront')

@section('content')
    <x-app-layout>
        <section class="py-12">
            <h2 class="text-center py-3 mx-10 mb-6 text-4xl font-light rounded-lg shadow-lg overlay2 bg-green-300 text-purple-800">Section slider</h2>
            <div class="container">
                @can('create', App\models\Slider::class)
                    <div class="max-w-6xl mx-auto  flex justify-center my-2">
                        <a class="site-btn hover:bg-purple-500 hover:text-green-300 text-purple-500 px-2 rounded-lg m-2 w-auto text-center" href="/slider/create">+ Create</a>
                    </div>
                @endcan
                <div class="col col-sm-4 my-4">
                @foreach ($sliders as $slider)
                    <div class="rounded w-96 overflow-hidden shadow-lg p-14 flex flex-col justify-center align-center items-center overlay2 bg-purple-800">
                        <div class="">
                            <h3 class="text-white">slider</h3>
                        </div>
                            <div class="py-6">
                                <img class="h-80" src="{{asset("img/" . $slider->img) }}" alt="img">
                            </div>
                            <div class="buttons flex justify-center">
                                @can('update', $slider)
                                    <a href="{{route('slider.edit',$slider->id) }}" class="bg-gradient-to-r from-green-400 to-purple-500 hover:text-purple-300 text-white px-2 rounded-lg m-2 w-auto text-center">Edit</a>
                                @endcan
                                @can('delete', $slider)
                                    <form action="{{ route('slider.destroy',$slider->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-gradient-to-r from-red-400 to-purple-500 text-white px-1 rounded-lg m-2 w-auto text-center hover:text-purple-300">Delete</button>
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