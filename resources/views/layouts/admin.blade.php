<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin Panel' }}</title>

    <link href="{{ asset('assets/img/favicon.png" rel=') }}"icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Admin Template CSS
   <!-- Vendor CSS Files -->
  <link href="admin-assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="admin-assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="admin-assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="admin-assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="admin-assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="admin-assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="admin-assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="admin-assets/css/style.css" rel="stylesheet">

    @livewireStyles
    
</head>
<body>

    @livewire('admin.navbar')
    @livewire('admin.sidebar')

    <main class="p-4" style="min-height: 100vh;">
        {{-- @yield('content') --}}
        {{ $slot }}
    </main>

    <!-- Vendor JS Files -->
    <script src="admin-assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="admin-assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="admin-assets/vendor/chart.js/chart.umd.js"></script>
    <script src="admin-assets/vendor/echarts/echarts.min.js"></script>
    <script src="admin-assets/vendor/quill/quill.js"></script>
    <script src="admin-assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="admin-assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="admin-assets/vendor/php-email-form/validate.jscript"></script>

  
   {{--  --}}
    <script src="admin-assets/js/main.js"></script>
    

    @livewireScripts
</body>
</html>
