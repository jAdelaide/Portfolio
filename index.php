<?php require('templates/header.php'); ?>
<?php include 'languagesArray.php'; ?>


<ul id="nav-mobile" class="right">
  <li><a href="assets/CV.pdf" class="btn brand" alt="Button for CV" title="Open my CV in a new tab" target="_blank">CV</a></li>
  <hr align="right" width="200px" color="#112a5f">
  <li><a href="personalStatement.php" class="btn brand" alt="Button for personal statement" title="See my personal statement">Personal statement</a></li>
</ul>

<?php include 'sections/about_me.php'; ?>
<?php include 'sections/languages.php'; ?>
<?php include 'sections/projects.php'; ?>
<?php include 'sections/education.php'; ?>

<?php require('templates/footer.php'); ?>
</html>