<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Screen Image</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        body {
            width: 100vw;
            height: 100vh;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #000;
        }
        img {
            max-width: 100vw;
            max-height: 100vh;
            width: auto;
            height: auto;
            display: block;
        }
    </style>
</head>
<body>
    <img src="image.png" alt="Full Screen Image">
</body>
</html>
