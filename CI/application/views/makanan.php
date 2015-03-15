<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Gudeg Prambanan Control Panel</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    
                    <li class="active">
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Menu Makanan</a>
                    </li>
                    <li>
                                <a href="tables.html"><i class="fa fa-fw fa-table"></i>Feedback</a>
                            </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Menu Makanan
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-edit"></i> Menu Makanan
                            </li>
                            
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-green">
                            <div class="panel-heading">
                    <h3 class="panel-title">Daftar Makanan</h3>
                        </div>
                        <div class="panel-body">
                    <?php 
                                    $i=0;
                                    foreach ($listData->result() as $row) {

                                    ?>

                    <div class="col-sm-4">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <h3 class="panel-title"><?= $row->id_makanan ?> || <?= $row->nama ?></h3>
                            </div>
                            <div class="panel-body">
                                <?= $row->deskripsi ?>

                                <img alt="Thumbnail image" src="<?='foto/'.$row->img_name.'_thumb'.$row->ext;?>">
                            </div>
                        </div>
                    </div>


<?php $i++;} ?>
</div>
                    </div></div>
                <div class="col-lg-12">
                <div class="panel panel-primary">
                            <div class="panel-heading">
                    <h3 class="panel-title">Tambah Makanan</h3>
                </div>
                <?php echo form_open_multipart('makanan/do_upload');?>
                <div class="panel-body">

                        <form role="form" method="post" action="">

                            <div class="form-group">
                                <label>ID Makanan</label>
                                <input class="form-control" type="text" name="id_makanan">
                            </div>
                            <div class="form-group">
                                <label>Nama Makanan</label>
                                <input class="form-control" type="text" name="nama_makanan">
                            </div>
                            <div class="form-group">
                                <label>Dekripsi Makanan</label>
                                <textarea class="form-control" rows="3" type="text" name="deskripsi"></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label>Foto Makanan</label>
                                <input type="file" name="userfile" size="20" />
                            </div>
                            <input class="btn btn-primary" type="submit" value="Submit" name="upload" />
                        </form>
                        </div>
                        </div>
                        </div>


                    
                    <!--<h2>Daftar Makanan</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th>ID Makanan</th>
                                        <th>Nama Makanan</th>
                                        <th>Deskripsi</th>
                                        <th>Foto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $i=0;
                                    foreach ($listData->result() as $row) {

                                    ?>
              <tr>
                <td><?= $row->id_makanan ?></td>
                <td><?= $row->nama ?></td>
                <td><?= $row->deskripsi ?></td>
                <td><img alt="Thumbnail image" src="<?='foto/'.$row->img_name.'_thumb'.$row->ext;?>"></td>
              </tr>

              <?php $i++;} ?>
                                </tbody>
                            </table>
                        </div>
                        
                        </div>-->
                    
                    
                        

                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
