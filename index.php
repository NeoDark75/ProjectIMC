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
            <form action="resultat.php" method="POST">
                <div class="form-data">
                    <input type="number" name="poids" id="poids" class="fadeIn second" placeholder="Poids (kg)" required>
                </div>
                <div class="form-data">
                    <input type="number" name="taille" id="taille" class="fadeIn third" placeholder="Taille (cm)" required>
                </div>
                <div class="confirm">
                    <input type="submit" name="confirm" id="confirm" class="fadeIn fourth" required>
                </div>
            </form>
            <div id="formFooter">
                <p class="underlineHover">Antoine SILLARD©</p>
            </div>
        </div>
    </div>
</body>

</html>