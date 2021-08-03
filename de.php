<!DOCTYPE html>
<html lang="de">

<?php include_once "partials/head.php"; ?>

<body>

    <div class="page-wrapper d-flex flex-column justify-content-between">
        
        <div class="content-wrapper d-flex flex-column justify-content-around large-pad">
            <img src="assets/jimmys_logo.png" srcset="assets/jimmys_logo.svg 1x" class="img-fluid logo mb-5">
        
            <div>
                <h1 class="mb-4">Bleiben wir in Verbindung</h1>
                <p class="mb-4">Für unseren Newsletter anmelden und exklusive Angebote<br> und Neuigkeiten zu Jimmy’s Apartments direkt per E-Mail erhalten.</p>

                <form>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" id="vorname" name="vorname" placeholder="Vorname" required maxlength="128">
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" id="nachname" name="nachname" placeholder="Nachname" required maxlength="128">
                        </div>

                        <div class="form-group col-12 col-md-9">
                            <input type="e-mail" class="form-control" id="email" name="email" placeholder="Ihre email adresse" required maxlength="128">
                        </div>

                        <div class="col-12 col-md-3 d-flex d-md-block justify-content-center">
                            <button type="submit" class="btn btn-submit btn-black">Anmelden</button> 
                        </div>

                        <div class="col-12 d-flex justify-content-center mt-4 bk-yellow col-mit">
                            <span class="lowercase">Mit der Registrierung für den Newsletter stimmen Sie den <a href="#">AGBs</a> zu.</span>
                        </div>

                    </div>
                </form>
            </div>
        </div>

        <div class="large-pad footer-info d-flex flex-column lowercase py-5 bk-yellow">
                <p class="mb-0"><strong>Buchen, anfragen, informieren:</strong></p>
                <a href="#">jimmys.at</a>
                <a href="mailto:office@jimmys.at">office@jimmys.at</a>
                <a href="tel:+4319970010" class="mb-4 mb-md-0">+43-1-997 00 10</a>
            </div>

        <div class="background-lang-container">
            <img src="assets/home_background_de.jpg" class="img-fluid">
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>
</html>