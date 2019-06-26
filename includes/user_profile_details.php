
<!-- Blog Search Well -->
<div class="well">
    <h4>Blog Search</h4>
    <form action="search.php" method="post">
    <div class="input-group">
        <input type="text" class="form-control" name="search">
        <span class="input-group-btn">
            <button class="btn btn-default" type="submit" name="submit" >
                <span class="glyphicon glyphicon-search"></span>
        </button>
        </span>
    </div>
    </form>  
    <!-- form method post -->
    <!-- /.input-group -->
</div>


<!-- Login -->
<div class="well">
    <h4>Login</h4>
    <form action="includes/login.php" method="post">

      <div class="form-group">
        <input type="email" name="user_email" placeholder="Enter Email" class="form-control" >
     </div>
    <div class="input-group">

        <input type="passward" class="form-control" name="user_passward" placeholder="Enter passward" >
        <span class="input-group-btn">

            <button class="btn btn-primary" type="submit" name="login" >Submit</button>
        </span>

    </div>
    </form>  
    <!-- form method post -->
    <!-- /.input-group -->
</div>





<?php
                    
                    
                  
$query="SELECT * FROM categories";
$select_sidebar_query= mysqli_query($connection ,$query) ;

                  
?>

<!-- Blog Categories Well -->
<div class="well">
    <h4>Blog Categories</h4>
    <div class="row">
        <div class="col-lg-12">
            <ul class="list-unstyled">


            <?php
              while ($row =mysqli_fetch_assoc($select_sidebar_query)) 
              {
                   $cat_title=  $row['CAT_TITLE'] ; 
                    $cat_id=  $row['CAT_ID'] ;
                   echo "<li> <a href='category.php?category=$cat_id'> {$cat_title } </a> </li>";
              }

            
            ?>
           
            </ul>
        </div>
   
    </div>
    <!-- /.row -->
</div>

<!-- Side Widget Well -->
<?php include "widget.php"?>

</div>