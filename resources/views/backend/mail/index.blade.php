<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .container {
            width: 100%;
            background-color: #BFD8D2;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            padding: 30px 0;
        }

        .cont {
            border-radius: 15px;
            padding: 15px 30px;
            width: 80%;
            background-color: #f1f1f1;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="cont">
        <h3>Sizga Murojaat</h3>
        <p><b>Ismi:</b> {{$contact->name}}</p>
        <p><b>Familyasi:</b> {{$contact->surname}}</p>
        <p><b>Pochtasi:</b> {{$contact->email}}</p>
        <p><b>Xatmazmuni:</b> {{$contact->message}}</p>
    </div>
</div>
</body>
</html>
