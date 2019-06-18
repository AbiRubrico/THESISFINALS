<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Leasing Department</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link rel="stylesheet" href="http://cdn.oesmith.co.uk/morris-0.4.3.min.css">    
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
      
      
      
      <!--- Additional CSS Links and Scripts--->
      <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        
        <!-- CSS link for side Menu -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- /Css link for side menu -->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
          <style type="text/css">
            .table-wrapper {
                width: 300px;
                margin: 30px auto;
                background: #fff;
                padding: 20px;	
                box-shadow: 0 1px 1px rgba(0,0,0,.05);
            }
            
            .table-title {
                padding-bottom: 10px;
                margin: 0 0 10px;
            }
            
            .table-title h2 {
                margin: 6px 0 0;
                font-size: 22px;
            }
            
            .table-title .add-new {
                float: right;
                height: 30px;
                font-weight: bold;
                font-size: 12px;
                text-shadow: none;
                min-width: 100px;
                border-radius: 50px;
                line-height: 13px;
            }
            
            .table-title .add-new i {
                margin-right: 4px;
            }
            
            table.table {
                table-layout: fixed;
            }
            
            table.table tr th, table.table tr td {
                border-color: #e9e9e9;
            }
            
            table.table th i {
                font-size: 13px;
                margin: 0 5px;
                cursor: pointer;
            }
            
            table.table th:last-child {
                width: 100px;
            }
            
            table.table td a {
                cursor: pointer;
                display: inline-block;
                margin: 0 5px;
                min-width: 24px;
            }    
            
            table.table td a.add {
                color: #27C46B;
            }
            
            table.table td a.edit {
                color: #FFC107;
            }
            
            table.table td a.delete {
                color: #E34724;
            }
            
            table.table td i {
                font-size: 19px;
            }
            
            table.table td a.add i {
                font-size: 24px;
                margin-right: -1px;
                position: relative;
                top: 3px;
            }    
            
            table.table .form-control {
                height: 32px;
                line-height: 32px;
                box-shadow: none;
                border-radius: 2px;
            }
            
            table.table .form-control.error {
                border-color: #f50000;
            }
            
            table.table td .add {
                display: none;
            }
      </style>
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b></b></a>
            <!--logo end-->
            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                 <ul class="nav top-menu">
                    <!-- inbox dropdown start-->
                    <!-- <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-tasks"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">Maintenance Department Request</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Ma'am Joan</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Goodmorning! 
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Sir Max</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, my faucet is broken please <br>check it ASAP.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">See all messages</a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- inbox dropdown end -->
                    <!-- inbox dropdown start-->
                    <!--  <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                            <i class="fa fa-envelope-o"></i>
                            <span class="badge bg-theme">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <div class="notify-arrow notify-arrow-green"></div>
                            <li>
                                <p class="green">Concern Request</p>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-zac.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Dave</span>
                                    <span class="time">Just now</span>
                                    </span>
                                    <span class="message">
                                        Goodmorning! Please replace <br>my doorknob.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-divya.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Steve</span>
                                    <span class="time">40 mins.</span>
                                    </span>
                                    <span class="message">
                                     Hi, my faucet is broken please <br>check it ASAP.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-danro.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Bob</span>
                                    <span class="time">2 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Goodafternoon Ma'am/Sir, I think<br> there is problem with my shower.<br>Please visit my unit to see what is the <br>problem.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">
                                    <span class="photo"><img alt="avatar" src="assets/img/ui-sherman.jpg"></span>
                                    <span class="subject">
                                    <span class="from">Gru</span>
                                    <span class="time">4 hrs.</span>
                                    </span>
                                    <span class="message">
                                        Please replace the bulb in my cr, thank you!.
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="index.html#">See all messages</a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.html">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered">Leasing Manager</h5>
                  
                  
              	  	
                  <li class="mt">
                      <a class="" href="index.html">
                          <i class="fa fa-user"></i>
                          <span>Accounts</span>
                      </a>

                  <li class="sub-menu">
                      <a class="" href="javascript:;" >
                          <i class=" fa fa-building"></i>
                          <span>Units</span>
                      </a>
                  </li>
                  
                  <li class="sub-menu">
                      <a class="active" href="LeasingOfficerModule_Supplies.php" >
                          <i class=" fa fa-truck"></i>
                          <span>Supplies</span>
                      </a>
                  </li>
                  
                  <li class="sub-menu">
                      <a class="" href="LeasingOfficerModule_Supplies_History.php">
                          <i class="fa fa-play"></i>
                          <span>History</span>
                      </a>
                  </li>
                  
                  <li class="sub-menu">
                      <a class="" href="LeasingOfficerModule_Supplies_OutOfStock.php">
                          <i class="fa fa-play"></i>
                          <span>Out Of Stock</span>
                      </a>
                  </li>
                  
                  <li class="sub-menu">
                      <a class="" href="LeasingOfficerModule_Supplies_Units.php">
                          <i class="fa fa-play"></i>
                          <span>Units</span>
                      </a>
                  </li>
                  
                  <li class="sub-menu">
                      <a class="" href="LeasingOfficerModule_Supplies_ItemRequest_ALRTERNATIVE.php">
                          <i class="fa fa-play"></i>
                          <span>Item Request</span>
                      </a>
                  </li>
                  
                  
                  <li class="sub-menu">
                      <a class="" href="javascript:;" >
                          <i class=" fa fa-file"></i>
                          <span>Concerns</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->

      <!--main content end-->
  <section id="main-content">
          <section class="wrapper">
              <br>
              <div class="container">
                  <button type="button" class="btn btn-secondary">All</button>
            
                  <button type="button" class="btn btn-secondary">Harvard</button>
                  
                  <button type="button" class="btn btn-secondary">Princeton</button>
                  
                  <button type="button" class="btn btn-secondary">Wharton</button>

                  <div class="pull-right">
                  <form action="#">
                      <input type="text" placeholder="Search.." name="search">
                      <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
                      </div>
              <br>
                  
                  </div>
              <br>
              
              <!-- page start-->
              <div class="container container-fluid">
            <div class="row">
        <div class="col-lg-12">
            
                    <div class="table">
                        <table class="table table-stripped table-bordered">
                            <thead>
                                
                                <tr>
                                    <th>Building</th>
                                    <th>Unit</th>
                                    <th>Tenant</th>
                                    <th>Items</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#"> </a></td>
                                    <td><a href="#"> </a></td>
                                    <td><a href="#"> </a></td>
                                    <td><center><button id="btnShowModal" type="button" class="btn btn-success btn-block" data-target="#LoginModal">View</center></button></td>
                                    
                                    
                                    <!-- Code for status dropdown --> 
                                    <!-- <div class="form-group">
                                <select id="position" class="form-control">
                                    <option value="0">Active</option>
                                    <option value="1">Inactive</option>
                                </select>
                            </div> -->
                                    <!-- /Code for status dropdown -->
                                    
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
            </div>
        </div>
              
              <div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                    <div class="table">
                        <table class="table table-stripped table-bordered">
                            <div class="col-md-6">
                                <h3>Yvonne Manuel</h3>
                                <h3>5LN-E</h3>
                            </div>
                            <div class="col-md-6">
                                <div class="pull-right">
                                    <button id="print" type="button" class="btn btn-primary">Print</button>
                                    <button id="btnShowModal2" type="button" class="btn btn-success  ">Edit Item</button>
                                    </div>
                            </div>
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Brand</th>
                                    <th>Description</th>
                                    <th>Serial Number</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#"> </a></td>
                                    <td><a href="#"> </a></td>
                                    <td><a href="#"> </a></td>
                                    <td><a href="#"> </a></td>
                                    <td><a href="#"> </a></td>
                                    
                                    <!-- Code for status dropdown --> 
                                    <!-- <div class="form-group">
                                <select id="position" class="form-control">
                                    <option value="0">Active</option>
                                    <option value="1">Inactive</option>
                                </select>
                            </div> -->
                                    <!-- /Code for status dropdown -->
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
              <!-- page end-->
          </section>          
      </section>
      
      <!-- Show Modal for Edit Item -->
       <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                    <div class="table">
                        <table class="table table-stripped table-bordered">
                            <div class="col-md-6">
                                <h3>Yvonne Manuel</h3>
                                <h3>5LN-E</h3>
                            </div>
                            <div class="col-md-6">
                                <div class="pull-right">
                                    <button id="save" type="button" class="btn btn-primary">Save</button>
                                    </div>
                            </div>
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Brand</th>
                                    <th>Description</th>
                                    <th>Serial Number</th>
                                    <th>Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="#"> </a></td>
                                    <td><a href="#"> </a></td>
                                    <td><a href="#"> </a></td>
                                    <td><a href="#"> </a></td>
                                    <td><a href="#"> </a></td>
                                    
                                    <!-- Code for status dropdown --> 
                                    <!-- <div class="form-group">
                                <select id="position" class="form-control">
                                    <option value="0">Active</option>
                                    <option value="1">Inactive</option>
                                </select>
                            </div> -->
                                    <!-- /Code for status dropdown -->
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="pull-right">
                        <button id="btnShowModal" type="button" class="btn btn-info add-new" data-target="#LoginModal"><i class="fa fa-plus"></i></button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
              <!-- page end-->
          </section>          
      </section>
    
    <!-- Additional Scripts -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="http://cdn.oesmith.co.uk/morris-0.4.3.min.js"></script>
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="assets/js/morris-conf.js"></script>
      
      
      
      
      <!--- Additional JavaScripts Links and Inline Codes -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      
      <!-- JavaScript Files/Links -->
        <script src="js/bootstrap.min.js"></script>
        
        <!-- JavaScript Links includes Bootstrap -->
        <script src="js/bootstrap.bundle.min.js"></script>
        <!-- JavaScript Files/Links -->
        <script src="js/bootstrap.min.js"></script>
        
        <!-- JavaScript Links includes Bootstrap -->
        <script src="js/bootstrap.bundle.min.js"></script>
      
       <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
        
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
      
      <script type="text/javascript">
            $(document).ready(function (){
                $('#btnShowModal').click(function(){
                    $('#LoginModal').modal('show');
                });
                $('#btnShowModal2').click(function(){
                    $('#modal2').modal('show');
                });
                
            });
        </script>
      
      <script type="text/javascript">
            //$(document).ready(function(){
              //  $('[data-toggle="tooltip"]').tooltip();
            //    var actions = $("table td:last-child").html();
                
                // Append table with add row form on Side Menu
              //  $(".add-new").click(function(){
                //    $(this).attr("disabled", "disabled");
                  //  var index = $("table tbody tr:last-child").index();
                    //var row = '<tr>' +
                      //  '<td><input type="text" class="form-control" name="name" id="name"></td>' + '<td><input type="text" class="form-control" name="name" id="name"></td>' + '<td><input type="text" class="form-control" name="name" id="name"></td>' + '<td><input type="text" class="form-control" name="name" id="name"></td>' + '<td><input type="text" class="form-control" name="name" id="name"></td>' + '<td><input type="text" class="form-control" name="name" id="name"></td>' + '<td><input type="text" class="form-control" name="name" id="name"></td>' + '<td><select id="position" class="form-control"></td>' + 
                    //    '<td>' + actions + '</td>' +
                    //    '</tr>';
                    //$("table").append(row);		
                    //$("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
                    //$('[data-toggle="tooltip"]').tooltip();
                //});
                
                // Add row on Side Menu
                //$(document).on("click", ".add", function(){
                //    var empty = false;
                 //   var input = $(this).parents("tr").find('input[type="text"]');
                //    input.each(function(){
                //        if(!$(this).val()){
                 //           $(this).addClass("error");
                 //           empty = true;
                 //       } else{
                  //          $(this).removeClass("error");
                 //       }
                //    });
                  //  $(this).parents("tr").find(".error").first().focus();
                 //   if(!empty){
                 //       input.each(function(){
                 //           $(this).parent("td").html($(this).val());
                 //       });			
                  //      $(this).parents("tr").find(".add, .edit").toggle();
                 //       $(".add-new").removeAttr("disabled");
                //    }		
               // });
                
                // Edit row on Side Menu
                //$(document).on("click", ".edit", function(){		
                  //  $(this).parents("tr").children('td:not(:nth-child(9))').each(function(){
                    //    $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
                    //});
                    //$(this).parents("tr").find(".add, .edit").toggle();
                    //$(".add-new").attr("disabled", "disabled");
                //});
    
                // Delete row on Side Menu
                //$(document).on("click", ".delete", function(){
                    //$(this).parents("tr").remove();
                    //$(".add-new").removeAttr("disabled");
                //})
            //});
        </script>
        
        <!-- JavaScript for Date Picker -->
        <script>
            $(function(){ 
                $('.dates #user1').datepicker({
                    'fomat':'yyyy-mm-dd',
                    'autoclose' :true
                });
            });
        </script>
        
        <!-- Clickable Table Rows JQuery Code -->
        <script>
            document.addEventListener("DOMContentLoaded", () =>{
                const rows = document.querySelectorAll("tr[data-href]");
                
                rows.forEach(row => {
                    row.addEventListener("click", () =>{
                        window.location.href = row.dataset.href;
                    });
                });
            });
        </script>
        
        <!-- JavaScript code for Clickable Table row -->
        <script>
            $(function(){
                $('#modalTable1').modal({
                    keyboard: true,
                    backdrop: "static",
                    show:false,
                    
                }).on('show', function(){
                    var getIdFromRow = $(event.target).closest('tr').data('id');
                });
            });  
        </script>

  </body>
</html>