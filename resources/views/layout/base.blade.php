<!doctype html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-gray-200">
  <nav class="bg-white flex p-4 justify-between mb-6">
    <ul class="flex items-center">
      <li>
        <a class="p-4" href="{{ route('/') }}">Home</a>
      </li>
      <li>
        <a class="p-4" href=" {{ route('dashboard') }}">Dashboard</a>
      </li>
    </ul>
    <ul>
      <li>
        Sandbox
      </li>
    </ul>

    @auth
    <ul class="flex items-center">
      <li>
        <a class="p-4">{{ auth()->user()->name }}</a>
      </li>
      <li>
        <form action="{{route('logout')}}" method="post" class="inline p-4">
          @csrf
          <button type="submit">Logout</button>
        </form>
      </li>
      @endauth
    </ul>

    @guest
    <ul class="flex items-center">
      <li>
        <a class="p-4" href=" {{ route('login') }}">Login</a>
      </li>
      <li>
        <a class="p-4" href=" {{ route('register') }} ">Register</a>
      </li>
      @endguest
    </ul>


  </nav>
  @yield('content')

</body>

</html>