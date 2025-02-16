<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            color: #e0e0e0;
        }
        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1;
        }
        .header {
            width: 100%;
            padding: 20px;
            background: rgba(28, 28, 28, 0.9);
            text-align: center;
            border-bottom: 2px solid #ff0033;
        }
        .header h1 {
            margin: 0;
            font-size: 32px;
            color: #ff0033;
        }
        .nav {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .nav a {
            color: #00ffcc;
            text-decoration: none;
            font-size: 18px;
            padding: 10px 20px;
            border: 1px solid #00ffcc;
            border-radius: 6px;
            transition: 0.3s;
            background: rgba(0, 0, 0, 0.6);
        }
        .nav a:hover {
            background: #00ffcc;
            color: #0a0a0a;
        }
        .content {
            width: 80%;
            max-width: 900px;
            background: rgba(28, 28, 28, 0.9);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(255, 0, 51, 0.6);
            text-align: center;
            margin: 50px auto;
        }
        .content h2 {
            color: #ff0033;
            border-bottom: 2px solid #ff0033;
            padding-bottom: 10px;
            display: inline-block;
        }
        .footer {
            margin-top: 20px;
            padding: 10px;
            text-align: center;
            width: 100%;
            background: rgba(28, 28, 28, 0.9);
            border-top: 2px solid #ff0033;
        }
    </style>

    <title>Arasaka Neural Bastion</title>
</head>
<body>
    {{ $slot }}
</body>
</html>