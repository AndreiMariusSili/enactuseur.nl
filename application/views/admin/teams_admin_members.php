<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin | Landing</title>
        <meta name="Enactus | Erasmus University Rotterdam" content="Europe's fastest start-up incubator">
        
        <!-- Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Crane Logo -->
        <link rel="shortcut icon" href="/assets/images/Logo_crane.png">
        <!-- Web Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:700,400,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
        <!-- Bootstrap core CSS -->
        <link href="/assets/css/bootstrap.css" rel="stylesheet">
        <!-- Font Awesome CSS -->
        <link href="/assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
        <!-- Fontello CSS -->
        <link href="/assets/fonts/fontello/css/fontello.css" rel="stylesheet">
        <!-- Plugins -->
        <link href="/assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
        <link href="/assets/plugins/rs-plugin/css/settings.css" rel="stylesheet">
        <link href="/assets/plugins/rs-plugin-5/css/layers.css" rel="stylesheet">
        <link href="/assets/plugins/rs-plugin-5/css/navigation.css" rel="stylesheet">
        <link href="/assets/css/animate.css" rel="stylesheet">
        <link href="/assets/css/animations.css" rel="stylesheet">
        <link href="/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">
        <link href="/assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet">
        <link href="/assets/plugins/hover/hover-min.css" rel="stylesheet">
        <link href="/assets/plugins/morphext/morphext.css" rel="stylesheet">
        <link href="/assets/plugins/jasny-bootstrap/css/jasny-bootstrap.css" rel="stylesheet">
        <!-- Bootstrap Select -->
        <link href="/assets/css/bootstrap-select.min.css" rel="stylesheet">
        <!-- The Project core CSS file -->
        <link href="/assets/css/style.css" rel="stylesheet" >
        <!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer)-->
        <link href="/assets/css/skins/enactus_colors.css" rel="stylesheet">
        <!-- Custom css -->
        <link href="/assets/css/custom.css" rel="stylesheet">

        <?php $this->load->helper('form'); ?>
    </head>
    <body class="no-trans  transparent-header  ">
        
        <!-- page wrapper start -->
        <!-- ================ -->
        <div class="page-wrapper">
            
            <!-- header-container start -->
            <div class="header-container">
                
                
                <!-- header start -->
                <!-- classes:  -->
                <!-- "fixed": enables fixed navigation mode (sticky menu) e.g. class="header fixed clearfix" -->
                <!-- "dark": dark version of header e.g. class="header dark clearfix" -->
                <!-- "full-width": mandatory class for the full-width menu layout -->
                <!-- "centered": mandatory class for the centered logo layout -->
                <!-- ================ -->
                <header class="header  fixed    clearfix">  
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9">                      
                                <!-- header-left start -->
                                <!-- ================ -->
                                <div class="header-left clearfix">
                                    
                                    <!-- main-navigation start -->
                                    <!-- classes: -->
                                    <!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
                                    <!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
                                    <!-- "with-dropdown-buttons": Mandatory class that adds extra space, to the main navigation, for the search and cart dropdowns -->
                                    <!-- ================ -->
                                    <div class="main-navigation onclick animated with-dropdown-buttons">
                                        <!-- navbar start -->
                                        <!-- ================ -->
                                        <nav class="navbar navbar-default" role="navigation">
                                            <div class="container-fluid">
                                                <!-- Toggle get grouped for better mobile display -->
                                                <div class="navbar-header">
                                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    </button>
                                                </div>
                                                <!-- Collect the nav links, forms, and other content for toggling -->
                                                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                                    <!-- main-menu -->
                                                    <ul class="nav navbar-nav ">
                                                        <li>
                                                            <a href="/Admin/landing_admin">Landing</a>
                                                        </li>
                                                        <li>
                                                            <a href="/Admin/ventures_admin">Ventures</a>
                                                        </li>
                                                        <li>
                                                            <a href="/Admin/teams_admin_teams">Teams</a>
                                                        </li>
                                                        <li>
                                                            <a href="/Admin/dashboard">Project Admin</a>
                                                        </li>
                                                    </ul>
                                                    <!-- main-menu end -->
                                                    
                                                </div>
                                            </div>
                                        </nav>
                                        <!-- navbar end -->
                                    </div>
                                    <!-- main-navigation end -->
                                </div>
                                <!-- header-left end -->
                            </div>
                        </div>
                    </div>
                </header>
            </div>
            <!-- header-container end -->
            <!-- content-container start -->
            <div class="container">
                <!-- new tema register start -->
                <div class="row">
                    <div class="col-xs-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Navigation</h3>
                            </div>
                            <ul class="list-group">
                                <li class="list-group-item"><a href="/Admin/teams_admin_teams">Manage teams</a></li>
                                <li class="list-group-item"><a href="/Admin/teams_admin_members">Manage team members</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-10">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Use this form to register a new member.</h3>
                            </div>
                            <div class="panel-body">
                                <?php if($this->session->flashdata('success') === TRUE) { ?>
                                    <div class="alert alert-success">
                                        <strong>Success!</strong> the partner has been added to the database.
                                    </div>
                                <?php }; ?>
                                <?php if($this->session->flashdata('errors') !== NULL) { ?>
                                    <div class="alert alert-danger">
                                        <?php echo $this->session->flashdata('errors'); ?>
                                    </div>
                                <?php }; ?>
                                <form class="form" action="/Admin_edit/members_create" enctype="multipart/form-data" accept-charset="utf-8" method="POST">
                                    <div class="form-group">
                                        <label>Member Team:</label>
                                        <select class="form-control" name="team">
                                        <?php foreach($teams as $team) { ?>
                                            <option><?php echo $team['title']; ?>
                                        <?php } ?> 
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Member first name:</label>
                                        <input type="text" name="first_name" class="form-control" placeholder="First name..." />
                                    </div>
                                    <div class="form-group">
                                        <label>Member last name:</label>
                                        <input type="text" name="last_name" class="form-control" placeholder="Last name..." />
                                    </div>
                                    <div class="form-group">
                                        <label>Member function:</label>
                                        <input type="text" name="function" class="form-control" placeholder="Function...">
                                    </div>
                                    <div class="form-group">
                                        <label>Member linkedin:</label>
                                        <input type="text" name="linkedin" class="form-control" placeholder="Link...">
                                    </div>
                                    <div class="form-group">
                                        <label>Member email:</label>
                                        <input type="text" name="email" class="form-control" placeholder="Mail...">
                                    </div>
                                    <div class="form-group">
                                        <label>Member quote:</label>
                                        <textarea name="quote" rows="3" class="form-control" placeholder="Quote..."></textarea>
                                    </div>
                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                        <div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                        <span class="input-group-addon btn btn-default btn-file"><span class="fileinput-new">Upload Photo</span><span class="fileinput-exists">Change</span><input type="file" name="photo"></span>
                                        <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                    <label>Accepted file format is .jpg</label>
                                    <button type="submit" class="btn btn-default btn-lg btn-block">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- new team register end -->
                <!-- display teams start -->
                <div class="row">
                    <div class="col-xs-10 col-xs-offset-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">This panel shows all members created so far.</h3>
                            </div>
                                <table class="table table-condensed table-hover">
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Team</th>
                                    <th>Delete Member</th>
                                    <?php $i=1; foreach($members as $member) { ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $member['first_name'] . " " . $member['last_name']; ?></td>
                                            <td><?php echo $member['team']; ?></td>
                                            <td><a class="mg-0" href="/Admin_edit/members_delete/<?php echo $member['id']; ?>"> <button type="submit" class="btn btn-danger mg-0"><i class="fa fa-trash" aria-hidden="true"></i></button></a></td>
                                        </tr>
                                    <?php $i++; } ?>
                                </table>
                        </div>
                    </div>
                </div>
                <!-- display teams end -->
            </div>
            <!-- content-container end -->
        </div>
        <!-- page wrapper end -->
        <!-- JavaScript files placed at the end of the document so the pages load faster -->
        <!-- ================================================== -->
        <!-- Jquery and Bootstap core js files -->
        <script type="text/javascript" src="/assets/plugins/jquery.min.js"></script>
        <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
        <!-- Jasny Bootstrap  -->
        <script type="text/javascript" src="/assets/plugins/jasny-bootstrap/js/jasny-bootstrap.js"></script>
        <!-- Bootstrap Select -->
        <script type="text/javascript" src="/assets/js/bootstrap-select.min.js"></script>
        <!-- Custom Scripts -->
        <script type="text/javascript" src="/assets/js/custom.js"></script>
    </body>
</html>