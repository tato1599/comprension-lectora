

<header class="bg-green-50">
  <nav class="flex items-center justify-between p-8 mx-auto lg:px-8" aria-label="Global">
    <div class="flex-none w-64">
  
<div class="-m-1.5 px-0">
  <a href="/">
    <span class="text-3xl font-bold text-blue-600">Read</span>
    <span class="text-3xl font-bold text-green-600">Skills</span>
  </a>
</div>

    </div>
    <div class="flex lg:hidden">
      <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>
    <div class="hidden lg:flex lg:gap-x-12">
      <div class="relative">
       

        <!--
          'Product' flyout menu, show/hide based on flyout menu state.

          Entering: "transition ease-out duration-200"
            From: "opacity-0 translate-y-1"
            To: "opacity-100 translate-y-0"
          Leaving: "transition ease-in duration-150"
            From: "opacity-100 translate-y-0"
            To: "opacity-0 translate-y-1"
        -->
      
      </div>

    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
       @if (Route::has('login'))
                <div class="z-10 p-6 text-right sm:fixed sm:top-0 sm:right-0">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-xl font-semibold text-black hover:text-gray-900 dark:text-black dark:hover:text-gray-500 focus:outline focus:outline-2 focus:rounded-sm focus:outline-white-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-xl font-semibold text-black hover:text-gray-900 dark:text-black dark:hover:text-gray-500 focus:outline focus:outline-2 focus:rounded-sm">Inicia sesión</a>

                        @if (Route::has('register'))
                             <a href="{{ route('register') }}" class="ml-8 text-xl font-semibold text-black hover:text-gray-900 dark:text-black dark:hover:text-gray-500 focus:outline focus:outline-2 focus:rounded-sm">Regístrate</a>
                        @endif
                    @endauth
                </div>
            @endif
    </div>
  </nav>
  <!-- Mobile menu, show/hide based on menu open state. -->
  <div class="lg:hidden" role="dialog" aria-modal="true">
    <!-- Background backdrop, show/hide based on slide-over state. -->
    <div class="fixed inset-0 z-10"></div>
    <div class="fixed inset-y-0 right-0 z-10 w-full px-6 py-6 overflow-y-auto bg-white sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
      <div class="flex items-center justify-between">
        
      </div>
      <div class="flow-root mt-6">
        <div class="-my-6 divide-y divide-gray-500/10">
          
          <div class="py-6">
            
             @if (Route::has('login'))
                <div class="z-10 p-6 text-right sm:fixed sm:top-0 sm:right-0">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-white-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm">Inicia sesión</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm">Regístrate</a>
                        @endif
                    @endauth
                </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
