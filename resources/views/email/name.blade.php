<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ @asset('./css/mdb.min.css') }}">
    <script src="{{ @asset('./js/mdb.min.js') }}"></script>
</head>
<body>
    <tr>
        <td>
          <div class="d-flex align-items-center">
          
          <div class="ms-3">
              <p class="fw-bold mb-1"> nom complet :{{ $visites->prenom }} {{ $visites->nom }}</p> <br>
              <p class="text-muted mb-0">telephone : <a href="tel:{{ $visites->telephone }}">{{ $visites->telephone }}</a></p> <br>
              <p class="text-muted mb-0">Direction : {{ $visites->direction }}</p> <br>
              <p class="text-muted mb-0">destination : {{ $visites->destination }}</p> <br>
            </div>
          </div>
        </td>
        {{-- <img src="{{ $visites->embed($img) }}"> --}}
</body>
</html>