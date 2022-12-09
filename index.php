<?php
require_once __DIR__ . "/Models/Movie.php";
require_once __DIR__ . "/db.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie_class</title>
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- link style -->
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <header>
        <h1>Movies</h1>
    </header>
    <main>
        <div class="container">
            <div class="row g-2">
                <?php foreach ($movies as $movie) { ?>
                    <div class="col-3">
                        <div class="ms_card">
                            <h2> Title: <?php echo $movie->title ?> </h2>
                            <h2> Genre:
                                <?php foreach ($movie->genre as $genre) { ?>
                                    <span><?php echo $genre ?> </span>
                                <?php } ?>
                            </h2>
                            <h2> Actors:
                                <?php foreach ($movie->actors as $actor) { ?>
                                    <span><?php echo $actor ?> </span>
                                <?php } ?>
                            </h2>
                            <h2> Nation: <?php echo $movie->nation ?> </h2>
                            <h2> Year: <?php echo $movie->year ?> </h2>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>

</html>