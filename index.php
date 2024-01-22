<?php 
    $title = "Home pagina";
    include_once "components/wrapper.php";

    $host = "127.0.0.1:3306";
    $username = "root";
    $password = "";
    $dbName = "magicthrills";

    $pdo = new PDO("mysql:host=$host;dbname=$dbName;charset=UTF8", $username, $password);


    if (!empty($_POST)) {
        $naam = $_POST["naam"];
        $text = $_POST["text"];

        $result = $pdo->prepare("INSERT INTO reviews VALUES ('$naam', '$text')")->execute();
    }
?>

<div class="header-img">
</div>

<h2>
    Jouw dagje Walibi Holland
</h2>

<div> 

    <h1>Reviews</h1>
    <?php 
        $reviews = $pdo->query("SELECT * FROM reviews")->fetchAll();
        foreach ($reviews as $review):
    ?>
        <div>
            <h4><?= $review["naam"] ?></h4>
            <p><?= $review["text"] ?></p>
        </div>
    <?php endforeach ?>


    <h3>Laat jouw review achter:</h3>
    <form method="post">
        <label>
            Naam:
        <input type="text" name="naam" required>
        </label>

        <label>
            Jouw review:
        <textarea name="text" required></textarea>
        </label>

        <input type="submit" value="Verzend review">
    </form>
</div>


<?php include_once "components/footer.php" ?>