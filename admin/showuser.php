<?php
include "./base/header.php";
if(!isset($_SESSION['admin']) || isset($_SESSION['username'])){
    header("Location: ./");
}


?>
<section id="UserNav" class="bg-light mt-5  pt-5 pb-3  d-flex">
    
</section>

<section id="Usertbl" class="sec_section py-5">
    <div class="container-fluid py-5 text-center">
        <div class="row">
            <div class="col-10 py-4 mx-auto">
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>S.No.</th>
                            <th>Full Name</th>
                            <th>UserName</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody id="usereshow">
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php
include "./base/footer.php";
?>