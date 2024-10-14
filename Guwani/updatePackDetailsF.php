
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
            }
            .form-container {
                width: 500px;
                margin: 50px auto;
                padding: 30px;
                background-color: #fff;
                box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
            }
            h1.p1 {
                text-align: center;
                color: #0066cc;
                font-size: 24px;
                margin-bottom: 20px;
            }
            .form-group {
                margin-bottom: 20px;
            }
            label {
                display: block;
                font-size: 14px;
                color: #333;
                margin-bottom: 8px;
            }
            input, select {
                width: 100%;
                padding: 10px;
                font-size: 14px;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-sizing: border-box;
                transition: all 0.3s ease;
            }
            input:focus, select:focus {
                border-color: #0066cc;
                outline: none;
            }
            .gender-options {
                display: flex;
                gap: 20px;
            }
            .gender-options label {
                font-size: 14px;
                color: #333;
            }
            .select-container {
                margin-top: 10px;
            }
            button.button {
                width: 100%;
                padding: 12px;
                font-size: 16px;
                background-color: #0066cc;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }
            button.button:hover {
                background-color: #004999;
            }
            .form-group-checkbox {
                display: flex;
                align-items: center;
                margin-top: 20px;
            }
            .form-group-checkbox input[type='checkbox'] {
                margin-right: 10px;
            }
            .form-group-checkbox label {
                font-size: 14px;
            }
        </style>
        
<?php

require_once 'connection.php';

if (isset($_GET['id'])) {
    $cRId = $_GET['id'];
    $sql = "SELECT * FROM pack_register WHERE RId='$cRId'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $cRId = $row['RId'];
        $cUId = $row['UId'];
        $cName = $row['Name'];
        $cAddress = $row['Address'];
        $cPNo = $row['PNo'];
        $cEmail = $row['Email'];
        $cDOB = $row['DOB'];
        $cAge = $row['Age'];
        $cGender = $row['Gender'];
        $cPackName = $row['PackName'];
        $cMedCon = $row['MedCon'];

        

        echo "<div class='form-container'>";
        echo "<form id='form' method='POST' action='updatePackDetailsB.php'>";
        echo "<h1 class='p1'>Update Package Registration Form</h1>";
        echo "<div class='form-group'>";
        echo "<input type='hidden' name='RId' value='".$cRId."'>";
        echo "<label for='reg'>User ID:</label>";
        echo "<input type='text' id='reg' name='userId' value='".$cUId."' required readOnly>";
        echo "</div>";

        echo "<div class='form-group'>";
        echo "<label for='fname'>Full name:</label>";
        echo "<input type='text' id='fname' name='fname' value='".$cName."' required>";
        echo "</div>";

        echo "<div class='form-group'>";
        echo "<label for='address'>Address:</label>";
        echo "<input type='text' id='address' name='address' value='".$cAddress."' required>";
        echo "</div>";

        echo "<div class='form-group'>";
        echo "<label for='phone'>Phone Number:</label>";
        echo "<input type='tel' id='phone' name='phone' value='".$cPNo."' required>";
        echo "</div>";

        echo "<div class='form-group'>";
        echo "<label for='email'>Enter your email:</label>";
        echo "<input type='email' id='email' name='email' value='".$cEmail."' required>";
        echo "</div>";

        echo "<div class='form-group'>";
        echo "<label for='dob'>Date of Birth:</label>";
        echo "<input type='date' id='dob' name='dob' value='".$cDOB."' required>";
        echo "</div>";

        echo "<div class='form-group'>";
        echo "<label for='age'>Age:</label>";
        echo "<input type='text' id='age' name='age' value='".$cAge."' required>";
        echo "</div>";

        echo "<div class='form-group'>";
        echo "<label>Gender:</label>";
        echo "<div class='gender-options'>";
        echo "<label><input type='radio' id='male' name='gender' value='Male' ".($cGender == 'Male' ? 'checked' : '')."> Male</label>";
        echo "<label><input type='radio' id='female' name='gender' value='Female' ".($cGender == 'Female' ? 'checked' : '')."> Female</label>";
        echo "</div>";
        echo "</div>";

        echo "<div class='form-group'>";
        echo "<label for='details'>Select Your Insurance Plan:</label>";
        echo "<select id='details' name='details' required>";
        echo "<option value='personal' ".($cPackName == 'personal' ? 'selected' : '').">Personal plan</option>";
        echo "<option value='family' ".($cPackName == 'family' ? 'selected' : '').">Family plan</option>";
        echo "<option value='children' ".($cPackName == 'children' ? 'selected' : '').">Children Plan</option>";
        echo "<option value='complete' ".($cPackName == 'complete' ? 'selected' : '').">Complete Coverage plan</option>";
        echo "</select>";
        echo "</div>";

        echo "<div class='form-group'>";
        echo "<label for='medical'>Pre-existing Medical Conditions:</label>";
        echo "<select id='medical' name='medical' required>";
        echo "<option value='good' ".($cMedCon == 'good' ? 'selected' : '').">Good</option>";
        echo "<option value='bad' ".($cMedCon == 'bad' ? 'selected' : '').">Bad</option>";
        echo "</select>";
        echo "</div>";

        echo "<div class='form-group-checkbox'>";
        echo "<center><input type='checkbox' id='checkbox' required></center>";
        echo "<label for='checkbox'>Confirm the details of the above form</label>";
        echo "</div>";

        echo "<button class='button' type='submit'>Update</button>";
        echo "</form>";
        echo "</div>";
    } else {
        echo "No record available";
    }
} else {
    echo "ID parameter is missing";
}
?>
