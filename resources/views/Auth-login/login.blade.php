<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
            integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>

    <body>


        <div class=" flex justify-center items-center bg-gradient-to-r from-[#2C2638] to-[#1A1425] min-h-screen ">


            <div
                class=" flex justify-evenly flex-row bg-gradient-to-r from-[#2C2638] to-[#4A3F5C] w-[1300px] h-[px] rounded-lg py-10">

                <div class="flex justify-center items-center text-center">
                    <img src="jaz.png" class="px-30" alt="">
                </div>

                <div class="text-white">

                    @if (session('login_success'))
                    <div class="bg-green-500 text-white text-center py-3 px-6 rounded-lg mb-4 w-[466px]">
                        {{ session('login_success') }}
                    </div>
                    @endif



                    @if ($errors->any())
                    <div class="bg-red-500 text-white text-center py-3 px-6 rounded-lg mb-4 w-[466px]">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <h1 class="text-5xl font-medium py-12">Login</h1>
                    <a href="{{url('register')}}">
                        <h4 class="text-lg  font-sans">Dont have account? <span class="underline">Create
                                account</span>
                        </h4>
                    </a>



                    <form action="{{route('login-backend')}}" method="POST">
                        @csrf

                        <div class="flex  mt-12">
                            <input type="text" placeholder="Email"
                                class=" text-white py-4 w-[466px] px-4 rounded-lg   bg-[#2C2638] " name="email"
                                required>
                        </div>

                        <div class="flex mb-4 mt-6">
                            <input type="password" placeholder="Password"
                                class=" text-white py-4 w-[466px] px-4 rounded-lg   bg-[#2C2638] " name="password"
                                required>
                        </div>





                        <div>

                            <button type="submit"
                                class="bg-yellow-500 text-white py-4 px-4 rounded-lg w-[466px] hover:bg-yellow-600 cursor-pointer">Login</button>
                        </div>
                    </form>

                    <div class="">


                        <p class="ml-20 py-3 px-10">---------- Or Login with ----------</p>




                        <div class="flex justify-center items-center gap-4 flex-row">
                            <div
                                class="flex flex-row items-center  border border-white py-2 px-9 w-[215px] rounded-lg text-white hover:bg-yellow-500 cursor-pointer">

                                <img src="images/google.png" class="w-[40px] h-[40px] object-cover" alt="">
                                <h4 class=" ml-4">Google</h4>

                            </div>

                            <div
                                class="flex flex-row items-center  border border-white py-2 px-9 w-[215px] rounded-lg text-white hover:bg-yellow-500 cursor-pointer">

                                <img src="images/apple.png" class="w-[40px] h-[40px] object-cover " alt="">
                                <h4 class=" ml-4">Apple</h4>

                            </div>



                        </div>





                    </div>










                </div>

            </div>


        </div>

    </body>

</html>