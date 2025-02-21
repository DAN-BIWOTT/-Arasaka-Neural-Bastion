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
        {{-- <a href="{{route('product.index')}}">Projects</a> --}}
        <a href="{{route('info.index')}}">Info Page</a>
    </div>
    <div class="content">
       <h2>Welcome to Arasaka Neural Bastion</h2>
       </p>
           <p>
              Welcome to the neon grid. I work at the intersection of machine learning and trading, using advanced algorithms to uncover market patterns and turn raw data into actionable insights. In this hyper-connected world, information is currency, and precision is everything.
                
               Step into my world of algorithms and analysis as I navigate the digital frontier.
            </p>
    </div>
    <div class="footer">
        <p>&copy; 2025 Arasaka Corporation. All rights reserved.</p>
    </div>
</x-layout>
