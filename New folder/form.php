<!DOCTYPE html>
<html>
<head>
	<title>Add</title>
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
							<div class="col-6 text-dark"><h1 class="text-monospace">Form</h1></div>
						</div>
						<form action="insert.php" method="post">
							<div class="form-group text-dark">
								<label>ชื่อ</label>
								<input type="text" name="name" class="form-control" required>
							</div>
							<div class="form-group text-dark">
								<label>น้ำหนัก</label>
								<input type="float" name="weight" class="form-control" required>
							</div>
							<div class="form-group text-dark">
								<label>ส่วนสูง</label>
								<input type="float" name="height" class="form-control" required>
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-sm btn-warning my-3 font-weight-bold">SUBMIT</button>
								<a class="btn btn-sm btn-light my-3" href="index.php">CANCLE</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
