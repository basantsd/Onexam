<?php
session_start();
include "./base/header.php";

?>
            <div class="container my-5 pt-5">
				<h2>Your Result</h2>
				<p>Congratulation You have completed this test succesfully.</p>
				<p>Your <strong>Score</strong> is <?php echo $_SESSION['score']; ?>  </p>
				<?php unset($_SESSION['score']); ?>
			</div>
<?php
include "./base/footer.php";
?>