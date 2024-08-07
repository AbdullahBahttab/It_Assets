@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <div id="chartsContainer">
        <div id="assetsByBrand" style="height: 400px; width: 100%;"></div>
        <div id="assetsByStatus" style="height: 400px; width: 100%;"></div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    Highcharts.chart('assetsByBrand', {
        chart: { type: 'column' },
        title: { text: 'Number of Assets by Brand' },
        xAxis: { type: 'category' },
        yAxis: { title: { text: 'Number of Assets' } },
        series: [{
            name: 'Brand',
            data: @json($brands)
        }]
    });

    Highcharts.chart('assetsByStatus', {
        chart: { type: 'pie' },
        title: { text: 'Number of Assets by Status' },
        series: [{
            name: 'Status',
            data: @json($statuses)
        }]
    });
});
</script>
@endpush
