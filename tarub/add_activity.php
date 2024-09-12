<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Activity</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <h1>Add Activity</h1>
        <form action="add_activity_process.php" method="post">
            <label for="datefrom">Date From:</label>
            <input type="date" id="datefrom" name="datefrom" required>

            <label for="dateto">Date To:</label>
            <input type="date" id="dateto" name="dateto" required>

            <label for="activityname">Activity Name:</label>
            <input type="text" id="activityname" name="activityname" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <button type="submit">Add Activity</button>
        </form>
    </div>
</body>
</html>
