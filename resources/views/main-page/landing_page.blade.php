<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Landing Page</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
            integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>

    <body>
        <!-- // Add the following code to the body tag
            // This code will create a navigation bar and a hero section -->
        <div class="bg-gradient-to-br from-[#C0C0D6] via-[#D1D1E1] to-[#E0E0F0] min-h-screen">


            <nav class="flex flex-col md:flex-row justify-between items-center py-4  px-4">

                <div class="flex-shrink-0 w">
                    <img src="images/logos.png" class="w-20 h-20 object-cover" alt="Logo">
                </div>


                <div class=" flex  flex-col md:flex-row  space-y-4 md:space-y-0 md:space-x-10    text-xl font-sans ">

                    <a href="#" class="text-black hover:text-yellow-500 transition duration-300 font-sans ">Home</a>
                    <a href="#" class="text-black hover:text-yellow-500 transition duration-300">About</a>
                    <a href="#" class="text-black hover:text-yellow-500 transition duration-300">Services</a>
                    <a href="#" class="text-black hover:text-yellow-500 transition duration-300">Contact</a>
                </div>


                <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4 mt-4 md:mt-0"> <a
                        href="{{ url('login') }}"
                        class="text-black hover:bg-red-700 rounded-md px-4 py-2 transition duration-300">Login</a>
                    <a href="#"
                        class="text-black hover:bg-red-700 rounded-md px-4 py-2 transition duration-300">Register</a>
                </div>


            </nav>

            <div class="flex flex-col lg:flex-row justify-evenly items-center px-4 lg:px-20 py-20 text-black">


                <div class="text-center lg:text-left mb-8 lg:mb-0">
                    <h1 class="text-5xl  font-extrabold">Generate Your <br> <span class="text-yellow-500">Smart</span>

                        Budget to <br> save more
                        Money
                    </h1>
                    <h3 class="text-xl sm:text-2xl lg:text-3xl mt-5 text-gray-700">Learn, Explore, Find Awesome Places
                    </h3>


                    <div class="mt-8">
                        <input type="text" placeholder="Enter Your Email"
                            class="px-4 py-2 bg-gray-900 bg-opacity-50 h-16 w-full sm:w-96">
                    </div>



                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-8 mt-8">

                        <div class="mr-8">
                            <h2 class="text-4xl font-bold hover:text-red-500">+620K</h2>
                            <h4 class="text-2xl text-gray-700">Our Active Users</h4>
                        </div>

                        <div>
                            <h2 class="text-4xl font-bold hover:text-red-500">+20k</h2>
                            <h4 class="text-2xl text-gray-700">Daily Generation</h4>
                        </div>
                    </div>
                </div>

                <div class="rounded-lg overflow-hidden mt-8 lg:mt-0">
                    <img src="images/za.png" alt="Hero Image" class="w-full max-w-md lg:max-w-lg">
                </div>
            </div>
        </div>



        <div class="flex justify-center text-center items-center flex-col px-4 lg:px-20 py-20">

            <h1 class="text-5xl font-bold text-center mb-2 font-sans">AI-Powered Budgeting</h1>
            <h2 class="text-2xl font-medium text-gray-400 mb-2  mt-3 font-sans">Handling Money Made Smart & Easy</h2>

            <p class="text-center font-serif m-5 text-gray-600">Lorem ipsum dolor, sit amet consectetur adipisicing
                elit.
                Provident, odio!
                <br>Lorem ipsum dolor sit amet, consectetur
            </p>


        </div>


        <div class="flex flex-row justify-center items-center flex-wrap mb-[200px]">


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

            <div class="relative group">
                <img src="images/sub-picture.jpg" alt="Hero Image" class="w-90 h-80 object-cover rounded-2xl ">
                <div
                    class="absolute inset-0 bg-black bg-opacity-50 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity rounded-2xl">
                    <div class="flex justify-center flex-col items-center">
                        <p class="text-white text-2xl font-semibold">Visual Financial Planning
                        </p>
                        <p class="text-gray-200  font-medium">See your financial future with interactive charts and
                            projections

                    </div>
                    </p>
                </div>
            </div>








        </div>



        <div class="flex  justify-center text-center items-center flex-col mb-[50px]">
            <h1 class="text-5xl font-bold justify-center mb-[30px] ">Explore <span class="text-yellow-500">Smart
                    Budget</span> That Can Help You</h1>

            <p class="text-lg justify-center text-gray-400 mb-[5px] ">Lorem ipsum dolor sit amet consectetur adipisicing
                elit. Itaque laboriosam deleniti perspiciatis
                <br class="mb-5px text-gray-400"> ipsa tempore molestias magnam doloremque voluptate.
            </p>
        </div>


        <div class="flex flex-col md:flex-row justify-center items-center  mb-[200px] gap-12   ">

            <div
                class="border border-gray-200 p-5 rounded-lg  hover:border-black hover:shadow-lg transform transition-all group hover:scale-105">
                <i
                    class="fa-solid fa-cloud-sun text-4xl mb-4 border border-gray-200 p-3 bg-gray-200 rounded-lg group-hover:bg-yellow-500 group-hover:border-gray-200 transition-all"></i>
                <h2 class="text-3xl font-bold">Smart Expense Tracking</h2>
                <p class="text-[20px] text-gray-400 mt-3 mb-4">
                    Automatically categorize and track <br> your expenses with AI-powered <br> insights.
                </p>
            </div>

            <div
                class="border border-gray-200 p-5 rounded-lg hover:border-black hover:shadow-lg transform transition-all group hover:scale-105">
                <i
                    class="fa-brands fa-screenpal text-4xl mb-4 border border-gray-200 p-3 bg-gray-200 rounded-lg group-hover:bg-yellow-500 group-hover:border-gray-200 transition-all"></i>
                <h2 class="text-3xl font-bold">Smart Expense Tracking</h2>
                <p class="text-[20px] text-gray-400 mt-3 mb-4">
                    Automatically categorize and track <br> your expenses with AI-powered <br> insights.
                </p>
            </div>


            <div
                class="border border-gray-200 p-5 rounded-lg hover:border-black hover:shadow-lg transform transition-all group hover:scale-105">
                <i
                    class="fa-brands fa-redhat text-4xl mb-4 border border-gray-200 p-3 bg-gray-200 rounded-lg group-hover:bg-yellow-500 group-hover:border-gray-200 transition-all"></i>
                <h2 class="text-3xl font-bold">Smart Expense Tracking</h2>
                <p class="text-[20px] text-gray-400 mt-3 mb-4">
                    Automatically categorize and track <br> your expenses with AI-powered <br> insights.
                </p>
            </div>

            <div
                class="border border-gray-200 p-5 rounded-lg hover:border-black hover:shadow-lg transform transition-all group hover:scale-105">
                <i
                    class="fa-solid fa-ranking-star text-4xl mb-4 border border-gray-200 p-3 bg-gray-200 rounded-lg group-hover:bg-yellow-500 group-hover:border-gray-200 transition-all"></i>
                <h2 class="text-3xl font-bold">Smart Expense Tracking</h2>
                <p class="text-[20px] text-gray-400 mt-3 mb-4">
                    Automatically categorize and track <br> your expenses with AI-powered <br> insights.
                </p>
            </div>





        </div>
        </div>





        <div class="flex flex-col md:flex-row justify-evenly items-center  bg-gradient-to-r from-[#0B1220] via-[#1f2833] to-[#4e5d6b] min-h-[700px]
">


            <div>

                <p
                    class="text-white border border-gray-800 bg-gray-600 px-10  rounded-2xl w-[100px] h-[20px] flex items-center justify-center text-xs text-center m-5">
                    TESTIMONIALS</p>

                <h1 class="font-bold text-5xl text-white mb-8">Our Customers <br>say about us</h1>
                <p class="text-gray-400 mb-6 text-md">Lorem ipsum dolor brsit amet consectetur <br>adipisicing elit.
                    Vel, totam blanditiis.
                    <br>Iste hic molestias facere veniam aliquam <br>reprehenderit perferendis? Aperiam?
                </p>

                <p
                    class="border border-gray-800 bg-yellow-500 text-white rounded-md w-[110px] h-[40px] text-center flex items-center justify-center text-sm mb-5">
                    Get Started</p>

            </div>


            <div class="flex justify-center items-center flex-col ">

                <div
                    class="flex justify-center items-center text-center flex-col bg-gray-700 border border-gray-500 rounded-lg w-[350px] h-[240px] text-white mb-10">

                    <p class="mb-[50px] text-gray-300 ">"Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Aliquid, sapiente?" <br> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid,
                        sapiente?"</p>


                    <div class="flex justify-evenly items-center   ">
                        <div class="flex flex-col justify-between items-center px-10">
                            <img src="images/2.jpg" class="w-[40px] h-[40px] object-cover rounded-2xl" alt="">

                            <h2 class="text-md text-bold">Eren Yaegar</h2>
                            <span class="text-xs">Ceo of Rumbling Corp</span>
                        </div>

                        <div class="flex flex-row items-center text-center px-10">
                            <i class="fa-solid fa-medal  text-yellow-500"></i>
                            <p class="m-3 text-extrabold text-lg">5.0</p>
                        </div>
                    </div>


                </div>


                <div
                    class="flex justify-center items-center text-center flex-col bg-gray-700 border border-gray-500 rounded-lg w-[350px] h-[240px] text-white  mb-5">

                    <p class="mb-[50px] text-gray-300">"Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Aliquid, sapiente?" <br> "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid,
                        sapiente?"</p>


                    <div class="flex justify-evenly items-center   ">
                        <div class="flex flex-col justify-between items-center px-10">
                            <img src="images/2.jpg" class="w-[40px] h-[40px] object-cover rounded-2xl" alt="">
                            <h2 class="text-md text-bold">Eren Yaegar</h2>
                            <span class="text-xs">Ceo of Rumbling Corp</span>
                        </div>

                        <div class="flex flex-row items-center text-center px-10">
                            <i class="fa-solid fa-medal  text-yellow-500"></i>
                            <p class="m-3 text-extrabold text-lg">5.0</p>
                        </div>
                    </div>
                </div>


            </div>






        </div>


        <footer class="bg-gradient-to-t from-[#363636] via-[#2c2c2c] to-[#1a1a1a] min-h-[300px]
">


            <div class="flex flex-col   md:flex-row  justify-evenly items-center   py-7 px-4 md:px-7">


                <div class="text-white">
                    <img src="images/logos.png" alt="" class="w-[70px] h-[50px] object-cover mx-auto md:mx-0">
                    <h1 class="text-3xl text-white font-extrabold mt-4">FinAI</h1>
                    <h2 class="text-sm font-medium">Smart Budget Ai Generated</h2>
                    <p class="text-xs">Lorem ipsum dolor sit amet consectetur <br>adipisicing elit. Qui, saepe?</p>
                </div>


                <div class="text-white mt-6 md:mt-0">
                    <h1 class="font-bold text-md">Office</h1>
                    <p class="text-xs text-md">Lorem ipsum dolor sit amet. <br>Lorem ipsum dolor sit amet. <br>Lorem,
                        ipsum dolor.</p>
                </div>



                <div class="text-white mt-6 md:mt-0">
                    <h1 class="font-bold text-md">Links</h1>

                    <p>Solutions</p>
                    <p>Company</p>
                    <p>Resources</p>
                    <p>About us</p>


                </div>

                <div class=" flex flex-row md:flex-row items-center justify-center  text-white mt-6 md:mt-0  ">

                    <div>
                        <h1 class=" font-bold text-md mb-4 text-center">Social Medias</h1>
                        <i
                            class="fa-brands fa-facebook px-4 py-2 text-1xl border border-gray-600 bg-blue-500 rounded-2xl"></i>
                        <i
                            class="fa-brands fa-youtube px-4 py-2 text-1xl border border-gray-600 bg-red-600 rounded-2xl "></i>
                        <i
                            class="fa-solid fa-envelope-circle-check px-4  py-2 text-1xl border border-gray-600 bg-yellow-500 rounded-2xl "></i>

                    </div>



                </div>





            </div>

            <div class="border-t border-gray-300 my-2 ">


                <div class="flex justify-between items-center mt-3 text-white">
                    <p class="text-xs m-2">Smart AI Budget Generated © 2025 - All Rights Reserved</p>

                    <div class="flex justify-center">
                        <p class="px-8 text-xs m-2  ">Privacy Policy</p>
                        <p class="text-xs m-2">Contact Us</p>
                    </div>
                </div>
            </div>


        </footer>





















































    </body>

</html>