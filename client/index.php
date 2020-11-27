<?php
include "./base/header.php";
?>

<header id="Home_head" class="my-5 d-flex align-items-center">
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-10 mx-auto">
                <div class="row">
                    <div id="head_cont" class="col-md-7 order-2 order-lg-1 d-flex justify-content-center flex-column">
                        <h1>Complate your Exam,<br>
                            <span id="logoname">OnExam</span></h1>
                        <p class="mt-4">
                            The OnExam is help you to test yourself and build yourself.
                            It’s simple and easy , Upload your exam question and answer
                            and then test yourself.
                        </p>
                        <a class="mt-4 btn btn-danger w-25 py-3" type="button" href="./test.php">Apply Now</a>
                    </div>
                    <div class="col-md-5 mt-4 order-1 order-lg-2">
                        <img class="img-fluid float-md-right" src="./asset/image/header.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<section id="services" class="sec_section">
    <div class="container-fluid py-5 text-center">
        <div class="row">
            <div class="col-10 py-4 mx-auto">
                <h1 class="d-inline-block" id="sec_head">SERVICES</h1>
                <div class="row pt-4">
                    <div class="col-md-4">
                        <i id="ser_icon" class="fa fa-file-alt"></i>
                        <h3 class="pt-4">Upload Qus/Ans</h3>
                    </div>
                    <div class="col-md-4"><i id="ser_icon" class="fa fa-clock"></i>
                        <h3 class="pt-4">24 Hour On</h3>
                    </div>
                    <div class="col-md-4"><i id="ser_icon" class="fa fa-life-ring"></i>
                        <h3 class="pt-4">Any Time Access</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="step_follow">
    <div class="container-fluid pt-4">
        <div class="row">
            <div class="col-10 py-4 mx-auto text-center">
                <h1 class="d-inline-block" id="sec_head">Follow Steps</h1>
                <div class="row pt-4">
                    <div class="col-md-7 text-left">
                        <h2>01 : Create Your Own Exam</h2>
                        <ul>
                            <li>Click on "Create Exam" Button</li>
                            <li>Enter in admin page</li>
                            <li>Login / Signup for create new Exam</li>
                        </ul>
                    </div>
                    <div class="col-md-5">
                        <img class="img-fluid float-md-right" src="./asset/image/createexam.svg" alt="">
                    </div>
                    <div class="col-md-5 pt-5">
                        <img class="img-fluid float-md-right" src="./asset/image/createexam02.svg" alt="">
                    </div>
                    <div class="col-md-7 pt-5 text-left">
                    <h2>02 : Create Exam After Login/Signup</h2>
                        <ul>
                            <li>There are two section. Insert Data and Show Data</li>
                            <li>First Click on Exam/ques in insert section.</li>
                            <li>Fill all the details </li>
                            <li>Submit with good content. </li>
                        </ul>
                    </div>
                    <div class="col-md-7 pt-5 text-left pt-5">
                    <h2>03 : Enter Your Exam Questions</h2>
                        <ul>
                            <li>After submit the Exam you go to the home page.</li>
                            <li>Now select Exam/ques in show section </li>
                            <li>In find "Add ques" button in the table click on it.  </li>
                            <li>Fill question and right answer.  </li>
                            <li>Now your Exam in created. You can see this on Test page.  </li>
                        </ul>
                    </div>
                    <div class="col-md-5 pt-5">
                        <img class="img-fluid float-md-right" src="./asset/image/createexam01.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="subscription" class="sec_section">
    <div class="container-fluid py-5 text-center">
        <div class="row">
            <div class="col-10 py-4 mx-auto">
                <h1 class="d-inline-block" id="sec_head">SUBSCRIPTION</h1>
                <p>Submit E-mail For New Update / Information</p>
                <form method="get" action="">
                    <div class="row pt-4">
                        <div class="col-md-4">
                            <h3>Enter Your Subscription </h3>
                        </div>
                        <div class="col-md-6">
                            <input class="form-control py-3" type="text" name="">
                        </div>
                        <div class="col-md-2">
                            <a name="" id="" class="btn btn-primary px-5" href="#" role="button">Submit</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<?php
include "./base/footer.php";
?>