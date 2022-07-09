<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>IMS - Register</title>

        <!-- Bootstrap Core CSS -->
        <link href="<?php echo base_url('css/bootstrap.min.css'); ?>" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="<?php echo base_url('css/metisMenu.min.css'); ?>" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="<?php echo base_url('css/startmin.css'); ?>" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="<?php echo base_url('css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
<?php //print_r($courses); ?>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Sign Up</h3>
                            <span><?php echo @$message; ?></span>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="First Name" name="fname" type="text" >
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Last Name" name="lname" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Phone Number" name="pnumber" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="School Name" name="school" type="text">
                                    </div>
                                    <div class="form-group">
                                        <select  class="form-control" name="courses_id">
                                            <option selected disabled>Select Your Department</option>
                                            <?php foreach($courses as $course){ ?>
                                            <option value="<?php echo $course->ID; ?>"><?php echo $course->course_name; ?></option>
                                            <?php }?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Internship Start Date</label>
                                        <input class="form-control" placeholder="Start Date" name="sdate" type="date">
                                    </div>
                                    <div class="form-group">
                                        <label>Internship End Date</label>
                                        <input class="form-control" placeholder="End Date" name="edate" type="date">
                                    </div>
                                    
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Address" name="address" type="text">
                                    </div>
                                    
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" name="email" type="email" >
                                    </div> 
                                    <label>Gender</label>
                                    <div class="checkbox">
                                         
                                        <label>
                                            <input name="gender" type="radio" required value="Male"> Male
                                        </label>
                                        <label>
                                            <input name="gender" type="radio" required value="Female"> Female
                                        </label>
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <button class="btn btn-lg btn-success btn-block">Register</button>
                                </fieldset>
                                <input type="hidden" value="register" name="test">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery -->
        <script src="<?php echo base_url('js/jquery.min.js'); ?>"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo base_url('js/bootstrap.min.js'); ?>"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo base_url('js/metisMenu.min.js'); ?>"></script>

        <!-- Custom Theme JavaScript -->
        <script src="<?php echo base_url('jjs/startmin.js'); ?>"></script>

    </body>
</html>
