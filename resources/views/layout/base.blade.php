<!doctype html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
  <nav class="bg-gray-500 flex p-3 justify-between">
    <ul class="flex item-center">
      @auth
      <li>
        <a class="p-4">David Perez</a>
      </li>
      <li>
        <a class="p-4">logout</a>
      </li>
      @endauth
      @guest
      <li>
        <a class="p-4" href=" {{ route('login') }}">Login</a>
      </li>
      <li>
        <a class="p-4" href=" {{ route('register') }} ">Register</a>
      </li>
      @endguest
      <li>
        <a class="p-4" href=" {{ route('dashboard') }}">Dashboard</a>
      </li>
    </ul>
    <ul class="flex item-center">
      <li class="p-4">SANDBOX</li>
    </ul>
    <ul class="flex item-center">
      <a class="p-4" href="{{ route('/') }}">Home</a>
    </ul>
  </nav>
  @yield('content')

</body>

</html>