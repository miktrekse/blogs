<?php require "components/header.php"; ?>
<?php require "components/navbar.php"; ?>
<h1>BLOGS</h1>
 <form>
 <input name='search' value='<?= $_GET['search'] ?? "" ?>' />
 <button>Meklēt</button>
</form>

<?php
if (count($posts) == 0){
    ?>
<p>Nav Atrasts</p>
<?php
}
?>
<ul>
<?php
foreach($posts as $post){
    ?>
    <li> <?= $post["category_name"]   ?>  </li>
<?php  }   ?>
</ul>
<?php require "components/footer.php"; ?>
 
 
 
 