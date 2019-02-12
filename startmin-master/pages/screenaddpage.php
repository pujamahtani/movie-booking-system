<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Startmin - Bootstrap Admin Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.1/css/fileinput-rtl.min.css" />
        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">
    
        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">
    <link rel="stylesheet" href="../../plugins/bootstrap-fileinput/bootstrap-fileinput.css">
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

            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Add a Screen:</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
<!--                    form begins-->
               <form action="http://localhost/movie_booking/startmin-master/pages/addscreen.php" method="get">
                   <div class="form-body">
                       <div class="row"  style="margin-bottom:20px;">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Theatre
                <span class="required"> * </span>
                </label>
                                    <div class="col-md-8">
                                        <select name="theatre_id" id="theatre_id" class="form-control">
                                            <option>Select a theatre...</option>
                                            <?php
require_once("../../pages/includes/functions.php");
                                            $query="select * from theatre";
                                            $result=mysqli_query($connection,$query);
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                $theatre_id=$row['theatre_id'];
                                                $theatre_name=$row['theatre_name'];
                                                echo "<option value='$theatre_id'>$theatre_name</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="row"  style="margin-bottom:20px;">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Screen Number
                <span class="required"> * </span>
                </label>
                                    <div class="col-md-8">
                                        <input type="text" name="screen_no" class="form-control" placeholder="Screen number" /> </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row"  style="margin-bottom:20px;">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Capacity
                <span class="required"> * </span>
                </label>
                                    <div class="col-md-8">
                                        <input type="text" name="capacity" class="form-control" placeholder="Capacity" /> </div>
                                </div>
                            </div>
                        </div>
                        
                        
                     
                        <div class="row">
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn-warning" name="add_screen">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                   </div>
               </form>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.5.1/js/fileinput.min.js"></script>-->
       <script src="../../plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

    </body>
</html>
