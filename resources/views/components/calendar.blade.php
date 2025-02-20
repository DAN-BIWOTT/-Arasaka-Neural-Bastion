<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyberpunk Arasaka Table</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron&display=swap');
        body {
            background-color: #0d0d0d;
            color: #fff;
            font-family: 'Orbitron', sans-serif;
            text-align: center;
            margin: 20px;
        }
        nav {
            background: #111;
            padding: 15px;
            box-shadow: 0 0 10px rgba(255, 0, 60, 0.8);
        }
        nav a {
            color: #ff003c;
            text-decoration: none;
            margin: 0 15px;
            font-size: 18px;
        }
        nav a:hover {
            color: #00ffff;
        }
        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background: #111;
            box-shadow: 0 0 10px rgba(0, 255, 255, 0.8);
            border: 2px solid #ff003c;
        }
        th, td {
            padding: 15px;
            border: 1px solid #ff003c;
        }
        th {
            background: #222;
            color: #ff003c;
            font-size: 18px;
        }
        td {
            font-size: 16px;
        }
        .highlight {
            color: #00ffff;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{route('home')}}">Home</a>
        <a href="{{route('home')}}">Reports</a>
        <a href="{{route('home')}}">Analytics</a>
        <a href="{{route('home')}}">Settings</a>
    </nav>
    <h1>Cyberpunk Arasaka Report - February 2026</h1>
    <table>
        <tr>
            <th>Week</th>
            <th colspan="1">Test</th>
            <th colspan="4">Live</th>
            <th>Comment</th>
        </tr>
        <tr>
            <th></th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
            <th></th>
        </tr>
        <tr>
            <td>Week 1</td>
            <td class="highlight">44.06</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>No Trade</td>
        </tr>
        <tr>
            <td>Week 2</td>
            <td class="highlight">41.96</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>No Trade</td>
        </tr>
        <tr>
            <td>Week 3</td>
            <td class="highlight">21.46</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>No Trade</td>
        </tr>
        <tr>
            <td>Week 4</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>
</html>
