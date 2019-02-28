<?php

$movieId = $_GET['movie'];

// Get movie details
$strSQL = 
    "SELECT m.movie_id, p.person_id, m.title, 
    p.first_nm AS first_name, p.last_nm AS last_name, 
    m.year, m.release_date, m.description, m.duration, r.rating_nm AS rating,
    m.post_credit, m.gross_box AS gate, l.language_nm AS language,
    m.rt_rating AS rotten_rating
    FROM cis282movies.movies m, cis282movies.persons p, 
    cis282movies.ratings r, cis282movies.languages l
    WHERE m.director_id = p.person_id
    AND m.rating = r.rating_id
    AND m.language = l.language_id
    AND m.movie_id = $movieId
    ORDER BY m.movie_id
";

// Get result
$result = mysqli_query($connect, $strSQL);

// Fetch data
$movieBio = mysqli_fetch_all($result, MYSQLI_ASSOC);

//Get Cast Details
$strSQL = "SELECT
c.movie_id
, p.person_id
, p.first_nm as first_name
, p.last_nm as last_name
, c.character_nm
, r.role_nm as role
FROM 
cis282movies.movies m
, cis282movies.persons p
, cis282movies.cast c
, cis282movies.roles r
WHERE
c.role_id = r.role_id
AND c.person_id = p.person_id
AND m.movie_id = c.movie_id
AND m.movie_id = $movieId
order by c.role_id
";

// Get Result
$result = mysqli_query($connect, $strSQL);

// Fetch Data
$movieCast = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Free result
mysqli_free_result($result);

// Close connection
mysqli_close($connect);

?>