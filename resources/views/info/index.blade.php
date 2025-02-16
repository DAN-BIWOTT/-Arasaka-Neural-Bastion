<x-layout>
   
    <title>Cyber Trader</title>
    <style>
        body {
            background-color: #0e0e0e;
            color: #00ff99;
            font-family: 'Courier New', Courier, monospace;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
            max-width: 600px;
            border: 2px solid #00ff99;
            padding: 20px;
            border-radius: 10px;
        }
        h1 {
            color: #ff0099;
        }
        .data {
            color: #00ffff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cyber Trader</h1>
        <p>Welcome to the neon grid. I'm a data diver, using state-of-the-art machine learning to decode the market's secrets and turn digits into digits. In this hyper-connected matrix, data is my currency, and trading is my game. Step into my world of algorithms and insights as I navigate the digital waves.</p>
        <p class="data">#Trading #MachineLearning #DataCollection</p>
    </div>

    <div>        
        <a href="{{ route('home') }}">Home</a><br>
        <a href="{{ route('info.index') }}">Info</a>
    </div>
</x-layout>
