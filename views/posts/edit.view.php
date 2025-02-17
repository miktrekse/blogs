<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>

<?php if(!empty($errors)) ?>

<p><?= $errors["content"] ?? ''?></p>
<form method="POST">

<label><input type="hidden" name="id" value="<?= $post['id'] ?? '' ?>" /></label>
<label><input name="content" value="<?= $post['content'] ?? '' ?>" /></label>

<input type="submit"/>
</form>
<?php require "views/components/footer.php"; ?>