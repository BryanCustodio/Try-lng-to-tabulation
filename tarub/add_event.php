<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Event</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <h1>Add Event</h1>
        <form action="add_event_process.php" method="post">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="eventname">Event Name:</label>
            <input type="text" id="eventname" name="eventname" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <button type="submit">Add Event</button>
        </form>
    </div>
</body>
</html>
