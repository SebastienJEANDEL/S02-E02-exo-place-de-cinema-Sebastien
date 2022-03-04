<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cinéma Rodia - Haut-Cloques</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=PT+Sans+Narrow:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <header class="header">
    <div class="header__container">
      <h1 class="header__title">
        <div class="header__subtitle">
          Votre cinéma
        </div>
        <div class="header__maintitle">
          Le Rodia
        </div>
      </h1>

      <?php include 'templates/nav.tpl.php'; ?>

    </div>
  </header>
  <main class="main-container">
    <section>
      <h2 class="page__title">Actuellement en salle au Cinéma Rodia</h2>

      <?php 
        $films = [
          'The Batman',
          'La Vache et le Prisonnier',
          'Illusions Perdues',
          'Les Tuches 4',
          'Pouic Pouic'
        ];

        var_dump($films);
      ?>

      <?php // Liste des films avec récupération manuelle de chaque film ?>
      <?php /* <ul>
        <li><?php echo $films[0] ?></li>
        <li><?php echo $films[1] ?></li>
        <li><?php echo $films[2] ?></li>
      </ul> */ ?>

      <?php // Liste des films avec utilisation d'une boucle for ?>
      <ul>
        <?php 
          for ($cleFilm = 0 ; $cleFilm <= 4 ; $cleFilm++) {
            echo '<li>' . $films[$cleFilm] . '</li>';
          }
        ?>
      </ul>
      <h2>Salles</h2>
      <ul>
        <?php $rooms = [
                          'Athéna',
                          'Dyonisos',
                          'Hadès',
                          'Zeus'
                        ]; 
        for ($i=0;$i<4;$i++){
          echo'<li>'.$rooms[$i].' </li>';
        }
        
        
        ?>
      </ul>
    </section>
  </main>
  <?php include 'templates/footer.tpl.php'; ?>
</body>
</html>
