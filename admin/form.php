<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <link type="text/css" rel="stylesheet" href="css/font-awesome.min.css"/>
    <link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
  </head>
  <body>
  	<div class="container-fluid header_full">
    	<div class="container header">
        	<div class="row">
            
            </div><!--row end-->
        </div><!--container end-->
    </div><!--container-fluid end-->
    <div class="container-fluid content_full">
        <div class="row">
            <div class="col-md-2 sidebar pd0">
            	<div class="side_user">
                	<img class="img-responsive" src="images/avatar.png"/>
                    <h4>Saidul Islam Uzzal</h4>
                    <span><i class="fa fa-circle"></i> Online</span>
                </div>
                <h2>MAIN NAVIGATION</h2>
                <ul>
                	<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li><a href="#"><i class="fa fa-user-circle"></i> User</a></li>
                    <li><a href="#"><i class="fa fa-gamepad"></i> Banner</a></li>
                    <li><a href="#"><i class="fa fa-image"></i> Gallery</a></li>
                    <li><a href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
                </ul>
            </div><!--sidebar end-->
            <div class="col-md-10 admin-part pd0">
            	<ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                  <li><a href="#">Dashboard</a></li>
                </ol>
                <div class="col-md-12">
                	<form class="form-horizontal" action="" method="">
                	<div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="col-md-9 heading_title">
                                Add Information
                             </div>
                             <div class="col-md-3 text-right">
                             	<a href="table.html" class="btn btn-sm btn btn-primary"><i class="fa fa-th"></i> All Information</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                      <div class="panel-body">
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Name</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" placeholder="">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-8">
                              <input type="email" class="form-control" placeholder="">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-8">
                              <input type="password" class="form-control" placeholder="">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Number</label>
                            <div class="col-sm-8">
                              <input type="number" class="form-control" placeholder="">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Disabled</label>
                            <div class="col-sm-8">
                              <input type="text" value="Creative IT" class="form-control" placeholder="" disabled>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Select</label>
                            <div class="col-sm-4">
                              <select class="form-control select_cus">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Text Area</label>
                            <div class="col-sm-8">
                              <textarea class="form-control" rows="3"></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Radio</label>
                            <div class="col-sm-8">
                              <div class="radio">
                                  <label>
                                    <input type="radio" name="optionsRadios" id="" value="1">
                                    Male
                                  </label>
                                  <label>
                                    <input type="radio" name="optionsRadios" id="" value="2">
                                    Female
                                  </label>
                                </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Checkbox</label>
                            <div class="col-sm-8">
                              <div class="checkbox-inline">
                                  <label>
                                    <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                  </label>
                               </div>
                               <div class="checkbox-inline">
                                  <label>
                                    <input type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                  </label>
                               </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="" class="col-sm-3 control-label">Upload</label>
                            <div class="col-sm-8">
                              <input type="file" name="">
                            </div>
                          </div>
                      </div>
                      <div class="panel-footer text-center">
                        <button class="btn btn-sm btn-primary">REGISTRATION</button>
                      </div>
                    </div>
                    </form>
                </div><!--col-md-12 end-->
            </div><!--admin-part end-->
         </div><!--row end-->
    </div><!--container-fluid end-->
    <div class="container-fluid footer_full">
    	<div class="container footer">
        	<div class="row">
            </div><!--row end-->
        </div><!--container end-->
    </div><!--container-fluid end-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
  </body>
</html>