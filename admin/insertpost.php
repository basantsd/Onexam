<?php
include "base/header.php";
if(!isset($_SESSION['admin']) && !isset($_SESSION['username'])){
  header("Location: ./");
}
?>

<section id="postuse" class="mt-5 py-5">
    <div id="admin_head" class="container-fluid py-5 text-center">
        <div class="row">
            <div class="col-10 py-4 mx-auto">
            <h2> Add New Exam</h2>
            <form id="examform" method="post" action="" class="my-3">
                <div class="form-group">
                  <label for="">Exam Title</label>
                  <input type="text" class="form-control" name="Etitle" id="Etitle" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                  <label for="">Sub Title / Category</label>
                  <input type="text" class="form-control" name="Ecate" id="Ecate" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                  <label for="">Exam Timing (1min to 10min)</label>
                  <input type="number" min="1" max="10" class="form-control" name="Etime" id="Etime" aria-describedby="helpId" placeholder="">
                </div>
                <div class="form-group">
                  <label for="">Exam Auther</label>
                  <input type="text" class="form-control" name="Eauth" id="Eauth" aria-describedby="helpId" placeholder="">
                </div>
                <?php if(isset($_SESSION['username'])){ ?>
                  <input type="text" hidden class="form-control" name="Auser" id="Auser" value="<?php echo $_SESSION['username'] ?>" aria-describedby="helpId" placeholder="">
                <?php }?>
                  <div class="form-group">
                    <label for="my-input">Exam Image</label>
                    <input id="Eimg" class="form-control-file" type="file" name="Eimg">
                    <span class="help-block">Allow only jpeg, jpg and png format Images</span>
                  </div>
                  
                <input id="addexam" readonly class="btn btn-primary" type="submit" value="Submit">
            </form>
            </div>
        </div>
    </div>
</section>

<?php
include "base/footer.php";
?>