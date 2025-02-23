<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<?php if(!empty($errors)) ?>

<p><?= $errors["category_name"] ?? ''?></p>
<form method="POST">

<label><input type="hidden" name="id" value="<?= $category['id'] ?? '' ?>" /></label>
<label><input name="category_name" value="<?= $category['category_name'] ?? '' ?>" /></label>

<input type="submit"/>
</form>
<?php require "views/components/footer.php"; ?>