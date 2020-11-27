<?php
include "base/header.php";
if(!isset($_SESSION['admin']) && !isset($_SESSION['username'])){
    header("Location: ./");
}

?>

<section id="services" class=" text-center my-5 pt-4">
    <h1 class="bg-danger text-white py-3">Insert Data</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-10 py-4 mx-auto">
                <div class="row">
                    <div class="col-md-4">
                        <a href="./insertpost.php">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title mx-auto">Exam/ques</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="services" class=" text-center my-5">
    <h1 class="bg-danger text-white py-3">Show Data</h1>
    <div class="container-fluid my-4">
        <div class="row">
            <div class="col-10 py-4 mx-auto">
            <div class="row">
            <?php if(isset($_SESSION['admin'])){ ?>
                    <div class="col-md-4">
                        <a href="./showuser.php">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title mx-auto">User</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="./showcontact.php">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title mx-auto">Contact</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                    <div class="col-md-4">
                        <a href="./showexam.php">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title mx-auto">Exam/ques</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include "base/footer.php";
?>