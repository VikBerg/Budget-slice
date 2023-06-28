<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Budget slice</title>
    <link rel="icon" href="../app/images/favicon.ico.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&family=Roboto:wght@100;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../app/css/#normalize.css">
    <link rel="stylesheet" href="../app/css/bs.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../app/js/bs.js" defer></script>
</head>
<body>

    <!--STRUCTURE-->
    <div id="structure">

        <!--HEADER-->

        <?php
         include('../app/views/header.php');
         ?>

        <!--ABOUT HERO-->
        <div id="abouthero" class="part flex-container-row">
            <div id="abouttext">
                <h3> Om oss</h3>
            </div>
        </div>

        <!--ABOUT TEXT-->
        <div id="aboutpart" class="part flex-container-row">
            <div id="about">
                <p>Vårt mål är att hjälpa familjer och individer att uppfylla sin matbudget genom att planera och förbereda mat hem. Vi tror att daglig matlagning kan vara roligt och hemlagad mat är hälsosam. Bara i några steg får du en veckomeny som hjälper dig att planera.</p>
                <p>Vår planeringsalgoritm är korrekt och tar relevanta livsmedelspriser från de största livsmedelskedjans butiker.</p>
                <div class="flex-container-row" id=statements>
                    <div id="shortwallet">
                        <i class="bi bi-wallet2">Spara dina pengar</i>
                    </div>
                    <div id="shorttime">
                        <i class="bi bi-alarm">Spara tid</i>
                    </div>
                    <div id="shortactive">
                        <i class="bi bi-activity">Håll dig frisk</i>
                    </div>
                </div>
            </div>
            <div id="abphoto">
            <a href="#"><img id="aboutphoto" src="../app/images/about.png" alt="About photo"></a>
            </div>
        </div>


        <!--NEWS LETTER-->
        <?php
        include('../app/views/newsletter.php');
        ?>

        <!--FOOTER-->
        <?php
        include('../app/views/footer.php');
        ?>


    </div>
</body>
</html>
