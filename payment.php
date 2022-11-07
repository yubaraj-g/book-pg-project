<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boarder Details - PG Booking System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</head>

<body class="w-full text-gray-700 bg-blue-50">
    <header class="px-20 flex w-full bg-blue-500 py-6 text-white shadow-md shadow-blue-200 rounded-sm justify-between items-center">
        <h1 class="font-extrabold text-4xl"><a href="./index.php">PG GO</a></h1>
        <h3 class="font-bold text-xl">Welcome to PG GO</h3>
        <form action="" method="POST">
            <button type="submit" class="logout rounded-md border hover:border-white hover:bg-white hover:shadow-none text-white hover:text-blue-900 font-medium text-md px-4 bg-blue-700 border-blue-700 shadow-lg shadow-blue-600">User - Logout</button>
        </form>
    </header>


    <main class="px-20 pt-6 pb-12 w-full flex flex-col items-center">
        <h2 class="font-bold text-2xl mt-4">Your Booking Details :</h2>

        <div class="flex flex-col w-full items-center">
            <!-- Booking details -->
            <div class="booking flex flex-col border border-blue-200 rounded-md p-6 my-4 h-56 justify-between w-2/5 bg-white">
                <h3 class="font-extrabold text-2xl">RH PG</h3>
                <ol class="text-sm font-medium">
                    <li>Shared rooms (2 in 1)</li>
                    <li>Free Wifi</li>
                    <li>Free Food</li>
                </ol>
                <span class="font-bold text-md">Boys Hostel: Goalpara - Guwahati Rd</span>
            </div>

            <!-- Payment details -->
            <div class="payment flex flex-col py-4 w-1/2 items-center">
                <h1 class="font-extrabold text-3xl mt-6 mb-4">Payment Info :</h1>
                <span class="font-bold text-lg my-2 text-gray-500 mb-4">Payment Details</span>
                <!-- <div class="h-[1px] w-full bg-gray-200"></div> -->
                <!-- <p class="font-extrabold text-2xl">Price: <span id="amount">3000</span> Rs</p> -->

                <form action="" class="py-4 px-6 w-4/5 flex flex-col gap-4 items-center bg-white rounded-md border border-gray-200 shadow-lg">
                    <div class="flex gap-4 flex items-center w-full">
                        <label for="card" class="text-md font-medium w-[30%]">Card Number *</label>
                        <input type="text" name="card" class="w-[70%] px-3 py-2 border border-gray-300 rounded focus:outline-2 focus:outline-blue-400" placeholder="Enter your 16 digit card number" required>
                    </div>
                    <div class="flex gap-4 flex items-center w-full">
                        <label for="card" class="text-md font-medium w-[30%]">Expiration Date *</label>
                        <input type="month" name="card" class="w-[70%] px-3 py-2 border border-gray-300 rounded focus:outline-2 focus:outline-blue-400" placeholder="" required>
                    </div>
                    <div class="flex gap-4 flex items-center w-full">
                        <label for="card" class="text-md font-medium w-1/2">Security Code (CVV) *</label>
                        <input type="number" name="card" class="w-1/2 px-3 py-2 border border-gray-300 rounded focus:outline-2 focus:outline-blue-400" placeholder="3 digits CVV no." required>
                    </div>

                    <a href="" class="py-3 px-6 w-full text-center bg-blue-600 text-white rounded-lg hover:bg-blue-900 font-bold text-2xl" type="submit">Pay Now</a>
                </form>
            </div>
        </div>
    </main>
</body>

</html>