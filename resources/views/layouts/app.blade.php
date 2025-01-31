<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Job Board') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="bg-gray-50">
        <nav class="bg-white shadow-sm">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <div class="flex-shrink-0 flex items-center">
                            <a href="/" class="text-2xl font-bold text-indigo-600">PathFinder</a>
                        </div>
                        <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                            <a href="#" class="inline-flex items-center px-1 pt-1 text-gray-900">Jobs</a>
                            <a href="#" class="inline-flex items-center px-1 pt-1 text-gray-500">Companies</a>
                        </div>
                    </div>
                    <div class="flex items-center">
                        @auth
                            <a href="{{ route('dashboard') }}" class="text-gray-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-gray-500">Login</a>
                            <a href="{{ route('register') }}" class="ml-4 bg-indigo-600 text-white px-4 py-2 rounded-md">Sign up</a>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>
    
        <main>
            {{ $slot }}
        </main>
        <footer class="bg-white mt-12">
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <!-- Footer content -->
                </div>
            </div>
        </footer>
    
        @livewireScripts
    </body>
    </html>
