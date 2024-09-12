<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Contestant</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <h1>Add Contestant</h1>
        <form action="add_contestant_process.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="department">Department:</label>
            <input type="text" id="department" name="department" required>

            <label for="event">Event:</label>
            <select id="event" name="eventid" required>
                <option value="">Select Event</option>
                <!-- Options populated by backend -->
            </select>

            <button type="submit">Add Contestant</button>
        </form>
    </div>
</body>
</html>
