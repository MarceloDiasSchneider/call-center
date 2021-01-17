<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call Center</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>
    <section>
        <div class="header">
            <h1>Ticket customer support</h1>
        </div>

        <div class="calendar">
            <label for="date">Date:</label>
            <input type="date" id="date" name="date">
        </div>

        <div class="form">
            <form method="POST">
                    <label for="date-selected">Date:</label>
                    <input type="date" id="date-selected" name="date-selected" value="" disabled>
                <br>
                <label for="responsible">Full name</label>
                <select name="responsible" id="responsible">
                    <optgroup label="Responsible">
                        <option value="" hidden selected></option>
                        <?php 
                            require_once 'php/load-options-responsibles.php';
                        ?>
                    </optgroup>
                </select>
                <br>
                <label for="order">Order</label>
                <select id="order" name="order">
                    <optgroup label="order">
                        <option value="" hidden selected></option>
                        <?php 
                            require_once 'php/load-options-orders.php'
                        ?>
                    </optgroup>
                </select>
                <br>
                <input type="button" id="confirm-form" class="button" value="Confirm" disabled>
            </form>
        </div>
        <div id="div-description" class="description hidden">
            <label for="description">Description</label>
            <textarea id="description" name="description" maxlength="250" placeholder="Describe the problem"></textarea>
            <input type="button" id="confirm-description" class="button" value="Confirm"> 
        </div>
        <div id="others-descriptions" class="others_descriptions hidden"></div>
    </section>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="javascript/form-control.js"></script>
    <script src="javascript/open-ticket.js"></script>
    <script src="javascript/insert-description.js"></script>
    <script src="javascript/load-descrioptions.js"></script>
</body>
</html>