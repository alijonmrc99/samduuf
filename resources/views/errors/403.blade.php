<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
    <link rel="stylesheet" href="/frontend/style/error.css">
</head>
<body>
<div class="container">
    <h1>{{__('data.errors.title')}}...</h1>
    <div class="error">
        <span class="text">403</span>
        <div class="shadow"></div>
        <div class="shadow-bottom"></div>
    </div>
    <div>
        <span>{{__('data.errors.403.title')}}</span>
        <a href="/">{{__('data.home')}}</a>
    </div>
</div>
</body>
</html>
