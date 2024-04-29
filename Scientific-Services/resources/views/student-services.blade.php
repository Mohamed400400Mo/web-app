<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student courses</title>
    <style>
    html,
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: linen;
        height: 100%;
        /* Set height to 100% to cover entire page */
    }

    header {
        padding: 10px 20px;
        font-size: 20px;
        margin: 20px;
        cursor: pointer;
        background-color: rgb(157, 67, 135);
        color: white;
        border: 12px;
        text-align: left;
        /* Align header text to the left */
        font-family: 'Arial Black', sans-serif;
        /* Change font family */
        display: flex;
        /* Align items horizontally */
        align-items: center;
        /* Vertically center items */
    }

    nav {
        background-color: hwb(135 63% 34% / 0.979);
        overflow: auto;
        text-align: center;
        /* Align nav content to the center */
    }

    nav a {
        background-color: hsl(315, 58%, 68%);
        color: #fff;
        text-align: center;
        padding: 10px;
        display: block;
        /* Display buttons as blocks to center them */
        margin: 10px auto;
        /* Center the buttons horizontally */
        width: 200px;
        /* Set a fixed width for the buttons */
        text-decoration: none;
    }

    nav a:hover {
        background-color: #9d56c9;
        /* Darker background color on hover */
        color: #fff;
        /* White text color on hover */
    }

    /* Styling for logout button */
    .logout-button {
        position: absolute;
        /* Position absolute to position it in the top right corner */
        top: 20px;
        /* Distance from the top */
        right: 20px;
        /* Distance from the right */
        padding: 10px 20px;
        /* Add padding */
        background-color: hsl(305, 65%, 29%);
        /* Blue background color */
        color: white;
        /* Text color */
        border: none;
        /* Remove border */
        border-radius: 5px;
        /* Add rounded corners */
        cursor: pointer;
        /* Add cursor pointer */
        transition: background-color 0.3s;
        /* Add transition for smoother hover effect */
    }

    .logout-button:hover {
        background-color: hsl(305, 65%, 29%);
        /* Darker blue on hover */
    }
    </style>
</head>

<body>
 

    <header>
        <img src="https://portal.arid.my/Images/b266a795-be0f-499c-9fd0-9933297f6012.jpg" alt="Logo"
            style="height: 50px; margin-right: 10px;"> <!-- Add your logo here -->
        Scientific Services
    </header>
       
 <?php
 if(session('id'))
 { 
     echo ' Welcome '.$student->name ;  // <a href = "logout.php "> logout </a> </p>' 
    
 } 
 else { 
     
     //   header("location:login.show ") ;

     }
 ?>

    <nav>

        <a href="{{route('service.show',1)}}" target="_self">Reasons to graduate</a>
        <br>
        <a href="payment of drains.html" target="_self">payment of drains</a>
        <br>
        <a href="Registeranorder.html" target="_self">Register an order</a>
        <br>
        <a href="{{route('service.show',4)}}" target="_self">graduation certification</a>
    </nav>
    </div>
    <!-- Changed the <a> tag to a <button> tag with appropriate class -->
    <button class="logout-button" onclick="location.href='index (5).html'">Log Out</button>
    </div>
</body>

</html>