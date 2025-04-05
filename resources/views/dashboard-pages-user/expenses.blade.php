<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Financial Dashboard</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#4F46E5',
                        secondary: '#10B981',
                        danger: '#EF4444',
                        warning: '#F59E0B',
                        dark: '#1F2937',
                        light: '#F9FAFB'
                    }
                }
            }
        }
        </script>
        <style type="text/tailwindcss">
            @layer utilities {
            .dark .dark\:bg-dark-sidebar {
                background-color: #111827;
            }
            .dark .dark\:bg-dark-card {
                background-color: #1F2937;
            }
            .dark .dark\:border-dark {
                border-color: #374151;
            }
            .dark .dark\:text-dark-text {
                color: #E5E7EB;
            }
            .dark .dark\:text-dark-muted {
                color: #9CA3AF;
            }
        }
    </style>
    </head>

    <body class="bg-gray-50 dark:bg-gray-900 transition-colors duration-200">
        <div class="flex h-screen overflow-hidden">
            <!-- Sidebar -->
            <div class="hidden md:flex md:flex-shrink-0">
                <div class="flex flex-col w-64 bg-white dark:bg-dark-sidebar border-r border-gray-200 dark:border-dark">
                    <div class="flex items-center justify-center h-16 px-4 border-b border-gray-200 dark:border-dark">
                        <h1 class="text-xl font-semibold text-gray-800 dark:text-white">FinTrack</h1>
                    </div>
                    <div class="flex flex-col flex-grow px-4 pt-5 pb-4 overflow-y-auto">
                        <div class="flex-grow mt-5">
                            <nav class="flex-1 space-y-1">
                                <a href="{{url('NormalUser')}}"
                                    class="flex items-center px-4 py-2 text-sm font-medium text-white  rounded-md">
                                    <i class="ri-dashboard-line mr-3 text-lg"></i>
                                    Dashboard
                                </a>
                                <a href="#"
                                    class="flex items-center px-4 py-2 mt-1 text-sm font-medium text-gray-600 dark:text-gray-300 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800">
                                    <i class="ri-wallet-line mr-3 text-lg"></i>
                                    Accounts
                                </a>
                                <a href="{{url('setexpenses')}}"
                                    class="flex items-center px-4 py-2 mt-1 text-sm font-medium text-gray-600 dark:text-gray-300 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800">
                                    <i class="ri-exchange-dollar-line mr-3 text-lg"></i>
                                    Expenses
                                </a>
                                <a href="#"
                                    class="flex items-center px-4 py-2 mt-1 text-sm font-medium text-gray-600 dark:text-gray-300 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800">
                                    <i class="ri-bar-chart-line mr-3 text-lg"></i>
                                    Analytics
                                </a>
                                <a href="{{url('setgoals')}}"
                                    class="flex items-center px-4 py-2 mt-1 text-sm font-medium text-gray-600 dark:text-gray-300 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800">
                                    <i class="ri-crosshair-line mr-3 text-lg"></i>
                                    Goals
                                </a>
                                <a href="#"
                                    class="flex items-center px-4 py-2 mt-1 text-sm font-medium text-gray-600 dark:text-gray-300 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800">
                                    <i class="ri-settings-line mr-3 text-lg"></i>
                                    Settings
                                </a>
                            </nav>
                        </div>
                        <div class="pt-4 mt-6 border-t border-gray-200 dark:border-dark">
                            <div
                                class="flex items-center px-4 py-3 mt-1 text-sm font-medium text-gray-600 dark:text-gray-300 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800">
                                <img class="w-8 h-8 rounded-full mr-3"
                                    src="https://randomuser.me/api/portraits/men/1.jpg" alt="User avatar">
                                <div>
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-200">John Doe</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Premium Plan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <div class="flex flex-col flex-1 overflow-hidden">
                <!-- Top Navigation -->
                <div
                    class="flex items-center justify-between h-16 px-4 bg-white dark:bg-dark-sidebar border-b border-gray-200 dark:border-dark md:px-6">
                    <div class="flex items-center md:hidden">
                        <button type="button"
                            class="text-gray-500 dark:text-gray-300 hover:text-gray-600 dark:hover:text-gray-200">
                            <i class="ri-menu-line text-2xl"></i>
                        </button>
                    </div>
                    <div class="flex items-center ml-auto">
                        <!-- Dark Mode Toggle -->
                        <button id="theme-toggle" type="button"
                            class="p-1 mr-3 text-gray-500 dark:text-gray-300 rounded-full hover:text-gray-600 dark:hover:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none">
                            <i class="ri-sun-line text-xl dark:hidden"></i>
                            <i class="ri-moon-line text-xl hidden dark:block"></i>
                        </button>
                        <button type="button"
                            class="p-1 text-gray-500 dark:text-gray-300 rounded-full hover:text-gray-600 dark:hover:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none">
                            <i class="ri-notification-3-line text-xl"></i>
                        </button>
                        <button type="button"
                            class="p-1 ml-3 text-gray-500 dark:text-gray-300 rounded-full hover:text-gray-600 dark:hover:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none">
                            <i class="ri-search-line text-xl"></i>
                        </button>
                    </div>
                </div>

                <!-- Dashboard Content -->
                <div class="flex-1 overflow-auto p-4 md:p-6 bg-gray-50 dark:bg-gray-900">
                    <div class="mb-6">
                        <h3 class="text-white text-3xl font-bold">Daily Expenses</h3>

                    </div>


                    <form action="{{route('storexpen.store')}}" method="POST">
                        @csrf
                        <div class="flex flex-col text-white">
                            <!-- Food Expenses -->
                            <div class="mt-16" x-data="{ foodAmounts: ['', '', ''] }">
                                <h4 class="text-white text-2xl font-medium">
                                    <i class="ri-restaurant-line text-white text-3xl px-4"></i> Daily Food Expenses
                                </h4>
                                <div class="flex flex-col md:flex-row gap-4 items-center justify-center mt-10">
                                    <template x-for="(amount, index) in foodAmounts" :key="index">
                                        <input type="number" step="0.01" x-model="foodAmounts[index]"
                                            :name="`food[${index}]`"
                                            class="w-[300px] h-[50px] border border-gray-200 bg-[#111827] px-3 rounded-md mr-3"
                                            :placeholder="'Meal ' + (index + 1)">
                                    </template>
                                    <button type="button" @click="foodAmounts.push('')"
                                        class="border border-gray-600 rounded-md bg-[#4F46E5] text-white ml-3 p-2">
                                        Add More
                                    </button>
                                </div>
                            </div>

                            <!-- Transportation Expenses -->
                            <div class="mt-16" x-data="{ transportAmounts: ['','',''] }">
                                <h4 class="text-white text-2xl font-medium">
                                    <i class="ri-car-fill text-white text-3xl px-4"></i> Daily Transportation Expenses
                                </h4>
                                <div class="flex flex-col md:flex-row gap-4 items-center justify-center mt-10">
                                    <template x-for="(amount, index) in transportAmounts" :key="index">
                                        <input type="number" step="0.01" x-model="transportAmounts[index]"
                                            :name="`transport[${index}]`"
                                            class="w-[300px] h-[50px] border border-gray-200 bg-[#111827] px-3 rounded-md mr-3"
                                            :placeholder="'Transportation ' + (index + 1)">
                                    </template>
                                    <button type="button" @click="transportAmounts.push('')"
                                        class="border border-gray-600 rounded-md bg-[#4F46E5] text-white ml-3 p-2">
                                        Add More
                                    </button>
                                </div>
                            </div>

                            <!-- Electricity & Water -->
                            <div class="mt-16" x-data="{ electricityAmounts: ['',''] }">
                                <h4 class="text-white text-2xl font-medium">
                                    <i class="ri-water-flash-line text-white text-3xl px-4"></i> Electricity & Water
                                </h4>
                                <div class="flex flex-col md:flex-row gap-4 items-center justify-center mt-10">
                                    <template x-for="(amount, index) in electricityAmounts" :key="index">
                                        <input type="number" step="0.01" x-model="electricityAmounts[index]"
                                            :name="`electricities[${index}]`"
                                            class="w-[300px] h-[50px] border border-gray-200 bg-[#111827] px-3 rounded-md mr-3"
                                            :placeholder="'Electricity ' + (index + 1)">
                                    </template>
                                    <button type="button" @click="electricityAmounts.push('')"
                                        class="border border-gray-600 rounded-md bg-[#4F46E5] text-white ml-3 p-2">
                                        Add More
                                    </button>
                                </div>
                            </div>

                            <!-- Subscriptions & Wifi -->
                            <div class="mt-16" x-data="{ subscriptionsAmounts: ['','',''] }">
                                <h4 class="text-white text-2xl font-medium">
                                    <i class="ri-router-line text-white text-3xl px-4"></i>Subscriptions & Wifi
                                </h4>
                                <div class="flex flex-col md:flex-row gap-4 items-center justify-center mt-10">
                                    <template x-for="(amount, index) in subscriptionsAmounts" :key="index">
                                        <input type="number" step="0.01" x-model="subscriptionsAmounts[index]"
                                            :name="`subscriptions[${index}]`"
                                            class="w-[300px] h-[50px] border border-gray-200 bg-[#111827] px-3 rounded-md mr-3"
                                            :placeholder="'Subscription ' + (index + 1)">
                                    </template>
                                    <button type="button" @click="subscriptionsAmounts.push('')"
                                        class="border border-gray-600 rounded-md bg-[#4F46E5] text-white ml-3 p-2">
                                        Add More
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-center items-center mt-[200px]">
                            <button type="submit"
                                class="border border-gray-600 bg-[#10B981] rounded-md text-white px-4 py-2">
                                Submit
                            </button>
                        </div>
                    </form>

















                </div>
            </div>
        </div>

        <!-- Mobile menu button script -->
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuButton = document.querySelector('.ri-menu-line').parentElement;
            const sidebar = document.querySelector('.md\\:flex-shrink-0');

            menuButton.addEventListener('click', function() {
                sidebar.classList.toggle('hidden');
                sidebar.classList.toggle('block');
            });

            // Dark mode toggle functionality
            const themeToggleBtn = document.getElementById('theme-toggle');

            // Check for saved theme preference or use system preference
            if (localStorage.getItem('color-theme') === 'dark' ||
                (!localStorage.getItem('color-theme') && window.matchMedia('(prefers-color-scheme: dark)')
                    .matches)) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }

            // Toggle theme on button click
            themeToggleBtn.addEventListener('click', function() {
                // Toggle dark class on html element
                document.documentElement.classList.toggle('dark');

                // Update localStorage
                if (document.documentElement.classList.contains('dark')) {
                    localStorage.setItem('color-theme', 'dark');
                } else {
                    localStorage.setItem('color-theme', 'light');
                }
            });
        });
        </script>
    </body>

</html>