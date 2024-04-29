<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: rgb(250, 255, 255);
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        p {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            height: 150px;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://cu.edu.eg/ar/images/fac/1.jpg" alt="Logo" style="display: block; margin: 0 auto; width: 200px;">
        <h1>دواعى التخرج-Graduation Reasons</h1>
        <p>
            
            (IF you have 85 hours or 84 hours + GPA >2) 
         <br>
            Register 7 courses
            (IF GPA>2)
        </p>
        <form action="{{route('submit_reason')}}" method="POST">
            @csrf
            <div class="input-container">
                <label for="id">ID</label>
                <input type="text" id="id" name="Id" placeholder="Enter your ID">
            </div>
            <div class="form-group">
                <label for="reasonsgraduate">Message</label>
                <textarea id="reasonsgraduate" name="Reasons_Graduation" placeholder="Enter your message" required></textarea>
            </div>
                <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>