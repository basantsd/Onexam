<?php
include "./base/header.php";

$ecode = $_GET["Exam"]; 
	//Set Question Number
	$number = $_GET['page'];

	//Query for the Question
$query = "SELECT * FROM tbl_ques WHERE Qid = $number AND examid = '{$ecode}'";
   
	// Get the question
	$result = mysqli_query($conn,$query);

	// Get Total questions
    $query1 = "SELECT * FROM tbl_ques WHERE examid='{$ecode}'";
    $res = mysqli_query($conn,$query1);
	$total_questions = mysqli_num_rows($res);
 	
?>

<section id="test_head" class="pt-5">
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-11 text-center mx-auto">
                <h1 class="text-white bg-dark px-4 py-3 w-25">Test Demo</h1>
            </div>
        </div>
    </div>
</section>
<section id="quiz">
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-10 mx-auto">
            <h1>Test Demo</h1>
            <form id="resultQuiz" method="POST" action="./data/resultshow.php">
            <?php  
            if($total_questions>0){
                while($row = mysqli_fetch_assoc($result)){
            ?>
                <div class="card my-5">
                    <div class="card-header">
                        <h3>Question <?php 
                        if($number <= $total_questions){
                            echo $number;
                        } ?> of <?php echo $total_questions ?></h3>
                    </div>
                    <div class="card-body text-left">
                        <h5 class="card-title my-4"><?php echo $row['fullques'] ?></h5>
                        
                        <div class="form-check">
                            <label id="quiz_list" class="form-check-label">
                                <input type="radio" class="form-check-input" value="<?php echo $row['ans_one'] ?>" name="optradio"> <?php echo $row['ans_one'] ?>
                            </label>
                        </div>
                        <div class="form-check">
                            <label id="quiz_list" class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio" value="<?php echo $row['ans_two'] ?>"> <?php echo $row['ans_two'] ?>
                            </label>
                        </div>
                        <div class="form-check">
                            <label id="quiz_list" class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio" value="<?php echo $row['ans_three'] ?>"> <?php echo $row['ans_three'] ?>
                            </label>
                        </div>
                        <div class="form-check">
                            <label id="quiz_list" class="form-check-label">
                                <input type="radio" class="form-check-input" name="optradio" value="<?php echo $row['ans_four'] ?>"><?php echo $row['ans_four'] ?>
                            </label>
                        </div>
                        <input type="hidden" name="number" value="<?php echo $number; ?>">
                        <input type="hidden" name="eid" value="<?php echo $ecode; ?>">
                    </div>
                </div>
                    <input id='resSubmit' type='submit' readonly value="submit" class='btn btn-primary mb-4 px-4 py-3'>
                <?php
               
                 }
                }else{
                   echo "<h1>No Question Avaliable!</h1>";
                }
                ?>
            
            </form>
            </div>
        </div>
    </div>
</section>
<?php
include "./base/footer.php";
?>