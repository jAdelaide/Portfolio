<!DOCTYPE html>
<html>

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
            
            <?php $projectPage = "sections/projectPages/" . $language['name'] . ".php";
            if(file_exists($projectPage)): ?>
            <div class="card-action center">
                <a href="projects.php?id=<?php echo $language['name'] ?>" style="color: rgb(224, 160, 0); font-weight: 500">My projects</a>
            </div>
            <?php endif; ?>
          </div>
        </div>

    <?php endforeach ?>

  </div>
</div>