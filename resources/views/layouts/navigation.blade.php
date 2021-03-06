<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <div class="fixed flex flex-col left-0 w-14 hover:w-64 md:w-64 overlay2 bg-gradient-to-r from-green-400 to-indigo-500 dark:bg-gray-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
        <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
          <ul class="flex flex-col py-4 space-y-1">
            <li class="px-5 hidden md:block">
              <div class="flex flex-row items-center h-8">
                <div class="text-sm font-light tracking-wide text-gray-400 uppercase">Main</div>
              </div>
            </li>
            <li>
              <x-nav-link>
                <div class="relative flex flex-row items-center h-11 text-center mb-10 ml-2">
                  <a href="/"><img src="{{ asset('img/logo.png') }}" alt=""><!-- Logo --></a>
                </div>
              </x-nav-link>
            </li>
            <li>
              <x-nav-link :href="route('user.index')" :active="request()->routeIs('user.index', 'user.edit')" class="transition duration-200 ease-in-out relative flex flex-row items-center h-11 text-center mb-10"><span class="text-white inline-flex justify-center items-center ml-4">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </span>
                <span class="ml-2 text-4xl tracking-wide truncate text-white"> {{ __('User') }}</span>
              </x-nav-link>
            </li>
            <li>
              <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="transition duration-500 ease-in-out relative flex flex-row items-center h-11 text-center mb-10"><span class="text-white inline-flex justify-center items-center ml-4">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
              </span>
              <span class="ml-2 text-2xl tracking-wide truncate text-white"> {{ __('Dashboard') }}</span>
            </x-nav-link>
          </li>

          <li class="nav-item dropdown">
            <x-nav-link class="transition duration-200 ease-in-out nav-link dropdown-toggle ml-2 text-2xl tracking-wide truncate text-white  mb-10" href="route('all')" id="navbarDropdown" role="button" :active="request()->routeIs('nav.index', 'nav.edit', 'titre.index', 'titre.edit', 'link.index', 'link.edit', 'image.index', 'image.edit', 'footer.index', 'footer.edit')" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="text-white inline-flex justify-center items-center ml-4">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
              </span>
              <span class="ml-2 text-2xl tracking-wide truncate text-white"> {{ __('All >') }}</span>
            </x-nav-link>
            <ul class="dropdown-menu opacity-70" aria-labelledby="navbarDropdown">
              <li>
                <x-nav-link :href="route('nav.index')" :active="request()->routeIs('nav.index', 'nav.edit')" class="relative flex flex-row items-center h-11 text-center"><span class="inline-flex justify-center items-center">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                </span>
                <span class="ml-2 text-2xl tracking-wide truncate"> {{ __('Nav') }}</span>
                </x-nav-link>
              </li>
              <li>
                <x-nav-link :href="route('titre.index')" :active="request()->routeIs('titre.index', 'titre.edit')" class="relative flex flex-row items-center h-11 text-center"><span class="inline-flex justify-center items-center ml-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                  </span>
                  <span class="ml-2 text-2xl tracking-wide truncate "> {{ __('Titre') }}</span>
                </x-nav-link>
              </li>
              <li>
                <x-nav-link :href="route('link.index')" :active="request()->routeIs('link.index', 'link.edit')" class="relative flex flex-row items-center h-11 text-center"><span class=" inline-flex justify-center items-center ml-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                  </span>
                  <span class="ml-2 text-2xl tracking-wide truncate "> {{ __('Link') }}</span>
                </x-nav-link>
            </li>
            <li>
              <x-nav-link :href="route('image.index')" :active="request()->routeIs('image.index', 'image.edit')" class="relative flex flex-row items-center h-11 text-center"><span class=" inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                </span>
                <span class="ml-2 text-2xl tracking-wide truncate "> {{ __('Image') }}</span>
              </x-nav-link>
            </li>
              <li>
                <x-nav-link :href="route('footer.index')" :active="request()->routeIs('footer.index', 'footer.edit')" class="relative flex flex-row items-center h-11 text-center"><span class=" inline-flex justify-center items-center ml-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                  </span>
                  <span class="ml-2 text-2xl tracking-wide truncate"> {{ __('Footer') }}</span>
                </x-nav-link>
              </li>
            </ul>
          </li>
          
          <li class="nav-item dropdown">
            <x-nav-link class="transition duration-200 ease-in-out nav-link dropdown-toggle ml-2 text-2xl tracking-wide truncate text-white  mb-10" href="route('home')" id="navbarDropdown" role="button" :active="request()->routeIs('slider.index', 'slider.edit', 'slider.create', 'video.index', 'video.edit', 'testimonial.index', 'testimonial.edit', 'testimonial.create')" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="text-white inline-flex justify-center items-center ml-4">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
              </span>
              <span class="ml-2 text-2xl tracking-wide truncate text-white"> {{ __('Home >') }}</span>
            </x-nav-link>
            <ul class="dropdown-menu opacity-70" aria-labelledby="navbarDropdown">
              <li>
                <x-nav-link :href="route('slider.index')" :active="request()->routeIs('slider.index', 'slider.edit', 'slider.create')" class="relative flex flex-row items-center h-11 text-center"><span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                  </span>
                  <span class="ml-2 text-2xl tracking-wide truncate"> {{ __('Slider') }}</span>
                </x-nav-link>
              </li>
              <li>
                <x-nav-link :href="route('video.index')" :active="request()->routeIs('video.index', 'video.edit')" class="relative flex flex-row items-center h-11 text-center"><span class="inline-flex justify-center items-center ml-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                  </span>
                  <span class="ml-2 text-2xl tracking-wide truncate"> {{ __('Video') }}</span>
                </x-nav-link>
              </li>
              <li>
                <x-nav-link :href="route('testimonial.index')" :active="request()->routeIs('testimonial.index', 'testimonial.edit', 'testimonial.create')" class="relative flex flex-row items-center h-11 text-center"><span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                  </span>
                  <span class="ml-2 text-2xl tracking-wide truncate"> {{ __('Testimonial') }}</span>
                </x-nav-link>
              </li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <x-nav-link class="transition duration-200 ease-in-out nav-link dropdown-toggle ml-2 text-2xl tracking-wide truncate text-white  mb-10" href="route('service')" id="navbarDropdown" role="button" :active="request()->routeIs('feature.index','feature.edit', 'service.index','service.edit')" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="text-white inline-flex justify-center items-center ml-4">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
              </span>
              <span class="ml-2 text-2xl tracking-wide truncate text-white"> {{ __('Service >') }}</span>
            </x-nav-link>
            <ul class="dropdown-menu opacity-70" aria-labelledby="navbarDropdown">
              <li>
                <x-nav-link :href="route('feature.index')" :active="request()->routeIs('feature.index','feature.edit')" class="relative flex flex-row items-center h-11 text-center"><span class=" inline-flex justify-center items-center ml-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                  </span>
                  <span class="ml-2 text-2xl tracking-wide truncate "> {{ __('Feature') }}</span>
                </x-nav-link>
              </li>
              <li>
                <x-nav-link :href="route('service.index')" :active="request()->routeIs('service.index','service.edit')" class="relative flex flex-row items-center h-11 text-center"><span class=" inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                  </span>
                  <span class="ml-2 text-2xl tracking-wide truncate "> {{ __('Service') }}</span>
                </x-nav-link>
              </li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <x-nav-link class="transition duration-200 ease-in-out nav-link dropdown-toggle ml-2 text-2xl tracking-wide truncate text-white  mb-10" href="route('blog')" id="navbarDropdown" role="button" :active="request()->routeIs('article.index', 'article.edit', 'article.create')" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="text-white inline-flex justify-center items-center ml-4">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
              </span>
              <span class="ml-2 text-2xl tracking-wide truncate text-white"> {{ __('Blog >') }}</span>
            </x-nav-link>
            <ul class="dropdown-menu opacity-70" aria-labelledby="navbarDropdown">
              <li>
                <x-nav-link :href="route('article.index')" :active="request()->routeIs('article.index', 'article.edit', 'article.create')" class="relative flex flex-row items-center h-11 text-center"><span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                  </span>
                  <span class="ml-2 text-2xl tracking-wide truncate"> {{ __('Article') }}</span>
                </x-nav-link>
              </li>
            </ul>
          </li>
          
          <li class="nav-item dropdown">
            <x-nav-link class="transition duration-200 ease-in-out nav-link dropdown-toggle ml-2 text-2xl tracking-wide truncate text-white  mb-10" href="route('contact')" id="navbarDropdown" role="button" :active="request()->routeIs('map.index', 'map.edit', 'adresse.index', 'adresse.edit')" data-bs-toggle="dropdown" aria-expanded="false">
              <span class="text-white inline-flex justify-center items-center ml-4">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
              </span>
              <span class="ml-2 text-2xl tracking-wide truncate text-white"> {{ __('Contact >') }}</span>
            </x-nav-link>
            <ul class="dropdown-menu opacity-70" aria-labelledby="navbarDropdown">
              <li>
                <x-nav-link :href="route('map.index')" :active="request()->routeIs('map.index', 'map.edit')" class="relative flex flex-row items-center h-11 text-center"><span class="inline-flex justify-center items-center ml-4">
                  <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                  </span>
                  <span class="ml-2 text-2xl tracking-wide truncate"> {{ __('Map') }}</span>
                </x-nav-link>
              </li>
              <li>
                <x-nav-link :href="route('adresse.index')" :active="request()->routeIs('adresse.index', 'adresse.edit')" class="relative flex flex-row items-center h-11 text-center"><span class="inline-flex justify-center items-center ml-4">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path></svg>
                  </span>
                  <span class="ml-2 text-2xl tracking-wide truncate"> {{ __('Adresse') }}</span>
                </x-nav-link>
              </li>
            </ul>
          </li>  
            
          <li>
            <x-nav-link class="transition duration-200 ease-in-out relative flex flex-row items-center h-11 text-center mt-10"><span class="text-white inline-flex justify-center items-center ml-4">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
              </span>
              <form method="POST" action="{{ route('logout') }}">
              @csrf
                <span onclick="event.preventDefault();
                  this.closest('form').submit();" class="ml-2 text-4xl tracking-wide truncate text-white">{{ __('Log Out') }}
                </span>
              </form>
            </x-nav-link>
          </li>
        </ul>
        <p class="mb-14 px-5 py-3 md:block text-center text-xs text-gray-300">Copyright @2021</p>
      </div>
    </div>
</nav>
