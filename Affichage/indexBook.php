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
        <li><a href="/PHP_Vanilla/E-commerce/Affichage/indexVideoGames.php">🎮 Jeux-Videos 🎮</a></li>
        <li><a href="/PHP_Vanilla/E-commerce/Affichage/indexVirtual.php">💻 Produits virtuels 💻</a></li>
    </menu>

    <h1>Ajouter un livre</h1>

    <form action="indexBook.php" method="POST">
        <input type="number" name="HTPrice" id="HTPrice" placeholder="Prix HT (en €)" required="required">
        <input type="text" name="name" id="name" placeholder="Title" required="required">
        <input type="text" name="author" id="author" placeholder="Author" required="required">
        <input type="text" name="format" id="format" placeholder="Format" required="required">
        <input type="text" name="categorie" id="categorie" placeholder="Catégorie" required="required">
        <input type="number" name="stock" id="stock" placeholder="Stock" required="required">
        <textarea name="description" id="description" cols="30" rows="10" placeholder="Résumé" required="required"></textarea>
        <input type="submit" value="Ajouter au stock">
    </form>

    <h1>Stock : </h1>

    <?php

    include_once __DIR__ . "\..\Models\Physique\Book.php";

    use Models\Physique\Book as Book;

    if (count($_POST) != 0) {
        $newProduct = new Book(
            $_POST["HTPrice"],
            $_POST["name"],
            $_POST["categorie"],
            $_POST["stock"],
            $_POST["description"],
            $_POST["author"],
            $_POST["format"]
        );

        // $newProduct->displayBook();

        $newProduct->displayProduct();
    }
    ?>
</body>

</html>