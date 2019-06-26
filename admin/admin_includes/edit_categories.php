  <form action="" method="post">

  <div class="form-group">

  <label for="Add Category">Edit category</label>




<?php

 // Update & Edit

if (isset($_GET['edit'])) {

    # code...
    $edit_category_id=$_GET['edit'] ;
   // echo $edit_category_id;

    $query="SELECT * FROM categories WHERE cat_id ={$edit_category_id}";
    $edit_category_query= mysqli_query($connection ,$query) ;

        while ($row =mysqli_fetch_assoc($edit_category_query)) 
       {
            $cat_title=  $row['CAT_TITLE'] ; 
            $cat_id=$row['CAT_ID'] ;

            
           // echo " {$cat_id }  ";
           // echo " {$cat_title }  ";
        
        ?>

<input  class="form-control" type="text" name="cat_title" value="<?php if(isset($cat_title)) echo $cat_title ; ?>">

<?php


   } // While terminate 

} //if terminate 


?>

<?php
// Update Query

if (isset($_POST['update_category'])) {

$update_cat_id= $_GET['edit'] ;
$update_cat_title=$_POST['cat_title'] ;
$query="UPDATE categories SET cat_title='$update_cat_title'  WHERE cat_id ='$cat_id' ";
$update_category_query= mysqli_query($connection,$query);

if (!$update_category_query) {

    //die("Query Failed".mysql_error($connection)) ;
}


}



?>




                                   
                                </div>    <!-- Form group terminate  -->

                                <div class="form-group">
                                      <input class="btn btn-primary" type="submit" name="update_category" value="Update Category">
                                </div>

                               
                            </form>
                            