<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overall Winner</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="report-container">
        <h1>Overall Winner</h1>
        <form action="overall_winner_process.php" method="post">
            <label for="event">Select Event:</label>
            <select id="event" name="eventid" required>
                <option value="">Select Event</option>
                <!-- Options populated by backend -->
            </select>

            <button type="submit">Get Winner</button>
        </form>
        <!-- Winner information will be displayed here after form submission -->
    </div>
</body>
</html>
