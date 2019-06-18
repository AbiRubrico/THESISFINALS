<?php
     include "config.php"
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>LEASING</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
            <a href="index.html" class="logo"><b>Martha Property Management</b></a>
            <!--logo end-->
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
              	  	
                  
                  <li class="sub-menu">
                      <a class="active" href="Leasing%20Manager%20Account_Mod1.php" >
                          <i class="fa fa-th"></i>
                          <span>Accounts</span>
                      </a>
                      <ul class="sub">
                          <li class=""><a  href="LO%20Account.php">Accounts</a></li>
                          <li class=""><a  href="LO%20Account_Request.html">Request</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="Leasing%20Manager%20Units_Mod1.html" >
                          <i class="fa fa-th"></i>
                          <span>Units</span>
                      </a>
                      <ul class="sub">
                          <li class=""><a  href="LM%20Units_Mod1.html">Units</a></li>
                          <li class=""><a  href="LM%20Units_Mod1.html">Unpaid Transactions</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Supplies</span>
                      </a>
                      <ul class="sub">
                          <li class=""><a  href="LM%20Supplies_Mod1.html">Supplies</a></li>
                          <li class=""><a  href="LM%20Supplies_History.html">History</a></li>
                          <li class=""><a  href="LM%20Supplies_OutOfStock.html">Out of Stock</a></li>
                          <li class=""><a  href="LM%20Supplies_Units.html">Units</a></li>
                          <li class=""><a  href="LM%20Supplies_ItemRequest.html">Item Request</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span>Concerns</span>
                      </a>
                      <ul class="sub">
                          <li class=""><a  href="LO%20Concerns_Mod1.html">Concerns</a></li>
                          <li class=""><a  href="LM%20Concerns_Request.html">Item Request</a></li>
                      </ul>
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
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Accounts-Wharton</h3>
              
				<div class="row">
				
	                  <div class="col-md-12">
	                  	  <div class="content-panel">
	                  	  	  <div class="container">
                                  <a href="LO%20Account_Harvard.php"><button type="button" class="btn btn-primary">Harvard</button></a>
                  
                                  <a href="LO%20Account_Princeton.php"><button type="button" class="btn btn-primary">Princeton</button></a>
                  
                                  <a href="LO%20Account_Wharton.php"><button type="button" class="btn btn-primary">Wharton</button></a>
                                      <form action="#">
                                          <br>
                                          <input type="text" placeholder="Search..." name="search">
                                          <button type="submit"><i class="fa fa-search">    </i></button>
                                      </form>
                              </div>
	                  	  	  <hr>
		                      <table class="table">
		                          <thead>
		                          <tr>
		                              <th>ID</th>
		                              <th>Email</th>
                                      <th>Name</th>
                                      <th>Password</th>
		                              <th>Contact Number</th>
		                              <th>Unit</th>
                                      <th>Building</th>
                                      <th>Status</th>
                                      <th>Action</th>
		                          </tr>
		                          </thead>
		                   <tbody>
                                <tr>
                                    <?php
                                        $sql = "select * from tenant where building = 'wharton';";
                                        $results = mysqli_query($connect, $sql);
									$queryResults = mysqli_num_rows($results);
									
									if($queryResults > 0){
										while($row = mysqli_fetch_assoc($results)){
											echo "<tr>";
											echo "<td>".$row['id']."</td>";
											echo "<td>".$row['email']."</td>";
											echo "<td>".$row['firstname']."</td>";
											echo "<td>".$row['password']."</td>";
											echo "<td>".$row['contact']."</td>";
											echo "<td>".$row['unitid']."</td>";
											echo "<td>".$row['building']."</td>";
											echo "<td>".$row['id']."</td>";
											echo "<td>";
											echo "<a class='add' title='Update' data-toggle='tootltip'><i class='material-icons'>&#xE03B;</i></a>
													<a class='edit' title='Edit' data-toggle='tooltip'><i class='material-icons'>&#xE254;</i></a>
													<a id='btnShowModal1' class='delete' title='Delete' data-toggle='tooltip'><i class='material-icons'>&#xE872;</i></a>";
											echo "</td>";
											echo "</tr>";
										}										
									}
                                        
                                    ?>
                                    <td><a href="#"> </a></td>
                                    <td><a href="#"> </a></td>
                                    <td><a href="#"> </a></td>
                                    <td><a href="#"> </a></td>
                                    <td><a href="#"> </a></td>
                                    <td><a href="#"> </a></td>
                                    <td><a href="#"> </a></td>
                                    <td><a href="#"><div class="form-group">
                                <select id="position" class="form-control">
                                    <option value="0">Active</option>
                                    <option value="1">Inactive</option>
                                </select>
                            </div> </a></td>
                                    
                                    <!-- Code for status dropdown --> 
                                    <!-- <div class="form-group">
                                <select id="position" class="form-control">
                                    <option value="0">Active</option>
                                    <option value="1">Inactive</option>
                                </select>
                            </div> -->
                                    <!-- /Code for status dropdown -->
                                    
                                    <td>
                                        <a class="add" title="Update" data-toggle="tootltip"><i class="material-icons">&#xE03B;</i></a>
                                        <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                                        <a id="btnShowModal1" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                    </td>
                                </tr>
                            </tbody>
		                      </table>
	                  	  </div><! --/content-panel -->
	                  </div><!-- /col-md-12 -->
                  
				</div><!-- row -->  

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
