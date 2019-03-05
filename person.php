<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/styles.css">

    <?php 
    
    require('includes/config.php');
    require('models/person_model.php');
    
    ?>

    <!-- Display Information if Selection is an Actor -->
    <?php if($actor !== $direct && $direct == NULL) { ?>
        
        <?php foreach($personInfo as $person) {
                $first = $person['first_name'];
                $last = $person['last_name'];
                $dob = $person['date_of_birth'];
                $gender = $person['gender'];
                $pob = $person['place_of_birth'];
                $dod = $person['date_of_death'];
             } ?>
    <title>CIS282 | <?php echo $first; ?> <?php echo $last; ?></title>
</head>
<body>
        <div class="container-fluid">
            <div class="col-1 offset-md-9 mr-md-2"><a href="index.php">Start Over</a></div>
            <div class="row person align-items-end">
                <h2 class="col-3 offset-md-2">Name: <?php echo $first; ?> <?php echo $last; ?></h2>
                <h3 class="col-3 offset-md-1">Date of Birth: <?php echo $person['date_of_birth']; ?></h3>
            </div>

            <div class="row cast align-items-end">
                <h4 class="col-3 offset-md-3 cast">Gender: </h4>
                <div class="col-3 mr-md-3 cast"><?php if($gender == 'M') {echo 'Male';} elseif($gender == 'F') { echo 'Female';} ?></div>
                <h4 class="col-3 offset-md-3 cast">Place of Birth: </h4>
                <div class="col-3 mr-md-3 cast"><?php echo $pob; ?></div>
                <?php if($dod !== "0000-00-00") { ?>
                    <h4 class="col-3 offset-md-3 cast">Date of Death: </h4>
                    <div class="col-3 mr-md-3 cast"><?php echo $dod; ?></div>
                <?php } ?>
            </div>

                
                
            <div class="row movie-headline">
                <h3 class="col-8 offset-md-2 mr-md-2">Movies: </h3>
            </div>
            <?php foreach($personInfo as $person) { ?>
            <div class="row movie">
                <h3 class="col-3 offset-md-3 movie">Title: <a href="movie.php?movie=<?php echo $person['movie_id']; ?>"><?php echo $person['title']; ?></a></h3>
                <h3 class="col-3 offset-md-1 mr-md-2 movie">Character: <?php echo $person['character_name']; ?></h3>
            </div>
            
            <?php } ?>
        </div>

           
        <!-- Display information if selection is a Director -->
    <?php } elseif($actor !== $direct && $actor == Null) { ?>
        
        <?php foreach($directorInfo as $person) {
                $first = $person['first_name'];
                $last = $person['last_name'];
                $dob = $person['date_of_birth'];
                $gender = $person['gender'];
                $pob = $person['place_of_birth'];
                $dod = $person['date_of_death'];
             } ?>
    <title>CIS282 | <?php echo $first; ?> <?php echo $last; ?></title>
</head>
<body>
        <div class="container-fluid">
            <div class="col-1 offset-md-9 mr-md-2"><a href="index.php">Start Over</a></div>

            <div class="row person align-items-end">
                <h2 class="col-3 offset-md-2">Name: <?php echo $first; ?> <?php echo $last; ?></h2>
                <h3 class="col-3 offset-md-1">Date of Birth: <?php echo $person['date_of_birth']; ?></h3>
            </div>

            <div class="row cast align-items-end">
                <h4 class="col-3 offset-md-3 cast">Gender: </h4>
                <div class="col-3 mr-md-3 cast"><?php if($gender == 'M') {echo 'Male';} elseif($gender == 'F') { echo 'Female';} ?></div>
                <h4 class="col-3 offset-md-3 cast">Place of Birth: </h4>
                <div class="col-3 mr-md-3 cast"><?php echo $pob; ?></div>
                <?php if($dod !== "0000-00-00") { ?>
                    <h4 class="col-3 offset-md-3 cast">Date of Death: </h4>
                    <div class="col-3 mr-md-3 cast"><?php echo $dod; ?></div>
                <?php } ?>
            </div>

                
                
            <div class="row movie-headline">
                <h3 class="col-8 offset-md-2 mr-md-2">Movies Directed: </h3>
            </div>
            <?php foreach($directorInfo as $person) { ?>
            <div class="row movie">
                <h3 class="col-3 offset-md-3 movie">Title: <a href="movie.php?movie=<?php echo $person['movie_id']; ?>"><?php echo $person['title']; ?></a></h3>
            </div>
            
            <?php } ?>
        </div>
                    
                <!-- Display information if selection is both an actor and a director -->
        <?php } elseif($actor !==NULL && $direct !== NULL) { ?>
            <?php foreach($directorInfo as $person) {
                $first = $person['first_name'];
                $last = $person['last_name'];
                $dob = $person['date_of_birth'];
                $gender = $person['gender'];
                $pob = $person['place_of_birth'];
                $dod = $person['date_of_death'];
             } ?>
    <title>CIS282 | <?php echo $first; ?> <?php echo $last; ?></title>
</head>
<body>
        <div class="container-fluid">
            <div class="col-1 offset-md-9 mr-md-2"><a href="index.php">Start Over</a></div>

            <div class="row person align-items-end">
                <h2 class="col-3 offset-md-2">Name: <?php echo $first; ?> <?php echo $last; ?></h2>
                <h3 class="col-3 offset-md-1">Date of Birth: <?php echo $person['date_of_birth']; ?></h3>
            </div>

            <div class="row cast align-items-end">
                <h4 class="col-3 offset-md-3 cast">Gender: </h4>
                <div class="col-3 mr-md-3 cast"><?php if($gender == 'M') {echo 'Male';} elseif($gender == 'F') { echo 'Female';} ?></div>
                <h4 class="col-3 offset-md-3 cast">Place of Birth: </h4>
                <div class="col-3 mr-md-3 cast"><?php echo $pob; ?></div>
                <?php if($dod !== "0000-00-00") { ?>
                    <h4 class="col-3 offset-md-3 cast">Date of Death: </h4>
                    <div class="col-3 mr-md-3 cast"><?php echo $dod; ?></div>
                <?php } ?>
            </div>

                
                
            <div class="row movie-headline">
                <h3 class="col-8 offset-md-2 mr-md-2">Movies Directed: </h3>
            </div>
            <?php foreach($directorInfo as $director) { ?>
            <div class="row movie">
                <h3 class="col-3 offset-md-3 movie">Title: <a href="movie.php?movie=<?php echo $director['movie_id']; ?>"><?php echo $director['title']; ?></a></h3>
            </div>
            
            <?php } ?>
            <div class="row movie-headline">
                <h3 class="col-8 offset-md-2 mr-md-2">Movies Acted In: </h3>
            </div>
            <?php foreach($personInfo as $acting) { ?>
            <div class="row movie">
                <h3 class="col-3 offset-md-3 movie">Title: <a href="movie.php?movie=<?php echo $acting['movie_id']; ?>"><?php echo $acting['title']; ?></a></h3>
            </div>
            
            <?php } ?>
        </div>

        <?php } ?>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>

