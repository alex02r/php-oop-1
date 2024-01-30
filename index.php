<?php  
    class Movie{
        public $title;
        public $time;
        public $genre;
        public $year;

        function __construct($_title, $_time, $_genre, $_year){
            $this->title = $_title;
            $this->time = $_time;
            $this->genre = $_genre;
            $this->year = $_year;
        }
    };

    //dichiariamo un oggetto della classe
    $genere_film1 = [
        "giallo",
        "thriller",
        "western"
    ];
    $film_1 = new Movie("The Killer of the flower moon", 206, $genere_film1, 2023 );

    $genere_film2=[
        "drammatico",
        "azione",
        "thriller",
        "gangster"
    ];

    $film_2 = new Movie("Scarface", 170, $genere_film2, 1983 );

    $genere_film3 = [
        "azione",
        "fantascienza",
        "thriller",
        "avventura"
    ];
    $film_3 = new Movie("Inception", 148, $genere_film3, 2010 );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>
<body>
    <header class="p-3 bg-dark text-white">
        <h1>Films</h1>
    </header>
    <main>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2>Lista dei film :</h2>
                </div>
                <div class="col-3">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo$film_1->title; ?>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">
                                Durata: <?php echo $film_1->time." m";?>
                            </h6>
                            <p class="card-text">
                                <h6>Genere:</h6>
                                <?php 
                                    for ($i=0; $i < count($film_1->genre); $i++) { 
                                        echo " -".$film_1->genre[$i];
                                    }
                                ?>
                            </p>
                            <p class="card-subtitle text-body-secondary">
                                <h6>Anno di uscita :</h6>
                                <?php  echo $film_1->year; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo$film_2->title; ?>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">
                                Durata: <?php echo $film_2->time." m";?>
                            </h6>
                            <p class="card-text">
                                <h6>Genere:</h6>
                                <?php 
                                    for ($i=0; $i < count($film_2->genre); $i++) { 
                                        echo " -".$film_2->genre[$i];
                                    }
                                ?>
                            </p>
                            <p class="card-subtitle text-body-secondary">
                                <h6>Anno di uscita :</h6>
                                <?php  echo $film_2->year; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card shadow h-100">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo$film_3->title; ?>
                            </h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">
                                Durata: <?php echo $film_3->time." m";?>
                            </h6>
                            <p class="card-text">
                                <h6>Genere:</h6>
                                <?php 
                                    for ($i=0; $i < count($film_3->genre); $i++) { 
                                        echo " -".$film_3->genre[$i];
                                    }
                                ?>
                            </p>
                            <p class="card-subtitle text-body-secondary">
                                <h6>Anno di uscita :</h6>
                                <?php  echo $film_3->year; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>