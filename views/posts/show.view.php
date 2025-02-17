<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>
<h1><?= htmlspecialchars($post["content"]) ?></h1>
<a href="/edit?id=<?= $_GET["id"] ?>"> Edit</a>
<br></br>
<form action="/delete" method="POST">
    <button type="submit">Dzēst</button>
</form>

<?php require "views/components/footer.php"; ?>
