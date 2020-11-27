<?php include 'config.php'; ?>
<?php session_start(); ?>
<?php 
	//For first question, score will not be there.
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}
	if($_POST){
		$ecode = $_POST['eid'];
		// Get Total questions
		$query1 = "SELECT * FROM tbl_ques WHERE examid='{$ecode}'";
		$res = mysqli_query($conn,$query1);
		$total_questions = mysqli_num_rows($res);
		
		//We need to capture the question number from where form was submitted
		$number = $_POST['number'];

		//Here we are storing the selected option by user
		$selected_choice = $_POST['optradio'];
		
		//What will be the next question number
		$next = $number+1;
		
		//Determine the correct choice for current question
		$query = "SELECT * FROM tbl_ques WHERE Qid = $number AND examid = '{$ecode}' AND c_ans='{$selected_choice}'";
	
		$result = mysqli_query($conn,$query);
		
		//Increase the score if selected cohice is correct
		if(mysqli_num_rows($result)){
			$_SESSION['score']++;
		}
			//Redirect to next question or final score page. 
		if($number == $total_questions){
			header("LOCATION: ../final.php");
		}
		else{
			header("LOCATION: ../testproducts.php?Exam={$ecode}&page={$next}");
		}

	}


?>