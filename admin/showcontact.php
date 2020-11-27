<?php
include "./base/header.php";
if(!isset($_SESSION['admin']) || isset($_SESSION['username'])){
    header("Location: ./");
}

?>
<section id="UserNav" class="bg-light mt-5  pt-5 pb-3  d-flex">
    <div class="ml-4">
    <a name="" id="" class="btn btn-danger" href="insertuser.php" role="button">Add New User</a>
    </div>
    <div class="ml-auto mr-4">
    <div class="input-group">
        <div class="input-group-prepend">
        <input class="form-control" id="searchUser" type="text" placeholder="Search User...." aria-label="Recipient's " aria-describedby="my-addon">
    </div>
</section>
<section id="Contacttbl" class="sec_section py-5">
    <div class="container-fluid py-5 text-center">
        <div class="row">
            <div class="col-10 py-4 mx-auto">
                <table class="table table-light">
                    <thead class="thead-light">
                        <tr>
                            <th>S.No.</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                    <tbody id="contact_show">
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php
include "./base/footer.php";
?>