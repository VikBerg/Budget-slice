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

    <!--SHARED PHP-->
    <?php
        include('../app/src/shared_src.php');
    ?>

    <!--STRUCTURE-->
    <div id="structure">

      <!--HEADER-->
      <?php
          include('../app/views/header.php');
      ?>

      <!--MENU HERO-->
      <div id="menuhero" class="part flex-container-row">
      <div id="herotext">
        <h3> Meny</h3>
      </div>
      </div>

      <!--MENU PART-->
    <div id="menupart" class="part flex-container-row">  
        <div id="important">
            <h4>Viktig!</h4>
            <p> För att förenkla vår meny och inköpslista förväntar vi oss att du har hem:</p>
                <ul>
                    <li>kryddor (peppar, örter, etc.)</li>
                    <li>oljor (solros, oliv, raps, etc.)</li>
                    <li>salt</li>
                    <li>socker</li>
                </ul> 
            <p>Dessa poster ingår inte i prisberäkningen och inköpslistan.</p>
                <a href="#"><img id="braske" src="../app/images/braske.png" alt="Strawberry"></a>       
                <a href="#"><img id="svogunas" src="../app/images/svogunas.png" alt="Onion"></a>
                <a href="#"><img id="seeds" src="../app/images/seeds.png" alt="Seeds"></a> 
                <a href="#"><img id="leaf" src="../app/images/leaf.png" alt="Leaf"></a>
          </div>
    <div id="menutable" class="part flex-container-column">
      <?php
          include('../app/src/menu_src.php');
      ?>
    </div>
    </div>
    <div id="copyright" class="flex-container-row">
    <p> &copy <?php echo date ('Y'); ?> Budget slice</p>
    </div>
</body>
</html>
