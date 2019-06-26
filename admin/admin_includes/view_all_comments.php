                       <table class="table table-bordered table-hover text-success">

                                
                                <thead>
                                    
                           
                                        <tr>
                                            <th>Id</th>
                                            <th>Author</th>
                                            <th>Comment</th>
                                            <th>Email</th>
                                      
                                            <th>Post Title</th>
                                            <th>Date</th>
                                            <th>Delete</th>
                                 
                                        </tr>


                               
                                </thead>

                                <tbody>




<?php



                $query="SELECT * FROM comments";
                $select_comments_query= mysqli_query($connection ,$query) ;

               while ($row =mysqli_fetch_assoc($select_comments_query)) 
               {
                   
                   
                    $comment_id =$row['comment_id'];
                    $comment_post_id=$row['comment_post_id'];

                    $comment_author=$row['comment_author'];
                    $comment_email=$row['comment_email'];
                    $comment_content=$row['comment_content'];
                
                    $comment_date=$row['comment_date'];


                    echo "<tr>";
                    echo "<td> {$comment_id }  </td>";
                    echo "<td> {$comment_author}  </td>";
                    echo "<td> {$comment_content} </td>";
                    echo "<td> {$comment_email} </td>";
                 



                $query="SELECT * FROM posts WHERE post_id ={$comment_post_id}";
                $select_post_id_query= mysqli_query($connection ,$query) ;

                while ($row =mysqli_fetch_assoc($select_post_id_query)) 
                {
                    $post_id=  $row['post_id'] ; 
                    $post_title=$row['post_title'] ;

              
                    echo "<td> <a href='../post.php?p_id=$post_id'> $post_title </a> </td>";
                   
                }

                    echo "<td> {$comment_date} </td>";
                    echo "<td> <a href='comments.php?delete={$comment_id }'> Delete </a> </td>";
                    echo "</tr>";
                }



?>


                              
                                  
                                </tbody>
            
                            </table>

<?php

//Delete 
if (isset($_GET['delete'])) {
    # code...

    $delete_comment_id =$_GET['delete'] ;
    $query="DELETE FROM comments WHERE comment_id = {$delete_comment_id}" ;

    $delete_post_query=mysqli_query($connection,$query) ;

}

//Approve
if (isset($_GET['approve'])) {
    # code...

    $approve_comment_query_id =$_GET['approve'] ;
    $query="UPDATE  comments SET comment_status = 'approved' WHERE comment_id={$approve_comment_query_id}" ;

    $approve_comment_query=mysqli_query($connection,$query) ;

}

//Unapprove
if (isset($_GET['unapprove'])) {
    # code...

    $unapprove_comment_query_id =$_GET['unapprove'] ;
    $query="UPDATE  comments SET comment_status = 'unapproved' WHERE comment_id={$unapprove_comment_query_id}" ;

    $unapprove_comment_query=mysqli_query($connection,$query) ;

}


?>