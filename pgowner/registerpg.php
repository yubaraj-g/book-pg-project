<?php
include('../php/connect.php');
session_start();

if (!array_key_exists('owner_email', $_SESSION)) {
    echo "<script>alert('Initiate Owner Login.');</script>";

?>
    <meta http-equiv="refresh" content="0; url = http://localhost/prerna/pgowner/login.php" />
<?php

} else {
    if (isset($_POST['logout'])) {
        session_unset();
        session_destroy();

        $pgownerlogin = "./login.php";
        header('Location: ' . $pgownerlogin);
        die();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register PG - PG GO</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</head>

<body class="w-full text-gray-700 bg-blue-50">
    <header class="flex flex-end w-full bg-blue-400 py-4 px-20">
        <form method="POST">
            <button type="submit" name="logout" class="logout rounded-md border hover:border-white hover:bg-white hover:shadow-none text-white hover:text-blue-500 font-medium text-md px-4 py-2 bg-blue-700 border-blue-700 shadow-lg shadow-blue-600"><span id="owner-name"></span> - Logout</button>
        </form>

        <?php

        while (array_key_exists('owner_email', $_SESSION) == 1) {
            $owner_mail = $_SESSION['owner_email'];

            $check_owner = " SELECT * FROM pzp_owner_masters WHERE `owner_email` = '$owner_mail' ";
            $run_check_owner = mysqli_query($conn, $check_owner);
            $all_data = mysqli_fetch_assoc($run_check_owner);

            while ($all_data) {
                $_SESSION['owner_name'] = $all_data['full_name'];
                $ownerName = $_SESSION['owner_name'];

                echo "
                <script>
                    console.log('$ownerName');
                    document.getElementById('owner-name').innerHTML = '$ownerName';
                </script>
                ";


                break;
            }

            break;
        }

        ?>
    </header>

    <main class="px-20 w-full flex flex-col pb-16">
        <div class="w-full flex flex-start py-4 border-b border-gray-200">
            <h2 class="text-lg font-semibold text-gray-400">You don't have a PG listed.</h2>
        </div>

        <div class="flex w-full flex-col py-6 gap-6 items-center">
            <div class="flex flex-col w-3/5 bg-white rounded-md border border-blue-200 p-8 gap-6">
                <h1 class="font-extrabold text-3xl text-center text-blue-500">Register Your PG with Us</h1>
                <hr>
                <form action="./insertpg.php" method="POST" class="flex flex-col gap-4" id="pgregister">
                    <div class="flex gap-4 w-full justify-between items-center">
                        <label for="pgname" class="font-bold text-md w-1/3">Your PG Name :</label>
                        <input type="text" id="pgname" name="pgname" class="py-2 px-3 rounded w-2/3 border border-gray-300 outline-none focus:outline-3 focus:outline-blue-500" placeholder="Enter your PG name">
                    </div>
                    <div class="flex gap-4 w-full justify-between items-center">
                        <label for="addrs1" class="font-bold text-md w-1/3">Your PG Address Line 1 :</label>
                        <input type="text" id="addrs1" name="addrs1" class="py-2 px-3 rounded w-2/3 border border-gray-300 outline-none focus:outline-3 focus:outline-blue-500" placeholder="Enter your PG Address Line 1">
                    </div>
                    <div class="flex gap-4 w-full justify-between items-center">
                        <label for="addrs2" class="font-bold text-md w-1/3">Your PG Address Line 2 :</label>
                        <input type="text" id="addrs2" name="addrs2" class="py-2 px-3 rounded w-2/3 border border-gray-300 outline-none focus:outline-3 focus:outline-blue-500" placeholder="Enter your PG Address Line 2">
                    </div>
                    <div class="flex gap-4 w-full justify-between items-center">
                        <label for="pgtype" class="font-bold text-md w-1/3">Your PG Type</label>
                        <select form="pgregister" id="pgtype" name="pgtype" class="py-2 px-3 rounded w-2/3 border border-gray-300 outline-none focus:outline-3 focus:outline-blue-500">
                            <option value="">select an option</option>
                            <option value="shared">Shared Room</option>
                            <option value="single">Single Room</option>
                            <option value="both">Both</option>
                        </select>
                    </div>
                    <div class="flex gap-4 w-full justify-between items-center">
                        <label for="pgtype" class="font-bold text-md w-1/3">Wifi Option</label>
                        <select form="pgregister" id="wifi" name="wifi" class="py-2 px-3 rounded w-2/3 border border-gray-300 outline-none focus:outline-3 focus:outline-blue-500">
                            <option value="">select an option</option>
                            <option value="free wifi">Free Wifi</option>
                            <option value="no wifi">No Wifi</option>
                        </select>
                    </div>
                    <div class="flex gap-4 w-full justify-between items-center">
                        <label for="pgtype" class="font-bold text-md w-1/3">Food Option</label>
                        <select form="pgregister" id="food" name="food" class="py-2 px-3 rounded w-2/3 border border-gray-300 outline-none focus:outline-3 focus:outline-blue-500">
                            <option value="">select an option</option>
                            <option value="free food">Free Food</option>
                            <option value="food extra">Food Extra</option>
                        </select>
                    </div>
                    <div class="flex gap-4 w-full justify-between items-center">
                        <label for="pgcate" class="font-bold text-md w-1/3">Your PG Category</label>
                        <select form="pgregister" id="pgcate" name="pgcate" class="py-2 px-3 rounded w-2/3 border border-gray-300 outline-none focus:outline-3 focus:outline-blue-500">
                            <option value="">select an option</option>
                            <option value="boys">Boys</option>
                            <option value="girls">Girls</option>
                            <option value="unisex">Unisex</option>
                        </select>
                    </div>
                    <div class="flex gap-4 w-full justify-between items-center">
                        <label for="pgphoto" class="font-bold text-md w-1/3">Upload a picture of your PG :</label>
                        <input type="file" id="pgphoto" name="pgphoto" class="py-2 px-3 rounded w-2/3 border border-gray-300 outline-none focus:outline-3 focus:outline-blue-500">
                    </div>

                    <div class="w-full flex justify-center mt-4">
                        <button type="submit" name="submit" class="bg-blue-500 hover:bg-blue-700 py-2 px-4 rounded font-bold text-white text-lg shadow-lg shadow-blue-500 hover:shadow-none">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <section class="showPgList px-20 w-full flex flex-col pt-6 pb-16 gap-6">
        <div class="w-full flex justify-center">
            <h2 class="font-extrabold text-4xl text-blue-500">PGs listed by you</h2>
        </div>

        <div class="pgList w-full flex justify-center">
            <div class="flex w-3/5 h-80 border border-blue-200 rounded-sm shadow-lg p-6 bg-white gap-4">
                <div class="w-1/2 h-full flex flex-col gap-4 justify-between">
                    <h3 class="font-bold text-xl">RH PG</h3>
                    <p class="rating flex w-full gap-0.5 items-center">
                        <span class="text-xs mr-2 font-bold">Rating: </span>
                        <span class="text-xs mr-2 font-bold">3.2</span>
                        <img src="../img/star-fill.png" alt="" class="w-4">
                        <img src="../img/star-fill.png" alt="" class="w-4">
                        <img src="../img/star-fill.png" alt="" class="w-4">
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
                        <!-- <button class="bg-blue-600 px-4 py-2 text-white rounded-md shadow-md hover:shadow-lg hover:bg-blue-800 hover:shadow-blue-400"><a href="./payment.php">Book Now</a></button> -->
                    </div>
                </div>

                <div class="flex flex-col w-1/2 gap-4 h-full text-white">
                    <picture class="h-full">
                        <img src="../img/image1.jpg" alt="" class="object-cover w-full h-full">
                    </picture>
                </div>
            </div>
        </div>
    </section>

    <section class="showTenants px-20 w-full flex flex-col pt-6 pb-16 gap-6">
        <div class="w-full flex justify-center">
            <h2 class="font-extrabold text-4xl text-blue-500">Your Tenants List</h2>
        </div>

        <div class="w-full flex justify-center">
            <div class="flex w-3/5 h-80 border border-blue-200 rounded-sm shadow-lg p-6 bg-white gap-4">
                <!-- name phone email address age -->
                <div class="overflow-hidden rounded-md w-full">
                    <table class="w-full rounded-lg">
                        <tr class="bg-blue-300">
                            <th class="border border-blue-400 py-2 px-3 text-start">Name</th>
                            <th class="border border-blue-400 py-2 px-3">Phone</th>
                            <th class="border border-blue-400 py-2 px-3">Email</th>
                            <th class="border border-blue-400 py-2 px-3">Address</th>
                            <th class="border border-blue-400 py-2 px-3">Age</th>
                            <!-- <th class="border border-blue-400 py-2 px-3">PG Name</th> -->
                        </tr>
                        <tr class="bg-blue-50 text-sm">
                            <td class="border border-blue-400 py-2 px-3 text-start">Tenant 1</td>
                            <td class="border border-blue-400 py-2 px-3 text-center">1234567890</td>
                            <td class="border border-blue-400 py-2 px-3 text-center">xyz@gmail.com</td>
                            <td class="border border-blue-400 py-2 px-3 text-center">Hometown</td>
                            <td class="border border-blue-400 py-2 px-3 text-center">23</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
</body>

</html>