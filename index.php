<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>CIS 282 | Movie List</title>

    <?php

    require('includes/config.php');

    $strSQL = "SELECT m.movie_id, p.person_id, m.title, 
    p.first_nm AS first_name, p.last_nm AS last_name, 
    m.year, m.release_date, r.rating_nm AS rating,
    m.post_credit, m.gross_box AS gate, l.language_nm AS language,
    m.rt_rating AS rotten_rating
    FROM cis282movies.movies m, cis282movies.persons p, 
    cis282movies.ratings r, cis282movies.languages l
    WHERE m.director_id = p.person_id
    AND m.rating = r.rating_id
    AND m.language = l.language_id
    ORDER BY m.movie_id";

    // Get result
    $result = mysqli_query($connect, $strSQL);

    // Fetch data
    $movies = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Free result
    mysqli_free_result($result);

    // Close connection
    mysqli_close($connect);

    ?>

</head>
<body>
    <h1>Hello World</h1>
<<<<<<< HEAD

    <div class="container-fluid main-title">
        <div class="row">
            <div class="col">
                <h2>Movie List</h2>
            </div>
        </div>
    </div>

    <div class="container-fluid main-headers">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-3">Title</div>
            <div class="col-2">Release Date</div>
            <div class="col-2">Director</div>
            <div class="col-2">Ratings</div>
            <div class="col-2">Rotten Tomatoes</div>
        </div>
    </div>

    <?php foreach($movies as $row) { ?>
    <div class="container-fluid list">
        <div class="row">
            <div class="col-1 text-center"><a href="movie.php?movie=<?php echo $row['movie_id']; ?>"><?php echo $row['movie_id']; ?></a></div>
            <div class="col-3"><a href="movie.php?movie=<?php echo $row['movie_id']; ?>"><?php echo $row['title']; ?></a></div>
            <div class="col-2"><?php echo $row['release_date']; ?></div>
            <div class="col-2"><a href="person.php?person=<?php echo $row['person_id']; ?>"><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></a></div>
            <div class="col-2"><?php echo $row['rating']; ?></div>
            <div class="col-2"><?php echo $row['rotten_rating']; ?></div>
        </div>
    </div>
=======
>>>>>>> 71c10594a9014b020be0e6990f81d9e98ba71291
    <?php
    }
    ?>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    
</body>
</html>