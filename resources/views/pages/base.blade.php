<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>McDonald's Attendance System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        body {
            background: url('{{ asset('images/mcdo-bg.png')}}') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Helvetica Neue', sans-serif;
            margin: 30px;
            padding: 0;
        }

        h1 {
            text-align: left;
            color: #000000; 
            padding: 20px;
        }

        h2 {
            text-align: justify; 
            color: #000000;
            padding: 10px;
            background: rgba(255, 255, 255, 0.696);
            border-radius: 10px;
        }



        .container {
            text-align: left;
            margin-top: 20px;
            margin-bottom: 20px;
            
        }

        .nav {
            display: flex;
            justify-content: center;
            background-color: #fff; 
            padding: 10px 0; 
            border-top: 2px solid #D10A10; 
            border-bottom: 2px solid #D10A10; 
        }

        .nav-item {
            margin: 0 15px;
        }

        .nav-link {
            text-decoration: none;
            color: #D10A10; 
            font-weight: bold;
            font-size: 18px;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: #000000; 
        }

        .nav-pills .nav-link.active, .nav-pills .show>.nav-link {
            color: var(--bs-nav-pills-link-active-color);
            background-color: #fd0d0d;
        }

    </style>
</head>
<body>
    <nav class="navbar navbar-light" style="background-color: #FFD100;">
        <h1> McDonald's Attendance System </h1>

        <ul class="nav justify-content-end float-right nav-pills">
            <li class="nav-item">
                <a class="nav-link mcdonalds-nav-link {{Route::is('home') ? 'active' : ''}}" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mcdonalds-nav-link {{Route::is('employees') ? 'active' : ''}}" href="{{ url('/employees') }}">Employees</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mcdonalds-nav-link {{Route::is('shifts') ? 'active' : ''}}" href="{{ url('/shifts') }}">Shifts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mcdonalds-nav-link {{Route::is('attendances') ? 'active' : ''}}" href="{{ url('/attendances') }}">Attendances</a>
            </li>
        </ul>
    </nav>

<div class="container mt-5">
    @yield('content')
</div>
    
</body>
</html>
