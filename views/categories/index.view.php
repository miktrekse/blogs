<?php
require "views/components/header.php"; 
require "views/components/navbar.php"; 
$categories = $categories ?? [];
?>

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
    <li><a href="show?id=<?= $category["id"] ?>"> <?= htmlspecialchars($category["category_name"])   ?></a>  </li>
<?php  }   ?>
</ul>
<?php require "views/components/footer.php"; ?>
 
 
 
 