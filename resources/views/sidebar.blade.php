<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App</title>

    <script src="https://kit.fontawesome.com/ddcba43d81.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand d-flex flex-column align-item-start">
        <a href="/" class="w-100 navbar-brand text-light mt-4 mb-2 pl-1">
            <div class="h3 font-weight-bold pl-4">BRAND LOGO</div>
        </a>
        <ul class="navbar-nav d-flex flex-column mt-2 w-100">
            <li class="nav-item w-100">
                <a href="/" class="nav-link pl-4 font-weight-bold"><i class="fas fa-home pr-2"></i> Anasayfa</a>
            </li>
            <li class="nav-item w-100">
                <a href="/calisanlar" class="nav-link pl-4 font-weight-bold"><i class="fas fa-address-card pr-2"></i> Çalışanlar</a>
            </li>
            <li class="nav-item w-100">
                <a href="/musteriler" class="nav-link pl-4 font-weight-bold"><i class="fas fa-users pr-2"></i> Müşteriler</a>
            </li>
            <li class="nav-item w-100">
                <a href="/araclar" class="nav-link pl-4 font-weight-bold"><i class="fas fa-truck pr-2"></i> Araçlar</a>
            </li>
            <li class="nav-item w-100">
              <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="#" onclick="event.preventDefault();this.closest('form').submit();" class="nav-link pl-4 font-weight-bold"><i class="fas fa-sign-out-alt pr-2"></i> Çıkış Yap</a>
              </form>
            </li>

        </ul>

    </nav>

    @yield('content')


</body>
</html>
