<?php

require "Database.php";
$config = require ("config.php");

$db = new Database($config["database"]);
$childrens = $db->query("SELECT * FROM children")->fetchAll();
$letters = $db->query("SELECT * FROM letters")->fetchAll();
$gifts = $db->query("SELECT * FROM gifts")->fetchAll();
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
/* Basic page background */
body {
  background-color: #f0f8ff;
  font-family: Arial, sans-serif;
  color: #333;
  margin: 0;
  padding: 0;
}

/* Christmas-themed header */
h2 {
  text-align: center;
  color: #b30000;
  font-family: 'Courier New', Courier, monospace;
  font-size: 2.5em;
  padding: 20px;
  background-color: #008000;
  color: white;
  margin-top: 0;
  border-bottom: 5px solid #FFD700;
}

/* Card container style */
.card {
  background-color: #ffffff;
  border-radius: 15px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: box-shadow 0.3s ease;
  width: 40%;
  margin: 20px auto;
  padding: 15px;
  overflow: hidden;
  border: 2px solid #ff6666;
  background-image: url('https://www.transparenttextures.com/patterns/white-diamond.png');
  background-repeat: repeat;
}

/* Hover effect for cards */
.card:hover {
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
  background-color: #ffebcd;
}

/* Container inside the card */
.container {
  padding: 15px;
  background-color: #f8f8f8;
  border-radius: 10px;
  border: 1px solid #ffcccc;
}

/* List style */
ul {
  list-style-type: none;
  padding: 0;
}

li {
  font-size: 1.2em;
  margin: 10px 0;
}

/* Christmas-themed text */
li {
  color: #006400;
  font-family: 'Georgia', serif;
  font-weight: bold;
}

/* Decorations for Christmas theme */
.card::before {
  content: '🎄';
  font-size: 3em;
  position: absolute;
  top: 10px;
  right: 10px;
  color: #FFD700;
}

.card::after {
  content: '❄️';
  font-size: 2em;
  position: absolute;
  bottom: 10px;
  left: 10px;
  color: #00bfff;
}

/* Snow effect (fading snowflakes) */
@keyframes snowflakes {
  0% {
    top: -10%;
    opacity: 1;
  }
  100% {
    top: 100%;
    opacity: 0;
  }
}

.snowflakes {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  pointer-events: none;
  z-index: 9999;
}

.snowflakes div {
  position: absolute;
  width: 5px;
  height: 5px;
  background-color: #ffffff;
  border-radius: 50%;
  animation: snowflakes 10s linear infinite;
}

.snowflakes div:nth-child(odd) {
  animation-duration: 12s;
  animation-delay: -3s;
}

.snowflakes div:nth-child(even) {
  animation-duration: 8s;
  animation-delay: -1s;
}

</style>
</head>
<body>

<!-- Snowflakes effect -->
<div class="snowflakes">
  <div style="left: 20%; animation-duration: 10s; animation-delay: 2s;"></div>
  <div style="left: 50%; animation-duration: 11s; animation-delay: 3s;"></div>
  <div style="left: 80%; animation-duration: 9s; animation-delay: 1s;"></div>
  <div style="left: 10%; animation-duration: 7s; animation-delay: 4s;"></div>
  <div style="left: 60%; animation-duration: 12s; animation-delay: 2s;"></div>
</div>

<?php
foreach ($childrens as $children) {
   
    ?>
    <h2>Christmas Card from <?php echo $children["firstname"] . " " . $children["surname"]; ?></h2>

    <div class="card">
        <div class="container">
        <?php
            echo "<ul>";
            echo "<li>Name: " . $children["firstname"]. " " . $children["middlename"]. " " . $children["surname"]. "</li>";
            echo "<li>Age: " . $children["age"] . "</li>";
            echo "</ul>";

            foreach ($letters as $letter) {
                if ($children["id"] == $letter["sender_id"]) {
                    echo "<li>Letter: " . $letter["letter_text"] . "</li>";

                    foreach ($gifts as $gift) {
                        
                        if(str_contains($letter["letter_text"], $gift["name"]));
                            echo "<li> Gift: " . $gift ["name"] . "</li";
                     }
        ?>
        </div>
    </div>
    <?php
                
            }
        }
    };
?>

</body>
</html>
