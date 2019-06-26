

<?php include "admin_includes/admin_header.php" ?>
        <!-- Navigation -->
       

<?php include "admin_includes/admin_navigation.php" ?>



        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome 
                            <small>Tech World</small>
                        </h1>

                        <div class="col-xs-6">

<!-- INSERT CODE  -->
       <?php insert_categories() ; ?>

   <form action="" method="post">

                                <label for="Add Category">Add category</label>
                                <div class="form-group">

                                     <input class="form-control" type="text" name="cat_title">
                                </div>

                                <div class="form-group">
                                      <input class="btn btn-primary" type="submit" name="submit" value="Add Category">
                                </div>

                               
    </form>

          <!-- Update Code here -->

<?php

if (isset($_GET['edit'])) {

    $cat_id=$_GET['edit'];

    include "admin_includes/edit_categories.php";
    # code...
}

?>



                            
                        </div>


                        <div class="col-xs-6">
                            <table class="table table-bordered table-hover">
                                 <thead>

                                    <tr>
                                         <th>Id </th>
                                         <th>Category Title</th>
                                    </tr>

                                 </thead>

                                 <tbody>

<!-- Find All Category Query -->
<?php  find_all_categories() ;?>


<!--  Delete the Category -->
<?php  delete_categories(); ?>

                                     
                                 </tbody>
                            </table>
                        </div>


                       
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

<?php include "admin_includes/admin_footer.php" ?>