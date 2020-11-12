<!DOCTYPE html>
<html>

<h1 style="color: rgb(); text-indent: 50px">Latest blogs</h1>
<hr align="left" width="1000px" color=" rgb(0, 0, 0,)">

<?php
    $output = shell_exec('python3 assets/blogScraper.py');
    echo "<pre>$output</pre>";
?>

