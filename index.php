<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
        }
        .images {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .images img {
            flex: 1 0 30%;
            max-width: 30%;
            margin: 1%;
        }
        a {
            color: #008CBA;
        }
        .nav {
            position: fixed;
            top: 10px;
            right: 10px;
        }
    </style>
</head>
<body>
<div class="container">
<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}

switch ($page) {
    case 'home':
        echo '<h1>Kutyusok</h1>';
        echo '<p></p>';
        echo '<div class="images">';
        for ($i = 1; $i <= 4; $i++) {
            echo '<img src="kep' . $i . '.jpg" alt="Kép' . $i . '">';
        }
        echo '</div>';
        echo '<a href="?page=second">Második oldal</a>';
        break;
    case 'second':
        echo '<h1>Cicusok</h1>';
        echo '<p></p>';
        echo '<div class="images">';
        for ($i = 5; $i <= 8; $i++) {
            echo '<img src="kep' . $i . '.jpg" alt="Kép' . $i . '">';
        }
        echo '</div>';
        echo '<a href="?page=form">Űrlap</a>';
        break;
    case 'form':
       	echo '<h1>Űrlap</h1>';
    	echo '<form action="/submit.php">';
   	 echo '<label for="fname">Keresztnév:</label><br>';
   	 echo '<input type="text" id="fname" name="fname"><br>';
   	 echo '<label for="lname">Vezetéknév:</label><br>';
   	 echo '<input type="text" id="lname" name="lname"><br><br>';
    	echo '<input type="submit" value="Küldés">';
   	 echo '</form>';
        break;
    default:
        echo '<p>A keresett oldal nem található.</p>';
        break;
}
?>
</div>
<div class="nav">
    <a href="?page=home">Első oldal</a> |
    <a href="?page=second">Második oldal</a> |
    <a href="?page=form">Űrlap</a>
</div>
</body>
</html>