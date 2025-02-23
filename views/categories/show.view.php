<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>
<h1><?= htmlspecialchars($category["category_name"]) ?></h1>
<a href="/categories/edit?id=<?= $_GET["id"] ?>"> Edit</a>
<br></br>
<form method="POST" action="/categories/delete">
    <input type="hidden" name="id" value="<?= $category['id'] ?? '' ?>">
    <button type="submit">Delete</button>
</form>


<?php require "views/components/footer.php"; ?>
