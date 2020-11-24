<!DOCTYPE html>
<html>

<h1 style="color: rgb(212, 32, 152); text-indent: 50px; font-family: 'Luckiest Guy', cursive; font-size: 40px">Languages</h1>
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
            
            <?php $projectPage = "sections/projectPages/" . $language['name'] . ".php";
            if(file_exists($projectPage)): ?>
            <div class="card-action center">
                <a href="projects.php?id=<?php echo $language['name'] ?>" style="color: rgb(224, 160, 0); font-weight: 500">My work</a>
            </div>
            <?php endif; ?>

            <?php $infoPage = "sections/infoPages/" . $language['name'] . ".php";
            if(file_exists($infoPage)): ?>
            <div class="card-action center">
              <div align="right" style="margin-right: 0px; padding-right: 0px">
                <div class="infoTrigger" style="color: rgb(224, 160, 0); font-weight: 500">Info
                  <span class="infoText"><?php include 'infoPages/' . $language['name'] . '.php';?></span>
                </div>
              </div>
            </div>
            <?php endif; ?>
            
          </div>
        </div>
        
        <?php endforeach ?>
        
      </div>
    </div>
