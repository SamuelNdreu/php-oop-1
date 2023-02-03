<!DOCTYPE html>
<?php

require_once __DIR__ . '/models/Movies.php';



?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Oop-1</title>
</head>

<body>
    <main>
        <h1>
            PHP OOP 1
        </h1>
        <section>
            <div class="moviesprint">
                <?php
                $IRobot = new Movies('IRobot', '2022', 'Fantasy', 'Neo Matrix');
                $IRobotPartII = new Movies('IRobot (The Return Of Blue Red Pill)', '2022', 'Fantasy', 'Neo Matrix');
                $IRobotPartIII = new Movies('IRobot (The End Is Near', '2022', 'Fantasy', 'Neo Matrix', 'Tate /s brothers');
                ?>
            </div>
        </section>
    </main>
</body>

</html>