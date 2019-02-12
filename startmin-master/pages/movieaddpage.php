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
            <?php require_once("navbarsidebar.php"); ?>
            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Add a Movie:</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <!-- /.row -->
<!--                    form begins-->
               <form action="http://localhost/movie_booking/startmin-master/pages/addmovie.php" method="post" enctype="multipart/form-data">
                   <div class="form-body">
                       <div class="row"  style="margin-bottom:20px;">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Movie Name
                <span class="required"> * </span>
                </label>
                                    <div class="col-md-8">
                                        <input type="text" name="movie_name" class="form-control" placeholder="Movie Name" /> </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Release Date</label>
                                    <div class="col-md-8">
                                        <input type="text" name="release_date" class="form-control" placeholder="YYYY-MM-DD" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row"  style="margin-bottom:20px;">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Certification
                <span class="required"> * </span>
                </label>
                                    <div class="col-md-8">
                                        <input type="text" name="certification" class="form-control" placeholder="Certification" /> </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Genre</label>
                                    <div class="col-md-8">
                                        <input type="text" name="genre" class="form-control" placeholder="Genre" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row"  style="margin-bottom:20px;">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Format
                <span class="required"> * </span>
                </label>
                                    <div class="col-md-8">
                                        <input type="text" name="format" class="form-control" placeholder="format" /> </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Duration</label>
                                    <div class="col-md-8">
                                        <input type="text" name="duration" class="form-control" placeholder="Duration" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row" style="margin-bottom:20px;">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Director
                <span class="required"> * </span>
                </label>
                                    <div class="col-md-8">
                                        <input type="text" name="director" class="form-control" placeholder="Director" /> </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Cast</label>
                                    <div class="col-md-8">
                                        <input type="text" name="cast" class="form-control" placeholder="Cast" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row" style="margin-bottom:20px;">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4">User's Rating
                <span class="required"> * </span>
                </label>
                                    <div class="col-md-8">
                                        <input type="text" name="users_rating" class="form-control" placeholder="Rating" /> </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Critics Rating</label>
                                    <div class="col-md-8">
                                        <input type="text" name="critics_rating" class="form-control" placeholder="Rating" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom:20px;">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Description
                <span class="required"> * </span>
                </label>
                                    <div class="col-md-8">
<!--                                        <input type="text" name="users_rating" class="form-control" placeholder="Rating" />-->
                                       <textarea name="movie_desc" id="" cols="15" rows="3" class="form-control"></textarea>
                                        </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Video-Link</label>
                                    <div class="col-md-8">
                                        <input type="text" name="movie_link" class="form-control" placeholder="Video link" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-bottom:20px;">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label col-md-4">Language
                <span class="required"> * </span>
                </label>
                                    <div class="col-md-8">
                                        <input type="text" name="language" class="form-control" placeholder="Language" /> </div>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="row">
            <div class="col-md-12">
                <div class="form-group last">
                    <label class="control-label col-md-2">Product Image</label>
                    <div class="col-md-10">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                            <div>
                                <span class="btn default btn-file">
                                    <span class="fileinput-new"> Select image </span>
                                    <span class="fileinput-exists"> Change </span>
                                    <input type="file" name="movie_image" accept="image/*"> </span>
                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                            </div>
                        </div>
                        <div class="clearfix margin-top-10">
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="form-actions">
        <div class="row">
            <div class="col-md-offset-3 col-md-9">
                <button type="submit" class="btn-warning" name="add_movie">Save</button>
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
