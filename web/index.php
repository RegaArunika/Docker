<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docker Praktikum</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
            overflow: hidden;
        }

        .header {
            background-color: rgba(0, 0, 0, 0.5);
            width: 100%;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            position: fixed;
            top: 0;
            left: 0;
            animation: slideDown 1s ease-out;
        }

        @keyframes slideDown {
            from {
                top: -100px;
            }
            to {
                top: 0;
            }
        }

        .header h1 {
            margin: 0;
            font-size: 2.5em;
            font-weight: bold;
            color: #fff;
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            backdrop-filter: blur(10px);
            margin-top: 100px;
            animation: fadeIn 1.5s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .container p {
            font-weight: 400;
            font-size: 1.5em;
            color: #fff;
            margin: 10px 0;
        }

        .container p:first-of-type {
            font-weight: 700;
            font-size: 1.8em;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>--PROJECT DOCKER--</h1>
    </div>
    <div class="container">
        <p>Ketut Rega Arunika</p>
        <p>2215101004</p>
        <p>Yoru Player</p>
    </div>
</body>
</html>
