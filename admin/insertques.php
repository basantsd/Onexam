<?php
include "base/header.php";
if(!isset($_SESSION['admin']) && !isset($_SESSION['username'])){
    header("Location: ./");
}

$ExamQ = $_GET['Exam'];

?>

<section class="mt-5 py-5">
    <div id="admin_head" class="container-fluid py-5 text-center">
        <div class="row">
            <div class="col-10 py-4 mx-auto">
            <h2> Add Question</h2>
            <form id="QuesForm" class="my-3">
                <div class="form-group">
                  <label for="">Exam Question</label>
                  <textarea type="text" class="form-control" name="Exam_q" id="Exam_q" aria-describedby="helpId" row="3" placeholder=""></textarea>
                </div>
                <div class="form-group">
                  <label for="">Answer 1</label>
                  <input type="text" class="form-control" name="Ans1" id="Ans1" aria-describedby="helpId" placeholder="">
                  <input type="text" class="form-control" name="Eques" value="<?php echo $ExamQ ?>" id="Eques" aria-describedby="helpId" hidden>
                </div>
                <div class="form-group">
                  <label for="">Answer 2</label>
                  <input type="text" class="form-control" name="Ans2" id="Ans2" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                  <label for="">Answer 3</label>
                  <input type="text" class="form-control" name="Ans3" id="Ans3" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                  <label for="">Answer 4</label>
                  <input type="text" class="form-control" name="Ans4" id="Ans4" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                  <label for="">Right Answer</label>
                  <input type="text" class="form-control" name="AnsC" id="AnsC" aria-describedby="helpId" placeholder="">
                </div>
                <input readonly name="QuesSub" id="QuesSub" type="submit" class="btn btn-primary" value="Submit">
            </form>
            </div>
        </div>
    </div>
</section>

<?php
include "base/footer.php";
?>