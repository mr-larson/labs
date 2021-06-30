@extends('layouts.appFront')
@section('content')
    <x-app-layout class="" id="particles-js">
        <!-- nav -->
        <div class="p-4 bg-blue-50 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-lg shadow-md"
            id="particles-js">
            <a href="{{ route('nav.index') }}" class="block ">
                <div
                    class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center overlay2 bg-green-300 hover:bg-green-400">
                    <p class="text-white text-3xl">Navbar</p>
                    <p class="text-white opacity-50 font-light py-3">Gérer les noms dans la navbar</p>
                </div>
            </a>
        </div>
        <!-- nav end -->
        <div class="mt-8 mx-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 p-6 gap-3">
            <!-- Titre -->
            <div
                class="m-2 p-4 bg-blue-50 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-lg shadow-md">
                <a href="{{ route('titre.index') }}" class="block ">
                    <div
                        class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center overlay2 bg-purple-600 hover:bg-purple-800">
                        <p class="text-white text-3xl">Titre</p>
                        <p class="text-white opacity-50 font-light py-3 text-center">Gestion des titres ainsi que leurs
                            sous-texte</p>
                    </div>
                </a>
            </div>
            <!-- Titre end -->
            <!-- link -->
            <div
                class="m-2 p-4 bg-blue-50 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-lg shadow-md">
                <a href="{{ route('link.index') }}" class="block ">
                    <div
                        class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center overlay2 bg-purple-600 hover:bg-purple-800">
                        <p class="text-white text-3xl">Link</p>
                        <p class="text-white opacity-50 font-light py-3">Gestion du texte de vos boutons</p>
                    </div>
                    <div class="buttons flex justify-center">
                        @can('update', $link)
                            <a href="{{ route('link.edit', $link->id) }}"
                                class="font-bold py-2 px-6 m-6 rounded shadow bg-gradient-to-r from-green-400 to-purple-500 hover:text-purple-300 text-white">Edit</a>
                        @endcan
                    </div>
                </a>
            </div>
            <!-- link end -->
            <!-- testimonials -->
            <div
                class="m-2 p-4 bg-blue-50 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-lg shadow-md">
                <a href="{{ route('testimonial.index') }}" class="block ">
                    <div
                        class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center overlay2 bg-purple-600 hover:bg-purple-800">
                        <p class="text-white text-3xl">Testimonial</p>
                        <p class="text-white opacity-50 font-light py-3">Gestion de la section testimonial</p>
                    </div>
                    <div class="buttons flex justify-center">
                        @can('create', App\models\Testimonial::class)
                            <div class=" flex justify-center my-2">
                                <a class="font-bold py-2 px-4 m-6 rounded shadow bg-gradient-to-r from-green-400 to-purple-500 hover:text-purple-300 text-white"
                                    href="/testimonial/create">+ Create</a>
                            </div>
                        @endcan
                    </div>
                </a>
            </div>
            <!-- testimonials end -->
            <!-- service -->
            <div
                class="m-2 p-4 bg-blue-50 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-lg shadow-md">
                <a href="{{ route('service.index') }}" class="block ">
                    <div
                        class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center overlay2 bg-purple-600 hover:bg-purple-800">
                        <p class="text-white text-3xl">Services</p>
                        <p class="text-white opacity-50 font-light py-3">Gestion de la section Service</p>
                    </div>
                    <div class="buttons flex justify-center">
                        @can('create', App\models\Service::class)
                            <div class=" flex justify-center my-2">
                                <a class="font-bold py-2 px-4 m-6 rounded shadow bg-gradient-to-r from-green-400 to-purple-500 hover:text-purple-300 text-white"
                                    href="/service/create">+ Create</a>
                            </div>
                        @endcan
                    </div>
                </a>
            </div>
            <!-- Titre end -->
            <!-- features -->
            <div
                class="m-2 p-4 bg-blue-50 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-lg shadow-md">
                <a href="{{ route('feature.index') }}" class="block ">
                    <div
                        class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center overlay2 bg-purple-600 hover:bg-purple-800">
                        <p class="text-white text-3xl">features</p>
                        <p class="text-white opacity-50 font-light py-3">Gérer votre section features premium</p>
                    </div>
                </a>
            </div>
            <!-- features end -->
            <!-- user -->
            <div
                class="m-2 p-4 bg-blue-50 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-lg shadow-md">
                <a href="{{ route('user.index') }}" class="block ">
                    <div
                        class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center overlay2 bg-purple-600 hover:bg-purple-800">
                        <p class="text-white text-3xl">user</p>
                        <p class="text-white opacity-50 font-light py-3">Gérer votre section user</p>
                    </div>
                </a>
            </div>
            <!-- user end -->
            <!-- article -->
            <div
                class="m-2 p-4 bg-blue-50 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-lg shadow-md">
                <a href="{{ route('article.index') }}" class="block ">
                    <div
                        class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center overlay2 bg-purple-600 hover:bg-purple-800">
                        <p class="text-white text-3xl">article</p>
                        <p class="text-white opacity-50 font-light py-3">Gérer la section article</p>
                    </div>
                    <div class="buttons flex justify-center">
                        @can('create', App\models\Article::class)
                            <div class=" flex justify-center my-2">
                                <a class="font-bold py-2 px-4 m-6 rounded shadow bg-gradient-to-r from-green-400 to-purple-500 hover:text-purple-300 text-white"
                                    href="/article/create">+ Create</a>
                            </div>
                        @endcan
                    </div>
                </a>
            </div>
            <!-- article end -->
            <!-- article -->
            <div
                class="m-2 p-4 bg-blue-50 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-lg shadow-md">
                <a href="{{ route('article.index') }}" class="block ">
                    <div
                        class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center overlay2 bg-purple-600 hover:bg-purple-800">
                        <p class="text-white text-3xl">article</p>
                        <p class="text-white opacity-50 font-light py-3">Gérer la section article</p>
                    </div>
                    <div class="buttons flex justify-center">
                        @can('create', App\models\Article::class)
                            <div class=" flex justify-center my-2">
                                <a class="font-bold py-2 px-4 m-6 rounded shadow bg-gradient-to-r from-green-400 to-purple-500 hover:text-purple-300 text-white"
                                    href="/article/create">+ Create</a>
                            </div>
                        @endcan
                    </div>
                </a>
            </div>
            <!-- article end -->
            <!-- Commentaire -->
            <div
                class="m-2 p-4 bg-blue-50 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-lg shadow-md">
                <a href="{{ route('comment.index') }}" class="block ">
                    <div
                        class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center overlay2 bg-purple-600 hover:bg-purple-800">
                        <p class="text-white text-3xl">Commentaire</p>
                        <p class="text-white opacity-50 font-light py-3">Gérer la section Commentaire</p>
                    </div>
                    <div class="buttons flex justify-center">
                        @can('create', App\models\Comment::class)
                            <div class=" flex justify-center my-2">
                                <a class="font-bold py-2 px-4 m-6 rounded shadow bg-gradient-to-r from-green-400 to-purple-500 hover:text-purple-300 text-white"
                                    href="/comment/create">+ Create</a>
                            </div>
                        @endcan
                    </div>
                </a>
            </div>
            <!-- Commentaire end -->
            <!-- slider -->
            <div
                class="m-2 p-4 bg-blue-50 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-lg shadow-md ">
                <a href="{{ route('slider.index') }}" class="block ">
                    <div
                        class="py-16 rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center overlay2 bg-purple-600 hover:bg-purple-800 h-70">
                        <p class="text-white text-3xl p-2">Slider</p>
                        <img class="h-40 px-4" src="{{ asset('img/' . $sliders[0]->img) }}" alt="">
                        <p class="text-white opacity-50 font-light py-3">Gérer votre section slider</p>
                    </div>
                    <div class="buttons flex justify-center">
                        @can('create', App\models\Slider::class)
                            <div class=" flex justify-center my-2">
                                <a class="font-bold py-2 px-4 m-6 rounded shadow bg-gradient-to-r from-green-400 to-purple-500 hover:text-purple-300 text-white"
                                    href="/slider/create">+ Create</a>
                            </div>
                        @endcan
                    </div>
                </a>
            </div>
            <!-- slider end -->
            <!-- image -->
            <div
                class="m-2 p-4 bg-blue-50 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-lg shadow-md">
                <a href="{{ route('image.index') }}" class="block ">
                    <div
                        class="py-16 rounded overflow-hidden shadow-lg  flex flex-col justify-center align-center items-center overlay2 bg-purple-600 hover:bg-purple-800">
                        <p class="text-white text-3xl p-2 h-70">Image</p>
                        <img class="h-40 px-4 py-10" src="{{ asset('img/' . $images[0]->img) }}" alt="">
                        <p class="text-white opacity-50 font-light py-3">Gérer la section images</p>
                    </div>
                </a>
            </div>
            <!-- image end -->
            <!-- video -->
            <div
                class="m-2 p-4 bg-blue-50 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-lg shadow-md">
                <a href="{{ route('video.index') }}" class="block ">
                    <div
                        class="py-16 rounded overflow-hidden shadow-lg  flex flex-col justify-center align-center items-center overlay2 bg-purple-600 hover:bg-purple-800">
                        <p class="text-white text-3xl p-2 h-70">Video</p>
                        <img class="h-40 px-4" src="{{ asset('img/' . $video->img) }}" alt="">
                        <p class="text-white opacity-50 font-light py-3">Gérer la section Videos</p>
                    </div>
                    <div class="buttons flex justify-center">
                        @can('update', $video)
                            <a href="{{ route('video.edit', $video->id) }}"
                                class="font-bold py-2 px-6 m-6 rounded shadow bg-gradient-to-r from-green-400 to-purple-500 hover:text-purple-300 text-white">Edit</a>
                        @endcan
                    </div>
                </a>
            </div>
            <!-- video end -->
            <!-- map -->
            <div
                class="m-2 p-4 bg-blue-50 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-lg shadow-md">
                <a href="{{ route('map.index') }}" class="block ">
                    <div
                        class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center overlay2 bg-purple-600 hover:bg-purple-800">
                        <p class="text-white text-3xl text-center">map</p>
                        <p class="text-white opacity-50 font-light py-3">Gérer votre section map</p>
                        <div class="gmap_canvas"><iframe height="600" id="gmap_canvas"
                                src="https://maps.google.com/maps?q=%7B%7B {{ $map->adresse }} &t=&z=13&ie=UTF8&iwloc=&output=embed"
                                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                href="https://fmovies2.org/%22%3Efmovies"></a><br>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 600px;
                                }

                            </style>
                            <a href="https://www.embedgooglemap.net/%22%3Eembedgooglemap.net"></a>
                            <style>
                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;
                                    height: 150px;
                                }

                            </style>
                        </div>
                    </div>
                    <div class="buttons flex justify-center">
                        @can('update', $map)
                            <a href="{{ route('map.edit', $map->id) }}"
                                class="font-bold py-2 px-6 m-6 rounded shadow bg-gradient-to-r from-green-400 to-purple-500 hover:text-purple-300 text-white">Edit</a>
                        @endcan
                    </div>
                </a>
            </div>
            <!-- map end -->
            <!-- adresse -->
            <div
                class="m-2 p-4 bg-blue-50 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-lg shadow-md">
                <a href="{{ route('adresse.index') }}" class="block ">
                    <div
                        class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center overlay2 bg-purple-600 hover:bg-purple-800">
                        <p class="text-white text-3xl">Adresse</p>
                        <p class="text-white opacity-50 font-light py-3">Gérer vos coordonné</p>
                        <div class="contact-info col-push text-center">
                            <p class="con-item">{{ $adresse->rue }}, {{ $adresse->num }} <br> {{ $adresse->code }}
                                {{ $adresse->ville }} </p>
                            <p class="con-item">{{ $adresse->phone }}</p>
                            <p class="con-item">{{ $adresse->email }}</p>
                        </div>
                    </div>
                    <div class="buttons flex justify-center">
                        @can('update', $adresse)
                            <a href="{{ route('adresse.edit', $adresse->id) }}"
                                class="font-bold py-2 px-6 m-6 rounded shadow bg-gradient-to-r from-green-400 to-purple-500 hover:text-purple-300 text-white">Edit</a>
                        @endcan
                    </div>
                </a>
            </div>
            <!-- adresse end -->
        </div>

        <!-- footer -->
        <div class="mt-8 mx-4">
            <div
                class="p-4 bg-blue-50 dark:bg-gray-800 dark:text-gray-50 border border-blue-500 dark:border-gray-500 rounded-lg shadow-md">
                <a href="{{ route('footer.index') }}" class="block ">
                    <div
                        class="rounded overflow-hidden shadow-lg py-14 flex flex-col justify-center align-center items-center overlay2 bg-green-300 hover:bg-green-400">
                        <p class="text-white text-3xl">Footer</p>
                        <p class="text-white opacity-50 font-light py-3">Gérer la section footer</p>
                    </div>
                    <div class="buttons flex justify-center">
                        @can('update', $footer)
                            <a href="{{ route('footer.edit', $footer->id) }}"
                                class="font-bold py-2 px-6 m-6 rounded shadow bg-gradient-to-r from-green-400 to-purple-500 hover:text-purple-300 text-white">Edit</a>
                        @endcan
                    </div>
            </div>
            </a>
        </div>
        </div>
        <!-- .footer end -->
        </div>
        </div>
        </div>
    </x-app-layout>
@endsection
