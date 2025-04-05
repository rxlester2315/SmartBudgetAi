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
                <div class="flex-1 overflow-auto p-4 md:p-6 bg-gray-50 dark:bg-gray-900">
                    <div class="mb-6">
                        <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Financial Dashboard</h2>
                        <p class="text-gray-600 dark:text-gray-400">Welcome back, John! Here's your financial overview.
                        </p>
                    </div>

                    <!-- Overview of Monthly Income and Expenses -->
                    <div class="grid grid-cols-1 gap-6 mb-6 lg:grid-cols-3">
                        <div class="p-4 bg-white dark:bg-dark-card rounded-lg shadow">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Monthly Income</h3>
                                <span class="text-green-500 text-xs font-semibold">+4.5%</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-2xl font-bold text-gray-800 dark:text-white">$5,240</span>
                            </div>
                            <div class="mt-3 h-1 w-full bg-gray-200 dark:bg-gray-700 rounded-full">
                                <div class="h-1 rounded-full bg-green-500" style="width: 85%"></div>
                            </div>
                        </div>
                        <div class="p-4 bg-white dark:bg-dark-card rounded-lg shadow">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Monthly Expenses</h3>
                                <span class="text-red-500 text-xs font-semibold">+2.7%</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-2xl font-bold text-gray-800 dark:text-white">$3,890</span>
                            </div>
                            <div class="mt-3 h-1 w-full bg-gray-200 dark:bg-gray-700 rounded-full">
                                <div class="h-1 rounded-full bg-red-500" style="width: 65%"></div>
                            </div>
                        </div>
                        <div class="p-4 bg-white dark:bg-dark-card rounded-lg shadow">
                            <div class="flex items-center justify-between mb-3">
                                <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Savings</h3>
                                <span class="text-blue-500 text-xs font-semibold">+12.2%</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-2xl font-bold text-gray-800 dark:text-white">$1,350</span>
                            </div>
                            <div class="mt-3 h-1 w-full bg-gray-200 dark:bg-gray-700 rounded-full">
                                <div class="h-1 rounded-full bg-blue-500" style="width: 40%"></div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-6 mb-6 lg:grid-cols-2">
                        <!-- Expense Breakdown by Category -->
                        <div class="p-4 bg-white dark:bg-dark-card rounded-lg shadow">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Expense Breakdown</h3>
                                <select
                                    class="text-sm text-gray-500 dark:text-gray-400 bg-transparent dark:bg-dark-card border-none focus:ring-0">
                                    <option>This Month</option>
                                    <option>Last Month</option>
                                    <option>Last 3 Months</option>
                                </select>
                            </div>
                            <div class="space-y-4">
                                @if($grandTotal > 0)
                                @foreach($categories as $category)
                                @if($category['total'] > 0)
                                <div>
                                    <div class="flex items-center justify-between mb-1">
                                        <span class="text-sm font-medium text-gray-600 dark:text-gray-300">
                                            {{ $category['name'] }}
                                        </span>
                                        <span class="text-sm font-medium text-gray-800 dark:text-gray-200">
                                            ₱{{ number_format($category['total'], 2) }} ({{ $category['percentage'] }}%)
                                        </span>
                                    </div>
                                    <div class="w-full h-2 bg-gray-200 dark:bg-gray-700 rounded-full">
                                        <div class="h-2 rounded-full {{ $category['color'] }}"
                                            style="width: {{ $category['percentage'] }}%"></div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                                @else
                                <div class="text-center p-4">
                                    <h3 class="text-gray-600 dark:text-gray-300 mb-4">No expenses recorded yet</h3>
                                    <a href="{{ route('setexpenses') }}"
                                        class="px-4 py-2 text-sm font-medium text-white bg-primary rounded-md hover:bg-primary/90">
                                        Add Your First Expense
                                    </a>
                                </div>
                                @endif
                            </div>
                        </div>

                        <!-- Financial Goals and Progress -->
                        <div class="p-4 bg-white dark:bg-dark-card rounded-lg shadow">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Financial Goals</h3>
                                <button class="text-primary text-sm font-medium">+ Add Goal</button>
                            </div>
                            <div class="space-y-4">
                                <div class="p-3 border border-gray-200 dark:border-gray-700 rounded-lg">
                                    <div class="flex items-center justify-between mb-2">
                                        <h4 class="font-medium text-gray-800 dark:text-white">Vacation Fund</h4>
                                        <span class="text-xs font-medium text-gray-500 dark:text-gray-400">$2,400 /
                                            $5,000</span>
                                    </div>
                                    <div class="w-full h-2 mb-2 bg-gray-200 dark:bg-gray-700 rounded-full">
                                        <div class="h-2 rounded-full bg-primary" style="width: 48%"></div>
                                    </div>
                                    <div
                                        class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400">
                                        <span>48% complete</span>
                                        <span>3 months left</span>
                                    </div>
                                </div>
                                <div class="p-3 border border-gray-200 dark:border-gray-700 rounded-lg">
                                    <div class="flex items-center justify-between mb-2">
                                        <h4 class="font-medium text-gray-800 dark:text-white">Emergency Fund</h4>
                                        <span class="text-xs font-medium text-gray-500 dark:text-gray-400">$8,500 /
                                            $10,000</span>
                                    </div>
                                    <div class="w-full h-2 mb-2 bg-gray-200 dark:bg-gray-700 rounded-full">
                                        <div class="h-2 rounded-full bg-secondary" style="width: 85%"></div>
                                    </div>
                                    <div
                                        class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400">
                                        <span>85% complete</span>
                                        <span>1 month left</span>
                                    </div>
                                </div>
                                <div class="p-3 border border-gray-200 dark:border-gray-700 rounded-lg">
                                    <div class="flex items-center justify-between mb-2">
                                        <h4 class="font-medium text-gray-800 dark:text-white">New Car</h4>
                                        <span class="text-xs font-medium text-gray-500 dark:text-gray-400">$12,000 /
                                            $30,000</span>
                                    </div>
                                    <div class="w-full h-2 mb-2 bg-gray-200 dark:bg-gray-700 rounded-full">
                                        <div class="h-2 rounded-full bg-purple-500" style="width: 40%"></div>
                                    </div>
                                    <div
                                        class="flex items-center justify-between text-xs text-gray-500 dark:text-gray-400">
                                        <span>40% complete</span>
                                        <span>8 months left</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-6 mb-6 lg:grid-cols-3">
                        <!-- AI-Powered Saving Suggestions -->
                        <div class="p-4 bg-white dark:bg-dark-card rounded-lg shadow">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">AI Saving Suggestions
                                </h3>
                                <i class="ri-robot-line text-primary text-xl"></i>
                            </div>
                            <div class="space-y-3">
                                <div
                                    class="p-3 bg-blue-50 dark:bg-blue-900/20 rounded-lg border border-blue-100 dark:border-blue-800">
                                    <p class="text-sm text-gray-700 dark:text-gray-300">You could save <span
                                            class="font-semibold">$85/month</span> by reducing your streaming
                                        subscriptions.</p>
                                    <button class="mt-2 text-xs font-medium text-primary">View Details</button>
                                </div>
                                <div
                                    class="p-3 bg-green-50 dark:bg-green-900/20 rounded-lg border border-green-100 dark:border-green-800">
                                    <p class="text-sm text-gray-700 dark:text-gray-300">Switch to this utility provider
                                        to save <span class="font-semibold">$120/year</span> on electricity.</p>
                                    <button class="mt-2 text-xs font-medium text-primary">View Details</button>
                                </div>
                                <div
                                    class="p-3 bg-purple-50 dark:bg-purple-900/20 rounded-lg border border-purple-100 dark:border-purple-800">
                                    <p class="text-sm text-gray-700 dark:text-gray-300">Setting up automatic transfers
                                        could help you save <span class="font-semibold">$200/month</span>.</p>
                                    <button class="mt-2 text-xs font-medium text-primary">View Details</button>
                                </div>
                            </div>
                        </div>

                        <!-- Spending Alerts and Notifications -->
                        <div class="p-4 bg-white dark:bg-dark-card rounded-lg shadow">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Spending Alerts</h3>
                                <i class="ri-notification-3-line text-primary text-xl"></i>
                            </div>
                            <div class="space-y-3">
                                <div
                                    class="p-3 bg-red-50 dark:bg-red-900/20 rounded-lg border border-red-100 dark:border-red-800">
                                    <div class="flex items-start">
                                        <i class="ri-error-warning-line text-red-500 mr-2 mt-0.5"></i>
                                        <div>
                                            <p class="text-sm font-medium text-gray-800 dark:text-gray-200">Dining
                                                budget exceeded</p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">You've spent 110% of
                                                your monthly dining budget.</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-500 mt-1">Today, 10:24 AM</p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="p-3 bg-yellow-50 dark:bg-yellow-900/20 rounded-lg border border-yellow-100 dark:border-yellow-800">
                                    <div class="flex items-start">
                                        <i class="ri-alert-line text-yellow-500 mr-2 mt-0.5"></i>
                                        <div>
                                            <p class="text-sm font-medium text-gray-800 dark:text-gray-200">Unusual
                                                transaction</p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">$250 payment to Unknown
                                                Vendor detected.</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-500 mt-1">Yesterday, 3:45 PM
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="p-3 bg-blue-50 dark:bg-blue-900/20 rounded-lg border border-blue-100 dark:border-blue-800">
                                    <div class="flex items-start">
                                        <i class="ri-information-line text-blue-500 mr-2 mt-0.5"></i>
                                        <div>
                                            <p class="text-sm font-medium text-gray-800 dark:text-gray-200">Bill due
                                                soon</p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">Your credit card payment
                                                of $750 is due in 3 days.</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-500 mt-1">2 days ago</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Customizable Budgeting Options -->
                        <div class="p-4 bg-white dark:bg-dark-card rounded-lg shadow">
                            <div class="flex items-center justify-between mb-4">
                                <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Budget Settings</h3>
                                <button class="text-primary text-sm font-medium">Edit</button>
                            </div>
                            <div class="space-y-3">
                                <div
                                    class="flex items-center justify-between p-3 border border-gray-200 dark:border-gray-700 rounded-lg">
                                    <div>
                                        <p class="text-sm font-medium text-gray-800 dark:text-gray-200">Housing</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">$1,200 / month</p>
                                    </div>
                                    <div class="flex items-center">
                                        <span
                                            class="text-xs font-medium text-gray-500 dark:text-gray-400 mr-2">30%</span>
                                        <div class="w-16 h-1.5 bg-gray-200 dark:bg-gray-700 rounded-full">
                                            <div class="h-1.5 rounded-full bg-primary" style="width: 30%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-between p-3 border border-gray-200 dark:border-gray-700 rounded-lg">
                                    <div>
                                        <p class="text-sm font-medium text-gray-800 dark:text-gray-200">Food</p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">$800 / month</p>
                                    </div>
                                    <div class="flex items-center">
                                        <span
                                            class="text-xs font-medium text-gray-500 dark:text-gray-400 mr-2">20%</span>
                                        <div class="w-16 h-1.5 bg-gray-200 dark:bg-gray-700 rounded-full">
                                            <div class="h-1.5 rounded-full bg-secondary" style="width: 20%"></div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-between p-3 border border-gray-200 dark:border-gray-700 rounded-lg">
                                    <div>
                                        <p class="text-sm font-medium text-gray-800 dark:text-gray-200">Entertainment
                                        </p>
                                        <p class="text-xs text-gray-500 dark:text-gray-400">$400 / month</p>
                                    </div>
                                    <div class="flex items-center">
                                        <span
                                            class="text-xs font-medium text-gray-500 dark:text-gray-400 mr-2">10%</span>
                                        <div class="w-16 h-1.5 bg-gray-200 dark:bg-gray-700 rounded-full">
                                            <div class="h-1.5 rounded-full bg-purple-500" style="width: 10%"></div>
                                        </div>
                                    </div>
                                </div>
                                <button
                                    class="w-full py-2 mt-2 text-sm font-medium text-white bg-primary rounded-md hover:bg-primary/90">
                                    Adjust Budget Allocations
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Expense Tracking & Recent Transactions -->
                    <div class="bg-white dark:bg-dark-card rounded-lg shadow overflow-hidden">
                        <div
                            class="flex items-center justify-between p-4 border-b border-gray-200 dark:border-gray-700">
                            <h3 class="text-lg font-semibold text-gray-800 dark:text-white">Recent Transactions</h3>
                            <button class="text-primary text-sm font-medium">View All</button>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-gray-50 dark:bg-gray-800">
                                    <tr>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                            Merchant
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                            Category
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                            Date
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                            Amount
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                            Status
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white dark:bg-dark-card divide-y divide-gray-200 dark:divide-gray-700">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div
                                                    class="flex-shrink-0 h-8 w-8 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center">
                                                    <i class="ri-shopping-bag-line text-blue-500"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900 dark:text-gray-100">
                                                        Whole Foods Market</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500 dark:text-gray-400">Groceries</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500 dark:text-gray-400">Mar 18, 2025</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-red-500">-$86.24</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-300">
                                                Completed
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div
                                                    class="flex-shrink-0 h-8 w-8 rounded-full bg-purple-100 dark:bg-purple-900/30 flex items-center justify-center">
                                                    <i class="ri-netflix-line text-purple-500"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900 dark:text-gray-100">
                                                        Netflix</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500 dark:text-gray-400">Entertainment</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500 dark:text-gray-400">Mar 15, 2025</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-red-500">-$14.99</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-300">
                                                Completed
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div
                                                    class="flex-shrink-0 h-8 w-8 rounded-full bg-green-100 dark:bg-green-900/30 flex items-center justify-center">
                                                    <i class="ri-bank-line text-green-500"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900 dark:text-gray-100">
                                                        Acme Corp</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500 dark:text-gray-400">Income</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500 dark:text-gray-400">Mar 15, 2025</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-green-500">+$2,750.00</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-300">
                                                Completed
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div
                                                    class="flex-shrink-0 h-8 w-8 rounded-full bg-yellow-100 dark:bg-yellow-900/30 flex items-center justify-center">
                                                    <i class="ri-restaurant-line text-yellow-500"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900 dark:text-gray-100">
                                                        Burger King</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500 dark:text-gray-400">Dining</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500 dark:text-gray-400">Mar 12, 2025</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-red-500">-$18.45</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-300">
                                                Completed
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div
                                                    class="flex-shrink-0 h-8 w-8 rounded-full bg-red-100 dark:bg-red-900/30 flex items-center justify-center">
                                                    <i class="ri-home-line text-red-500"></i>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900 dark:text-gray-100">
                                                        City Apartments</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500 dark:text-gray-400">Housing</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm text-gray-500 dark:text-gray-400">Mar 10, 2025</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-sm font-medium text-red-500">-$1,200.00</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span
                                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 dark:bg-green-900/30 text-green-800 dark:text-green-300">
                                                Completed
                                            </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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