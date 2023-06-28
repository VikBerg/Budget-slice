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


        <!--BLOG HERO-->
            <div id="blog" class="part flex-container-column">
                <div id="blogtext">
                    <h3> Blog</h3>
                </div>
                </div>

        <!--BLOG PART-->
            <div id="blogpart" class="part flex-container-row">
                <div id="textpart1">
                    <h4>Senaste nytt</h4>
                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem maxime esse blanditiis nobis ex nihil laudantium repellat? Repellendus est, mollitia labore dolor et, voluptas excepturi eligendi at necessitatibus tenetur sit.</p>
                </div>
                <div id="textpart2">
                    <h4>Läs vår blogg</h4>
                    <p>2023-XX-XX</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe id praesentium numquam! Laudantium architecto voluptatum iure cumque incidunt ullam aperiam libero magnam repudiandae! Tenetur cupiditate incidunt in quasi aperiam eius!</p>
                    <p>2023-XX-XX</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae, earum quae. Dolore veniam animi vitae perspiciatis iusto laborum molestiae magni doloribus eligendi. Eius asperiores consectetur dolorum eos, ipsum ad excepturi?</p>
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
