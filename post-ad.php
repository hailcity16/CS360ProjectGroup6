<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post an Ad</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Post an Ad</h2>
    <form id="postAdForm">
        <label for="itemName">Select the Item to Post:</label><br>
        <select id="itemName" name="itemName" required>
            <option value="itemP">Item P</option>
            <option value="itemE">Item E</option>
        </select><br>

        <label for="itemQuantity">Enter Quantity:</label><br>
        <input type="number" id="itemQuantity" name="itemQuantity" min="1" required><br>

        <label for="desiredItem">Select the Desired Item for Exchange:</label><br>
        <select id="desiredItem" name="desiredItem" required>
            <option value="itemP">Item P</option>
            <option value="itemE">Item E</option>
            
        </select><br>

        <label for="itemQuantity">Enter Quantity:</label><br>
        <input type="number" id="itemQuantity" name="itemQuantity" min="1" required><br>

        <button type="submit">Post Ad</button>
    </form>
</body>
</html>
