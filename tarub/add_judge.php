<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Judge</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <h1>Add Judge</h1>
        <form action="add_judge_process.php" method="post">
            <label for="judgename">Judge Name:</label>
            <input type="text" id="judgename" name="judgename" required>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Add Judge</button>
        </form>
    </div>
</body>
</html>
