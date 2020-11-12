<!DOCTYPE html>
<html>

    <?php require 'templates/header.php'; ?>
    <?php require 'languagesArray.php'; ?>

    <?php

    $pageExists = FALSE;
    foreach($languages as $language):
        if($language['name'] == $_GET['id']): ?>
            <h4 style="color: rgb(255, 177, 109); text-indent: 50px"><?php echo htmlspecialchars($_GET['id']); ?></h4>
            <?php $pageExists = TRUE;
        endif;
    endforeach;
    
    if($pageExists == FALSE): ?>
        <h2 style="color: rgb(255, 177, 109); text-align: center">There is no project page for "<?php echo htmlspecialchars($_GET['id']); ?>"</h2>
        <p style="color: rgb(100, 133, 137); text-align: center; font-size: 18px">The URL is case sensitive, there are project pages for:</p>
        <?php foreach($languages as $language): ?>
            <a href="projects.php?id=<?php echo $language['name'] ?>">
                <li style="color: rgb(100, 133, 137); text-align: center; font-size: 23px"><?php echo $language['name']; ?></li>
            </a>
        <?php endforeach; ?>
    <?php endif; ?>

    <?php require('templates/footer.php'); ?>
    
</html>