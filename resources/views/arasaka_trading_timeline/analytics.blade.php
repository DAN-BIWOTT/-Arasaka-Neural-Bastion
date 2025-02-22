<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arasaka Trading Model</title>
    <link rel="stylesheet" href="{{ secure_asset('css/arasaka_trading_timeline_analytics.css') }}">
    <link rel="stylesheet" href="{{ asset('css/arasaka_trading_timeline_analytics.css') }}">
    <script>
        function copyToClipboard(id) {
            let copyText = document.getElementById(id);
            navigator.clipboard.writeText(copyText.innerText).then(() => {
                alert("Copied: " + copyText.innerText);
            });
        }
    </script>
</head>
<body>
    <div class="container">
        <!-- NAVBAR -->
        <header class="navbar">
            <div class="logo">Arasaka Neural Bastion</div>
            <div class="menu-toggle" onclick="toggleMenu()">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('arasaka_trading_timeline.index') }}">Timeline</a></li>
                    <li><a href="{{ route('arasaka_trading_timeline.create') }}">Create Model</a></li>
                </ul>
            </nav>
        </header>
        
        <script>
            function toggleMenu() {
                document.querySelector('.nav-links').classList.toggle('active');
            }
            </script>

        <header>
            <h1>Arasaka Trading Model</h1>
        </header>

        @foreach ($models as $model)
            <section class="model">
                <p class="model-name">Model: {{ $model->model_name }}</p>

                <!-- FEATURES -->
                <section class="features">
                    <h2>Features</h2>
                    <div class="grid">
                        @php
                            $features = is_string($model->features) ? json_decode($model->features, true) : $model->features;
                        @endphp
                        @if(!empty($features))
                            @foreach($features as $feature)
                                <span>{{ $feature }}</span>
                            @endforeach
                        @else
                            <span>No features available</span>
                        @endif
                    </div>
                </section>

                <!-- PERFORMANCE METRICS -->
                <section class="metrics">
                    <h2>Performance Metrics</h2>
                    <div class="metric-grid">
                        @foreach([
                            'train_mse' => $model->train_mse, 'test_mse' => $model->test_mse,
                            'train_rmse' => $model->train_rmse, 'test_rmse' => $model->test_rmse,
                            'train_mae' => $model->train_mae, 'test_mae' => $model->test_mae,
                            'train_r2' => $model->train_r2, 'test_r2' => $model->test_r2,
                            'train_explained_variance' => $model->train_explained_variance,
                            'test_explained_variance' => $model->test_explained_variance
                        ] as $key => $value)
                            <div>
                                {{ ucwords(str_replace('_', ' ', $key)) }}: 
                                <span>{{ $value ?? 'N/A' }}</span>
                            </div>
                        @endforeach
                    </div>
                </section>

                <!-- SCALING PARAMETERS -->
                <section class="scaling">
                    <h2>Scaling Parameters</h2>
                    <div class="scaling-grid">
                        <div>
                            <h3>Mean</h3>
                            @php
                                $mean_values = is_string($model->scaling_mean) ? json_decode($model->scaling_mean, true) : $model->scaling_mean;
                            @endphp
                            <p id="mean_values_{{ $model->id }}">{{ implode(', ', $mean_values ?? []) }}</p>
                            <button onclick="copyToClipboard('mean_values_{{ $model->id }}')">📋 Copy</button>
                        </div>
                        <div>
                            <h3>Standard Deviation</h3>
                            @php
                                $std_dev_values = is_string($model->scaling_std_dev) ? json_decode($model->scaling_std_dev, true) : $model->scaling_std_dev;
                            @endphp
                            <p id="std_dev_values_{{ $model->id }}">{{ implode(', ', $std_dev_values ?? []) }}</p>
                            <button onclick="copyToClipboard('std_dev_values_{{ $model->id }}')">📋 Copy</button>
                        </div>
                    </div>
                </section>
            </section>
        @endforeach

        <!-- PAGINATION -->
        <div class="pagination-container">
            {{ $models->links('vendor.pagination.tailwind') }}
        </div>
    </div>
</body>
</html>
