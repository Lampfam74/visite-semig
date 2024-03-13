<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nieuwna-Semig</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">
    <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/js/adminlte.min.js"></script>

    {{-- <link rel="stylesheet" href="{{ asset('/css/jquery.dataTables.min.css') }}">
    <script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.1/css/dataTables.dataTables.css" />
        <script src="https://cdn.datatables.net/2.0.1/js/dataTables.js"></script> 
     <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<!-- include summernote css/js -->
{{-- <script type="text/javascript"  src="{{ asset('./js/jquery.min.js')}}"></script>
<script type="text/javascript"  src="{{ asset('/js/jquery.dataTables.min.js')}}"></script> --}}
</head>
<body>
    @include("visiteur.nav")
    @include("nav.sidebar")
    @yield("main")
   <script>
    $(document).ready(function() {
    $('#summernote').summernote();
    // datatable
   
    });
 

   </script>
</body>
</html>