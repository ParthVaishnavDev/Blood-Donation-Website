<!DOCTYPE html>
<html>
<head>
    <title>Database Records</title>
    <style>
        :root {
    --border-color: #ddd; 
    --even-row-color: #f9f9f9; 
    --hover-row-color: #e2e2e2; 
    --table-border: 2px solid var(--border-color); 
    --cell-border: 1px solid var(--border-color);
}

body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            background-image: url('databg.jpg'); 
            background-size: cover; 
            background-repeat: no-repeat;
            background-size: cover;   
             }

h1 {
    text-align: center;
    margin-top: 20px;
    color: #333;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
    background-color: #fff;
    border: var(--table-border); 
}

th, td {
    border: var(--cell-border);
    padding: 12px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

tr:nth-child(even) {
    background-color: #e0f7fa;
    background-color: var(--even-row-color); 
}

tr:nth-child(odd) {
    background-color: #f8bbd0;
    background-color: var(--even-row-color); 
}

tr:hover {
    background-color: var(--hover-row-color); 
}

td:first-child, th:first-child {
    border-left: none;
}

td:last-child, th:last-child {
    border-right: none;
}

td, th {
    padding: 12px 8px;
}


tr:first-child th {
    border-top: var(--table-border);
}

tr:last-child td {
    border-bottom: var(--table-border); 
}

td:first-child, td:last-child {
    border-left: var(--cell-border); 
}

th:first-child, th:last-child {
    border-left: var(--cell-border); 
}


    </style>
</head>
<body>
    <h1>Database Records of Donors</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Blood Group</th>
            <th>Disease</th>
        </tr>
        <?php
        
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "blood_donors_db";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        
        $sql = "SELECT * FROM donors";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["first_name"] . "</td>";
                echo "<td>" . $row["middle_name"] . "</td>";
                echo "<td>" . $row["last_name"] . "</td>";
                echo "<td>" . $row["age"] . "</td>";
                echo "<td>" . $row["mobile"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["gender"] . "</td>";
                echo "<td>" . $row["blood_group"] . "</td>";
                echo "<td>" . $row["disease"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='10'>No records found</td></tr>";
        }

        $conn->close();
        ?>
        <tr>
    <td colspan="10" style="text-align: center; font-style: italic; font-size: 18px; padding: 20px;">
    Thank you for participating in donating blood and helping needy persons!
    </td>
</tr>
    </table>
</body>
</html>
