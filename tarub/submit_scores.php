<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Scores</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="form-container">
        <h1>Submit Scores</h1>
        <form action="submit_scores_process.php" method="post">
            <label for="event">Event:</label>
            <select id="event" name="eventid" required>
                <option value="">Select Event</option>
                <!-- Options populated by backend -->
            </select>

            <label for="contestant">Contestant:</label>
            <select id="contestant" name="contestantid" required>
                <option value="">Select Contestant</option>
                <!-- Options populated by backend -->
            </select>

            <label for="criteria">Criteria:</label>
            <select id="criteria" name="criteriaid" required>
                <option value="">Select Criteria</option>
                <!-- Options populated by backend -->
            </select>

            <label for="score">Score:</label>
            <input type="number" id="score" name="score" step="0.01" min="0" max="100" required>

            <label for="category">Category:</label>
            <input type="text" id="category" name="category" required>

            <label for="date">Date:</label>
            <input type="date" id="date" name="date" required>

            <button type="submit">Submit Score</button>
        </form>
    </div>
</body>
</html>
