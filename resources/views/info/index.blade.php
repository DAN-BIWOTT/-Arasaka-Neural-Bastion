<x-layout>

    <title>Cyber Trader</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap');

        body {
            background-color: #0d0d0d;
            color: #00ff99;
            font-family: 'Orbitron', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            text-align: center;
            max-width: 700px;
            background: rgba(10, 10, 10, 0.9);
            padding: 30px;
            border-radius: 10px;
            border: 2px solid #ff0099;
            box-shadow: 0 0 15px #ff0099, 0 0 30px #00ffff;
            animation: pulseGlow 1.5s infinite alternate;
        }

        @keyframes pulseGlow {
            0% { box-shadow: 0 0 10px #ff0099, 0 0 20px #00ffff; }
            100% { box-shadow: 0 0 20px #ff0099, 0 0 40px #00ffff; }
        }

        h1 {
            color: #ff0099;
            font-size: 2em;
            text-shadow: 0 0 10px #ff0099;
        }

        .description {
            font-size: 1.2em;
            color: #00ffff;
            margin-bottom: 20px;
            line-height: 1.6;
            text-shadow: 0 0 5px #00ffff;
        }

        .hashtags {
            font-size: 1.1em;
            font-weight: bold;
            color: #00ff99;
            text-shadow: 0 0 5px #00ff99;
        }

        .nav-links {
            margin-top: 20px;
        }

        .nav-links a {
            display: inline-block;
            margin: 10px;
            padding: 12px 18px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1.1em;
            font-weight: bold;
            color: #000;
            background: linear-gradient(45deg, #ff0099, #00ffff);
            box-shadow: 0 0 10px #ff0099;
            transition: 0.3s ease-in-out;
        }

        .nav-links a:hover {
            box-shadow: 0 0 15px #00ffff;
            transform: scale(1.1);
        }

    </style>

    <body>
        <div class="container">
            <h1>Cyber Trader</h1>
            <p class="description">
                My name is Dan, and I have a strong appreciation for cyberpunk aesthetics and philosophy. You'll notice its influence throughout— in my code comments, website structure, and even the way I communicate.
            </p>
            <p class="hashtags">#Trading #MachineLearning #DataCollection</p>

            <div class="nav-links">
                <a href="{{ route('home') }}">🏠 Home</a>
                <a href="{{ route('info.index') }}">📜 Info</a>
            </div>
        </div>
    </body>

</x-layout>
