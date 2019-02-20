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
    <?php foreach($movies as $row) { ?>
        <div><a href="movie.php?movie=<?php echo $row['movie_id']; ?>"><?php echo $row['movie_id']; ?></a></div>
        <div><a href="movie.php?movie=<?php echo $row['movie_id']; ?>"><?php echo $row['title']; ?></a></div>
        <div><?php echo $row['release_date']; ?></div>
        <div><a href="person.php?person=<?php echo $row['person_id']; ?>"><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?></a></div>
        <div><?php echo $row['rating']; ?></div>
        <div><?php echo $row['rotten_rating']; ?></div>
    <?php
    }
    ?>
    <h2>Test</h2>

    
</body>
</html>