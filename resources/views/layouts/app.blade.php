<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-200">
    <nav class="p-6 bg-white flex justify-between ">
        <ul class="flex ite">
            <li>
                <a href="" class="p-3">Home</a>
            </li>
            <li>
                <a href="" class="p-3">Dashbord</a>
            </li>
            <li>
                <a href="" class="p-3">Post</a>
            </li>
        </ul>

        <ul class="flex ite">
            <li>
                <a href="" class="p-3">SAMRAT</a>
            </li>
            <li>
                <a href="" class="p-3">Login</a>
            </li>
            <li>
                <a href="" class="p-3">Register</a>
            </li>
            <li>
                <a href="" class="p-3">Login</a>
            </li>
        </ul>

    </nav>
    @yield('content')
</body>

</html>