<?php include "admin_includes/admin_header.php" ?>
        <!-- Navigation -->
       

<?php include "admin_includes/admin_navigation.php" ?>


        <div id="page-wrapper">


         <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header text-center">
                            Welcome To Tech World

                        

                           
                        </h1>
                       
                    </div>
                </div>


     <table class="table table-bordered table-hover text-success">

                                
                                <thead>
                                    
                           
                                        <tr>
                                            <th>Posts</th>
                                            <th>Comments</th>
                                            <th>User</th>
                                            <th>Categories</th>
                                            
                                          
                                      
                                            
                                         </tr>


                               
                                </thead>

                                <tbody>
                                  
        <?php

                    $query="SELECT * FROM posts ";
                    $select_all_post_query=mysqli_query($connection,$query);

                   $post_count= mysqli_num_rows($select_all_post_query) ;
                  // echo $post_count;
        ?>

          <?php

                    $query="SELECT * FROM comments ";
                    $select_all_comment_query=mysqli_query($connection,$query);

                   $comment_count= mysqli_num_rows($select_all_comment_query) ;
                  // echo $comment_count;
            ?>


             <?php

                    $query="SELECT * FROM users ";
                    $select_all_user_query=mysqli_query($connection,$query);

                   $user_count= mysqli_num_rows($select_all_user_query) ;
                  // echo $user_count;
            ?>

                    <?php

                    $query="SELECT * FROM categories ";
                    $select_all_categories_query=mysqli_query($connection,$query);

                   $categories_count= mysqli_num_rows($select_all_categories_query) ;
                  // echo $categories_count;
                  ?>
                                    <tr>
                                        <?php
                                        
                                        echo "<td>$post_count</td>";
                                        echo "<td>$comment_count</td>";
                                        echo "<td>$user_count</td>";
                                        echo "<td>$categories_count</td>";

                                        ?>
                                    </tr>

                                </tbody>
            
                            </table>




        <div class="row">
        <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Data', 'Count'],

    <?php

        $element_text=['Active Post ','Comments ','User ','Categories'] ;
        $element_count=[$post_count,$comment_count,$user_count,$categories_count] ;

        for($i=0 ;$i<4;$i++){

            echo "['{$element_text[$i]}' ".","."{$element_count[$i]} ], ";
        }
    ?>

       ]);

       var options = {
          chart: {
            title: '',
            subtitle: '',
          }
        };

      var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

       chart.draw(data, google.charts.Bar.convertOptions(options));
     }
  </script>

     <div id="columnchart_material" style="width: auto; height: 500px;"></div

                </div>



            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->


<?php include "admin_includes/admin_footer.php" ?>