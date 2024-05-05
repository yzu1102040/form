<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .container {
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form {
            border: solid 1px black;
            font: size 1.5em;
        }

        .rad {
            border: solid 1px black;
            margin: 6px;
            padding: 3px;
        }

        .item{
            width: 150px;
            height: 40px;
            background-color: rgb(190, 190, 190);
            border:solid 1px black;
            text-align: center;
        }

        .item1{
            width: 280px;
            height: 40px;
            background-color: rgb(190, 190, 190);
            border:solid 1px black;
        }

        .item2{
            width: 150px;
            height: 80px;
            background-color: rgb(190, 190, 190);
            border:solid 1px black;
            text-align: center;
        }
        .item3{
            width: 280px;
            height: 80px;
            background-color: rgb(190, 190, 190);
            border:solid 1px black;
        }

        .item4{
            width: 150px;
            height: 100px;
            background-color: rgb(190, 190, 190);
            border:solid 1px black;
        }

        .item5{
            width: 280px;
            height: 100px;
            background-color: rgb(190, 190, 190);
            border:solid 1px black;
        }

        .item6{
            width: 432px;
            height: 25px;
            background-color: rgb(190, 190, 190);
            border:solid 1px black;
        }

        #item7{
            margin-top: 10px;
        }


        #item8{
            width: 120px;
            height: 100px;
        }

        .flex-container {
            display: flex ;
        }

        h1 {
            text-align: center;
        }

        

    </style>
</head>
<body>
    <div class = "container">
        <form method = "POST" action="reply.php">
            <h1>個人資訊註冊</h1>

            <div class="flex-container">
                <div class="item">姓名</div><div class="item1"><input type="text" name="Nam" id="item7"></div>
            </div>

            <div class="flex-container">
                <div class="item"> 密碼</div><div class="item1"><input type="password" name="password" id="item7"></div>

            </div>
            
            <div class="flex-container">
                <div class="item"> 出生日期</div><div class="item1"><input type="date" name="date" id="item7"></div>           
            </div>

            <div class="flex-container">
                <div class="item"> 電子郵件</div><div class="item1"><input type="mail" name="mail" id="item7"></div>
            </div>

            <div class="flex-container">
                <div class="item"> 學號</div><div class="item1"><input type="text" name="id" id="item7"></div>
            </div>

            <div class="flex-container">
                <div class="item2">年級</div>

                <div class="item3">
                    <fieldset class="rad">
                        <legend>年級紀錄:</legend>
                        <div>
                            <input type="radio" name="grade" value="一年級">一年級
                            <input type="radio" name="grade" value="二年級">二年級
                            <input type="radio" name="grade" value="三年級">三年級
                            <input type="radio" name="grade" value="四年級">四年級
                            <input type="radio" name="grade" value="四年級以上">四年級以上
                        </div>
                    </fieldset>
                </div>
                
                
            </div>
            

                <div class="flex-container">
                    <div class="item4">修課清單(複選)</div>

                    <div class="item5">
                        <select name="sel[]" size="6" multiple="multiple" id="item8">
                            <option value="跨媒體">跨媒體</option>
                            <option value="作品集">作品集</option>
                            <option value="資料庫">資料庫</option>
                            <option value="國文">國文</option>
                            <option value="色彩學">色彩學</option>
                            <option value="體育">體育</option>
                        </select>
                    </div>
                    
                </div>

                <div class="item6">
                    <input type="submit" style="float: right;">
                    <input type="reset" style="float: right;">
                </div>


        </form>
    </div>
</body>
</html>