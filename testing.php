<?php

            session_start(); 

                require 'config.php';
            
                if (isset($_SESSION['NIC']) && isset($_SESSION['Lname'])) {
                    $NIC = $_SESSION['NIC'];
                    $Lname = $_SESSION['Lname'];

                $sql = "SELECT AccountID,FirstName,LastName,NIC,Age,DOB,Email,ContactNO,Bio FROM `user-profiles` 
                        WHERE NIC='$NIC' AND LastName='$Lname' ORDER BY AccountID DESC LIMIT 1" ;

                $result = $conn->query($sql);

                if($result->num_rows>0)
                        {
                        
                        while($row = $result->fetch_assoc()){
                            
                          
                            
                            echo "Account ID : ".$row["AccountID"]."<br>First Name : ".$row["FirstName"]."<br>Last Name : ".$row["LastName"]."<br>NIC : ".$row["NIC"]."<br>Age : ".$row["Age"]."<br> Date of Birth : ".$row["DOB"]."<br> Email : ".$row["Email"]."<br>Contact Number : ".$row["ContactNO"]."<br>";
                            
                           
                        }
                        
                       
                        }
                
                        else{
                            
                            echo "No results";
                        }
                        
                    }

                    else {
                        
                        echo "No user information found in session.";
                    }
            ?>