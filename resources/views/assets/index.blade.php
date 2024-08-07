@extends('layouts.app')

@section('content')
<div class="container">
    <h1>IT Assets</h1>
    <a href="{{ route('assets.create') }}" class="btn btn-primary">Add New Asset</a>
    <div class="mt-3">
        <div id="assetsGrid" style="height: 600px; width: 100%;"></div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/ag-grid-community@latest/dist/ag-grid-community.min.noStyle.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const gridOptions = {
        columnDefs: [
            { headerName: 'ID', field: 'id' },
            { headerName: 'Brand', field: 'brand' },
            { headerName: 'Serial Number', field: 'serial_number' },
            { headerName: 'Warranty Expiration Date', field: 'warranty_expiration_date' },
            { headerName: 'Status', field: 'status' }
        ],
        rowData: @json($assets)
    };
    new agGrid.Grid(document.getElementById('assetsGrid'), gridOptions);
});
</script>
@endpush
