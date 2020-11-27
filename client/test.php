<?php
include "./base/header.php";
?>

<section id="text_head" class="pt-5">
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-11 text-center mx-auto">
                <h1 class="text-white bg-dark px-4 py-3 w-25">Test Demo</h1>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="text-center bg-dark mx-auto">
        <div class="container">
            <div class="row py-3">
                <div class="col-10 mx-auto">
                    <h4 class="float-left text-white">Search </h4>
                    <div class="form-inline float-right">
                        <input id="ExamSearch" class="form-control" type="text" name="" placeholder="Search Exam.....">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
    $sql = "SELECT * from tbl_exam WHERE total_q>0";

    $res = mysqli_query($conn,$sql) or die();
         
    ?>
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-10 text-center mx-auto">
                <div class="row">
                <?php

if(mysqli_num_rows($res)>0){
    while($row=mysqli_fetch_assoc($res)){   
?>
                    <div class="col-md-6 col-lg-4">
                        <div class="card" id="serchExam">
                            <a href="./testproducts.php?Exam=<?php echo $row['ExamCode'] ?>&page=1"><img class="card-img-top" src="../admin/upload/<?php echo $row['e_image'] ?>" alt=""></a>
                            <div class="card-body">
                                <a href="./testproducts.php?Exam=<?php echo $row['ExamCode'] ?>&page=1">
                                    <h3 class="card-title"><?php echo $row['title'] ?></h3>
                                </a>
                                <h5 class="card-title">(<?php echo $row['category'] ?>)</h5>
                            </div>
                            <div class="card-footer d-flex justify-content-between">
                                <p><i class="fa fa-question"></i> Question : <?php echo $row['total_q']  ?></p>
                                <p><i class="fa fa-clock"></i> Duration : <?php echo $row['total_m'] ?> min</p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
    }else{
        echo "<h1>NO EXAM AVALIABLE.</h1>";
    }
    ?>
                </div>
            </div>
        </div>
    </div>

        
</section>

<?php
include "./base/footer.php";
?>