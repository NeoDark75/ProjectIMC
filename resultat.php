<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>IMC Calculator</title>
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <h1>IMC Calculator</h1>
            <div class="fadeIn first">
                <img src="imc.png" id="icon" alt="User Icon" />
            </div>
            <h2>Resultat :</h2>
            <?php
            if (
                isset($_POST['taille']) && !empty($_POST['taille']) &&
                isset($_POST['poids']) && !empty($_POST['poids'])
            ) {
                $taille = $_POST["taille"];
                $poids = $_POST["poids"];
                $imc = $poids / ($taille / 100) ** 2;
                echo "<h2>" . round($imc, 1) . "</h2>";
                switch (true) {
                    case ($imc < 18.5):
                        echo "<h2>Insuffisance pondérale (maigreur)</h2>";
                        break;
                    case ($imc >= 18.5) and ($imc < 25):
                        echo "<h2>Corpulence normale</h2>";
                        break;
                    case ($imc >= 25) and ($imc < 30):
                        echo "<h2>Surpoids</h2>";
                        break;
                    case ($imc >= 30) and ($imc < 35):
                        echo "<h2>Obésité modérée</h2>";
                        break;
                    case ($imc >= 35) and ($imc < 40):
                        echo "<h2>Obésité sévère</h2>";
                        break;
                    case ($imc >= 40):
                        echo "<h2>Obésité morbide ou massive</h2>";
                        break;
                }
            } else {
                header("Location: index.php");
            }

            ?>

            <div id="formFooter">
                <a class="underlineHover" href="">En savoir plus</a>
                <br>
                <p class="underlineHover">Antoine SILLARD©</p>
            </div>
        </div>
    </div>

</body>

</html>