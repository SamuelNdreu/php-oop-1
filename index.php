<!DOCTYPE html>
<?php

require_once __DIR__ . '/models/Movies.php';



?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
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
                $IRobot = new Movies('IRobot', '2022', 'Fantasy', 'Neo Matrix','Matrix is an arrangement of numbers into rows and columns'
                );
                $IRobotPartII = new Movies('IRobot (The Return Of Blue Red Pill)', '2022', 'Fantasy', 'Neo Matrix','Matrix is an arrangement of numbers into rows and columns.  
                A matrix is a rectangular arrangement of numbers into rows and columns. For example, matrix A has two rows and three columns');
                $IRobotPartIII = new Movies('IRobot (The End Is Near', '2022', 'Fantasy', 'Neo Matrix','Matrix is an arrangement of numbers into rows and columns. 
                Make your first introduction with matrices and learn about their dimensions and elements. 
                ');

                echo "<h1>$IRobot->title</h1>
                <p>$IRobot->year</p>
                <p>$IRobot->genre</p>
                <p>$IRobot->director</p>
                <p>$IRobot->overview</p>";
                //var_dump($IRobot);

                echo "<h1>$IRobotPartII->title</h1>
                <p>$IRobotPartII->year</p>
                <p>$IRobotPartII->genre</p>
                <p>$IRobotPartII->director</p>
                <p>$IRobotPartII->overview</p>";
                //var_dump($IRobotPartII);
                
                echo "<h1>$IRobotPartIII->title</h1>
                <p>$IRobotPartIII->year</p>
                <p>$IRobotPartIII->genre</p>
                <p>$IRobotPartIII->director</p>
                <p>$IRobotPartIII->overview</p>";
                //var_dump($IRobotPartII);
                ?>
            </div>
        </section>
    </main>
</body>

</html>