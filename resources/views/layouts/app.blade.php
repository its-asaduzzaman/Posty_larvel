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
    <nav class="p-6 bg-white flex justify-between mb-9">
        <ul class="flex ite">
            <li>
                <a href="/" class="p-3">Home</a>
            </li>
            <li>
                <a href=" {{route('dashboard')}} " class="p-3">Dashbord</a>
            </li>
            <li>
                <a href="{{ route('post') }}" class="p-3">Post</a>
            </li>
        </ul>

        <ul class="flex ite">
            @auth
            <li>
                <a href="" class="p-3">SAMRAT</a>
            </li>
            <li>
                <form action= "{{route('logout')}}" method= "post" class="p-3 inline" >
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </li>
            @endauth

            @guest
            <li>
                <a href="{{ route('login') }}" class="p-3">Login</a>
            </li>
            <li>
                <a href=" {{ route('register') }} " class="p-3">Register</a>
            </li>
            @endguest


        </ul>

    </nav>
    @yield('content')
</body>

</html>
