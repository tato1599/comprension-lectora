<div class="min-h-screen flex flex-col sm:flex-row justify-center items-center bg-white">
    
    <div class="flex-auto flex justify-center items-center" style="background-image: url('{{ asset('images/login.jpg') }}'); background-size: auto 100%; background-repeat: no-repeat; background-position: center; height: 100vh; width: 25%; filter: blur(3px);">
        <a href="/" class="block h-full w-full"></a>
    </div>

    <div class="flex-auto mt-6 px-8 py-4 overflow-hidden sm:rounded-lg">
        <div class="flex justify-center">
            <a href="/">
                <span class="text-6xl font-bold text-blue-600">Read</span>
                <span class="text-6xl font-bold text-green-600">Skills</span>
              </a>
        </div>

        {{-- <div class="flex justify-center">
            <a href="/">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-16 w-auto" />
            </a>
        </div> --}}
        <div class="mt-6">
            {{ $slot }}
        </div>
        
    </div>
</div>
