<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>
<h1>Izveidot categorijas ierakstu</h1>
<form method="POST">
<label><input name="category_names" value="<?= $_POST['category_names'] ?? '' ?>" /></label>
<button>Sigma</button>
<?php if(isset($errors["category_names"])) { ?>
       <p><?= $errors["category_names"] ?></p>
     <?php } ?>
     
</form>
<?php require "views/components/footer.php"; ?>