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
        <li><a href="/PHP_Vanilla/E-commerce/Affichage/indexVideoGames.php">🎮 Jeux-Videos 🎮</a></li>
    </menu>

    <h1>Ajouter un produit virtuel</h1>

    <form action="indexVirtual.php" method="POST">
        <input type="number" name="HTPrice" id="HTPrice" placeholder="Prix HT (en €)" required="required">
        <input type="number" name="TVA" id="TVA" placeholder="TVA (en %)" required="required">
        <input type="text" name="name" id="name" placeholder="Nom" required="required">
        <input type="text" name="categorie" id="categorie" placeholder="Catégorie" required="required">
        <textarea name="description" id="description" cols="30" rows="10" placeholder="Description" required="required"></textarea>
        <input type="submit" value="Ajouter au catalogue">
    </form>

    <h1>Catalogue : </h1>

    <?php

    include_once __DIR__ . "\..\Models\Virtuel\Product.php";

    use Models\Virtuel\Product as Product;

    if (count($_POST) != 0) {
        $newProduct = new Product(
            $_POST["HTPrice"],
            $_POST["TVA"],
            $_POST["name"],
            $_POST["categorie"],
            $_POST["description"]
        );

        $newProduct->displayProduct();
    }
    ?>
</body>

</html>