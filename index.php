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



// $languages = [
//     ['name' => 'Python', 'website' => 'https://www.python.org/', 'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Python-logo-notext.svg/120px-Python-logo-notext.svg.png'], // with text: 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Python_logo_and_wordmark.svg/486px-Python_logo_and_wordmark.svg.png'],
//     ['name' => 'Ruby', 'website' => 'https://www.ruby-lang.org/en/', 'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Ruby_logo.svg/198px-Ruby_logo.svg.png'],
//     ['name' => 'HTML', 'website' => 'https://html.com/', 'logo' => 'https://upload.wikimedia.org/wikipedia/commons/d/de/HTML5_oval_logo.png'],
//     ['name' => 'CSS', 'website' => 'https://sass-lang.com/', 'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Sass_Logo_Color.svg/512px-Sass_Logo_Color.svg.png'],
//     ['name' => 'PHP', 'website' => 'https://www.php.net/', 'logo' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/Webysther_20160423_-_Elephpant.svg/350px-Webysther_20160423_-_Elephpant.svg.png']
// ];
?>

<?php require('templates/header.php'); ?>
<?php require('languages.php'); ?>


<h1 style="color: rgb(212, 32, 152); text-indent: 30px">Languages</h1>

<div class="container">
  <div class="row">

    <?php foreach($languages as $language): ?>

        <div class="col">
          <div class="card">
            <div class="card-content center">
              <a href="<?php echo $language['website']; ?>">
                <img src="<?php echo $language['logo']; ?>" alt="Logo" title="<?php echo $language['name']; ?>" height="80" width="auto">
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