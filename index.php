<?php

                // connect to database
    // $conn = mysqli_connect('');

    // //             // check connection
    // if($conn):                                     // if connection is negative then:
    //     echo 'Connected to MYSQLi';
    // //  else:
    // //     echo 'Connection error: ' . mysqli_connect_error(); 
    //  endif;
    //             // close the connection to the database
    // mysqli_close($conn);

?>

<?php require('templates/header.php'); ?>
<?php require('languages.php'); ?>


<ul id="nav-mobile" class="right">
  <li><a href="cv.php" class="btn brand" alt="Button for CV" title="Open my CV in a new tab">CV</a></li>
  <hr align="right" width="200px" color=" #112a5f">
  <li><a href="personalStatement.php" class="btn brand" alt="Button for personal statement" title="See my personal statement">Personal statement</a></li>
</ul>

<h1 style="color: rgb(212, 32, 152); text-indent: 50px">Languages</h1>
<hr align="left" width="1000px" color=" rgb(0, 0, 0,)">

<div class="container">
  <div class="row">

    <?php foreach($languages as $language): ?>

        <div class="col">
          <div class="card">
            <div class="card-content center">
              <a href="<?php echo $language['website']; ?>" target="_blank">
                <img src="<?php echo $language['logo']; ?>" alt="Logo" title="<?php echo $language['name'] . ' - Open in new tab'; ?>" height="80" width="auto">
              </a>
            </div>
            <div class="card-action center">
                <!-- <a href="details.php?id=<?php echo $language['name'] ?>" style="color: rgb(224, 160, 0); font-weight: 500">More info</a> -->
                <a href="projects.php?id=<?php echo $language['name'] ?>" style="color: rgb(224, 160, 0); font-weight: 500">My projects</a>
                <!-- <a href="<?php echo $language['name'] . '_projects.php'; ?>" style="color:rgb(224, 180, 0); font-weight: 500">My projects</a> -->
            </div>
          </div>
        </div>

    <?php endforeach ?>

  </div>
</div>



<?php require('templates/footer.php'); ?>
</html>