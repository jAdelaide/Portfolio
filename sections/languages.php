<!DOCTYPE html>
<html>

<h1 style="color: rgb(212, 32, 152); text-indent: 50px; font-family: 'Luckiest Guy', cursive; font-size: 40px">Languages and Technologies</h1>
<hr align="left" width="1000px" color=" rgb(0, 0, 0,)">

<div class="container" style="margin: 1rem auto 0 auto; width: 90%">
  <div class="row" style="margin: 0 0 0 0">

    <?php foreach($languages as $language): ?>

      <div class="col">
        <div class="card" style="margin: .5rem 0 0 0; box-shadow: 0px 0px 10px 3px rgb(154, 194, 226)">
          <div class="card-content center">
            <a href="<?php echo $language['website']; ?>" target="_blank">
              <img src="<?php echo $language['logo']; ?>" alt="Logo" title="<?php echo $language['name'] . ' - Open in new tab'; ?>" height="60" width="auto">
            </a>
          </div>
            
          <?php $projectPage = "sections/projectPages/" . $language['name'] . ".php";
          if(file_exists($projectPage)): ?>
          <div class="card-action center" style="border: 0px">
              <a href="projects.php?id=<?php echo $language['name'] ?>" style="color: rgb(224, 160, 0); font-size: 12px; font-weight: 500">My work</a>
          </div>
          <?php endif; ?>

          <?php $infoPage = "sections/infoPages/" . $language['name'] . ".php";
          if(file_exists($infoPage)): ?>
          <div class="card-action center" style="border: 0px">
            <div align="right" style="margin-right: 0px; padding-right: 0px">
              <div class="infoTrigger" style="color: rgb(224, 160, 0); font-size: 12px; font-weight: 500">Info
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
  
<div class="container" style="margin: 1rem auto 0 auto; width: 90%">
  <div class="row">

    <?php foreach($technologies as $language): ?>

      <div class="col">
        <div class="card" style="margin: .5rem 0 0 0; background-color: rgba(223, 176, 245, 0.1); border: 1px solid rgba(203, 154, 226, 0.2); box-shadow: 0px 0px 10px 3px rgb(223, 176, 245)">
          <div class="card-content center">
            <a href="<?php echo $language['website']; ?>" target="_blank">
              <img src="<?php echo $language['logo']; ?>" alt="Logo" title="<?php echo $language['name'] . ' - Open in new tab'; ?>" height="60" width="auto">
            </a>
          </div>
            
          <?php $projectPage = "sections/projectPages/" . $language['name'] . ".php";
          if(file_exists($projectPage)): ?>
          <div class="card-action center" style="border: 0px">
              <a href="projects.php?id=<?php echo $language['name'] ?>" style="color: rgb(224, 160, 0); font-size: 12px; font-weight: 500">My work</a>
          </div>
          <?php endif; ?>

          <?php $infoPage = "sections/infoPages/" . $language['name'] . ".php";
          if(file_exists($infoPage)): ?>
          <div class="card-action center" style="border: 0px">
            <div align="right" style="margin-right: 0px; padding-right: 0px">
              <div class="infoTrigger" style="color: rgb(224, 160, 0); font-size: 12px; font-weight: 500">Info
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