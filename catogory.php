

<?php
    $conn = mysqli_connect('localhost', 'root', '', 'php');

    $sql = "SELECT id, name, created_at FROM category";

    if (isset($_POST['search'])) {
    	$s = $_POST['search'];
    	$sql = "SELECT id, name, created_at FROM name LIKE '%$s%' ";
    }

    $result = mysqli_query($conn, $sql);
   
?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>category</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <form action="" method="POST" class="form-inline" role="form">
    	<div class="form-group">
    		<input class="form-control" name="search" placeholder="Input field">
    	</div>

    	<button type="submit" class="btn btn-primary">Search</button>
    </form>
  	<table class="table">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Created</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($result as $s) : ?>
			<tr>
				<td><?php echo $s['id'] ?></td>
				<td><?php echo $s['name'] ?></td>
				<td><?php echo $s['created_at'] ?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>  	
    </div>



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>   