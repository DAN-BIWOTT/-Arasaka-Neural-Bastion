<div>
    <form action="{{Route('arasaka_trading_timeline.store')}}" method="POST" enctype="multipart/form-data">
        @csrf  {{-- This is required! --}}
        <label for="file_upload">
            <input name="logs" type="file" accept=".json" value="{{old('logs')}}">
        </label>
        <button>Upload JSON file</button>
    </form>
</div>
