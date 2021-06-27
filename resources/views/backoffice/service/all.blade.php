@extends('layouts.appFront')

@section('content')
    <x-app-layout>
        <section class="py-12">
            <h2 class="text-center py-3 mx-10 mb-6 text-4xl font-light rounded-lg shadow-lg overlay2 bg-green-300 text-purple-800">Section service</h2>
            <div class="container">
                @can('create', App\models\Service::class)
                <div class="max-w-6xl mx-auto  flex justify-center my-2">
                    <a class="site-btn hover:bg-purple-500 hover:text-green-300 text-purple-500 px-2 rounded-lg m-2 w-auto text-center" href="/service/create">+ Create</a>
                </div>
                @endcan
                @foreach ($services as $service)
                    <div class="col col-sm-4 my-4">
                        <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center overlay2 bg-purple-800">
                            <h2 class="text-white text-opacity-80">{{ $service->h2 }}</h2>
                            <p class="text-green-300 text-opacity-80 text-center">{{ $service->p }}</p>
                            <div class="icon">
                                <i class="{{ $service->i }} font-bold text-white"></i>
                            </div>
                            <div class="buttons flex justify-center">
                                @can('update', $service)
                                    <a href="{{route('service.edit',$service->id) }}" class="bg-gradient-to-r from-green-400 to-purple-500 hover:text-purple-300 text-white px-2 rounded-lg m-2 w-auto text-center">Edit</a>
                                @endcan
                                @can('delete', $service)
                                <form action="{{ route('service.destroy',$service->id) }}" method="POST">
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
        </section>
    </x-app-layout>
@endsection