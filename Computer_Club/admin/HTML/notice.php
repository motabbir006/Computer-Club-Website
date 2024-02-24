<?php
require_once('../connection/db.php');
$query = "SELECT * FROM latest_notice ORDER BY ID DESC LIMIT 20";
$result = mysqli_query($con, $query);
$qu = "SELECT * FROM upcoming_notice ORDER BY ID DESC LIMIT 20";
$re = mysqli_query($con, $qu);
$q = "SELECT * FROM event_notice ORDER BY ID DESC LIMIT 20";
$r = mysqli_query($con, $q);
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
</head>

<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<img class="logooo" src="../images/FINAL NBIU.png" alt="" style=" padding: 5px; width: 4vw; margin: 10px; margin-right: 20px;">
			<span class="text">AdminPanel</span>
		</a>
		<ul class="side-menu top">
		<!-- <li >
				<a href="index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Home page</span>
				</a>
			</li> -->
			<li class="active">
				<a href="notice.php">
					<i class='bx bxs-shopping-bag-alt'></i>
					<span class="text">Notice Section </span>
				</a>
			</li>
			<li>
				<a href="commetty.html">
					<i class='bx bxs-doughnut-chart'></i>
					<span class="text">Commetty</span>
				</a>
			</li>
			<li>
				<a href="Member.php">
					<i class='bx bxs-group'></i>

					<span class="text">Member Request</span>
				</a>
			</li>
			<li>
				<a href="feedback.php">
					<i class='bx bxs-message-dots'></i>
					<span class="text">Feedback</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="../PHP/admin_login.php" class="logout">
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

			<h1>Latest Notice : </h1>

			<form action="../PHP/admin_homepage.php" method="post" enctype="multipart/form-data">
				<div class="x1">
					<div class="date">
						<p> Date</p>
						<input type="text" name="date">
					</div>

				</div>

				<div class="x2">
					<div class="tittle">
						<p>Tittle</p>
						<input type="text" name="title">
					</div>
				</div>

				<div class="x3">
					<div class="description">
						<p>Description</p>
						<input type="text" name="description">
					</div>
				</div>
				<div class="x4">
					<div class="image">
						<p> Add image</p>
						<input type="file" name="image">
					</div>
				</div>

				<div class="x5">
					<div class="update">

						<p class="star"> <b> * </b> Please Check all Field then click this button</p>
						<button type="submit" name="store_data_submit"> Submit </button>
					</div>
				</div>
			</form>
			<h1> Event Notice : </h1>
			<form action="../PHP/admin_homepage.php" method="post" enctype="multipart/form-data">
				<div class="x1">
					<div class="date">
						<p> Date</p>
						<input type="text" name="date">
					</div>

				</div>

				<div class="x2">
					<div class="tittle">
						<p>Tittle</p>
						<input type="text" name="title">
					</div>
				</div>

				<div class="x3">
					<div class="description">
						<p>Description</p>
						<input type="text" name="description">
					</div>
				</div>
				<div class="x4">
					<div class="image">
						<p> Add image</p>
						<input type="file" name="image">
					</div>
				</div>

				<div class="x5">
					<div class="update">

						<p class="star"> <b> * </b> Please Check all Field then click this button</p>
						<button type="submit" name="events_submit"> Submit </button>
					</div>
				</div>
			</form>
			<h1>Upcoming Notice : </h1>
			<form action="../PHP/admin_homepage.php" method="post" enctype="multipart/form-data">
				<div class="x1">
					<div class="date">
						<p> Date</p>
						<input type="text" name="date">
					</div>

				</div>

				<div class="x2">
					<div class="tittle">
						<p>Tittle</p>
						<input type="text" name="title">
					</div>
				</div>

				<div class="x3">
					<div class="description">
						<p>Description</p>
						<input type="text" name="description">
					</div>
				</div>
				<div class="x4">
					<div class="image">
						<p> Add image</p>
						<input type="file" name="image">
					</div>
				</div>

				<div class="x5">
					<div class="update">

						<p class="star"> <b> * </b> Please Check all Field then click this button</p>
						<button type="submit" name="upcoming_table"> Submit </button>
					</div>
				</div>
			</form>
			<h1>Latest Notice : </h1>
			<div class="section-p1">
				<div class="col2">
					<div class="latest-news">
						<table class="t1">

						<tr class="bg_tr1">
							<th>Date</th>
							<th>Title</th>
							<th>Update</th>
							<th>Delete</th>
						</tr>

							<?php while ($row = mysqli_fetch_assoc($result)) { ?>
								<tr>
									<td class="tbdate"><?php echo $row['date']; ?></td>
									<td class="tbdate"><?php echo $row['title']; ?></td>
									<td class="tbdate">
										<a class="edit-btn" href="../PHP/edit_latest.php?id=<?php echo $row['ID']; ?>">Edit</a>

									</td>
									<td class="tbdate">
										<a class="delete-btn" href="../PHP/delete_latest.php?id=<?php echo $row['ID']; ?>">Delete</a>

									</td>
								</tr>
							<?php } ?>
						</table>

					</div>
				</div>
				<div class="col2">
				<h1>Upcoming Notice : </h1>
					<div class="latest-news">

						<table class="t1" >
							
						<tr class="bg_tr1">
							<th>Date</th>
							<th>Title</th>
							<th>Update</th>
							<th>Delete</th>
						</tr>

							<?php while ($row = mysqli_fetch_assoc($re)) { ?>
								<tr>
									<td class="tbdate"><?php echo $row['date']; ?></td>
									<td class="tbdate"><?php echo $row['title']; ?></td>
									<td class="tbdate">
										<a class="edit-btn" href="../PHP/edit_upcoming.php?id=<?php echo $row['ID']; ?>">Edit</a>

									</td>
									<td class="tbdate">
										<a class="delete-btn" href="../PHP/delete_upcomin.php?id=<?php echo $row['ID']; ?>">Delete</a>

									</td>
								</tr>
							<?php } ?>
						</table>

					</div>
				</div>
				<h1>Event Notice : </h1>
				<div class="col2">
					<div class="latest-news">
						
						<table class="t1">
							
						<tr class="bg_tr1">
							<th>Date</th>
							<th>Title</th>
							<th>Update</th>
							<th>Delete</th>
						</tr>

							<?php while ($row = mysqli_fetch_assoc($r)) { ?>
								<tr>
									<td class="tbdate"><?php echo $row['date']; ?></td>
									<td class="tbdate"><?php echo $row['title']; ?></td>
									<td class="tbdate">
										<a class="edit-btn" href="../PHP/edit_event.php?id=<?php echo $row['ID']; ?>">Edit</a>
									</td>
									<td class="tbdate">
										<a class="delete-btn" href="../PHP/delete_event.php?id=<?php echo $row['ID']; ?>">Delete</a>
									</td>
								</tr>
							<?php } ?>
						</table>

					</div>
				</div>
			</div>

		</main>


		<!-- MAIN -->
	</section>
	<!-- CONTENT -->


	<script src="../JS/script.js"></script>
</body>

</html>