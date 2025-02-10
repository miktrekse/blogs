<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>
<h1><?= htmlspecialchars($post["content"]) ?></h1>
<a href="/edit?id=<?= $GET["id"] ?>"> Edit</a>
<form method="POST" action="/edit">
<input name="id" value="<?=$post["id"]?>" type="hidden">
<input type="submit" value="edit">
</form>
<?php require "views/components/footer.php"; ?>
