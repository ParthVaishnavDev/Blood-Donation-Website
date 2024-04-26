<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('donor.jpg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: #fff;
        }
        h1 {
            text-align: center;
            color: white;
        }
        form {
            max-width: 400px;
            margin: 70px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 20px;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: red;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #A52A2A;
        }
        .register-link {
            text-align: center;
            margin-top: 10px;
            color: black;
        }
    </style>
</head>
<body>
    <h1>Login Form</h1>
    <form action="blooddatabase.php" >
        <label for="email" style="color:#818589">Email:</label>
        <input type="text" id="email" name="email" required>
        
        <label for="password" style="color:#818589">Password:</label>
        <input type="password" id="password" name="password" required maxlength="6">

        <input type="submit" value="Login">

        <div class="register-link">
            Not registered yet? <a href="blood.php" style="color: blue;">Click here to register</a>
        </div>
    </form>
</body>
</html>
