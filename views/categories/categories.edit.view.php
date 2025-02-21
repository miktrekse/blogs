<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>
<h1><?= htmlspecialchars($post["content"]) ?></h1>
<a href="/edit?id=<?= $_GET["id"] ?>"> Edit</a>
<br></br>
<form method="POST" action="/delete">
    <input type="hidden" name="id" value="<?= $post['id'] ?? '' ?>">
    <button type="submit">Delete</button>
</form>


<?php require "views/components/footer.php"; ?>
