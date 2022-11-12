@extends('layouts.main.app')

@section('content')

<div class="row">
    <div class="col-xl-6">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-chart-area me-1"></i>
                Area Chart Example
            </div>
            <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-chart-bar me-1"></i>
                Bar Chart Example
            </div>
            <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
        </div>
    </div>
</div>
<div class="card mb-4">
    <div class="card-body">
        Chart.js is a third party plugin that is used to generate the charts in this template. The charts below have been customized - for further customization options, please visit the official
        <a target="_blank" href="https://www.chartjs.org/docs/latest/">Chart.js documentation</a>
        .
    </div>
</div>
@endsection