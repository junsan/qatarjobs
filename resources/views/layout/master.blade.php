<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>QatarJobs.Online | Qatar Jobs</title>

    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ url('assets/css/font-awesome.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-N2R77TRE5B"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-N2R77TRE5B');
    </script>

    </head>
    
    <body>
   <!-- ***** Header Area ***** -->
    @include('layout.header')

    
    <!-- ***** Content Start ***** -->
    @yield('content')
    <!-- ***** Content End ***** -->

    
    <!-- ***** Footer Area ***** -->
    @include('layout.footer')

    <script>
      $(document).ready(function() {
          $('#summernote').summernote({
            height: 300
          });
      });
  </script>
  </body>
</html>