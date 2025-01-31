<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PathFinder</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold text-blue-600">JobBoard</a>
                    <div class="hidden md:flex space-x-8 ml-10">
                        {{-- <a href="{{ route('jobs.index') }}" class="text-gray-700 hover:text-blue-600">Jobs</a> --}}
                        <x-dropdown align="left" width="48">
                            <x-slot name="trigger">
                                <button class="text-gray-700 hover:text-blue-600 flex items-center">
                                    Categories
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                {{-- @livewire('category-list') --}}
                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>

                <div class="flex items-center space-x-4">
                    @auth
                        @if(auth()->user()->hasRole('candidate'))
                            <a href="{{ route('candidate.dashboard') }}" class="text-gray-700 hover:text-blue-600">Dashboard</a>
                        @elseif(auth()->user()->hasRole('company'))
                            <a href="{{ route('company.dashboard') }}" class="text-gray-700 hover:text-blue-600">Dashboard</a>
                        @endif
                        {{-- <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="text-gray-700 hover:text-blue-600">Logout</button>
                        </form> --}}
                    @else
                        <a href="{{ route('login') }}" class="text-gray-700 hover:text-blue-600">Candidate Login</a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
      {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t mt-12">
        <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
            <div class="text-center text-gray-600">
                <p>&copy; {{ date('Y') }} JobBoard. All rights reserved.</p>
            </div>
        </div>
    </footer>

    @livewireScripts
</body>
</html>
