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
                    <img src="images/jaz.png" class="px-30" alt="">
                </div>

                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <!-- Add CSRF token for security -->
                    <div class="text-white">
                        <h1 class="text-5xl font-medium py-10">Create An Account</h1>
                        <h4 class="text-lg mt-5 font-sans">Already have an account? <span class="underline">Log
                                in</span></h4>

                        <!-- Name Fields -->
                        <div class="flex flex-row mb-4 mt-4">
                            <input type="text" class="p-4 mr-5 rounded-lg text-white bg-[#2C2638]" name="name" required
                                placeholder="Enter First Name">
                            <input type="text" class="p-4 mr-5 rounded-lg text-white bg-[#2C2638]" name="lastname"
                                required placeholder="Enter Last Name">
                        </div>

                        <!-- Email Field -->
                        <div class="flex mb-4">
                            <input type="email" name="email" placeholder="Email"
                                class="text-white py-4 w-[466px] px-4 rounded-lg bg-[#2C2638]" required>
                        </div>

                        <!-- Password Fields -->
                        <div class="flex flex-row mb-10">
                            <input type="password" name="password" placeholder="Enter Password"
                                class="text-white p-4 mr-5 rounded-lg bg-[#2C2638]" required>
                            <input type="password" name="password_confirmation" placeholder="Confirm Password"
                                class="text-white p-4 mr-5 rounded-lg bg-[#2C2638]" required>
                        </div>

                        <!-- Terms & Conditions -->
                        <div class="flex flex-row items-center mb-8">
                            <input type="checkbox" name="terms" value="1" class="w-4 h-4 mr-4" required>
                            <p>I agree to the <span class="underline">Terms & Conditions</span></p>
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit"
                                class="bg-yellow-500 text-white py-4 px-4 rounded-lg w-[466px] hover:bg-yellow-600 cursor-pointer">Register</button>
                        </div>

                        <!-- Social Login Options -->
                        <div>
                            <p class="ml-20 py-3 px-10">---------- Or register with ----------</p>
                            <div class="flex justify-center items-center gap-4 flex-row">
                                <div
                                    class="flex flex-row items-center border border-white py-2 px-9 w-[215px] rounded-lg text-white hover:bg-yellow-500 cursor-pointer">
                                    <img src="images/google.png" class="w-[40px] h-[40px]" alt="">
                                    <h4 class="ml-4">Google</h4>
                                </div>
                                <div
                                    class="flex flex-row items-center border border-white py-2 px-9 w-[215px] rounded-lg text-white hover:bg-yellow-500 cursor-pointer">
                                    <img src="images/apple.png" class="w-[40px] h-[40px]" alt="">
                                    <h4 class="ml-4">Apple</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>


            </div>


        </div>

    </body>

</html>