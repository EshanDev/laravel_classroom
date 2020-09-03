<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ห้องเรียน / ห้องอบรม</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('css/classroom.css') }}">
    <script src="https://kit.fontawesome.com/915c079cb9.js" crossorigin="anonymous"></script>
</head>

<body>

    <div id="app">
        <classroom></classroom>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/app-classroom.js') }}"></script>

</body>

</html>