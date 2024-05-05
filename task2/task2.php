<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .container {
            position: relative;
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #dff2d8;
            flex-direction: column;
        }
        div
        {
            display:flex;
            justify-content:center;
            align-items:center;
            margin:10px;
        }
        form
        {
            border:solid 1.5px gray;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container">
        <form method="POST" id="myForm" action="answer.php" >
            <label for="W">輸入寬:</label>
            <input type="text" id="W" name="W"><br>
            <label for="H">輸入長:</label>
            <input type="text" id="H" name="H"><br>
            <div class="button-container">
                <input type="submit" >
            </div>
        </form>
    </div>
</body>
</html>