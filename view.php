<?php
include 'database.php';

// Fetch records in ascending order so first submission appears first
$result = $conn->query("SELECT * FROM contact_form ORDER BY id ASC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Contact Form Submissions</title>
    <link rel="stylesheet" 
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4">Saved Form Submissions</h2>

    <?php if ($result->num_rows > 0) { ?>
    <table class="table table-bordered table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Submitted At</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td><?= htmlspecialchars($row['phone']) ?></td>
                    <td><?= htmlspecialchars($row['message']) ?></td>
                    <td><?= $row['created_at'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php } else { ?>
        <div class="alert alert-info">No submissions found.</div>
    <?php } ?>
</div>

</body>
</html>
