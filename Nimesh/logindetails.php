<style>
    .welcome{
        font-size:48px;
        text-align:center;
        margin-top:10%;
        margin-left:20%;
        margin-right:20%;
        border:2px solid black;
        background-color: rgb(184, 214, 240);   
        
    }
    h2{
        font-size:60px;
    }
    button{
        font-size:28px;
        padding:10px;
        
        
    }

    a{
        text-decoration: none;
    }

</style>
<?php

    require 'config.php';

    $uName = $_POST['uname'];
    $uPass = $_POST['password'];

    if(isset($_POST['submit']))
    {
        if($uName == null || $uPass == null)
        {
            echo "<script>
            alert('ALL REQUIRED');
            window.location.href = 'login.html';
            </script>";
        }
        else {
             $sql = "SELECT * FROM login WHERE user_name='$uName' AND password='$uPass'";
             $result =$conn->query($sql);
             if($result->num_rows > 0)
             {
                while($row=$result->fetch_assoc())
                {
                    $type=$row['userType'];

                    if ($type == "admin")
                    {
                        $Aname=$row['name'];
                        $dID = $row['Dept_ID'];
                        $Dname = $row['Dept_Name'];
                        $Aemail = $row['email'];
                        $Acont = $row['Contact'];
                        $uID = $row['UserID'];
                        echo"<div class='welcome'>";
                        echo"<h2>"."<b>"."Welcome to HEALTHFIRST"."</b>"."</h2>";
                        echo $row['name']."<br>"."<br>";
                        echo"<button>"."<a href='admintest.php?i=$Aname&m=$dID&n=$Dname&o=$Aemail&p=$Acont&q=$uID'>"."Continue"."</a>"."</button>";
                        echo"<br>"."<br>";
                        echo "</div>";
                        


                    }
                     else
                    {
                        echo"<div class='welcome'>";
                        echo"<h2>"."<b>"."Welcome to HEALTHFIRST"."</b>"."</h2>";
                        echo $row['name']."<br>"."<br>";
                        echo"<button>"."<a href='User Profile.php'>"."Continue"."</a>"."</button>";
                        echo"<br>"."<br>";
                        echo "</div>";

                    }
                }

                
             }
             else
             {
                echo "<script>
                alert('Incorrect User Name or Password ');
                window.location.href = 'login.html';
                </script>";
             }

        }

    }

    
   
    
   








?>