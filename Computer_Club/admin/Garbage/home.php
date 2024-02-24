<?php

require_once('../connection/db.php');
$query = "SELECT * FROM member_info ORDER BY id DESC LIMIT 20";
$result = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../CSS/style.css">
	<link rel="stylesheet" href="../CSS/member.css">

	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminPanel</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="index.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Home page</span>
				</a>
			</li>
			<li>
				<a href="notice.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Notice Section </span>
				</a>
			</li>
			<li>
				<a href="commetty.html">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Commetty</span>
				</a> 
			</li>
			<li>
				<a href="Member.php">
                    <i class='bx bxs-group' ></i>
					
					<span class="text">Member Request</span>
				</a>
			</li>
			<li>
				<a href="feedback.php">
                    <i class='bx bxs-message-dots' ></i>
					<span class="text">Feedback</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="../PHP/admin_login.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
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
			<i class='bx bx-menu' ></i>
		
			<form action="#">
				<div class="form-input">
					
					 <i class='bx bx-s' ></i>
				</div>
			</form>
			
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
		

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">

					
						<h3>
						12
						</h3>
						<p>New Member Request </p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>34</h3>
						<p>Total Member</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Member Request</h3>
						<i class='bx bx-filter' ></i>
					</div>
					<table class="t1">

						<tr>
							
						</tr>
							<tr class="tr1">
								<td>Name </td>
								<td>ID</td>
								<td>Batch</td>
								<td>Dept.</td>
								<td>Contact Number </td>
								<td>Email</td>
								<td>Computer Skill</td>
								<td>Other Skill</td>
								<td>What to learn </td>
								<td>Available</td>
								<td>Remove</td>
								<td>ADD</td>
							</tr>
			
							<tr class="tr2">
			
			
			
								<?php
								while ($row = mysqli_fetch_assoc($result)) {
			
								?>
									<td class="tbdate"><?php echo $row['first_name'] . ' ' . $row['last_name']; ?></td>
									<td class="tbdate"><?php echo $row['student_id']; ?></td>
									<td class="tbdate"><?php echo $row['batch']; ?></td>
									<td class="tbdate"><?php echo $row['dept']; ?></td>
									<td class="tbdate"><?php echo $row['contact_number']; ?></td>
									<td class="tbdate"><?php echo $row['email']; ?></td>
									<td class="tbdate"><?php echo $row['computer_skill']; ?></td>
									<td class="tbdate"><?php echo $row['other_skill']; ?></td>
									<td class="tbdate"><?php echo $row['what_to_learn']; ?></td>
									<td class="tbdate"><?php echo $row['available']; ?></td>
									
									<td class="tbdate">
								<a class="delete-btn" href="../PHP/delete_member.php?id=<?php echo $row['id']; ?>">Delete</a>
		
								</td>
									<td class="tbdate">
								<a class="delete-btn" href="../PHP/approve_member.php?id=<?php echo $row['id']; ?>">Accept</a>
		
								</td>
							</tr>
						<?php
								}
						?>
			
			
						</table>
		
				</div>
				
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="../JS/script.js"></script>
</body>
</html>