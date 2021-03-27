<?php
        echo 'Merci '.$_POST['user_firstName'].' '. $_POST['user_lastName'].' de nous avoir contacté à propos de “'.$_POST['user_subject'].'”.';
        echo '<br>Un de nos conseiller vous contactera soit à l’adresse '.$_POST['user_mail'].' ou par téléphone au '.$_POST['user_phone'].' dans les plus brefs délais pour traiter votre demande :';
        echo '<br>"'.$_POST['user_msg'].'"';
?>
