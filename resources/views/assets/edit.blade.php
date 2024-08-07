@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit IT Asset</h1>
    <form method="POST" action="{{ route('assets.update', $asset->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" class="form-control" id="brand" name="brand" value="{{ $asset->brand }}" required>
        </div>
        <div class="form-group">
            <label for="serial_number">Serial Number</label>
            <input type="text" class="form-control" id="serial_number" name="serial_number" value="{{ $asset->serial_number }}" required>
        </div>
        <div class="form-group">
            <label for="warranty_expiration_date">Warranty Expiration Date</label>
            <input type="date" class="form-control" id="warranty_expiration_date" name="warranty_expiration_date" value="{{ $asset->warranty_expiration_date }}" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="New" {{ $asset->status == 'New' ? 'selected' : '' }}>New</option>
                <option value="In Use" {{ $asset->status == 'In Use' ? 'selected' : '' }}>In Use</option>
                <option value="Damaged" {{ $asset->status == 'Damaged' ? 'selected' : '' }}>Damaged</option>
                <option value="Dispose" {{ $asset->status == 'Dispose' ? 'selected' : '' }}>Dispose</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
