<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="bg-blue-100 w-full h-screen flex flex-col text-gray-700">
    <header class="flex bg-blue-500 h-24 shadow-md px-20 items-center justify-between border-b border-blue-400">
        <h1 class="font-bold text-xl text-white py-1 border-b-2 border-white">Admin Panel</h1>
        <button class="py-2 px-4 font-medium text-sm bg-blue-100 hover:bg-blue-700 text-black hover:text-white rounded-sm shadow-md border-4 border-blue-800">PG Lists</button>
        <button class="py-2 px-4 font-medium text-sm bg-blue-100 hover:bg-blue-700 text-black hover:text-white rounded-sm shadow-md">PG Requests</button>
        <button class="py-2 px-4 font-medium text-sm bg-red-800 hover:bg-blue-100 text-white hover:text-red-900 rounded-sm shadow-md">Logout</button>
    </header>

    <main class="px-20 h-fit py-12 flex flex-col gap-6">
        <h2 class="font-extrabold text-xl text-gray-700">List of the existing Paying Guest Homes</h2>

        <div class="overflow-hidden rounded-md w-full border border-blue-500">
            <table class="w-full rounded-lg">
                <tr class="bg-blue-300">
                    <th class="border border-blue-400 py-2 px-3 text-start w-2/6">Name</th>
                    <th class="border border-blue-400 py-2 px-3">Type</th>
                    <th class="border border-blue-400 py-2 px-3">Price</th>
                    <th class="border border-blue-400 py-2 px-3">View</th>
                </tr>
                <tr class="bg-blue-50 text-sm">
                    <td class="border border-blue-400 py-2 px-3 text-start w-2/6">PG 1</td>
                    <td class="border border-blue-400 py-2 px-3 text-center">Shared</td>
                    <td class="border border-blue-400 py-2 px-3 text-center">4000</td>
                    <td class="border border-blue-400 py-2 px-3">
                        <button class="bg-blue-600 py-1 px-2 text-white hover:bg-blue-900 shadow-md flex justify-center mx-auto w-1/3">View Details</button>
                    </td>
                </tr>
                <tr class="bg-blue-50 text-sm">
                    <td class="border border-blue-400 py-2 px-3 text-start w-2/6">PG 1</td>
                    <td class="border border-blue-400 py-2 px-3 text-center">Shared</td>
                    <td class="border border-blue-400 py-2 px-3 text-center">4000</td>
                    <td class="border border-blue-400 py-2 px-3">
                        <button class="bg-blue-600 py-1 px-2 text-white hover:bg-blue-900 shadow-md flex justify-center mx-auto w-1/3">View Details</button>
                    </td>
                </tr>
                <tr class="bg-blue-50 text-sm">
                    <td class="border border-blue-400 py-2 px-3 text-start w-2/6">PG 1</td>
                    <td class="border border-blue-400 py-2 px-3 text-center">Shared</td>
                    <td class="border border-blue-400 py-2 px-3 text-center">4000</td>
                    <td class="border border-blue-400 py-2 px-3">
                        <button class="bg-blue-600 py-1 px-2 text-white hover:bg-blue-900 shadow-md flex justify-center mx-auto w-1/3">View Details</button>
                    </td>
                </tr>
                <tr class="bg-blue-50 text-sm">
                    <td class="border border-blue-400 py-2 px-3 text-start w-2/6">PG 1</td>
                    <td class="border border-blue-400 py-2 px-3 text-center">Shared</td>
                    <td class="border border-blue-400 py-2 px-3 text-center">4000</td>
                    <td class="border border-blue-400 py-2 px-3">
                        <button class="bg-blue-600 py-1 px-2 text-white hover:bg-blue-900 shadow-md flex justify-center mx-auto w-1/3">View Details</button>
                    </td>
                </tr>
                <tr class="bg-blue-50 text-sm">
                    <td class="border border-blue-400 py-2 px-3 text-start w-2/6">PG 1</td>
                    <td class="border border-blue-400 py-2 px-3 text-center">Shared</td>
                    <td class="border border-blue-400 py-2 px-3 text-center">4000</td>
                    <td class="border border-blue-400 py-2 px-3">
                        <button class="bg-blue-600 py-1 px-2 text-white hover:bg-blue-900 shadow-md flex justify-center mx-auto w-1/3">View Details</button>
                    </td>
                </tr>
                <tr class="bg-blue-50 text-sm">
                    <td class="border border-blue-400 py-2 px-3 text-start w-2/6">PG 1</td>
                    <td class="border border-blue-400 py-2 px-3 text-center">Shared</td>
                    <td class="border border-blue-400 py-2 px-3 text-center">4000</td>
                    <td class="border border-blue-400 py-2 px-3">
                        <button class="bg-blue-600 py-1 px-2 text-white hover:bg-blue-900 shadow-md flex justify-center mx-auto w-1/3">View Details</button>
                    </td>
                </tr>
            </table>
        </div>
    </main>
</body>

</html>