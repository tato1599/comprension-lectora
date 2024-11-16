<header class="bg-green-50">
  <nav class="flex items-center justify-between p-4 mx-auto md:p-8 lg:px-8" aria-label="Global">
    <div class="flex-none w-16 md:w-64">
      <div class="">
        <a href="/">
            <span class="sr-only">Logo</span>
            <img class="w-full h-16"
            src="{{ asset('/images/ReadSkillsLogo3.svg') }}" alt="Logo">
        </a>
      </div>
    </div>
    <div class="flex lg:hidden">
      <button id="menuButton" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
        <span class="sr-only">Open main menu</span>
        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </button>
    </div>
    <div id="menuItems" class="hidden lg:flex lg:gap-x-12">
      <div class="relative">
        <!-- 'Product' flyout menu, show/hide based on flyout menu state. -->
      </div>
    </div>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
      @if (Route::has('login'))
        <div class="z-10 pt-12 text-right sm:fixed sm:top-0 sm:right-0 sm:mr-8">
          @auth
            <a href="{{ url('/dashboard') }}" class="text-lg font-semibold text-black md:text-xl hover:text-gray-900 dark:text-black dark:hover:text-gray-500 focus:outline focus:outline-2 focus:rounded-sm focus:outline-white-500">Dashboard</a>
          @else
            <a href="{{ route('login') }}" class="text-lg font-semibold text-black md:text-xl hover:text-gray-900 dark:text-black dark:hover:text-gray-500 focus:outline focus:outline-2 focus:rounded-sm">Inicia sesión</a>
            @if (Route::has('register'))
              <a href="{{ route('register') }}" class="ml-4 text-lg font-semibold text-black md:text-xl hover:text-gray-900 dark:text-black dark:hover:text-gray-500 focus:outline focus:outline-2 focus:rounded-sm">Regístrate</a>
            @endif
          @endauth
        </div>
      @endif
    </div>
  </nav>
  <!-- Mobile menu, show/hide based on menu open state. -->
  <div id="mobileMenu" class="hidden sm:hidden" role="dialog" aria-modal="true">
    <!-- Background backdrop, show/hide based on slide-over state. -->

    <div class="">
      <div class="">
      </div>
      <div class="flow-root mt-6">
        <div class="-my-6 divide-gray-500/10">
          <div class="py-6">
            @if (Route::has('login'))
              <div class="z-10 p-6 text-right sm:fixed sm:top-0 sm:right-0">
                @auth
                  <a href="{{ url('/dashboard') }}" class="text-lg font-semibold text-gray-600 md:text-xl hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-white-500">Dashboard</a>
                @else
                  <a href="{{ route('login') }}" class="text-lg font-semibold text-gray-600 md:text-xl hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm">Inicia sesión</a>
                  @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-lg font-semibold text-gray-600 md:text-xl hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm">Regístrate</a>
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

<script>
  const menuButton = document.getElementById('menuButton');
  const mobileMenu = document.getElementById('mobileMenu');
  const menuItems = document.getElementById('menuItems');

  menuButton.addEventListener('click', () => {
    const isOpen = mobileMenu.classList.contains('hidden');
    if (isOpen) {
      mobileMenu.classList.remove('hidden');
    } else {
      mobileMenu.classList.add('hidden');
    }
  });
</script>
