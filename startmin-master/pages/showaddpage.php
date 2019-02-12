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
                            <h1 class="page-header">Add a Show:</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
<!--                    form begins-->
               <form action="http://localhost/movie_booking/startmin-master/pages/addshow.php" method="get">
                   <div class="form-body">
                       <div class="row"  style="margin-bottom:20px;">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Show Time
                <span class="required"> * </span>
                </label>
                                    <div class="col-md-8">
                                        <input type="text" name="show_time" class="form-control" placeholder="HH:MM:SS" /> </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="row"  style="margin-bottom:20px;">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Movie
                <span class="required"> * </span>
                </label>
                                    <div class="col-md-8">
                                        <select name="movie_id" id="movie_id" class="form-control">
                                            <option>Select a movie...</option>
                                            <?php
require_once("../../pages/includes/functions.php");
                                            $query="select * from movie where is_deleted=0";
                                            $result=mysqli_query($connection,$query);
//                                            checkQueryResult($result);
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                                $movie_id=$row['movie_id'];
                                                $movie_name=$row['movie_name'];
                                                echo "<option value='$movie_id'>$movie_name</option>";
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
                                    <label class="control-label col-md-4">Theatre
                <span class="required"> * </span>
                </label>
                                    <div class="col-md-8">
                                        <select name="theatre_id" id="theatre_id" class="form-control">
                                            <option>Select a theatre..</option>
                                            <?php
require_once("../../pages/includes/functions.php");
                                            $query="select * from theatre";
                                            $result=mysqli_query($connection,$query);
//                                            checkQueryResult($result);
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


                       
                        <div class="row" style="margin-bottom:20px;">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Screen
                <span class="required"> * </span>
                </label>
                                    <div class="col-md-8">
                                        <select name="screen_id" id="screen_id">
                                            <option value=""></option>
                                        </select>
                                </div>
                            </div>
                        </div>
                       </div>
                       
                       <div class="row"  style="margin-bottom:20px;">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Date of Show
                <span class="required"> * </span>
                </label>
                                    <div class="col-md-8">
                                        <input type="text" name="show_date" class="form-control" placeholder="YYYY-MM-DD" /> </div>
                                </div>
                            </div>
                            
                        </div>
                       
                       <div class="row"  style="margin-bottom:20px;">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Price
                <span class="required"> * </span>
                </label>
                                    <div class="col-md-8">
                                        <input type="text" name="price" class="form-control" placeholder="price in RS" /> </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                    
                        
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <button type="submit" class="btn-warning" name="add_show">Save</button>
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
<script>
$( "select[name='theatre_id']" ).change(function () {
    var theatreID = $(this).val();


    if(theatreID) {


        jQuery.ajax({
            url: "addshow.php",
            dataType: 'Json',
            data: {'id':theatreID},
            success: function(data) {
                $('select[name="screen_id"]').empty();
                $.each(data, function(key, value) {
                    $('select[name="screen_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                });
            }
        });


    }else{
        $('select[name="screen_id"]').empty();
    }
});
</script>
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
