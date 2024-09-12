<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Criteria</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <h1>Add Criteria</h1>
        <form action="add_criteria_process.php" method="post">
            <label for="criterianame">Criteria Name:</label>
            <input type="text" id="criterianame" name="criterianame" required>

            <label for="percentage">Percentage:</label>
            <input type="number" id="percentage" name="percentage" step="0.01" min="0" max="100" required>

            <label for="event">Event:</label>
            <select id="event" name="eventid" required>
                <option value="">Select Event</option>
                <!-- Options populated by backend -->
            </select>

            <button type="submit">Add Criteria</button>
        </form>
    </div>
</body>
</html>
