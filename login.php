<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Luxe Cars</title>
</head>
<body>
    <header>
        <?php
            include "topo.php";
        ?>
    </header>
    <section id="main">
            <form action="" method="post" name="f_login" id="f_login">
                <label for="">Utilisateur</label>
                <input type="text" name="f_user">
                <label for="">Mot Passe</label>
                <input type="password" name="f_senha">
                <input type="submit" value="Entrer" name="f_login">
            </form>
    </section>
  

    <footer>
        <?php
            include "footer.php";
        ?> 
    </footer>

</body>
</html>