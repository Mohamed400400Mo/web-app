<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scientific Services</title>
    <style>
        body {
            background-color: #f0f0f0;
        }
        .container {
            display: flex;
            justify-content: center;
            margin-top: 50px;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
        }

        .logo-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .logo {
            cursor: pointer;
            margin: 10px;
            width: 150px; /* Control logo size */
            height: auto; /* Maintain aspect ratio */
        }

        /* Styling for labels */
        .label {
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            color: #333;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Scientific Services</h1>
    <div class="container">
        <div class="logo-container">
            <a href="{{route('index.show',1)}}"><img src="https://cdn-icons-png.flaticon.com/256/3795/3795330.png" alt="Login" class="logo"></a>
            <span class="label">Login</span>
        </div>
        <div class="logo-container">
            <a href="{{route('index.show',2)}}"><img src="https://www.liceo.ph/student-portal/assets/img/logo-2.png" alt="Sign up for Student" class="logo"></a>
            <span class="label">Sign up for Student</span>
        </div>
        <div class="logo-container">
            <a href="{{route('index.show',3)}}"><img src="https://icon-library.com/images/staff-icon-png/staff-icon-png-15.jpg" alt="Sign up for Employee" class="logo"></a>
            <span class="label">Sign up for Employee</span>
        </div>
    </div>
</body>
</html>
