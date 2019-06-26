                       <table class="table table-bordered table-hover text-success">

                                
                                <thead>
                                    
                           
                                        <tr>
                                            <th>Id</th>
                                            <th>Username</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                          
                                            <th>Mobile Number</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                          
                                      
                                            
                                         </tr>


                               
                                </thead>

                                <tbody>




<?php



                $query="SELECT * FROM users ";
                $select_users_query= mysqli_query($connection ,$query) ;

               while ($row =mysqli_fetch_assoc($select_users_query)) 
               {
                   
                   
                    $user_id =$row['user_id'];
                    $username=$row['username'];

                    $user_passward=$row['user_passward'];
                    $user_firstname=$row['user_firstname'];
                    $user_lastname=$row['user_lastname'];
                    $user_email=$row['user_email'];
                  //  $user_image=$row['user_image'];
                    $mobile_number=$row['mobile_number'] ;
               
                  


                    echo "<tr>";
                    echo "<td> {$user_id }  </td>";
                    echo "<td> {$username}  </td>";
                    echo "<td> {$user_firstname} </td>";
                    echo "<td> {$user_lastname} </td>";
                    echo "<td> {$user_email} </td>";
                  //  echo "<td> <img width='100' src='../images/$user_image' alt='image'</td>";
                    echo "<td>{$mobile_number}</td>";


                  
                   echo "<td> <a onClick=\"javascript: return confirm('Are you sure to Edit '); \"  href='users.php?source=edit_user&edit_user_id={$user_id }'> Edit </a> </td>";
                    echo "<td> <a onClick=\"javascript: return confirm('Are you sure to delete '); \" href='users.php?delete={$user_id }'> Delete </a> </td>";
                    
                    
                    echo "</tr>";
                }



?>


                              
                                  
                                </tbody>
            
                            </table>

<?php

//Delete 
if (isset($_GET['delete'])) {
    # code...

    $delete_user_id =$_GET['delete'] ;
    $query="DELETE FROM users WHERE user_id = {$delete_user_id}" ;

    $delete_user_query=mysqli_query($connection,$query) ;

}





?>