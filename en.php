<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="Jimmy's">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jimmy's Apartments</title>
    <meta name="description" content="Jimmy's Apartments Landing Page">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- BOOTSTRAP LINKS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- CSS STYLESHEET -->
    <link rel="stylesheet" text="text/css" href="style.css"> 

</head>

<body>
    <div class="container-fluid">           
        <div class="row">
            <div class="col-lg-6 col-lang order-2 order-lg-1">
                <!-- -->
            </div>
                
            <div class="col-lg-6 col-lang col-background col-en order-1 order-lg-2">
                <!-- -->
            </div>
        </div>
    </div>

    <div class="content-wrapper content-wrapper-en d-flex flex-column justify-content-between large-pad">
        <img src="assets/jimmys_logo.png" srcset="assets/jimmys_logo.svg 1x" class="img-fluid logo mb-5">
       
        <div>
            <h1 class="mb-4">Stay in touch</h1>
            <p class="mb-4">Subscribe to our newsletter and receive exclusive offers <br>and news about Jimmy’s Apartments directly by e-mail.</p>

            <form>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <input type="text" class="form-control" id="vorname" name="vorname" placeholder="First name" required maxlength="128">
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="text" class="form-control" id="nachname" name="nachname" placeholder="Last name" required maxlength="128">
                    </div>

                    <div class="form-group col-12 col-md-9">
                        <input type="e-mail" class="form-control" id="email" name="email" placeholder="Your email adress" required maxlength="128">
                    </div>

                    <div class="col-12 col-md-3">
                        <button type="submit" class="btn btn-submit btn-black">Subscribe</button> 
                    </div>

                    <div class="col-12 d-flex justify-content-center mt-4">
                        <span class="lowercase">By clicking the subscribe button, you agree to the <a href="#">general terms & conditions.AGBs</a></span>
                    </div>

                </div>
            </form>
        </div>

        <div class="footer-info d-flex flex-column lowercase my-5">
            <p class="mb-0"><strong>Bookings and more information:</strong></p>
            <a href="#">jimmys.at</a>
            <a href="mailto:office@jimmys.at">office@jimmys.at</a>
            <a href="tel:+4319970010" class="mb-4 mb-md-0">+43-1-997 00 10</a>
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>