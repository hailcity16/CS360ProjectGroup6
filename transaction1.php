<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conduct Transactions</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Transactions</h2>
    <form id="transactionForm">
        <label for="selectItem">Select Your Item/Service:</label><br>
        <select id="selectItem" name="selectItem">
            <option value="itemP">Item P</option>
            <option value="itemE">Item E</option>
            <!-- Options will be dynamically generated in the future -->
        </select><br>

        <label for="transactionType">Transaction Action:</label><br>
        <select id="transactionType" name="transactionType">
            <option value="start">Start Transaction</option>
            <option value="confirm">Confirm Transaction</option>
            <option value="cancel">Cancel Transaction</option>
        </select><br>

        <button type="submit">Submit Transaction</button>
    </form>
</body>
</html>
