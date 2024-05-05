<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: rgb(153, 226, 255);
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        form {
            border: solid 1px black;
            background-color: rgb(209, 248, 255);
            animation: ani1;
            animation-duration: 1s;
        }

        th,td{
            border: solid 1px black;
        }

        table {
        border-collapse: collapse;
        margin: 10px;
        }

        @keyframes ani {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes ani1 {
            0% {
                transform: translateY(-100%);
            }

            100% {
                transform: translateY(0%);
            }
        }

         #item1{
            margin: auto;
            width: fit-content;
            display: block;
            animation: ani;
            animation-duration: 5s;
         }

         #tab1{
            margin: auto;
            width: center;
            margin-bottom:20px;
         }
    </style>
</head>
<body>
    <div class="container">
        <form method="POST" action="task3.php">
            <h1>計算2X2反矩陣</h1>
            <table>
                <tr>
                    <th>2X2</th>
                    <th>1st col</th>
                    <th>2nd col</th>
                </tr>
                <tr>
                    <td>1st row</td>
                    <td><input type="text" name="block1" id = "block1" value="<?php echo isset($_POST['block1']) ? $_POST['block1'] : ''; ?>"></td>
                    <td><input type="text" name="block2" id = "block2" value="<?php echo isset($_POST['block2']) ? $_POST['block2'] : ''; ?>"></td>
                </tr>
                <tr>
                    <td>2nd row</td>
                    <td><input type="text" name="block3" id = "block3" value="<?php echo isset($_POST['block3']) ? $_POST['block3'] : ''; ?>"></td>
                    <td><input type="text" name="block4" id = "block4" value="<?php echo isset($_POST['block4']) ? $_POST['block4'] : ''; ?>"></td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: right;">
                        <input type="submit" value="計算" id="sub" onsubmit="sub()">
                    </td>
                </tr>
            </table>
            
            <script>
                function sub(){
                    
                    <?php
                        $det = ($_POST['block1'] * $_POST['block4']) - ($_POST['block2'] * $_POST['block3']);
                        $_POST['block2'] /= -$det;
                        $_POST['block3'] /= -$det;
                        $a = "";
                        $a = $_POST['block1'];
                        $_POST['block1'] = $_POST['block4'];
                        $_POST['block4'] = $a;
                        $_POST['block1'] /= $det;
                        $_POST['block4'] /= $det;
                    ?>
                    var div = document.getElementById("item1");
                    div.style.display = "block";
                }
            </script>
            
            <div class = "item1" id = "item1">
                <h1>Inverse of matrix</h1>
                <table id = "tab1">
                    <tr>
                        <th>2X2</th>
                        <th>1st col</th>
                        <th>2nd col</th>
                    </tr>
                    <tr>
                        <td>1st row</td>
                        <td><?php echo $_POST['block1']; ?></td>
                        <td><?php echo $_POST['block2']; ?></td>
                    </tr>
                    <tr>
                        <td>2nd row</td>
                        <td><?php echo $_POST['block3']; ?></td>
                        <td><?php echo $_POST['block4']; ?></td>
                    </tr>
                </table>
            </div>        

        </form>
    </div>

    
</body>
</html>