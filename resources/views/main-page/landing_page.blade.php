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
        <!-- // Add the following code to the body tag
            // This code will create a navigation bar and a hero section -->
        <div class="bg-gradient-to-br from-[#0a2540] via-[#1e6f5c] to-[#0d3b66] min-h-screen ">


            <nav class="flex flex-col md:flex-row justify-between items-center py-4 text-white px-4">

                <div class="flex-shrink-0">
                    <img src="images/logos.png" class="w-20 h-20 object-cover" alt="Logo">
                </div>


                <div class=" flex  flex-col md:flex-row  space-y-4 md:space-y-0 md:space-x-10    text-xl font-sans ">

                    <a href="#" class="text-white hover:text-gray-300 transition duration-300">Home</a>
                    <a href="#" class="text-white hover:text-gray-300 transition duration-300">About</a>
                    <a href="#" class="text-white hover:text-gray-300 transition duration-300">Services</a>
                    <a href="#" class="text-white hover:text-gray-300 transition duration-300">Contact</a>
                </div>


                <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4 mt-4 md:mt-0"> <a href="#"
                        class="text-white hover:bg-red-700 rounded-md px-4 py-2 transition duration-300">Login</a>
                    <a href="#"
                        class="text-white hover:bg-red-700 rounded-md px-4 py-2 transition duration-300">Register</a>
                </div>


            </nav>

            <div class="flex flex-col lg:flex-row justify-evenly items-center px-4 lg:px-20 py-20 text-white">


                <div class="text-center lg:text-left mb-8 lg:mb-0">
                    <h1 class="text-5xl  font-extrabold">Generate Your <br> <span class="text-yellow-500">Smart</span>

                        Budget to <br> save more
                        Money
                    </h1>
                    <h3 class="text-xl sm:text-2xl lg:text-3xl mt-5">Learn, Explore, Find Awesome Places</h3>


                    <div class="mt-8">
                        <input type="text" placeholder="Enter Your Email"
                            class="px-4 py-2 bg-gray-900 bg-opacity-50 h-16 w-full sm:w-96">
                    </div>



                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-8 mt-8">

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

                <div class="rounded-lg overflow-hidden mt-8 lg:mt-0">
                    <img src="images/za.png" alt="Hero Image" class="w-full max-w-md lg:max-w-lg">
                </div>
            </div>
        </div>



        <div class="flex justify-center items-center flex-col px-4 lg:px-20 py-20">

            <h1 class="text-5xl font-bold text-center mb-2 font-sans">AI-Powered Budgeting</h1>
            <h2 class="text-5xl font-medium text-gray-400 mb-2 font-sans">Handling Money Made Smart & Easy</h2>

            <p class="text-center font-serif m-5">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                Provident, odio!
                <br>Lorem ipsum dolor sit amet, consectetur
            </p>


        </div>


        <div class="flex flex-row justify-center items-center flex-wrap">


            <div class="border-2 border-gray-200 p-4 m-4 rounded-lg w-60 h-96 bg-black text-white">
                <h3 class="py-4 font-medium text-2xl">Ready to get more savings?</h3>

                <p class="text-sm mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, odit iusto.
                    expedita eum magni nesciunt assumenda minus error perferendis.</p>

                <a href=""
                    class="m-[10px] underline underline-offset-8 hover:no-underline hover:bg-red-700 rounded-md px-4 py-2 transition duration-300 text-white">
                    Get Started Now
                </a>
            </div>


            <div class="border-2 border-gray-200 p-4 m-4 rounded-lg w-60 h-96 bg-[#ADB2D4] text-black">
                <h3 class="py-4 font-medium text-2xl ">Generate Smart Budgeting Your Money</h3>

                <p class="text-sm mb-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, odit iusto.
                    Repudiandae
                    expedita eum magni nesciunt assumenda minus error perferendis.</p>


                <a href=""
                    class="m-[10px] underline underline-offset-8 hover:no-underline hover:bg-red-700 rounded-md px-4 py-2 transition duration-300 text-white">
                    Get Started Now
                </a>



            </div>

            <div>
                <img src="images/sub-picture.jpg" alt="Hero Image" class="w-90 h-80 object-cover rounded-2xl">
            </div>







        </div>






















    </body>

</html>