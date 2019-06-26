
                       
                <form method="post" action="">
                       <table class="table table-bordered table-hover text-info">


                                <thead>
                                    
                           
                                        <tr>
                                          
                                            <th>Id</th>
                                            <th>Author</th>
                                            <th>Title</th>
                                            <th>Category</th>
                                       
                                            <th>Image</th>
                                            <th>Tags</th>
                                            <th>Comments</th>
                                            <th>Date</th>
                                            <th>View Post</th>
                                            <th>Delete</th>
                                            <th>Edit</th>
                                           
                                            
                                            


                                        </tr>


                               
                                </thead>

                                <tbody>




<?php



                $query="SELECT * FROM posts";
                $select_posts_query= mysqli_query($connection ,$query) ;

               while ($row =mysqli_fetch_assoc($select_posts_query)) 
               {
                   
                   
                    $post_id =$row['post_id'];
                    $post_author=$row['post_author'];
                    $post_title=$row['post_title'];
                    $post_category_id=$row['post_category_id'];
              
                    $post_image=$row['post_image'];
                    $post_tags=$row['post_tags'];
                    $post_comment_count=$row['post_comment_count'];
                    $post_date=$row['post_date'];
                    $post_views_count=$row['post_views_count'];


                    echo "<tr>";

                    echo "<td> {$post_id }  </td>";
                    echo "<td> {$post_author}  </td>";
                    echo "<td> {$post_title} </td>";





                $query="SELECT * FROM categories WHERE cat_id ={$post_category_id}";
                $select_category_query= mysqli_query($connection ,$query) ;

                while ($row =mysqli_fetch_assoc($select_category_query)) 
                {
                    $cat_title=  $row['CAT_TITLE'] ; 
                    $cat_id=$row['CAT_ID'] ;

                    echo "<td> {$cat_title }  </td>";
                   
                }




                 
                    echo "<td> <img width='100' src='../images/$post_image' alt='image'</td>";
                    echo "<td> {$post_tags} </td>";
                    echo "<td> {$post_comment_count}</td>";
                    echo "<td> {$post_date} </td>";


                    echo "<td> <a href='../post.php?p_id={$post_id }'> View </a> </td>";
                    echo "<td> <a onClick=\"javascript: return confirm('Are you sure to delete '); \"  href='posts.php?delete={$post_id }'> Delete </a> </td>";
                    echo "<td> <a onClick=\"javascript: return confirm('Are you sure to Edit '); \"  href='posts.php?source=edit_post&p_id={$post_id }' > Edit </a> </td>";
                  
                    
                    echo "</tr>";
                }



?>


                              
                                  
                                </tbody>
            
                            </table>

                    </form>

<?php

if (isset($_GET['delete'])) {
    # code...

    $delete_post_id =$_GET['delete'] ;
    $query="DELETE FROM posts WHERE post_id = {$delete_post_id}" ;

    $delete_post_query=mysqli_query($connection,$query) ;

}




?>