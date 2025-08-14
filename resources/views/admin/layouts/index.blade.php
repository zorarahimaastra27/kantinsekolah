<!doctype html>
<html lang="en">
    @include('admin.layouts.head')

  <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
    @include('admin.layouts.header')
    @include('admin.layouts.navbar')
      <main class="app-main">
        
        <div class="app-content">
          <div class="container-fluid">

            @yield('content')

          </div>
        </div>
      </main>
        @include('admin.layouts.footer')
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script src="{{asset('assets/js/adminlte.js')}}//"></script>
  </body>
</html>
