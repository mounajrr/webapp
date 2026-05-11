<?php
// Get 'name' parameter from URL, default to 'Guest'
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'Guest';

// Display greeting
echo "<h1>Hello, $name!</h1>";

// Simple form to enter name
echo '<form method="get">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="submit" value="Greet me">
      </form>';
?>
