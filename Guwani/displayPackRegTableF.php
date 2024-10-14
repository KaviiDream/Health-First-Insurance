<!DOCTYPE html>
<html lang="en">

<head>
    
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f8;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
            width: 100%;
            max-width: 600px;
        }

        form lable {
            font-size: 16px;
            color: #333;
            margin-right: 10px;
        }

        form input[type="text"] {
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: calc(100% - 140px);
        }

        form button {
            background-color: #0066cc;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-left: 10px;
        }

        form button:hover {
            background-color: #0057a3;
        }

        table {
            width: 100%;
            max-width: 1000px;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        table th,
        table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        table th {
            background-color: #4d79ff;
            color: white;
            text-transform: uppercase;
            font-size: 14px;
            letter-spacing: 1px;
        }

        table td {
            color: #333;
            font-size: 14px;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:hover {
            background-color: #e9f5ff;
        }
    </style>

     
</head>

<body>
    

    <form action="displayPackRegTableF.php" method="POST" style="display: flex; align-items: center;">
        <input type="text" name="searchId" style="flex: 1; padding: 10px; font-size: 14px; margin-right: 10px;" placeholder="Enter User ID :">
        <button style="padding: 10px 20px; font-size: 16px; background-color: #0066cc; color: white; border: none; border-radius: 5px; cursor: pointer;">
            <i class="fas fa-search" style="margin-right: 5px;"></i>
        </button>

    </form>


    <br><br>

    <table border="1">
        <tr>
            <th>Package Register ID</th>
            <th>User ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Date of Birth</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Package Name</th>
            <th>Medical Condition</th>
            <th>Custom</th>

        </tr>

        <?php include 'displayPackRegTableB.php'; ?>
    </table>

     

    <script src="updatePackDetail.js"></script>

     

</body>

</html>