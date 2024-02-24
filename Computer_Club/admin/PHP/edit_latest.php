<?php
require_once('../connection/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {

    $id = $_GET['id'];
    $select_query = "SELECT * FROM latest_notice WHERE ID = ?";
    $stmt = mysqli_prepare($con, $select_query);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../CSS/notice.css">
	<link rel="stylesheet" href="../CSS/style.css">
	

	<title>AdminHub</title>

	<style>

		textarea{
			width: 100%;
			height: 15vh;
		}
	</style>
</head>

<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminPanel</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="../HTML/index.php">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Home page</span>
				</a>
			</li>
			<li>
				<a href="../HTML/notice.php">
					<i class='bx bxs-shopping-bag-alt'></i>
					<span class="text">Notice Section </span>
				</a>
			</li>
			<li>
				<a href="../HTML/commetty.html">
					<i class='bx bxs-doughnut-chart'></i>
					<span class="text">Commetty</span>
				</a>
			</li>
			<li>
				<a href="../HTML/Member.php">
					<i class='bx bxs-group'></i>

					<span class="text">Member Request</span>
				</a>
			</li>
			<li>
				<a href="../HTML/feedback.php">
					<i class='bx bxs-message-dots'></i>
					<span class="text">Feedback</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="admin_login.php" class="logout">
					<i class='bx bxs-log-out-circle'></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu'></i>

			<form action="#">
				<div class="form-input">

					<i class='bx bx-s'></i>
				</div>
			</form>

			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>

			<div class="left">
				<h2>NBIU COMPUTER Notice Secton</h2>

			</div>

		
			<h1>  Edit Latest Notice : </h1>
			<form action="" method="post">
			<input type="hidden" name="id" value="<?php echo $row['ID']; ?>">

				<div class="x1">
					<div class="date">
						<p> Date</p>
				 <input type="text" name="date" value="<?php echo $row['date']; ?>">
					</div>

				</div>

				<div class="x2">
					<div class="tittle">
						<p>Tittle</p>
						 <input type="text" name="title" value="<?php echo $row['title']; ?>">
					</div>
				</div>

				<div class="x3">
					<div class="description">
						<p>Description</p>
						<textarea name="description" value="<?php echo $row['description']; ?>"> </textarea> 
					</div>
				</div>

				<div class="x5">
					<div class="update">

						<p class="star"> 
						<button type="submit" name="update_data_submit">Update</button>
					</div>
				</div>
			</form>
			
		</main>


		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<script src="../JS/script.js"></script>
</body>

</html>

<?php
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_data_submit'])) {

    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $update_query = "UPDATE latest_notice SET title = ?, description = ? WHERE ID = ?";
    $stmt = mysqli_prepare($con, $update_query);
    mysqli_stmt_bind_param($stmt, 'ssi', $title, $description, $id);
    mysqli_stmt_execute($stmt);
    header("Location: ../HTML/notice.php");
    exit();
} else {

    echo"Something wrong try again! ";
}
?>
