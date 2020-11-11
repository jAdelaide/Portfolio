<?php



?>

<?php require 'templates/header.php'; ?>
<?php include ''; ?>

    <?php

    $pageExists = FALSE;
    foreach($languages as $language):
        if($language['name'] == $_GET['id']): ?>
            <h4 style="color: rgb(255, 177, 109); text-indent: 50px"><?php echo htmlspecialchars($_GET['id']); ?></h4>
            <?php $pageExists = TRUE;
        endif;
    endforeach;
    
    if($pageExists == FALSE): ?>
        <h2 style="color: rgb(255, 177, 109); text-align: center">There is no details page for "<?php echo htmlspecialchars($_GET['id']); ?>"</h2>
    <?php endif; ?>

    <?php require('templates/footer.php'); ?>
    
</html>