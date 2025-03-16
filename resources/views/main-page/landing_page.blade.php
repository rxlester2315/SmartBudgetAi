<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Landing Page</title>
        <script src="https://cdn.tailwindcss.com"></script>

        @vite(['resources/js/app.js'])
    </head>

    <body>


        <div class="bg-gradient-to-br from-[#0a2540] via-[#1e6f5c] to-[#0d3b66] min-h-screen ">


            <nav class="flex justify-between items-center py-4 text-white">

                <div class="flex-shrink-0">
                    <img src="images/logos.png" class="w-20 h-20 object-cover" alt="Logo">
                </div>


                <div class=" flex space-x-10 text-xl font-sans">

                    <a href="#" class="text-white hover:text-gray-300 transition duration-300">Home</a>
                    <a href="#" class="text-white hover:text-gray-300 transition duration-300">About</a>
                    <a href="#" class="text-white hover:text-gray-300 transition duration-300">Services</a>
                    <a href="#" class="text-white hover:text-gray-300 transition duration-300">Contact</a>
                </div>


                <div class="flex space-x-4 px-4">
                    <a href="#"
                        class="text-white hover:bg-red-700 rounded-md px-4 py-2 transition duration-300">Login</a>
                    <a href="#"
                        class="text-white hover:bg-red-700 rounded-md px-4 py-2 transition duration-300">Register</a>
                </div>


            </nav>


            <div class="flex justify-evenly items-center px-4 lg:px-20 py-20 text-white">


                <div>
                    <h1 class="text-7xl  font-extrabold">Generate Your <br> <span class="text-yellow-500">Smart</span>

                        Budget to <br> save more
                        Money
                    </h1>
                    <h3 class="text-3xl m-5">Learn , Explore find awsome place</h3>


                    <div>
                        <input type="text" placeholder="Enter Your Email"
                            class="px-4 py-2 bg-gray-900 bg-opacity-50  h-20 w-96 mb-5">

                    </div>



                    <div class="flex  space-x-4 mt-4">
                        <div class="mr-8">
                            <h2 class="text-4xl font-bold hover:text-red-500">+620K</h2>
                            <h4 class="text-2xl text-gray-400">Our Active Users</h4>
                        </div>

                        <div>
                            <h2 class="text-4xl font-bold hover:text-red-500">+20k</h2>
                            <h4 class="text-2xl text-gray-400">Daily Generation</h4>
                        </div>
                    </div>
                </div>

                <div class="rounded-lg overflow-hidden">
                    <img src="images/za.png" alt="">
                </div>
            </div>
        </div>






















    </body>

</html>