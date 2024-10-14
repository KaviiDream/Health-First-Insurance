<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offers Details</title>
    <link rel="stylesheet" href="DisplayF.css">
    
</head>
<body>
    
    <h1>Offers Details</h1><br>

   <div> <button id="add" onClick="redirectToPage()">ADD</button></div>

   <br>
    <table>
        <tr>
            <th>id</th>
            <th>offerName</th>
            <th>descp</th>
            <th>startDate</th>
            <th>endDate</th>
            <th>discount</th>
            <th>code</th>
            <th>Action</th>
        </tr>
<!--php-->
        <?php include 'Display.php';?>

    </table>

    <script src="update.js"></script>
</body>
</html>
