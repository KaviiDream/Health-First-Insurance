<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OfferForm</title>

    <link rel="stylesheet" href="AddOffer.css">
</head>
<body>

<div class="container">
    <h1>Add Offers</h1><br>

    
       <form method="post" action="AddOffer.php">
    
          <label for="offerName">Offer Name:</label>
          <input type="text" id="ofName" name="name"><br>
          
          <label for="description">Description:</label>
          <input type="textarea" id="descript" name="descript"><br>
          
          <label for="startD">Start Date:</label>
            <input type="date" id="sDate" name="start"><br>
          
            <label for="endD">End Date:</label>
            <input type="date" id="eDate" name="end"><br>
        
            <label for="discount">Discount:</label>
            <input type="text" id="discount" name="disc"><br>
        
            <label for="code">Offer Code:</label>
            <input type="text" id="code" name="code"><br>
       
            <input type="submit" id="submit" value="ADD">
   
      </form>
    </div>

</body>
</html>