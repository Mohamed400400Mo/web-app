<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graduation Certificate - شهادة التخرج</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px #e378cf1a;
            max-width: 600px;
            margin: 0 auto;
        }

        img.logo {
            display: block;
            margin: 0 auto;
            width: 200px;
        }

        h1.title {
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 16px;
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        .form-input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form-submit {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .form-submit:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://cu.edu.eg/ar/images/fac/1.jpg" alt="Logo" class="logo">
        <h1 class="title">Graduation Certificate - شهادة التخرج</h1>

        <form action="{{route('graduation_certificate.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="id">ID</label>
                <textarea id="id" name="Id" class="form-input" placeholder="Enter your ID" required></textarea>
            </div>
            <div class="form-group">
                <label for="graduationcertificate">Message</label>
                <textarea id="graduationcertificate" name="Graduation_Certificate" class="form-input" placeholder="Enter your message" required></textarea>
            </div>
            <div class="form-group">
                <label for="photo">Personal Picture</label>
                <input type="file" id="photo" name="photo" class="form-input" accept="image/*" required>
            </div>
            <input type="submit" value="Submit" class="form-submit">
        </form>
    </div>
</body>
</html>