<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Winner per Criteria</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="report-container">
        <h1>Winner per Criteria</h1>
        <form action="winner_per_criteria_process.php" method="post">
            <label for="event">Select Event:</label>
            <select id="event" name="eventid" required>
                <option value="">Select Event</option>
                <!-- Options populated by backend -->
            </select>

            <label for="criteria">Select Criteria:</label>
            <select id="criteria" name="criteriaid" required>
                <option value="">Select Criteria</option>
                <!-- Options populated by backend -->
            </select>

            <button type="submit">Get Winners</button>
        </form>
        <!-- Winners information will be displayed here after form submission -->
    </div>
</body>
</html>
