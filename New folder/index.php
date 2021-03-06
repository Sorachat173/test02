<!DOCTYPE html>
<html>
<head>
	<title>63070135data</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<style type="text/css">
		.card {
			border-top: solid 5px #22EEED;
		}
	</style>
</head>
<body class="bg-dark py-5">
	<div class="container text-light">
		<div class="row">
			<div class="col-12 col-lg-8 offset-lg-2">
				<div class="card shadow">
					<div class="card-body">
						<div class="row">
							<div class="col-6 text-dark"><h1 class="text-monospace">Data</h1></div>
							<div class="col-6 text-right"><a href="form.php" class="btn btn-warning btn-sm font-weight-bold">ADD</a></div>
						</div>
						<div class="table-responsive">
							<?php
								$conn = mysqli_init();
								mysqli_real_connect($conn, 'ihost.it.kmitl.ac.th', 'it63070135_it63070135', 'HIFmqm86', 'it63070135_it63070135', 3306);
								if (mysqli_connect_errno($conn))
								{
								    die('Failed to connect to MySQL: '.mysqli_connect_error());
								}
								$res = mysqli_query($conn, 'SELECT * FROM exam');
							?>
							<table class="table table-borderless table-hover">
								<thead>
									<tr>
										<th width="150px">Action</th>
										<th>ชื่อ</th>
										<th>น้ำหนัก</th>
										<th>ส่วนสูง</th>
										<th>BMI</th>
									</tr>
								</thead>
								<tbody>
									<?php
										while($Result = mysqli_fetch_array($res)) {
									?>
									<tr>
										<td><center><a href="Delete.php?id=<?php echo $Result['id'];?>"
                                                class="btn btn-sm btn-danger">delete</a></center></td>
  
										<td><?php echo $Result['name'];?></td>
										<td><?php echo $Result['weight'];?></td>
										<td><?php echo $Result['height'];?></td>
										<td><?php echo $Result['bmi'];?></td>
									</tr>
									<?php
										}
									?>
								</tbody>
							</table>
							<?php
								mysqli_close($conn);
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
