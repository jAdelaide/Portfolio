<!DOCTYPE html>
<html>

    <?php require 'templates/header.php'; ?>
    <?php require 'languagesArray.php'; ?>

    <?php

    $pageExists = FALSE;
    
    foreach($languages as $language):
        if($language['name'] == $_GET['id']): ?>
            <h3 style="color: rgb(255, 177, 109); text-align: center"><?php echo htmlspecialchars($_GET['id']); ?></h3>
            <?php $infoPage = "sections/infoPages/" . $_GET['id'] . ".php";
            include $infoPage;
            $pageExists = TRUE;
        endif;
    endforeach;
    
    if($pageExists == FALSE): ?>
        <h2 style="color: rgb(255, 177, 109); text-align: center">There is no info page for "<?php echo htmlspecialchars($_GET['id']); ?>"</h2>
    <?php endif; ?>

    <?php require('templates/footer.php'); ?>
    
</html>