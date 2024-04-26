<!DOCTYPE html>
<html>
<head>
    <title>Registration Form</title>
</head>
<body>
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

        h2 {
            font-family: serif;
            font-weight: bold;
            color: white;
            text-align:center;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"],
        select,
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            background-color: #FF0000;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #d1392e;
        }

        .error {
            color: red;
            margin-bottom: 10px;
        }
    </style>
    <?php
   
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "blood_donors_db";

    
    $conn = new mysqli($servername, $username, $password, $dbname);

    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $firstName = $_POST["first_name"];
        $middleName = $_POST["middle_name"];
        $lastName = $_POST["last_name"];
        $age = $_POST["age"];
        $mobile = $_POST["mobile"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $bloodGroup = $_POST["blood_group"];
        $disease = $_POST["disease"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT); 

       
        $nonDonorDiseases = ["Hypertension", "Diabetes", "Asthma", "Arthritis", "Cancer", "Heart Disease","HIV/AIDS","Infectious Disease","Autoimmune Disease"];
       
        $check_query = "SELECT * FROM donors WHERE email = '$email' OR mobile = '$mobile'";
        $result = $conn->query($check_query);
        if ($result->num_rows > 0) {
        echo "Email or mobile number already exists.";

        }
        if (in_array($disease, $nonDonorDiseases)) {
            echo "Sorry, you cannot donate blood due to your medical condition.";
        } else {
            
            $stmt = $conn->prepare("INSERT INTO donors (first_name, middle_name, last_name, age, mobile, email, gender, blood_group, disease, password_hash)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("sssiisssss", $firstName, $middleName, $lastName, $age, $mobile, $email, $gender, $bloodGroup, $disease, $password);

            if ($stmt->execute()) {
                
                header("Location: login.php");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        }
    }


    
    $conn->close();
    ?>

    <h2>Registration Form for Donor</h2>
    <form method="POST" action="">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br><br>

        <label for="middle_name">Middle Name:</label>
        <input type="text" id="middle_name" name="middle_name"><br><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" maxlength="3" required><br><br>

        <label for="mobile">Mobile No:</label>
        <input type="text" id="mobile" name="mobile" maxlength="10" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <table>
        <tr>
            <td style="color:#818589">Gender:</td>
            <td style="color:black">Male<input type="radio" name="gender" value="male"></td>
            <td style="color:black">Female<input type="radio" name="gender" value="female"></td>
        </tr>
        </table>
       </label><br><br>

        <label for="blood_group">Blood Group:</label>
        <select id="blood_group" name="blood_group" required>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </select><br><br>

        <label for="disease">Disease:</label>
        <select id="disease" name="disease">
            <option value="None">None</option>
            <option value="Hypertension">Hypertension</option>
            <option value="Diabetes">Diabetes</option>
            <option value="Asthma">Asthma</option>
            <option value="Arthritis">Arthritis</option>
            <option value="Cancer">Cancer</option>
            <option value="HIV/AIDS">HIV/AIDS</option>
            <option value="Infectious Disease">Infectious Disease</option>
            <option value="Autoimmune Disease">Autoimmune Disease</option>

            </select><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" maxlength="6" required><br><br>

        <input type="submit" value="Register">
    </form>
</body>
</html>
