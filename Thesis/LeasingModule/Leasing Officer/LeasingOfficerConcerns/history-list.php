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
		<div class="col-md-12">
			<div class="content-panel">
			<h4><i class = "fa fa-angle-right"></i> History of Item Requests List</h4>
			<hr>
				
				<div class="container container-fluid">
					<div class = "row">
						<div class="col-lg-11">
							<form action="search-name.php">
								<input type="text" placeholder="Search" name="search">
								<button type="submit" name = "submit-search"><i class="fa fa-search"></i></button>
							</form>
							<div class="table">
								<table class="table">
									<thead>
										<tr>
											<th>Maintenance Name</th>
											<th>Building</th>
											<th>Unit</th>
											<th>Tenant</th>
											<th>Request Item/s</th>
										</tr>
									</thead>
									<tbody>
										<?php
											$sql = "select 
														* 
														from 
															tenant 
																join 
													concern on tenant.id = concern.tenantid 
																join 
													employee on concern.maintenanceid = employee.empid";
											$result = mysqli_query($connect, $sql);
											$queryResult = mysqli_num_rows($result);
																			
											if($queryResult > 0){
												while($row = mysqli_fetch_assoc($result)){
													echo "<tr>";
													echo "<td>".$row['employee.firstname']."</td>";
													echo "<td>".$row['building']."</td>";
													echo "<td>".$row['unitid']."</td>";
													echo "<td>".$row['tenant.firstname']."</td>";
													echo "<td>";
													echo "<button id='btnShowModal' type='button' class='btn btn-success btn-block' data-target='#viewModal'>View</button>";
													echo "</td>";
													echo "</tr>";
												}
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

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