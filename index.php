<?php
require 'functions.php';
$connection = dbConnect();

$result = $connection->query('SELECT * FROM `projecten`');


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>backend</title>
</head>
<body>
    <div class="container">
        <h1>dit zijn al mijn projecten!</h1>

        <section class="projecten">
            <?php foreach($result as $row): ?>
            <article class="titels">
                <h2><?php echo $row['titel']; ?></h2>
                <figure class="foto"><img src="img/<?php echo $row['foto']; ?>" alt="project 1"></figure>
                <header>
                </header>
                <p><?php echo $row['beschrijving']; ?></p>
            </article>
            <?php endforeach; ?>

                <!-- <article class="titels">
                    <h2>project</h2>
                    <figure class="foto"><img src="img/project2.jpg" alt="project 2"></figure>
                    <header>
                        <h3>project 1</h3>
                    </header>
                    <p>mijn tweede project</p>
                </article>

                    <article class="titels">
                        <h2>project</h2>
                        <figure class="foto"><img src="img/project3.jpg" alt="project 3"></figure>
                        <header>
                            <h3>project 1</h3>
                        </header>
                        <p>mijn derde project</p>
                    </article>
 -->



        </section>
    </div>
    
</body>
</html>