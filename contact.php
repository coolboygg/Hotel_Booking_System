<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>



    <?php require('include/links.php'); ?>
    <style>


    </style>
</head>

<body class="bg-light">
    <?php require('include/header.php'); ?>


    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">CONTACT US</h2>
        <p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam laudantium quis ipsa
            accusamus
            maxime rem soluta nobis blanditiis distinctio explicabo!

        </p>

    </div>




    <div class="container">
        <div class="row">
            <!--location follow us -->
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4">
                    <iframe class="w-100 rounded mb-4" height="320px"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3499.44024416578!2d80.56458307424403!3d28.706386480725275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a1ecc8394dc51d%3A0x3781d770867d2b87!2sHotel%20Gyanu%20Plaza!5e0!3m2!1sen!2snp!4v1685690232248!5m2!1sen!2snp"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <h5>Address</h5>
                    <a href="https://goo.gl/maps/RZSqjBii4ogjkYAT6" target="_blank"
                        class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt-fill"></i> Gyanu plaza, Dhangadhi,kailali
                    </a>
                    <h5 class="mt-4">Call Us</h5>
                    <a href="Tel : 977-091-523456" class="d-inline-block mb-2 text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> 977-091-523456
                    </a>

                    <h5 class="mt-4">Follow Us</h5>
                    <a href="#" class="d-inline-block  text-dark fs-5 me-2 ">
                        <i class="bi bi-facebook me-1"></i>

                    </a>

                    <a href="#" class="d-inline-block  text-dark fs-5 me-2 ">
                        <i class="bi bi-twitter me-1"></i>

                    </a>

                    <a href="#" class="d-inline-block  text-dark fs-5  ">
                        <i class="bi bi-instagram me-1"></i>

                    </a>

                </div>

            </div>
            <!--contact us form -->
            <div class="col-lg-6 col-md-6  px-4">
                <div class="bg-white rounded shadow p-4">
                    <form method="POST">
                        <h5>Send a message</h5>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Name</label>
                            <input name="name" required type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Email</label>
                            <input name="email" required type="email" class="form-control shadow-none">
                        </div>
                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Subject</label>
                            <input name="subject" required type="text" class="form-control shadow-none">
                        </div>

                        <div class="mt-3">
                            <label class="form-label" style="font-weight:500;">Message</label>
                            <textarea name="message" required class="form-control shadow-none" rows="5"
                                style="resize:none;"></textarea>

                        </div>
                        <button type="submit" name="send" class="btn text-white custom-bg mt-3">SEND</button>



                    </form>

                </div>

            </div>

        </div>
    </div>



    <?php
    if(isset($_POST['send']))
    {
        $frm_data = filteration($_POST);
        $q = "INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?,?,?,?)";
        $values = [$frm_data['name'],$frm_data['email'],$frm_data['subject'],$frm_data['message']];
        
        $res = insert($q,$values,'ssss');
        if($res==1){
            alert('success','mail sent!');
        }
        else{
            alert('error','Server Down! Try again later.');
        }
    }
    
    ?>







    <?php require('include/footer.php'); ?>








</body>

</html>