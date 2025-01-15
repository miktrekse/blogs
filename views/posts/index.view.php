<?php require "views/components/header.php"; ?>
<?php require "views/components/navbar.php"; ?>
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
    <li><a href="show?id=<?= $post["id"] ?>"> <?= $post["content"]   ?></a>  </li>
<?php  }   ?>
</ul>
<?php require "views/components/footer.php"; ?>
 
 
 
 