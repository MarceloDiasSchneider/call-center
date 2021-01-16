<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call Center</title>
    <link rel="stylesheet" href="css/style.css">
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
                        <option value="Marcelo">Marcelo</option>
                        <option value="Andrea">Andrea</option>
                        <option value="Arnaldo">Alrnaldo</option>
                    </optgroup>
                </select>
                <br>
                <label for="order">Order</label>
                <select id="order" name="order">
                    <optgroup label="order">
                        <option value="" hidden selected></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </optgroup>
                </select>
                <br>
                <input id="button" type="button" value="Confirm" disabled>
            </form>
        </div>
        <p id="res">oi</p>
        <div class="description">
            <label for="description">Description</label>
            <textarea id="description" name="description" maxlength="250" ></textarea>
        </div>
    </section>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="javascript/script.js"></script>
    <script src="javascript/insert-data.js"></script>
</body>
</html>