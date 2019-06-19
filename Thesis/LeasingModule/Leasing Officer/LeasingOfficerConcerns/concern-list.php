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
        <div class="col-md-13">
            <div class="content-panel">
                <h4><i class = "fa fa-angle-right"></i> Concerns List</h4>
				<hr>
				
				<div class="container container-fluid">
					<div class="row">
						<div class="col-lg-15">
							<form action="search-name.php">
								<input type="text" placeholder="Search" name="search">
								<button type="submit" name = "submit-search"><i class="fa fa-search"></i></button>
							</form>
							<div class="table">
								<table class="table">
									<?php
										$i = 0;
										$queryall = "SELECT 
														*
														FROM
													tenant
																JOIN
													concern ON concern.tenantid = tenant.id
																JOIN
													employee ON concern.maintenanceid = employee.empid;";
										$eventqueryall = mysqli_query($connect, $queryall);
										$querycount = mysqli_num_rows($eventqueryall);
									?>
									<thead>
										<tr>
											<th>ID</th>
											<th>Building</th>
											<th>Unit</th>
											<th>Tenant</th>
											<th>Contact</th>
											<th>Concern</th>
											<th>Priority Level</th>
											<th>Status</th>
											<th>Maintenance Name</th>
										</tr>
									</thead>
									<tbody>
										<?php
											while($i < $querycount){
												$row = mysqli_fetch_assoc($results);
												$query = "select building from tenant";
												$concernQuery = mysqli_query($connect, $query);
										?>
											<tr>
												<td>
													<?php echo $row['concernid'];?>
												</td>";
												<td>
													<?php $row['building'];?>
												</td>
												<td>
													<?php $row['unit'];?>
												</td>
												<td>
													<?php $row['firstname'];?>
												</td>
												<td>
													<?php $row['contact'];?>
												</td>
												<td>
													<button id='btnShowModal' type='button' class='btn btn-success btn-block' data-target='#LoginModal'>View</button>;
												</td>
												<td>
													<div class = 'form-group'>
														<select id = 'status' name = 'status' class = 'form-control'>
															<option value = '0'></option>
															<option value = '1'></option>
														</select>";
													</div>";
												</td>
												<td>
													<div class = 'form-group'>
														<select id = 'mname' name = 'mname' class = 'form-control'>
															<option value = ""></option>";
														</select>
													</div>
												</td>
											</tr>
											<?php $i++;}?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
			</div>
		</div>
		<!-- Modal -->
        <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-md-4">
                            <div class="form-group">
                                <p>Request ID:</p>
                                <p>Tenant:</p>
                                <p>Contact:</p>
                                <p>Building:</p>
                                <p>Unit:</p>
                                <p>Reported:</p>
                                <p>Time Availability:</p>
                                <p>Date Availability:</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
								<?php
									$sql = "SELECT * from concern join tenant;";
									$results = mysqli_query($connect, $sql);
									$queryResults = mysqli_num_rows($results);
									
									if($queryResults > 0){
										while($row = mysqli_fetch_assoc($results)){
											echo "<p>".$row['concernid']."</p>";
											echo "<p>".$row['firstname']."</p>";
											echo "<p>".$row['contact']."</p>";
											echo "<p>".$row['building']."</p>";
											echo "<p>".$row['unitid']."</p>";
											echo "<p>".$row['reporteddate']."</p>";
											echo "<p>".$row['timeavailable']."</p>";
											echo "<p>".$row['dateavailable']."</p>";
										}
									}
								?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
								<?php
									$sql = "SELECT * from concern join tenant where ;";
									$results = mysqli_query($connect, $sql);
									$queryResults = mysqli_num_rows($results);
									
									if($queryResults > 0){
										while($row = mysqli_fetch_assoc($results)){
											echo "<label for = 'description'>Description:</p>";
											echo "<textarea class='form-control' id='description' rows='11'>".$row['description']."</textarea>";
										}
									}
								?>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
						<form class="form-horizontal style-form" action="add-items-action.php" method="POST">
							<center><h3><b>Add Item</b></h3></center>
							<div class="table">
							<table class="table table-stripped table-bordered">
								<thead>
									<tr>
										<th>Item</th>
										<th>Brand</th>
										<th>Description</th>
										<th>Quantity</th>
										<th>Price</th>
									</tr>
								</thead>
								<tbody>
									<?php
										$sql = "select * from item;";
										$result = mysqli_query($connect,$sql);
										$queryResults = mysqli_num_rows($result);
										
										if($queryResults > 0){
											while($row = mysqli_fetch_assoc($result)){
												echo "<tr>";
												echo "<td>".$row['item']."</td>";
												echo "<td>".$row['brand']."</td>";
												echo "<td>".$row['description']."</td>";
												echo "<td>".$row['quantity']."</td>";
												echo "<td>".$row['unitprice']."</td>";
											}
										}
									?>
								</tbody>
							</table>
							</div>
							<div class="pull-left">
								<button id="viewTable" type="submit" name="save" class="btn btn-primary" data-target="#viewModal">Save</button>
							</div>
							<div class="pull-right">
								<button id="btnShowModal" type="submit" name="add" class="btn btn-info add-new" data-target="#LoginModal"><i class="fa fa-plus"></i></button>
							</div>
						</form>
                        <br>
                        <center><h3><b>History</b></h3></center>
                        <div class="table">
                        <table class="table table-stripped table-bordered">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Concern</th>
                                    <th>Priority Level</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
									$sql = "select * from concern join history on concern.reporteddate = history.date;";
									$result = mysqli_query($connect, $sql);
									$queryResults = mysqli_num_rows($result);
									
									if($queryResults > 0){
										while($row = mysqli_fetch_assoc($result)){
											echo "<tr>";
											echo "<td>".$row['date']."</td>";
											echo "<td>".$row['description']."</td>";
											echo "<td>".$row['prioritylevel']."</td>";
											echo "<td>".$row['status']."</td>";
											echo "</tr>";
										}
									}
								?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                            <button id="btnShowModal4" type="submit" name="send" class="btn btn-success" data-target="#viewModal">Send Message</button>
                    </div>
                </div>
            </div>
        </div>
      
		<!-- Modal For Send Message -->
		<form class="form-horizontal style-form" action="send-message-action.php" method="POST">
			<div class="modal fade" id="viewModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<textarea class="form-control" name="response" id="description" rows="3"></textarea>
								<div class="pull-right">
									<button id="send1" type="submit" name="send" class="btn btn-success" data-target="#viewModal">Send</button>
									<br>
								</div>
							</div>
							<div class="form-group">  
								<textarea class="form-control" name="response2" id="description" rows="3"></textarea>
								<div class="pull-right">
									<button id="send2" type="submit" name="sendAgain" class="btn btn-success" data-target="#viewModal">Send</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
        <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
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