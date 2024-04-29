<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up for Student</title>
    <style>
        body {
            background-image: url('https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgmZ3DJ7z_ywr_1vKfCAlwtnlaWrWmtDuPtUtedt80VCpNat9rh2wqzpFcX8lpD8FYQY-MwvJVueZsaCEie4O5iYdCLqkTk1TJ4d62Oleq68FgUXD8pXqQ6YqqDsdyFG-cpVfOEXLEr8rE/s900/College.of.Computing.and.Artificial.jpg'); /* Background image for student sign-up page */
            background-size: cover;
            background-position: center;
            color: rgb(30, 2, 2); /* Text color for better readability */
            position: relative; /* Position relative for absolute positioning */
        }

        /* Styling for the input frame */
        .input-frame {
            max-width: 400px; /* Set maximum width for the frame */
            margin: 0 auto; /* Center the frame horizontally */
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            padding: 20px; /* Add padding inside the frame */
            border-radius: 10px; /* Add rounded corners */
        }

        /* Styling for the header */
        h1 {
            text-align: center; /* Center-align the text */
            margin-top: 10px; /* Add some top margin for spacing */
        }

        /* Styling for input container */
        .input-container {
            margin-bottom: 15px; /* Add space between input containers */
        }

        /* Styling for labels */
        label {
            display: block; /* Make labels display as blocks */
            font-size: 18px; /* Set font size for labels */
            margin-bottom: 5px; /* Add space below labels */
        }

        /* Styling for input fields */
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%; /* Make input fields take full width */
            padding: 10px; /* Add padding for better appearance */
            font-size: 16px; /* Set font size for input fields */
            border: 1px solid #ddd; /* Add a light border */
            border-radius: 5px; /* Add rounded corners */
            background-color: #f6f6f6; /* Set background color */
            outline: none; /* Remove outline */
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #3b5998; /* Change border color on focus */
        }

        /* Styling for the signup link */
        .signup-button {
            display: inline-block; /* Make the link behave like a block */
            padding: 10px 20px; /* Add padding */
            background-color: #3b5998; /* Blue background color */
            color: white; /* Text color */
            text-decoration: none; /* Remove underline */
            border-radius: 5px; /* Add rounded corners */
            transition: background-color 0.3s; /* Add transition for smoother hover effect */
        }

        .signup-button:hover {
            background-color: #2a4887; /* Darker blue on hover */
        }

        /* Styling for logout button */
        .logout-button {
            position: absolute; /* Position absolute to position it in the top right corner */
            top: 20px; /* Distance from the top */
            right: 20px; /* Distance from the right */
            padding: 10px 20px; /* Add padding */
            background-color: #2a4887; /* Blue background color */
            color: white; /* Text color */
            border: none; /* Remove border */
            border-radius: 5px; /* Add rounded corners */
            cursor: pointer; /* Add cursor pointer */
            transition: background-color 0.3s; /* Add transition for smoother hover effect */
        }

        .logout-button:hover {
            background-color: #2a4887; /* Darker blue on hover */
        }
    </style>
</head>
<body>
    <div class="input-frame">
        <h1>Sign up for employee</h1>
        <div class="input-container">
            <label for="full-name">Full Name</label>
            <input type="text" id="full-name" placeholder="Enter your full name" required>
        </div>
        <div class="input-container">
            <label for="id">Phone Number</label>
            <input type="text" id="phone" placeholder="Enter your phone number" required>
        </div>
        <div class="input-container">
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Enter your email" required>
        </div>
        <div class="input-container">
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Enter your password" required>
        </div>
        
        <!-- Changed the <a> tag to a <button> tag with appropriate class -->
        <button class="signup-button" onclick="location.href='employeebuttons.html'">Sign Up</button>
        
        <!-- Changed the <a> tag to a <button> tag with appropriate class -->
<button class="logout-button" onclick="location.href='index (5).html'">Log Out</button>
    </div>
</body>
</html>
