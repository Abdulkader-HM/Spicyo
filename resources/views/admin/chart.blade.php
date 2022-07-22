@extends('layouts.admin.app')

@section('dashboard')
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Chart-js </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Charts</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Chart-js</li>
                    </ol>
                </nav>
            </div>
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Line chart</h4>
                            <canvas id="lineChart" style="height:250px"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Bar chart</h4>
                            <canvas id="barChart" style="height:230px"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Area chart</h4>
                            <canvas id="areaChart" style="height:250px"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Doughnut chart</h4>
                            <canvas id="doughnutChart" style="height:250px"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Pie chart</h4>
                            <canvas id="pieChart" style="height:250px"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Scatter chart</h4>
                            <canvas id="scatterChart" style="height:250px"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection



<script src="{{ URL::asset('vendors/js/vendor.bundle.base.js') }}"></script>

<script src="{{ URL::asset('js/dashboard/off-canvas.js') }}"></script>
<script src="{{ URL::asset('js/dashboard/hoverable-collapse.js') }}"></script>
<script src="{{ URL::asset('js/dashboard/misc.js') }}"></script>
<script src="{{ URL::asset('js/dashboard/settings.js') }} "></script>
<script src="{{ URL::asset('js/dashboard/todolist.js') }}"></script>
<script src="{{ URL::asset('js/dashboard/chart.js') }}"></script>
</body>

</html>
