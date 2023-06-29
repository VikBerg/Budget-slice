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

        <!--SHARED PHP-->
        <?php
            include('../app/src/shared_src.php');
        ?>
    
        <!--HEADER-->
        <?php
            include('../app/views/header.php');
        ?>

        <!--RECEPIES-->
        <div id="recepies" class="part flex-container-column">
            <div id="recepiestext">
                <h3> Recept</h3>
                <form action="/Budget%20slice/public/recipes.php" method="POST" class="flex-container-row">
                    <input type="text" id="search-text" placeholder="Söka.." name="search">
                    <button class="button" type="submit" id=menubutton ><i class="bi bi-search"></i></button>
                    <!--a class="button" id="search-button" type="submit"><i class="bi bi-search"></i></a-->
                </form>
            </div>
        </div>

        <!--SHARED PHP-->
        <?php
            include('../app/src/recipes_src.php');
        ?>

        <div id="copyright" class="flex-container-row">
            <p> &copy; <?php echo date ('Y'); ?> Budget slice</p>
        </div>
    </div>      
</body>
</html>
