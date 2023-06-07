<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Style/style.css">
    <title>E-commerce</title>
</head>

<body>

    <h1>Menu</h1>

    <menu>
        <li><a href="/PHP_Vanilla/E-commerce/Affichage/indexBook.php">📚 Livres 📚</a></li>
        <li><a href="/PHP_Vanilla/E-commerce/Affichage/indexVirtual.php">💻 Produits virtuels 💻</a></li>
    </menu>

    <h1>Ajouter un jeu vidéo</h1>

    <form action="indexVideoGames.php" method="POST">
        <input type="number" name="HTPrice" id="HTPrice" placeholder="Prix HT (en €)" required="required">
        <input type="text" name="name" id="name" placeholder="Nom" required="required">
        <input type="text" name="categorie" id="categorie" placeholder="Catégorie" required="required">
        <input type="text" name="type" id="type" placeholder="Type de jeu" required="required">
        <input type="number" name="stock" id="stock" placeholder="Stock" required="required">
        <input type="number" name="age" id="age" placeholder="Age user" required="required">
        <input type="number" name="ageMini" id="ageMini" placeholder="PEGI" required="required">
        <input type="number" name="note" id="note" placeholder="Note" required="required">
        <textarea name="description" id="description" cols="30" rows="10" placeholder="Description" required="required"></textarea>
        <input type="submit" value="Ajouter au stock">
    </form>

    <h1>Stock : </h1>

    <?php

    include_once __DIR__ . "\..\Models\Physique\VideoGames.php";

    use Models\Physique\VideoGames as VideoGames;

    if (count($_POST) != 0) {
        $newProduct = new VideoGames(
            $_POST["HTPrice"],
            $_POST["name"],
            $_POST["categorie"],
            $_POST["stock"],
            $_POST["description"],
            $_POST["type"],
            $_POST["age"],
            $_POST["ageMini"],
            $_POST["note"]
        );

        $newProduct->checkAge();

        $newProduct->displayProduct();
    }
    ?>
</body>

</html>