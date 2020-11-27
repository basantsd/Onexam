<?php
include "./base/header.php";
if(!isset($_SESSION['admin']) && !isset($_SESSION['username'])){
    header("Location: ./");
}

?>

<section id="ExamNav" class="bg-light mt-5 pt-5 pb-3 d-flex">
    <div class="ml-4">
    <a class="btn btn-danger" href="insertpost.php" role="button">Add New Exam</a>
    </div>
    <div class="ml-auto mr-4">
    <div class="input-group">
        <div class="input-group-prepend">
        <input class="form-control" type="text" name="" aria-label="Recipient's " id="searchExam" placeholder="Search Exam..." aria-describedby="my-addon">
        
    </div>
</section>

<section id="examedit" class="py-5">
    <div id="admin_head" class="container-fluid py-5 text-center">
        <div class="row">
            <div class="col-10 py-4 mx-auto">
            <h2> Edit Exam</h2>
            <form id="exameditform" method="post" action="" class="my-3">
                
            </form>
            </div>
        </div>
    </div>
</section>

<section id="ExamTbl" class="sec_section py-5">
    <div class="container-fluid py-5 text-center">
        <div class="row">
            <div class="col-10 py-4 mx-auto">
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>S.No.</th>
                            <th>Exam Title</th>
                            <th>Category</th>
                            <th>Total Ques.</th>
                            <th>Timing</th>
                            <th>Author</th>
                            <th>Status</th>
                            <th>Add Question</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="Examtblbody">
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


<?php
include "./base/footer.php";
?>