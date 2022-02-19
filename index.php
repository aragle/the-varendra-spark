<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The Varendra Spark - Authorization to Open Project</title>
    <link rel="stylesheet" href="temp/temp.css" />
    <script src="temp/temp.js"></script>
</head>

<body>
    <div class="container" onclick="onclick">
        <div class="top"></div>
        <div class="bottom"></div>
        <div class="center">
            <h2>Authorization</h2>
            <input type="password" id="code" oninput="auth()" placeholder="Enter Secret Code">
            <p id="message" style="color:grey;text-align:center;"></p>
        </div>
    </div>
</body>

</html>
