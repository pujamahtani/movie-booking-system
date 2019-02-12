<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">


        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <?php require_once("navbarsidebar.php");?>
            <div id="page-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Shows:</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="dataTable_wrapper">
                                    <table class="table table-striped table-bordered table-hover" id="movieTable">
                                        <thead>
                                            <tr>
                                                <th>Movie Name</th>
                                                <th>Show Time</th>
                                                <th>Show Date</th>
                                                <th>Theatre Name</th>
<!--                                                <th>Director</th>-->
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            require_once("../../pages/includes/functions.php");
                                            $query="select shows.show_id,movie.movie_name,shows.show_time,shows.show_date,theatre.theatre_name from movie,shows,theatre where shows.is_deleted=0 and shows.movie_id=movie.movie_id and shows.theatre_id=theatre.theatre_id";
                                            $result=mysqli_query($connection,$query);
                                            while($row=mysqli_fetch_assoc($result)){
                                                echo"<tr>";
                                                    echo"<td>".$row['movie_name']."</td>";
                                                    echo"<td>".$row['show_time']."</td>";
                                        //            echo"<td>$student_roll_no</td>";
                                                    echo"<td>".$row['show_date']."</td>";
                                                    echo"<td>".$row['theatre_name']."</td>";
//                                                    echo"<td>".$row['director']."</td>";
                                                    echo"<td><a href='deleteshow.php?id=".$row['show_id']."' class='' id='".$row['show_id']."'><i class='fa fa-trash' style='color:red'></i>Delete</a></td>";
                                                echo"<tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                
                            <div class="modal fade" tabindex="-1" role="dialog" id="deleteModal">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title">Delete?</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>Are you sure,you want to delete this entry?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="http://localhost/movie_booking/startmin-master/pages/moviedelete.php" method="post">
                                                <input type="text" id="recordID" name="movie_id">
                                                
                                                <button type="submit" class="btn red" name="deleteBtn">Yes</button>
                                                
                                                <button type="button" class="btn blue" data-dismiss="modal">No</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <!-- /.table-responsive -->
                                
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- /.row -->
                <!-- /.row -->
                 <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        
    </body>
</html>
