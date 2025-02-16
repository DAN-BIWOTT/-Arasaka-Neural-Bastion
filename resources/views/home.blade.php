<x-layout>
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
        <a href="{{route('product.index')}}">Projects</a>
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
</x-layout>
