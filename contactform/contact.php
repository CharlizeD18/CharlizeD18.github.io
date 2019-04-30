<?php
if($_POST["message"]) {
    mail("charlized18@berkeley.edu", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>