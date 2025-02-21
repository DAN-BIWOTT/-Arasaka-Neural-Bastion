<x-layout>
<div>    
    <style>
        body {
            background-color: #0a0a0a;
            color: #e0e0e0;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 80%;
            max-width: 900px;
            background: #1c1c1c;
            border: 1px solid #444;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(255, 0, 51, 0.6);
        }
        h1 {
            text-transform: uppercase;
            color: #ff0033;
            text-align: center;
            font-size: 28px;
            margin-bottom: 20px;
            border-bottom: 2px solid #ff0033;
            padding-bottom: 10px;
        }
        h2 {
            color: #e0e0e0;
            font-size: 20px;
            margin-bottom: 10px;
            border-bottom: 1px solid #ff0033;
            padding-bottom: 5px;
        }
        .section {
            margin-bottom: 20px;
            padding: 15px;
            background: #222;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0, 255, 204, 0.3);
        }
        .section ul {
            list-style: none;
            padding: 0;
        }
        .section li {
            padding: 6px 0;
            font-size: 16px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        .section li:last-child {
            border-bottom: none;
        }
    </style>

<body>
    <div class="container">
        <h1>Arasaka Model Data</h1>
        <div class="section">
            <h2>Model Name</h2>
            <p>2.1_Ensemble Model (Linear SVR + SFN)_2025.01.18</p>
        </div>
        <div class="section">
            <h2>Features</h2>
            <ul>
                <li>Open</li>
                <li>High</li>
                <li>Low</li>
                <li>Close</li>
                <li>Price_Difference</li>
                <li>Open_Close_Change_Pct</li>
                <li>High_Low_Change_Pct</li>
                <li>Volume</li>
                <li>Volume_MA_20</li>
                <li>Volume_Change_Pct</li>
                <li>median_t-1</li>
                <li>median_t-2</li>
            </ul>
        </div>
        <div class="section">
            <h2>Performance Metrics</h2>
            <ul>
                <li>Train MSE: 0.00959</li>
                <li>Test MSE: 0.01287</li>
                <li>Train RMSE: 0.09794</li>
                <li>Test RMSE: 0.11348</li>
                <li>Train MAE: 0.06655</li>
                <li>Test MAE: 0.06964</li>
                <li>Train R2: 0.99967</li>
                <li>Test R2: 0.99954</li>
                <li>Train Explained Variance: 0.99969</li>
                <li>Test Explained Variance: 0.99956</li>
            </ul>
        </div>
    </div>
</body>
</html>

</x-layout>