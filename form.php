<?php
            // initialises each variable as an empty string
    $name = $email = $items = '';
            // errors array allows error messages to be stored and called to be displayed wherever you want
    $errors = array('email'=>'', 'name'=>'', 'items'=>'');

            // $_POST/$_GET is the global & associative array that contains all the data submitted by the POST/GET method
            // if(isset($_POST['submit'])) checks if the 'submit' button has been pressed i.e. the form has been submitted
    if(isset($_POST['submit'])):
            // htmlspecialchars() will convert any characters with functions into html entities that can't effect the webpage
            // this protects against XSS attacks
            if(empty($_POST['email'])):                                         // email
                // else: echo htmlspecialchars($_POST['email'] . ' - ');        // would print it at the top of the screen
                $errors['email'] = 'An email is needed';
                else:
                    $email = htmlspecialchars($_POST['email']);                 // stores what was submitted as the variable '$email'
                    if(!filter_var($email, FILTER_VALIDATE_EMAIL)):             // built in PHP function (! so it's if the email isn't valid:...)
                        $errors['email'] = 'Must be a valid email address';     // sets the email error message in the array
                    endif;
                endif;
            if(empty($_POST['name'])):                                         // name
                $errors['name'] = 'A name is needed';
                else:
                    $name = htmlspecialchars($_POST['name']);
                    if(!preg_match('/^[a-zA-Z\s]+$/', $name)):                 // uses REGEX to only allow uppercase, lowercase and spaces (\s)
                        $errors['name'] = 'Name must be letters and spaces only';
                    endif;
                endif;
            if(empty($_POST['items'])):                                          // items
                $errors['items'] = 'Items are needed';
                else:
                    $items = htmlspecialchars($_POST['items']);
                    if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/', $items)):
                        $errors['items'] = 'Items must be comma separated words';
                    endif;
                endif;

                if(array_filter($errors)):
                    // echo 'There are errors in the form';
                    else :
                        header('Location: index.php');                          // return to the homepage if there are no errors
                    endif;
    endif;                                                                      // end of POST check

    if(isset($_POST['submit'])):                                                // saves user name as a cookie
        setcookie('uName', $_POST['name'], time() + 60);
    endif;

?>

<!DOCTYPE html>
<html>

    <?php include 'templates/header.php'; ?>
    
    <section class="container blue-text">
        <h4 class="center">Example of a form I've made</h4>
        <form class="white" action="form.php" method="POST">
            <label style="color: rgb(173, 0, 102); font-weight: bold">Name:</label>
                            <!-- value means what was submitted and saved as $name will be printed -->
            <input type="text" name="name" value="<?php echo $name ?>">
                            <!-- prints any error in red on the form -->
            <div class="right red-text"><?php echo $errors['name']; ?></div>
            
            <label style="color: rgb(173, 0, 102); font-weight: bold">Your Email:</label>
            <input type="text" name="email" value="<?php echo $email ?>">
            <div class="right red-text"><?php echo $errors['email']; ?></div>

            <label style="color: rgb(173, 0, 102); font-weight: bold">Items (comma separated list):</label>
            <input type="text" name="items" value="<?php echo $items ?>">
            <div class="right red-text"><?php echo $errors['items']; ?></div>
            
            <div class="center">
                <input type="Submit" name="submit" value="submit" class="btn brand z-depth-10">
            </div>
        </form>
        <p style="text-align: center; color: rgb(220, 166, 183); font-weight: 500">Submitting will set your name for 1 minute</p>
        <p style="text-align: center; color: rgb(139, 156, 173)">You will be returned to the homepage if there are no errors and the form is submitted</p>
    </section>

    <?php include 'templates/footer.php'; ?>

</html>