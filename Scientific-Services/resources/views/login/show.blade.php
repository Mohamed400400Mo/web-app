
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            background-image: url('https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEgmZ3DJ7z_ywr_1vKfCAlwtnlaWrWmtDuPtUtedt80VCpNat9rh2wqzpFcX8lpD8FYQY-MwvJVueZsaCEie4O5iYdCLqkTk1TJ4d62Oleq68FgUXD8pXqQ6YqqDsdyFG-cpVfOEXLEr8rE/s900/College.of.Computing.and.Artificial.jpg');
            background-size: cover;
            background-position: center;
            color: rgb(28, 23, 23);
        }

        .input-frame {
            max-width: 400px;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
        }

        label {
            display: block;
            font-size: 18px;
            margin-bottom: 5px;
        }

        input[type="id"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #f7f5f5;
            border-radius: 5px;
            background-color: #ffffff;
            outline: none;
        }

        input[type="id"]:focus,
        input[type="password"]:focus {
            border-color: #3b5998;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            background-color: #3b5998;
            color: white;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #2a4887;
        }

        .forgot-password {
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: rgb(51, 71, 244);
            display: block;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }
        
        /* Styling for the signup link */
        .signin-as-student-button {
            display: inline-block; /* Make the link behave like a block */
            padding: 10px 20px; /* Add padding */
            background-color: #3b5998; /* Blue background color */
            color: white; /* Text color */
            text-decoration: none; /* Remove underline */
            border-radius: 5px; /* Add rounded corners */
            transition: background-color 0.3s; /* Add transition for smoother hover effect */
        }

        .signin-as-student-button:hover {
            background-color: #2a4887; /* Darker blue on hover */
        }
         /* Styling for the signup link */
         .signin-as-employee-button {
            display: inline-block; /* Make the link behave like a block */
            padding: 10px 20px; /* Add padding */
            background-color: #3b5998; /* Blue background color */
            color: white; /* Text color */
            text-decoration: none; /* Remove underline */
            border-radius: 5px; /* Add rounded corners */
            transition: background-color 0.3s; /* Add transition for smoother hover effect */
        }

        .signin-as-employee-button:hover {
            background-color: #2a4887; /* Darker blue on hover */
        }

        
        .logout-button {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 10px 20px;
            background-color: #3b5998;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .logout-button:hover {
            background-color: #8f95a1;
        }
    </style>
</head>
<body>
      


    <div class="input-frame">
        <h1>Login Page</h1>
        <form id="loginForm"  method = "POST"  action="{{route('index.store-login-stu')}}">  
          @csrf  
            <div class="input-container">
                <label for="id">Username</label>
                <input type="id"  name = "Id"  placeholder="Enter your username" >
                @if (isset($error_filed) )  
                  <?php if (in_array("id" ,$error_filed)) echo " invalid username or password !" ; ?> <br />
                @endif
            </div>
            <div class="input-container">
                <label for="password">Password</label>
                <input type="password" id="password" name= "Password"  placeholder="Enter your password" >
             
            </div>
            <br>
<button class="signin-as-student-button" onclick="location.href='buttons (1).html'">Log in as Student</button>
<button class="signin-as-employee-button" onclick="location.href='employeebuttons.html'">Log in as Employee</button>

        </form>
        <a href="forgot_password.html" class="forgot-password">Forgot Password?</a>
    </div>
</div>    
<!-- Changed the <a> tag to a <button> tag with appropriate class -->
<button class="logout-button" onclick="location.href='{{route('index.index')}}'">Home</button>
</div>
    <!-- <script>
        function login(userType) {
            event.preventDefault();
            var form = document.getElementById('loginForm');
            if (userType === 'student') {
                form.action = "buttons(1).html";
            } else if (userType === 'employee') {
                form.action = "employeebuttons.html";
            }
            form.submit();
        }
    </script> -->
</body>
</html>
