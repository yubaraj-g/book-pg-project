<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - PG Booking System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body class="w-full text-gray-700 bg-blue-50">
    <main class="px-20 flex flex-col justify-center w-full" id="main">
        <h1 class="font-extrabold text-4xl w-full text-center bg-blue-500 pt-6 pb-6 text-white shadow-lg shadow-blue-300 rounded-sm">Welcome to PG GO</h1>

        <!-- Space to show login signup if the user hasn't logged in yet -->
        <div class="flex justify-center w-full">
            <div class="flex w-fit gap-6 my-4 items-center">
                <h3 class="font-semibold">Haven't logged in yet?</h3>
                <button class="px-5 py-2 bg-blue-600 text-white font-semibold shadow-md rounded-sm">Login</button>
                <span class="font-semibold">or</span>
                <button class="px-5 py-2 bg-blue-600 text-white font-semibold shadow-md rounded-sm">Signup</button>
            </div>
        </div>

        <hr class="my-4">

        <h1 class="font-extrabold text-2xl w-full py-2">Choose your desired PG</h1>
        <div class="flex gap-4 items-center">
            <p class="text-lg w-fit font-bold py-1 bg-blue-400 px-3 rounded text-white my-2">Available Paying Guest Homes: </p>
            <p class="text-md font-bold border-b border-black">Location - Azara</p>
        </div>

        <section class="homes w-full flex flex-col gap-8">
            <div class="flex w-full py-4 gap-6">
                <div class="flex w-1/2 h-80 border border-blue-200 rounded-sm shadow-lg p-6 bg-white gap-4">
                    <div class="w-1/2 h-full flex flex-col gap-4 justify-between">
                        <h3 class="font-bold text-xl">RH PG</h3>
                        <p class="rating flex w-full gap-0.5 items-center">
                            <span class="text-xs mr-2 font-bold">Rating: </span>
                            <span class="text-xs mr-2 font-bold">3.2</span>
                            <img src="./img/star-fill.png" alt="" class="w-4">
                            <img src="./img/star-fill.png" alt="" class="w-4">
                            <img src="./img/star-fill.png" alt="" class="w-4">
                        </p>
                        <!-- <h5 class="font-semibold">Specifications:</h5> -->
                        <ol class="text-sm font-bold">
                            <li>Shared rooms (2 in 1)</li>
                            <li>Free Wifi</li>
                            <li>Free Food</li>
                        </ol>

                        <span class="font-normal text-sm">Boys Hostel: Goalpara - Guwahati Rd</span>

                        <div class="buttons flex gap-10 items-center">
                            <p class="font-bold">Price: <span>3000</span> Rs</p>
                            <button class="bg-blue-600 px-4 py-2 text-white rounded-md shadow-md hover:shadow-lg hover:bg-blue-800 hover:shadow-blue-400">Book Now</button>
                        </div>
                    </div>

                    <div class="flex flex-col w-1/2 gap-4 h-full text-white">
                        <picture class="h-4/5">
                            <img src="./img/image1.jpg" alt="" class="object-cover w-full h-full">
                        </picture>

                        <button class="px-4 py-2 bg-blue-600 rounded-sm font-semibold hover:bg-blue-800">Get Contact Details</button>

                    </div>
                </div>
                <div class="flex w-1/2 h-80 border border-blue-200 rounded-sm shadow-lg p-6 bg-white gap-4">
                    <div class="w-1/2 h-full flex flex-col gap-4 justify-between">
                        <h3 class="font-bold text-xl">Kalita Boys PG-3</h3>
                        <p class="rating flex w-full gap-0.5 items-center">
                            <span class="text-xs mr-2 font-bold">Rating: </span>
                            <span class="text-xs mr-2 font-bold">5.0</span>
                            <img src="./img/star-fill.png" alt="" class="w-4">
                            <img src="./img/star-fill.png" alt="" class="w-4">
                            <img src="./img/star-fill.png" alt="" class="w-4">
                            <img src="./img/star-fill.png" alt="" class="w-4">
                            <img src="./img/star-fill.png" alt="" class="w-4">
                        </p>
                        <!-- <h5 class="font-semibold">Specifications:</h5> -->
                        <ol class="text-sm font-bold">
                            <li>Shared rooms (2 in 1)</li>
                            <li>Free Wifi</li>
                            <li>Free Food</li>
                        </ol>

                        <span class="font-normal text-sm">Boys Hostel: 4JHC+CXF Unnamed Rd</span>

                        <div class="buttons flex gap-10 items-center">
                            <p class="font-bold">Price: <span>3000</span> Rs</p>
                            <button class="bg-blue-600 px-4 py-2 text-white rounded-md shadow-md hover:shadow-lg hover:bg-blue-800 hover:shadow-blue-400">Book Now</button>
                        </div>
                    </div>

                    <div class="flex flex-col w-1/2 gap-4 h-full text-white">
                        <picture class="h-4/5">
                            <img src="./img/image1.jpg" alt="" class="object-cover w-full h-full">
                        </picture>

                        <button class="px-4 py-2 bg-blue-600 rounded-sm font-semibold hover:bg-blue-800">Get Contact Details</button>

                    </div>
                </div>
            </div>
            <div class="flex w-full py-4 gap-6">
                <div class="flex w-1/2 h-80 border border-blue-200 rounded-sm shadow-lg p-6 bg-white gap-4">
                    <div class="w-1/2 h-full flex flex-col gap-4 justify-between">
                        <h3 class="font-bold text-xl">RH PG</h3>
                        <p class="rating flex w-full gap-0.5 items-center">
                            <span class="text-xs mr-2 font-bold">Rating: </span>
                            <span class="text-xs mr-2 font-bold">3.2</span>
                            <img src="./img/star-fill.png" alt="" class="w-4">
                            <img src="./img/star-fill.png" alt="" class="w-4">
                            <img src="./img/star-fill.png" alt="" class="w-4">
                        </p>
                        <!-- <h5 class="font-semibold">Specifications:</h5> -->
                        <ol class="text-sm font-bold">
                            <li>Shared rooms (2 in 1)</li>
                            <li>Free Wifi</li>
                            <li>Free Food</li>
                        </ol>

                        <span class="font-normal text-sm">Boys Hostel: Goalpara - Guwahati Rd</span>

                        <div class="buttons flex gap-10 items-center">
                            <p class="font-bold">Price: <span>3000</span> Rs</p>
                            <button class="bg-blue-600 px-4 py-2 text-white rounded-md shadow-md hover:shadow-lg hover:bg-blue-800 hover:shadow-blue-400">Book Now</button>
                        </div>
                    </div>

                    <div class="flex flex-col w-1/2 gap-4 h-full text-white">
                        <picture class="h-4/5">
                            <img src="./img/image1.jpg" alt="" class="object-cover w-full h-full">
                        </picture>

                        <button class="px-4 py-2 bg-blue-600 rounded-sm font-semibold hover:bg-blue-800">Get Contact Details</button>

                    </div>
                </div>
                <div class="flex w-1/2 h-80 border border-blue-200 rounded-sm shadow-lg p-6 bg-white gap-4">
                    <div class="w-1/2 h-full flex flex-col gap-4 justify-between">
                        <h3 class="font-bold text-xl">Kalita Boys PG-3</h3>
                        <p class="rating flex w-full gap-0.5 items-center">
                            <span class="text-xs mr-2 font-bold">Rating: </span>
                            <span class="text-xs mr-2 font-bold">5.0</span>
                            <img src="./img/star-fill.png" alt="" class="w-4">
                            <img src="./img/star-fill.png" alt="" class="w-4">
                            <img src="./img/star-fill.png" alt="" class="w-4">
                            <img src="./img/star-fill.png" alt="" class="w-4">
                            <img src="./img/star-fill.png" alt="" class="w-4">
                        </p>
                        <!-- <h5 class="font-semibold">Specifications:</h5> -->
                        <ol class="text-sm font-bold">
                            <li>Shared rooms (2 in 1)</li>
                            <li>Free Wifi</li>
                            <li>Free Food</li>
                        </ol>

                        <span class="font-normal text-sm">Boys Hostel: 4JHC+CXF Unnamed Rd</span>

                        <div class="buttons flex gap-10 items-center">
                            <p class="font-bold">Price: <span>3000</span> Rs</p>
                            <button class="bg-blue-600 px-4 py-2 text-white rounded-md shadow-md hover:shadow-lg hover:bg-blue-800 hover:shadow-blue-400">Book Now</button>
                        </div>
                    </div>

                    <div class="flex flex-col w-1/2 gap-4 h-full text-white">
                        <picture class="h-4/5">
                            <img src="./img/image1.jpg" alt="" class="object-cover w-full h-full">
                        </picture>

                        <button class="px-4 py-2 bg-blue-600 rounded-sm font-semibold hover:bg-blue-800">Get Contact Details</button>

                    </div>
                </div>
            </div>


        </section>
    </main>

    <div class="flex justify-center my-6">
        <h5 class="text-lg text-gray-400">Oh! This is the end!</h5>
    </div>

    <div class="flex justify-center">
        <a href="#main" class="px-8 py-5 border border-blue-500 hover:border-blue-800 rounded-full font-bold text-xl text-blue-600 hover:text-blue-900 my-4">Go to top</a>
    </div>




    <!-- component -->
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

    <footer class="relative bg-blue-100 mt-6 pt-8 pb-4">
        <div class="container mx-auto">
            <div class="flex flex-wrap text-left lg:text-left">
                <div class="w-full lg:w-6/12 px-4">
                    <h4 class="text-3xl fonat-semibold text-blueGray-700">Let's keep in touch!</h4>
                    <h5 class="text-lg mt-0 mb-2 text-blueGray-600">
                        Find us on any of these platforms, we respond 1-2 business days.
                    </h5>
                    <div class="mt-6 lg:mb-0 mb-6">
                        <button class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                            <i class="fab fa-facebook-square"></i>
                        </button>
                        <button class="bg-white text-blueGray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2" type="button">
                            <i class="fab fa-github"></i>
                        </button>
                    </div>
                </div>
                <div class="w-full lg:w-6/12 px-4">
                    <div class="flex flex-wrap items-top mb-6">
                        <div class="w-full lg:w-4/12 px-4 ml-auto">
                            <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Useful Links</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://github.com/yubaraj-g/prerna-project">About Us</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://github.com/yubaraj-g/prerna-project">Github</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <span class="block uppercase text-blueGray-500 text-sm font-semibold mb-2">Other Resources</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://github.com/yubaraj-g/prerna-project">Terms &amp; Conditions</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://github.com/yubaraj-g/prerna-project">Privacy Policy</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-600 hover:text-blueGray-800 font-semibold block pb-2 text-sm" href="https://github.com/yubaraj-g/prerna-project">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-3 border-blueGray-300">
            <div class="flex flex-wrap items-center md:justify-between justify-center">
                <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                    <div class="text-sm text-blueGray-500 font-semibold py-1">
                        Copyright ©
                        <span>2022</span> A Project by
                        <a href="" class="text-blueGray-500 hover:text-blueGray-800">Prerna</a>.
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>