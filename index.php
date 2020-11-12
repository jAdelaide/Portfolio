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
<?php require('languagesArray.php'); ?>


<ul id="nav-mobile" class="right">
  <li><a href="assets/CV.pdf" class="btn brand" alt="Button for CV" title="Open my CV in a new tab" target="_blank">CV</a></li>
  <hr align="right" width="200px" color="#112a5f">
  <li><a href="personalStatement.php" class="btn brand" alt="Button for personal statement" title="See my personal statement">Personal statement</a></li>
</ul>

<?php include 'sections/about_me.php'; ?>
<?php include 'sections/languages.php'; ?>
<?php include 'sections/education.php'; ?>
<!-- <?php include 'sections/blogs.php'; ?> -->

<?php require('templates/footer.php'); ?>
</html>