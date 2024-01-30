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
    $genere = [
        "giallo",
        "thriller",
        "western"
    ];
    $film_1 = new Movie("The Killer of the flower moon", 206, $genere, 2023 );
    var_dump($film_1);
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
            </div>
        </div>
    </main>
</body>
</html>