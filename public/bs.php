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

        <!--HERO-->
        <div id="hero" class="part flex-container-column">
            <div id="herotext">
                <h3> Planera dina veckomåltider baserat på din budget och dina preferenser</h3>
            </div>
            <p><a href="#form" class="button" id="start-submit">Börja nu</a></p>
        </div>

        <!--CONTENT-->
        <div id="content" class="part flex-container-row">
            <div id="box1">
                <h4>Välkommen till Budget SLICE!</h4>
                <p>Kämpar du med idéer om vad du ska laga varje dag för att vara inom dedikerad månadssumma pengar? Oroa dig inte, vi är här för att hjälpa dig.</p>
                <p>Bara i några steg får du en veckomeny med 1 eller 2 (lunch och middag) alternativ. Du kan vara säker på att din månadsbudget kommer att ligga inom en plan.</p>
                <p>Du kan välja mellan vanliga och vegetariska alternativ. </p>
                <p>På den här sidan hittar du recept, tips och annan användbar information som underlättar din budget och måltidsplanering.</p>
            </div>
            <div id="box2">
                <a href="#"><img id="about" src="../app/images/Content.png" alt= "Food picture"></a>
            </div>
        </div>

        <!--FORM-->
        <div id="form" class="part flex-container-column">
            <div id="section-heading">
                <h3>Nu börjar vi!</h3>
                <p>Det är enkelt, fyll bara i formuläret och klicka på knappen "Skapa en meny".</p><br>
            </div>
            <form action="/Budget%20slice/public/menu.php" method=POST>
                <label for="meals">Välj antal måltider per dag:</label>
                <select name="meals" id="meals">
                    <option value=" " selected disabled label=" "></option>  
                    <option value="1" label="1">1</option>  
                    <option value="2" label="2">2</option>
                </select><br>
                <label for="budget">Välj budget (kr):</label>
                <select name="budget" id="budget">
                    <option value=" " selected disabled label=" "></option>
                    <option value="100" label="100">100</option>
                    <option value="250" label="250">250</option>
                    <option value="500" label="500">500</option>
                    <option value="750" label="750">750</option>
                    <option value="1000" label="1000">1000</option>
                </select><br>
                <label for="preference">Välj måltidspreferens:</label>
                <select name="preference" id="preference">
                    <option value=" " selected disabled label=" "></option>
                    <option value="Vanliga" label="Vanliga">Vanliga</option>
                    <option value="Vegetarisk" label="Vegetarisk">Vegetarisk</option>
                </select>
                <br><button class="button" type="submit" id=menubutton >Skapa en meny</button>
            </form>
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
