@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New IT Asset</h1>
    <form method="POST" action="{{ route('assets.store') }}">
        @csrf
        <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" class="form-control" id="brand" name="brand" required>
        </div>
        <div class="form-group">
            <label for="serial_number">Serial Number</label>
            <input type="text" class="form-control" id="serial_number" name="serial_number" required>
        </div>
        <div class="form-group">
            <label for="warranty_expiration_date">Warranty Expiration Date</label>
            <input type="date" class="form-control" id="warranty_expiration_date" name="warranty_expiration_date" required>
        </div>
        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
                <option value="New">New</option>
                <option value="In Use">In Use</option>
                <option value="Damaged">Damaged</option>
                <option value="Dispose">Dispose</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
