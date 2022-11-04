<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="./css/styles.css">
</head>

<body class="flex justify-center items-center w-full h-screen">
    <section class="bg-blue-200 w-2/5 p-10 rounded-md shadow-lg">
        <form action="" class="flex flex-col justify-center items-center gap-6">
            <h1 class="font-extrabold text-2xl">Login</h1>
            <input type="email" name="email" class="w-3/5 border border-blue-300 shadow-md focus:outline focus:outline-blue-600 px-3 py-2 text-sm rounded-sm" placeholder="Enter your email">
            <input type="password" name="password" class="w-3/5 border border-blue-300 shadow-md focus:outline focus:outline-blue-600 px-3 py-2 text-sm rounded-sm" placeholder="Enter your password">
            <a href="./index.php" class="px-4 py-2 bg-blue-600 hover:bg-blue-800 rounded-sm text-white font-semibold shadow-md shadow-blue-500">Login</a>
        </form>

        <a href="./signup.php" class="underline text-indigo-500 font-medium w-full flex justify-center mt-6 text-sm">Create an account</a>

        <hr class="mt-6">

        <div class="flex justify-between mt-6 items-center">
            <a href="./pgowner/login.php" class="px-4 text-red-700 font-bold underline">Are you a PG Owner? Click here</a>
            <a href="./admin/login.php" class="py-2 px-3 font-bold bg-lime-100 text-yellow-900 border rounded-md border-lime-700 shadow-md shadow-green-700">Admin Login</a>
        </div>
    </section>
</body>

</html>