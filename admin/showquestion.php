<?php
include "./base/header.php";
if(!isset($_SESSION['admin']) && !isset($_SESSION['username'])){
    header("Location: ./");
}


?>
<section id="QuesNav" class="bg-light mt-5  pt-5 pb-3  d-flex">
    <div class="ml-4">
    <a class="btn btn-danger" href="insertques.php?Exam=<?php echo $_GET['Exam'] ?>" role="button">Add New Question</a>
    <a class="btn btn-primary" href="./showexam.php" role="button">Show Exam</a>
    </div>
    <div class="ml-auto mr-4">
    <div class="input-group">
        <div class="input-group-prepend">
        <input type="text" class="form-control" id="Examc" value="<?php echo $_GET['Exam'] ?>" aria-describedby="helpId" hidden>
        <input class="form-control" id="searchQues" type="text" placeholder="Search Question....." aria-label="Recipient's " aria-describedby="my-addon">
    </div>
</section>
<section id="EditquesShow" class="py-5">
    <div id="admin_head" class="container-fluid py-5 text-center">
        <div class="row">
            <div class="col-10 py-4 mx-auto">
            <h2> Add Question</h2>
            <form id="QuesEditForm" class="my-3">
                
            </form>
            </div>
        </div>
    </div>
</section>
<section id="Questbl" class="sec_section py-5">
    <div class="container-fluid py-5 text-center">
        <div class="row">
            <div class="col-10 py-4 mx-auto">
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>S.No.</th>
                            <th>Question</th>
                            <th>Answer1</th>
                            <th>Answer2</th>
                            <th>Answer3</th>
                            <th>Answer4</th>
                            <th>Right Ans</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="QuestionTable">
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


<?php
include "./base/footer.php";
?>