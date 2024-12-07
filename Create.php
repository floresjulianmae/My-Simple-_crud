<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Add Item</title>
</head>
<body>
 <div class="form-container">
   <h1>Add Item</h1>
   <form action="" method="POST">
     <label for="name">Name:</label>
     <input type="text" name="name" id="name" required>
     
     <label for="description">Description:</label>
     <textarea name="description" id="description" required></textarea>
     
     <button type="submit" name="submit">Save</button>
   </form>
 </div>
 <?php
 if (isset($_POST['submit'])) {
     $name = $_POST['name'];
     $description = $_POST['description'];
     $stmt = $conn->prepare("INSERT INTO items (name, description) VALUES (?, ?)");
     $stmt->execute([$name, $description]);
     header("Location: index.php");
     exit;
 }
 ?>
</body>
</html>