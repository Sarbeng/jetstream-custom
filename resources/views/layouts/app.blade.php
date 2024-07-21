<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('hidden');
        }

        function toggleSubmenu(element) {
            const submenu = element.nextElementSibling;
            submenu.classList.toggle('hidden');
        }
    </script>
</head>
<body class="font-sans antialiased">
    <x-banner />

    <div class="bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <div class="flex">
            <nav class="bg-white shadow min-h-screen w-72 py-8   hidden sm:block">
                <ul class="p-3 py-2 max-w-7xl mx-auto  px-4 sm:px-6 lg:px-8">
                    <li class="py-2 text-sm">
                        <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                        </x-nav-link>
                    </li>
                    
                    <li class="py-2 text-sm">
                        <x-nav-link href="javascript:void(0)" onclick="toggleSubmenu(this)" class="w-full p-2 rounded hover:bg-primary-400 border-none p-2 rounded hover:text-gray-950">{{ __('Management') }}</x-nav-link>
                        <ul class="submenu hidden">
                            <li class="py-2 text-sm"><x-nav-link href="">{{ __('Create Schedule') }}</x-nav-link></li>
                            <li class="py-2 text-sm"><a href="">View</a></li>
                            <li class="py-2 text-sm"><a href="">Edit</a></li>
                            <li class="py-2 text-sm"><a href="">Delete</a></li>
                            <li class="py-2 text-sm"><a href="">View by Day</a></li>
                            <li class="py-2 text-sm"><a href="">View by Week</a></li>
                            <li class="py-2 text-sm"><a href="">View by Month</a></li>
                            <li class="py-2 text-sm"><a href="">Filter by Employee</a></li>
                            <li class="py-2 text-sm"><a href="">Filter by Department</a></li>
                            <li class="py-2 text-sm"><a href="">Filter by Location</a></li>
                        </ul>
                    </li>
                    
                    <li class="py-2 text-sm">
                        <x-nav-link href="javascript:void(0)" onclick="toggleSubmenu(this)" class="w-full p-2 rounded hover:bg-primary-400 border-none hover:text-gray-950">Employee Management</x-nav-link>
                        <ul class="hidden">
                            <li class="py-2 text-sm"><a href="">Add Employee</a></li>
                            <li class="py-2 text-sm"><a href="">Edit Employee</a></li>
                            <li class="py-2 text-sm"><a href="">Remove Employee</a></li>
                            <li class="py-2 text-sm"><a href="">View Employee Details</a></li>
                            <li class="py-2 text-sm"><a href="">View Employee Availability</a></li>
                            <li class="py-2 text-sm"><a href="">Assign Shifts</a></li>
                            <li class="py-2 text-sm"><a href="">Assign Tasks</a></li>
                        </ul>
                    </li>

                    <li class="py-2 text-sm">
                        <x-nav-link href="javascript:void(0)" onclick="toggleSubmenu(this)" class="w-full p-2 rounded hover:bg-primary-400 border-none hover:text-gray-950">Patterns</x-nav-link>
                        <ul class="hidden">
                            <li class="py-2 text-sm"><a href="">Patterns</a></li>
                            <li class="py-2 text-sm"><a href="">Patterns</a></li>
                            <li class="py-2 text-sm"><a href="">SPatterns</a></li>
                            <li class="py-2 text-sm"><a href="">Set Up Patterns</a></li>
                            <li class="py-2 text-sm"><a href="">Set Up Custom Patterns</a></li>
                        </ul>
                    </li>

                    <li class="py-2 text-sm">
                        <x-nav-link href="javascript:void(0)" onclick="toggleSubmenu(this)" class="w-full p-2 rounded hover:bg-primary-400 border-none hover:text-gray-950">Leave Management</x-nav-link>
                        <ul class="hidden">
                            <li class="py-2 text-sm"><a href="">Request Leave</a></li>
                            <li class="py-2 text-sm"><a href="">Approve Leave</a></li>
                            <li class="py-2 text-sm"><a href="">Track Leave</a></li>
                            <li class="py-2 text-sm"><a href="">View Leave Balance</a></li>
                            <li class="py-2 text-sm"><a href="">View Leave History</a></li>
                        </ul>
                    </li>

                    <li class="py-2 text-sm">
                        <x-nav-link href="javascript:void(0)" onclick="toggleSubmenu(this)" class="w-full p-2 rounded hover:bg-primary-400 border-none hover:text-gray-950">Notifications</x-nav-link>
                        <ul class="hidden">
                            <li class="py-2 text-sm"><a href="">Configure Email Notifications</a></li>
                            <li class="py-2 text-sm"><a href="">Configure SMS Notifications</a></li>
                            <li class="py-2 text-sm"><a href="">Configure App Notifications</a></li>
                            <li class="py-2 text-sm"><a href="">Manage Notification Preferences</a></li>
                        </ul>
                    </li>

                    <li class="py-2 text-sm">
                        <x-nav-link href="javascript:void(0)" onclick="toggleSubmenu(this)" class="w-full p-2 rounded hover:bg-primary-400 hover:text-gray-950 border-none">Reports</x-nav-link>
                        <ul class="hidden">
                            <li class="py-2 text-sm"><a href="">Generate Reports</a></li>
                            <li class="py-2 text-sm"><a href="">View Reports</a></li>
                            <li class="py-2 text-sm"><a href="">Schedule Reports</a></li>
                            <li class="py-2 text-sm"><a href="">Export Reports</a></li>
                        </ul>
                    </li>

                    <li class="py-2 text-sm">
                        <x-nav-link href="javascript:void(0)" onclick="toggleSubmenu(this)" class="w-full p-2 rounded hover:bg-primary-400 hover:text-gray-950 border-none">Settings</x-nav-link>
                        <ul class="hidden">
                            <li class="py-2 text-sm"><a href="">Configure Working Hours</a></li>
                            <li class="py-2 text-sm"><a href="">Set Holidays</a></li>
                            <li class="py-2 text-sm"><a href="">Set Rules</a></li>
                            <li class="py-2 text-sm"><a href="">Set Permissions</a></li>
                            <li class="py-2 text-sm"><a href="">Set Access Levels</a></li>
                        </ul>
                    </li>

                    <li class="py-2 text-sm">
                       
                        <x-nav-link href="" class="w-full p-2 rounded hover:bg-primary-400 hover:text-gray-950 border-none">
                        User Profile
                        </x-nav-link>
                </li>
                    
                    <x-nav-link href="" class="w-full p-2 rounded hover:bg-primary-400 hover:text-gray-950 border-none">
                    Help/Support
                        </x-nav-link>
                </ul>
            </nav>

            <section class="flex-1">
                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </section>
        </div>
    </div>

    @stack('modals')

    @livewireScripts
</body>
</html>