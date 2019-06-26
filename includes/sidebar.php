  <!-- Blog Sidebar Widgets Column -->
  <div class="col-md-4">


<div >

</div>





<?php
                    
                    
                  
$query="SELECT * FROM categories";
$select_sidebar_query= mysqli_query($connection ,$query) ;

                  
?>

<!-- Blog Categories Well -->
<div class="well" style="background-color: #dcf2e8">
    <h4 class="text-center text-success">Blog Categories</h4>
    <div class="row" >
        <div class="col-lg-12 ">
            <ul class="list-group text-right" style="background-color:#dcf2e8" >


            <?php
              while ($row =mysqli_fetch_assoc($select_sidebar_query)) 
              {
                   $cat_title=  $row['CAT_TITLE'] ; 
                    $cat_id=  $row['CAT_ID'] ;

                   echo "<li  style='background-color:#dcf2e8' class='text-success list-group-item list-group-item-secondary'> <a href='category.php?category=$cat_id'> {$cat_title } </a> </li>";
              }

            
            ?>
           
            </ul>
        </div>
   
    </div>
    <!-- /.row -->
</div>

<!-- Side Widget Well -->
<?php // include "widget.php"?>

</div>