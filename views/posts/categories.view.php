<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>
<h1>Categories</h1>
 <form>
 <input name='search' value='<?= $_GET['search'] ?? "" ?>' />
 <button>Meklēt</button>
</form>

<?php
if (count($categories) == 0){
    ?>
<p>Nav Atrasts</p>
<?php
}
?>
<ul>
<?php
foreach($categories as $category){
    ?>
    <li><a href="show?id=<?= $category["id"] ?>"> <?= htmlspecialchars($category_names["content"])   ?></a>  </li>
<?php  }   ?>
</ul>
<?php require "views/components/footer.php"; ?>
 
 
 
 