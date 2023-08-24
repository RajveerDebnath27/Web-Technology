<?php
                    //fetch.php
                    $connect = mysqli_connect("localhost", "root", "", "sale");
                    $output = '';
                    if(isset($_POST["query"]))
                    {
                    $search = mysqli_real_escape_string($connect, $_POST["query"]);
                    /*$query = "
                    SELECT * FROM sale 
                    WHERE Name LIKE '%".$search."%'

                    OR ID LIKE '%".$search."%' 
                    OR Name '%".$search."%' 
                    OR Price LIKE '%".$search."%' 
                    OR email LIKE '%".$search."%'
                    OR phone LIKE '%".$search."%'
                    OR Location LIKE '%".$search."%'
                    OR apartment LIKE '%".$search."%'
                    ";*/

                    
                    
                   // {
                    $query = "SELECT * FROM rent WHERE Name LIKE '%".$_POST['query']."%'";
                    //}
                    $result = mysqli_query($connect, $query);
                    if(mysqli_num_rows($result) > 0)
                    {
                    $output .= '
                    <div class="table-responsive">
                    <table class="table table bordered">
                        <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>Location</th>
                    <br>
                    <th>apartment</th>
                        </tr>
                    ';
                    while($row = mysqli_fetch_array($result))
                    {
                    $output .= '

                                        <tr>
                                            <td>'.$row["ID"].'</td>
                         <td>'.$row["Name"].'</td>
                         <td>'.$row["Price"].'</td>
                         <td>'.$row["email"].'</td>
                         <td>'.$row["phone"].'</td>
                            <td>'.$row["Location"].'</td>

                         <td>'.$row["apartment"].'</td>
                                    </tr>
                    ';
                    

                    /*foreach($output as $row)  
                          {   
                              echo '<tr>
                               <td>'.$row["ID"].'</td>
                               <td>'.$row["Name"].'</td>
                               <td>'.$row["Price"].'</td>
                               <td>'.$row["email"].'</td>
                               <td>'.$row["phone"].'</td>
                               <td>'.$row["Location"].'</td>
                               <td>'.$row["apartment"].'</td>
                               </tr>'; 
                                
                          }*/ 
                          } 



                        echo $output;
                    }
                }
                    else
                    {
                        echo 'Search by Seller Name';
                    }

                    ?> 