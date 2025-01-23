<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>
<h1><?= htmlspecialchars($post["content"]) ?></h1>
<li><a href="/edit?id=123<?= $post["id"] ?>"> <?= htmlspecialchars($post["content"])   ?></a>  </li>
<?php require "views/components/footer.php"; ?>
 
 
 
 