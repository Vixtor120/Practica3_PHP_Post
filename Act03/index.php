<?php
include 'mood_functions.php';
$moodRecommendation = null;
$welcomeMessage = "Buenas! Selecciona tu estado de ánimo.";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['labelanimo']) && !empty($_POST['labelanimo'])) {
        $mood = htmlspecialchars($_POST['labelanimo']); // Limpiamos la entrada
        $moodRecommendation = recommendMood($mood); // Llamamos a la función
        $welcomeMessage = "Tu estado de ánimo es: " . ucfirst($mood);
    } else {
        $moodRecommendation = "Por favor, selecciona un estado de ánimo.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Recomendador de Canciones</title>
</head>

<body>
    <div class="container">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="moodForm">
            <h1><?php echo $welcomeMessage; ?></h1>
            <label><input type="radio" name="labelanimo" value="feliz" required>Feliz</label>
            <br>
            <label><input type="radio" name="labelanimo" value="triste">Triste</label>
            <br>
            <label><input type="radio" name="labelanimo" value="energetico">Energético</label>
            <br>
            <label><input type="radio" name="labelanimo" value="relajado">Relajado</label>
            <br>
            <label><input type="radio" name="labelanimo" value="inspirado">Inspirado</label>
            <br>
            <label><input type="radio" name="labelanimo" value="estresado">Estresado</label>
            <br><br>
            <input type="submit" value="Obtener Recomendación">
        </form>

        <?php if ($moodRecommendation && is_array($moodRecommendation)): ?>
            <div id="infoSong" class="epic-animation" style="display: none;">
                <img id="imagenCancion" src="<?php echo $moodRecommendation['imagen']; ?>" alt="Imagen de la canción" style="max-width: 100%; border-radius: 10px;">
                <h2 id="tituloCancion"><?php echo $moodRecommendation['titulo']; ?></h2>
                <audio id="audio" controls autoplay>
                    <source src="<?php echo $moodRecommendation['cancion']; ?>" type="audio/mpeg">
                </audio>
                <h3>Otras canciones recomendadas:</h3>
                <ul>
                    <?php foreach ($moodRecommendation['otras_canciones'] as $cancion): ?>
                        <li><?php echo $cancion; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <script>
            document.body.style.backgroundColor = "<?php echo $moodRecommendation['color']; ?>";
            document.getElementById('infoSong').style.display = 'block';
            </script>
        <?php endif; ?>
    </div>

    <script src="./script.js"></script>
</body>

</html>