@extends('layouts.appFront')

@section('content')
    <x-app-layout>
        <section class="py-12">
            <div class="container">
                <div class="col-sm-offset-3 col-sm-6">
                    <div class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center bg-indigo-600 hover:bg-indigo-800">
                        <div class="">
                            <h3 class="text-white">Footer</h3>
                        </div>
                        <p>{{ $footer->h2 }}</p>
                        <p>{{ $footer->a }}</p>
                        <p>{{ $footer->span }}</p>
                        <div class="buttons flex justify-center">
                            @can('update', $footer)
                                <a href="{{route('footer.edit',$footer->id) }}" class="bg-indigo-600 hover:bg-indigo-700 text-white px-2 rounded-lg m-2 w-auto text-center">Edit</a>
                            @endcan
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </x-app-layout>
@endsection