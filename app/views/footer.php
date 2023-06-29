<?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && 
          in_array("firstname",array_keys($_POST)) &&
          in_array("email",array_keys($_POST)) &&
          in_array("subject",array_keys($_POST))): ?>
<?php

    $fname = trim($_POST['firstname']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);

    if(!empty($fname) && !empty($email) && !empty($subject)) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){   
            $from = "$email";
            $to = "viktorijakv@gmail.com";
            $subject1 = "New message";
            $author = 'From: ' . $fname . ', ' . $email;
            //$subject = htmlspecialchars ($subject);
            //mail($to, $subject1, $author, $subject, $from);
            echo "<script> alert ('Tack för ditt meddelande! Vi återkommer till dig så fort vi kan.');</script>";
        }
    }

    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "budgetslice");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

    if($mysqli->connect_error) {
        echo 'Error ' . $mysqli->connect_error;
        exit();
    }

    mysqli_query($mysqli, "INSERT INTO clients (fname, email, subject) VALUES('$_POST[firstname]', '$_POST[email]', '$_POST[subject]')");
?>
<?php endif ?>

<div id="footer" class="part flex-container-row">
    <div class="contact">
        <h3>Kontakta oss</h3>
        <p>Kontakta oss gärna om du har några frågor, önskemål eller vill dela med dig av din feedback. Vi vill gärna höra från dig!</p>
        <ul>
            <li><i class="bi bi-envelope"></i><p>Skicka ett mail till oss till <a href="mailto:info@budgetslice.com">info@budgetslice.com</a></p></li>
            <li><i class="bi bi-telephone"></i><p>Ring oss på <a href="tel:+46700223344">+4600223344</a></p></li>
        </ul>
    </div>
    <div class="message">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <h3>Skriv ditt meddelande</h3>
            <div class="row">
                <p><input type="text" id="fname" name="firstname" placeholder="Ditt namn" required></p>
                <p><input type="email" id="email" name="email" placeholder="Din e-postadress" required></p>
                <p><textarea id="subject" name="subject" placeholder="Skriv något.." required></textarea></p>
                <p><button name="send-button" class="button" type="submit" id="contact-submit">Skicka</button></p>
            </div>
        </form>
    </div>
</div>

<div id="copyright" class="flex-container-row">
    <p> &copy; <?php echo date ('Y'); ?> Budget slice</p>
</div>