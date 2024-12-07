<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple CRUD</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f4f9;
    }

    header {
      background-color: #4CAF50;
      color: white;
      text-align: center;
      padding: 15px;
    }

    h1 {
      margin: 0;
    }

    .container {
      width: 80%;
      margin: 0 auto;
      padding: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      background-color: #ffffff;
    }

    table, th, td {
      border: 1px solid #ddd;
    }

    th, td {
      padding: 12px;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tr:hover {
      background-color: #f1f1f1;
    }

    a {
      color: #4CAF50;
      text-decoration: none;
      margin-right: 10px;
    }

    a:hover {
      text-decoration: underline;
    }

    .add-new {
      display: inline-block;
      background-color: #4CAF50;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
      margin-bottom: 20px;
    }

    .add-new:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <header>
    <h1>Items Management</h1>
  </header>
  <div class="container">
    <a href="create.php" class="add-new">Add New Item</a>
    <table>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Actions</th>
      </tr>
      <?php
        $stmt = $conn->query("SELECT * FROM items");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
          echo "<tr>
                  <td>{$row['id']}</td>
                  <td>{$row['name']}</td>
                  <td>{$row['description']}</td>
                  <td>
                    <a href='update.php?id={$row['id']}'>Edit</a>
                    <a href='delete.php?id={$row['id']}'>Delete</a>
                  </td>
                </tr>";
        }
      ?>
    </table>
  </div>
</body>
</html>