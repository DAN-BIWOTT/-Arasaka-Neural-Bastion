 {{-- --}}
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
 
 <body>
     <video class="video-background" autoplay muted loop>
         <source src="{{ asset('videos/wallpaper.mp4') }}" type="video/mp4">
         Your browser does not support the video tag.
     </video>
     <div class="header">
         <h1> Arasaka Neural Bastion</h1>
     </div>
     <div class="nav">
         <a href="#">Home</a>
         <a href="{{route('arasaka_trading_timeline.index')}}">Trading Timeline</a>
         <a href="{{route('products.index')}}">Projects</a>
         <a href="{{route('info.index')}}">Info Page</a>
     </div>
     <div class="content">
        <h2>Welcome to Arasaka Neural Bastion</h2>
        <p>This is an ongoing research project focused on developing and refining advanced trading strategies using machine learning. 
        </p>
            <p>
                This project's all about running a hybrid—LinearSVR and SFN, working together to decode market trends and sharpen the trading game. We're feeding it raw data—price shifts, volume spikes, moving averages—and cranking up the system. #featureengineering #gridsearch #modeltuning #crunching MSE and R² to keep it sharp.
            </p>
     </div>
     <div class="footer">
         <p>&copy; 2025 Arasaka Corporation. All rights reserved.</p>
     </div>
 </body>
 
{{-- rt --}}
