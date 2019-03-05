<?php 

$personId = $_GET['person'];

// Get person details
$strSQL =
    "SELECT p.first_nm AS first_name, p.last_nm AS last_name,
    p.dob AS date_of_birth, p.dod AS date_of_death, p.gender, p.pob AS place_of_birth,
    c.character_nm AS character_name, m.title, m.movie_id, c.casting_id, m.director_id, p.person_id
    FROM cis282movies.persons p, cis282movies.cast c, cis282movies.movies m
    WHERE c.movie_id = m.movie_id
    AND c.person_id = p.person_id
    AND c.person_id = $personId
    ORDER BY m.title;";

// Get result
$result = mysqli_query($connect, $strSQL);

// Fetch data
$personInfo = mysqli_fetch_all($result, MYSQLI_ASSOC);

$strSQL = 
    "SELECT m.title, m.movie_id, m.director_id, 
    p.first_nm AS first_name, p.last_nm AS last_name,
    p.dob AS date_of_birth, p.dod AS date_of_death, p.gender, p.pob AS place_of_birth
    FROM cis282movies.movies m, cis282movies.persons p
    WHERE m.director_id = p.person_id
    AND p.person_id = $personId
    ORDER BY m.title";

// Get result
$result = mysqli_query($connect, $strSQL);

// Fetch data
$directorInfo = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Free result
mysqli_free_result($result);

// Close connection
mysqli_close($connect);

foreach($personInfo as $person) {
    if(is_array($person)) {
        $actor = intval($person['person_id']);
    }  //if (is_null($actor)) { $actor =  'this is null'; }
}

foreach($directorInfo as $direct) {
    if(is_array($direct)) {
        $director = intval($direct['director_id']);
    } 
   
}
?>