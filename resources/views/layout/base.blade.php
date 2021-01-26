  <!doctype html>
  <head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <nav class="bg-gray-500 flex p-3 justify-between">
        <ul class="flex item-center">
            <li class="p-4"><a href=" {{ route('register') }} ">Créer un compte</a></li>
            <li class="p-4">Login</li>
            <li class="p-4">Dashboard</li>
        </ul>
        <p>SANDBOX</p>
        <ul class="flex item-center">
            <li class="p-4">David Perez</li>
            <li class="p-4">logout</li>
        </ul>
    </nav>
    @yield('content')
      
  </body>
  </html>