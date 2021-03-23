<?php

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['user_mail']) && !empty($_POST['user_msg']) && !empty($_POST['user_phone']) && !empty($_POST['user_lastName']) && !empty($_POST['user_firstName'])) {
        // trim les valeurs post
        $data = array_map('trim', $_POST);
        // vérifier email is ok 
        $isOkEmail = filter_var($data['user_mail'], FILTER_VALIDATE_EMAIL);

        if ($isOkEmail === false) {
            $errors[] = "L'email saisie n'est pas valide";
        }
        
    } else {
        $errors[] = "Tous les champs sont requis";
    }
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error;
        }
    } else {
        echo 'Merci '.$_POST['user_firstName'].' '. $_POST['user_lastName'].' de nous avoir contacté à propos de “'.$_POST['user_subject'].'”.';
        
        echo '<br>Un de nos conseiller vous contactera soit à l’adresse '.$_POST['user_mail'].' ou par téléphone au '.$_POST['user_phone'].' dans les plus brefs délais pour traiter votre demande :';
        echo '<br>"'.$_POST['user_msg'].'"';
    }

}
?>
