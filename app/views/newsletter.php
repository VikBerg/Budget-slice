<?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && in_array("nemail",array_keys($_POST))): ?>
<?php    
    $email = trim($_POST['nemail']);

    if(!empty($email)) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){   
            echo "<script> alert ('Tack!');</script>";
        }
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script> alert ('Ange korrekt e-postadress');</script>";
     }


    define("DBLETTER_SERVER", "localhost");
    define("DBLETTER_USER", "root");
    define("DBLETTER_PASSWORD", "");
    define("DBLETTER_NAME", "budgetslice");

    $mysqli = new mysqli(DBLETTER_SERVER, DBLETTER_USER, DBLETTER_PASSWORD, DBLETTER_NAME);
    if($mysqli->connect_error) {
        echo 'Error ' . $mysqli->connect_error;
        exit();
    }

    mysqli_query($mysqli, "INSERT INTO subscribers (nemail) VALUES('$_POST[nemail]')");
?>
<?php endif ?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
    <div id="newsletter" class="part flex-container-column">
        <h3> Prenumerera på vårt nyhetsbrev</h3>
        <div id="subscription" class="flex-container-row">
            <input type="text" id="nemail" name="nemail" placeholder="Ange din e-postadress"required>
            <p><button name="subscription-button" class="button" type="submit" >Prenumerera</button></p>
        </div>
    </div>
</form>