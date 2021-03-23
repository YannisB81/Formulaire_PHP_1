<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="thanks.php"  method="post">
            <div>
                <label for="lastName">Nom :</label>
                <input type="text" id="lastName" name="user_lastName">
            </div>
            <div>
                <label for="firstName">Prénom :</label>
                <input type="text" id="firstName" name="user_firstName">
            </div>
            <div>
                <label for="mail">e-mail :</label>
                <input type="email" id="mail" name="user_mail">
            </div>
            <div>
                <label for="phone">Téléphone :</label>
                <input type="text" id="phone" name="user_phone">
            </div>
            <div>
            <label for="subject">Sujet du mail:</label>
            <select id="subject" name="user_subject">
                <option value="Problème réseau">Problème réseau</option>
                <option value="Problème matériel">Problème matériel</option>
                <option value="Problème de stylo">Problème de stylo</option>
                <option value="Problème de rideau">Problème de rideau</option>
            </select>
            </div>
            <div>
                <label for="msg">Message :</label>
                <textarea id="msg" name="user_msg"></textarea>
            </div>
            <div class="button">
                <button type="submit">Envoyer le message</button>
            </div>
            
        </form>
    </body>
</html>