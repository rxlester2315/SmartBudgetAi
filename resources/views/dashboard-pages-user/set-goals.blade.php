<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Financial Dashboard</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                                    class="flex items-center px-4 py-2 text-sm font-medium text-white bg-primary rounded-md">
                                    <i class="ri-dashboard-line mr-3 text-lg"></i>
                                    Dashboard
                                </a>
                                <a href="#"
                                    class="flex items-center px-4 py-2 mt-1 text-sm font-medium text-gray-600 dark:text-gray-300 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800">
                                    <i class="ri-wallet-line mr-3 text-lg"></i>
                                    Accounts
                                </a>
                                <a href="{{url('setgoals')}}"
                                    class="flex items-center px-4 py-2 mt-1 text-sm font-medium text-gray-600 dark:text-gray-300 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800">
                                    <i class="ri-exchange-dollar-line mr-3 text-lg"></i>
                                    Transactions
                                </a>
                                <a href="#"
                                    class="flex items-center px-4 py-2 mt-1 text-sm font-medium text-gray-600 dark:text-gray-300 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800">
                                    <i class="ri-bar-chart-line mr-3 text-lg"></i>
                                    Analytics
                                </a>
                                <a href="{{route('setgoals')}}"
                                    class="flex items-center px-4 py-2 mt-1 text-sm font-medium text-gray-600 dark:text-gray-300 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800">
                                    <i class="ri-crosshair-line mr-3 text-lg"></i>
                                    Goals
                                </a>


                            </nav>
                        </div>
                        <div
                            class=" flex items-center justify-between pt-4 mt-6 border-t border-gray-200 dark:border-dark">
                            <div
                                class="flex items-center px-4 py-3 mt-1 text-sm font-medium text-gray-600 dark:text-gray-300 rounded-md hover:bg-gray-100 dark:hover:bg-gray-800">
                                <img class="w-8 h-8 rounded-full mr-3"
                                    src="https://randomuser.me/api/portraits/men/1.jpg" alt="User avatar">
                                <div>
                                    <p class="text-sm font-medium text-gray-700 dark:text-gray-200">John Doe</p>
                                    <p class="text-xs text-gray-500 dark:text-gray-400">Premium Plan</p>

                                </div>
                            </div>

                            <div class="flex items-center">
                                <a href="#" onclick="event.preventDefault(); confirmLogout();">
                                    <i class="ri-logout-box-r-line text-3xl text-white"></i>
                                </a>
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

                <div class="text-white text-2xl font-medium  mt-10 ml-10">
                    <h1>Keep Track your Finance Goals</h1>
                </div>





                <div class="overflow-auto h-screen">
                    <form action="">

                        <div class="flex flex-col  md:flex-row   justify-evenly items-center  ">


                            <div class="flex  flex-col gap-4 mt-10 text-white">
                                <p class="font-medium">GOAL NAME</p>
                                <input type="text"
                                    class="w-[330px] h-[45px] border border-gray-600 rounded-md bg-[#111827] px-3"
                                    placeholder="Enter Goal Name">

                                <p class="font-medium">Target Amount</p>
                                <input type="text"
                                    class="w-[330px] h-[45px] border border-gray-600 rounded-md bg-[#111827] px-3"
                                    placeholder="Target Amount">
                            </div>

                            <div class="flex  flex-col gap-4 mt-10 mb-5 text-white">
                                <p class="font-medium">Target Date</p>
                                <input type="date"
                                    class="w-[330px] h-[45px] border border-gray-600 rounded-md bg-[#111827] px-3">

                                <p class="font-medium">Current Amount</p>
                                <input type="text"
                                    class="w-[330px] h-[45px] border border-gray-600 rounded-md bg-[#111827] px-3 "
                                    placeholder="Current Amount">
                            </div>


                            <div class="flex  items-center flex-col border border-gray-600 rounded-md p-10 ">
                                <p class="font-medium text-white">Upload Image</p>
                                <p class="text-gray-500">Upload an image to represent your goal</p>
                                <img src="images/icon-image.png" class="w-[200px] h-[200px] object-cover" alt="">
                                <input type="file"
                                    class="mt-4 text-white text-center bg-[#111827] border border-gray-600 rounded-md px-3 py-2">
                            </div>


                        </div>

                        <div class="flex justify-center items-center mt-10 mb-10">
                            <button type="submit"
                                class="border border-gray-600 rounded-md bg-[#4F46E5] text-white px-5 py-2">Create</button>
                        </div>


                    </form>

                </div>



            </div>

            <!-- Mobile menu button script -->
            <script src="{{ asset('js/js-components.js') }}"></script>



            <script>
            function confirmLogout() {
                Swal.fire({
                    title: "Are you sure?",
                    text: "You will be logged out of your account.",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#d33",
                    cancelButtonColor: "#3085d6",
                    confirmButtonText: "Yes, Logout",
                    cancelButtonText: "No, Stay",
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "{{ route('logout') }}"; // Redirect only if confirmed
                    }
                });
            }
            </script>

    </body>

</html>