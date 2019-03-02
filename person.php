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
    require('models/movie_model.php');
    
    ?>
    <?php foreach($personInfo as $person) { ?>
    <title>CIS282 | <?php echo $person['first_name']; ?> <?php echo $person['last_name']; ?></title>
</head>
<body>

        <div class="container-fluid">
            <div class="row person align-items-end">
                <h2 class="col-3 offset-md-2">Name: <?php echo $person['first_name'] . ' ' . $person['last_name']; ?></h2>
                <h3 class="col-3 offset-md-1">Date of Birth: <?php echo $person['date_of_birth']; ?></h3>
            </div>
            <div class="row cast align-items-end">
                <h4 class="col-3 offset-md-3 cast">Gender: </h4>
                <div class="col-3 mr-md-3 cast"><?php if($person['gender'] == 'M') {echo 'Male';} elseif($person['gender'] == 'F') { echo 'Female';} ?></div>
                <h4 class="col-3 offset-md-3 cast">Place of Birth: </h4>
                <div class="col-3 mr-md-3 cast"><?php echo $person['place_of_birth']; ?></div>
                <?php if($person['date_of_death'] !== "0000-00-00") { ?>
                    <h4 class="col-3 offset-md-3 cast">Date of Death: </h4>
                    <div class="col-3 mr-md-3 cast"><?php echo $person['date_of_death']; ?></div>
                <?php } ?>
            </div>
        </div>

    <?php } ?>
    
</body>
</html>

