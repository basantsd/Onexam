<?php
include "./base/header.php";
?>

<section id="contact" class="my-5">
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-11 mx-auto">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Contact Form</h2>
                        <img class="img-fluid" src="./asset/image/contact.svg" alt="">
                    </div>
                    <div class="col-md-6 bg-dark text-white rounded">
                        <form method="post" action="" id="Contact" class="py-4 px-3">

                            <div class="form-group">
                                <label for="my-input">Name</label>
                                <input id="my-input" class="form-control" type="text" name="Cname">
                            </div>
                            <div class="form-group">
                                <label for="my-input">Phone</label>
                                <input id="my-input" class="form-control" type="text" name="Cphone">
                            </div>
                            <div class="form-group">
                                <label for="my-input">Email</label>
                                <input id="my-input" class="form-control" type="email" name="Cemail">
                            </div>
                            <div class="form-group">
                                <label for="my-textarea">Message</label>
                                <textarea id="my-textarea" class="form-control" name="Cmsg" rows="5"></textarea>
                            </div>
                            <div>
                                <input type="submit" class="btn btn-primary" type="button" value="Send">
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="map" class="my-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-11 mx-auto">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227159.68113915448!2d77.83992741076895!3d27.176104919171127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39740d857c2f41d9%3A0x784aef38a9523b42!2sAgra%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1601785458253!5m2!1sen!2sin"
                        allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include "./base/footer.php";
?>