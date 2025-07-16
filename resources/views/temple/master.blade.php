<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fluid mb-5">
    <nav class="navbar navbar-expand-sm bg-info navbar-light">
        <div class="container-fluid">
          <ul class="navbar-nav">
             <li class="nav-item">
              <a class="nav-link active" href="/biodata">Biodata</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/pelanggan">pelanggan</a>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="/barang">barang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/kariyawan">kariyawan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/supplayer">supplayer</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/user">user</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/obat">obat</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
               {{ __('Logout') }}
           </a>

           <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
               @csrf
           </form>
            </li>
          </ul>
        </div>
      </nav>

    </div>
      @yield('content')








</body>
</html>
