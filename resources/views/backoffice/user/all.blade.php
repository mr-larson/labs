@extends('layouts.appFront')

@section('content')
    <x-app-layout>
        <section class="py-12">
            <h2 class="text-center py-3 mx-10 mb-6 text-4xl font-light rounded-lg shadow-lg">Section user</h2>
            <div class="container">
                @foreach ($users as $user)
                    <div class="col col-sm-3 my-4">
                        <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center bg-indigo-600 hover:bg-indigo-800">
                            <h2 class="text-green-300 text-opacity-80">{{ $user->nom }}</h2>
                            <p class="text-green-300 text-opacity-80">{{ $user->img }}</p>
                            <p class="text-green-300 text-opacity-80">{{ $user->role->poste }}</p>
                            <div class="buttons flex justify-center">
                                @can('update', $user)
                                    <a href="{{route('user.edit',$user->id) }}" class="bg-white hover:bg-white-700 text-indigo-600 px-2 rounded-lg m-2 w-auto text-center">Edit</a>
                                @endcan
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </x-app-layout>
@endsection