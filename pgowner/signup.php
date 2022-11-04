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
        <form action="" class="flex flex-col justify-center items-center gap-3">
            <h1 class="font-extrabold text-2xl mb-3">Registration</h1>
            <input type="text" name="name" class="w-3/5 border border-blue-300 shadow-md focus:outline focus:outline-blue-600 px-3 py-2 text-sm rounded-sm" placeholder="Enter your full name">
            <input type="number" name="phone" class="w-3/5 border border-blue-300 shadow-md focus:outline focus:outline-blue-600 px-3 py-2 text-sm rounded-sm" placeholder="Enter your phone number (+91)">
            <input type="email" name="email" class="w-3/5 border border-blue-300 shadow-md focus:outline focus:outline-blue-600 px-3 py-2 text-sm rounded-sm" placeholder="Enter your email">
            <input type="password" name="password" class="w-3/5 border border-blue-300 shadow-md focus:outline focus:outline-blue-600 px-3 py-2 text-sm rounded-sm" placeholder="Enter your password">
            <input type="date" name="dob" class="w-3/5 border border-blue-300 shadow-md focus:outline focus:outline-blue-600 px-3 py-2 text-sm rounded-sm" placeholder="Enter your date of birth" onmouseover="showtitle()" id="dob">
            <label for="dob" id="dob-label" class="hidden absolute top-[63%] right-[29.5%] text-xs bg-gray-800 rounded text-gray-100 px-2 py-1">Enter your date of birth</label>
            
            <script>
                const dob = document.getElementById('dob');
                const dobLabel = document.getElementById('dob-label');
                function showtitle() {
                    dob.addEventListener('mouseenter', () => {
                        dobLabel.classList.remove('hidden');
                        dobLabel.classList.add('flex');
                    })
                    dob.addEventListener('mouseleave', () => {
                        dobLabel.classList.remove('flex');
                        dobLabel.classList.add('hidden');
                    })
                }
            </script>

            <button class="px-4 py-2 my-4 bg-blue-600 hover:bg-blue-800 rounded-sm text-white font-semibold shadow-md">
                <a href="">Sign up</a>
            </button>
        </form>

        <a href="./login.php" class="underline text-indigo-500 font-medium w-full flex justify-center mt-6 text-sm">Already have an account?</a>
    </section>
</body>

</html>