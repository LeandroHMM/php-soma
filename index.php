<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            margin: 0;
            padding: 0;            
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url(https://images.unsplash.com/photo-1542621334-a254cf47733d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1500&q=80);
        }
        form{
            padding: 20px;
            height: 250px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
            background-color: #bbb;
            border-radius: 10px;
        }

    </style>
</head>
<body>
    <form action="soma.php" method="post">
        <input type="number" name="num1">
        <input type="text" name="num2">
        <button type="Submit">Somar</button>
    </form>
    
</body>
</html>