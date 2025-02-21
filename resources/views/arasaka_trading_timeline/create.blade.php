<div>
    <form action="{{Route('arasaka_trading_timeline.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="file_upload">
            <input type="file" name="logs" id="logs" accept=".json" required>
        </label>
        <button>Upload JSON file</button>
    </form>
</div>
