<?php




        function escape($string){

            global $connection ;

            return mysqli_real_escape_string($connection,trim($string) );
        }
        function user_online(){


            global $connection ;

             $session=session_id();
            $time=time() ;
            $time_out_in_second=60;
            $time_out=$time-$time_out_in_second ;



            $query="SELECT * FROM users_online WHERE session = '{$session}' ";
            $send_query=mysqli_query($connection,$query) ;

            $count=mysqli_num_rows($send_query) ;

            if ($count == NULL) {

                mysqli_query($connection,"INSERT INTO users_online(session, time) VALUES ( '{$session}' ,'{$time}' )"  );
            }
            else
            {
                mysqli_query($connection,"UPDATE users_online SET time = {$time} WHERE session ={$session} " );
            }

            $users_online_query=  mysqli_query($connection ,"SELECT * FROM users_online WHERE time >{$time_out} " ) ; 
            $users_online_count=mysqli_num_rows($users_online_query) ;

            return $users_online_count ;

        }
        
        function confirmQuery($result)
        {
            global $connection ;
             if (!$result) {

               die("QUERY FAILED " .mysqli_error($connection)) ;
            }
        }


        function insert_categories(){

                global $connection;

                if (isset($_POST['submit'])) {

                      //  echo " post successful ";
                         $cat_title=$_POST['cat_title'] ;
                      //  echo $cat_title;

                        if ($cat_title =="" || empty($cat_title)) {
                            echo "Category Title should not empty ";
                            # code...
                        }

                        else
                        {
                             $query="INSERT INTO categories(cat_title) VALUES('$cat_title')"; 
                             $create_category_query= mysqli_query($connection ,$query) ;

                             if (! $create_category_query) {
                                 # code...
                                die("Error ".mysql_errno($connection)) ;
                             }

                        }

                }


        }



        //Find All categories

        function find_all_categories(){

                global $connection;


                $query="SELECT * FROM categories";
                $select_category_query= mysqli_query($connection ,$query) ;

               while ($row =mysqli_fetch_assoc($select_category_query)) 
               {
                    $cat_title=  $row['CAT_TITLE'] ; 
                    $cat_id=$row['CAT_ID'] ;

                    echo "<tr>";
                    echo "<td> {$cat_id }  </td>";
                    echo "<td> {$cat_title }  </td>";
                    echo "<td> <a href='admin_categories.php?delete={$cat_id}'>Delete</a> </td>";
                    echo "<td> <a href='admin_categories.php?edit={$cat_id}'>Edit</a> </td>";
                    echo "</tr>";
                }

        } 



        //Delete Categories

        function delete_categories(){
                   global $connection;

                     if (isset($_GET['delete'])) {

                    $delete_cat_id= $_GET['delete'] ;
                    $query="DELETE FROM categories WHERE CAT_ID ={$delete_cat_id} ";
                    $delete_category_query= mysqli_query($connection,$query);

                    }

        }

        

?>
