@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        {{ trans('backpack::base.dashboard') }}<small>
          <!-- {{ trans('backpack::base.first_page_you_see') }} -->
        </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.dashboard') }}</li>
      </ol>
    </section>
@endsection


@section('content')
    <div class="row">
        <div class="col-md-12">
          <div class="row">
            <!-- <div class="col-md-4">
                <div class="card card-chart">
                    <div class="card-header" data-background-color="white">
                        <div class="ct-chart" id="roundedLineChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line y1="120" y2="120" x1="40" x2="323" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="323" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="323" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="323" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="323" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="323" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M40,91.2C46.738,89.2,66.952,77.2,80.429,79.2C93.905,81.2,107.381,103.2,120.857,103.2C134.333,103.2,147.81,85.6,161.286,79.2C174.762,72.8,188.238,65.2,201.714,64.8C215.19,64.4,228.667,82.8,242.143,76.8C255.619,70.8,275.833,36.8,282.571,28.8" class="ct-line"></path></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="40.42857142857143" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 40px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">M</span></foreignObject><foreignObject style="overflow: visible;" x="80.42857142857143" y="125" width="40.42857142857143" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 40px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">T</span></foreignObject><foreignObject style="overflow: visible;" x="120.85714285714286" y="125" width="40.42857142857143" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 40px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">W</span></foreignObject><foreignObject style="overflow: visible;" x="161.28571428571428" y="125" width="40.42857142857143" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 40px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">T</span></foreignObject><foreignObject style="overflow: visible;" x="201.71428571428572" y="125" width="40.428571428571445" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 40px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">F</span></foreignObject><foreignObject style="overflow: visible;" x="242.14285714285717" y="125" width="40.428571428571416" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 40px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">S</span></foreignObject><foreignObject style="overflow: visible;" x="282.57142857142856" y="125" width="40.428571428571416" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 40px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">S</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">10</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">20</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">30</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">40</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">50</span></foreignObject></g></svg></div>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Rounded Line Chart</h4>
                        <p class="category">Line Chart</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-chart">
                    <div class="card-header" data-background-color="red">
                        <div class="ct-chart" id="simpleBarChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;"><g class="ct-grids"><line y1="115" y2="115" x1="50" x2="308" class="ct-grid ct-vertical"></line><line y1="92.77777777777777" y2="92.77777777777777" x1="50" x2="308" class="ct-grid ct-vertical"></line><line y1="70.55555555555556" y2="70.55555555555556" x1="50" x2="308" class="ct-grid ct-vertical"></line><line y1="48.33333333333333" y2="48.33333333333333" x1="50" x2="308" class="ct-grid ct-vertical"></line><line y1="26.111111111111114" y2="26.111111111111114" x1="50" x2="308" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><line x1="60.75" x2="60.75" y1="115" y2="54.77777777777778" class="ct-bar" value="542" opacity="1"></line><line x1="82.25" x2="82.25" y1="115" y2="65.77777777777777" class="ct-bar" value="443" opacity="1"></line><line x1="103.75" x2="103.75" y1="115" y2="79.44444444444444" class="ct-bar" value="320" opacity="1"></line><line x1="125.25" x2="125.25" y1="115" y2="28.33333333333333" class="ct-bar" value="780" opacity="1"></line><line x1="146.75" x2="146.75" y1="115" y2="53.55555555555556" class="ct-bar" value="553" opacity="1"></line><line x1="168.25" x2="168.25" y1="115" y2="64.66666666666666" class="ct-bar" value="453" opacity="1"></line><line x1="189.75" x2="189.75" y1="115" y2="78.77777777777777" class="ct-bar" value="326" opacity="1"></line><line x1="211.25" x2="211.25" y1="115" y2="66.77777777777777" class="ct-bar" value="434" opacity="1"></line><line x1="232.75" x2="232.75" y1="115" y2="51.888888888888886" class="ct-bar" value="568" opacity="1"></line><line x1="254.25" x2="254.25" y1="115" y2="47.22222222222223" class="ct-bar" value="610" opacity="1"></line><line x1="275.75" x2="275.75" y1="115" y2="31" class="ct-bar" value="756" opacity="1"></line><line x1="297.25" x2="297.25" y1="115" y2="15.555555555555557" class="ct-bar" value="895" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="120" width="21.5" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 22px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Jan</span></foreignObject><foreignObject style="overflow: visible;" x="71.5" y="120" width="21.5" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 22px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Feb</span></foreignObject><foreignObject style="overflow: visible;" x="93" y="120" width="21.5" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 22px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Mar</span></foreignObject><foreignObject style="overflow: visible;" x="114.5" y="120" width="21.5" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 22px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Apr</span></foreignObject><foreignObject style="overflow: visible;" x="136" y="120" width="21.5" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 22px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Mai</span></foreignObject><foreignObject style="overflow: visible;" x="157.5" y="120" width="21.5" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 22px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Jun</span></foreignObject><foreignObject style="overflow: visible;" x="179" y="120" width="21.5" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 22px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Jul</span></foreignObject><foreignObject style="overflow: visible;" x="200.5" y="120" width="21.5" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 22px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Aug</span></foreignObject><foreignObject style="overflow: visible;" x="222" y="120" width="21.5" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 22px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Sep</span></foreignObject><foreignObject style="overflow: visible;" x="243.5" y="120" width="21.5" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 22px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Oct</span></foreignObject><foreignObject style="overflow: visible;" x="265" y="120" width="21.5" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 22px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Nov</span></foreignObject><foreignObject style="overflow: visible;" x="286.5" y="120" width="30" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 30px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">Dec</span></foreignObject><foreignObject style="overflow: visible;" y="92.77777777777777" x="10" height="22.22222222222222" width="30"><span class="ct-label ct-vertical ct-start" style="height: 22px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">0</span></foreignObject><foreignObject style="overflow: visible;" y="70.55555555555554" x="10" height="22.22222222222222" width="30"><span class="ct-label ct-vertical ct-start" style="height: 22px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">200</span></foreignObject><foreignObject style="overflow: visible;" y="48.33333333333333" x="10" height="22.22222222222223" width="30"><span class="ct-label ct-vertical ct-start" style="height: 22px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">400</span></foreignObject><foreignObject style="overflow: visible;" y="26.111111111111114" x="10" height="22.222222222222214" width="30"><span class="ct-label ct-vertical ct-start" style="height: 22px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">600</span></foreignObject><foreignObject style="overflow: visible;" y="-3.8888888888888857" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">800</span></foreignObject></g></svg></div>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Simple Bar Chart</h4>
                        <p class="category">Bar Chart</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-chart">
                    <div class="card-header" data-background-color="grey">
                        <div class="ct-chart" id="straightLinesChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="40" x2="40" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="71.44444444444444" x2="71.44444444444444" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="102.88888888888889" x2="102.88888888888889" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="134.33333333333331" x2="134.33333333333331" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="165.77777777777777" x2="165.77777777777777" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="197.22222222222223" x2="197.22222222222223" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="228.66666666666666" x2="228.66666666666666" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="260.1111111111111" x2="260.1111111111111" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="291.55555555555554" x2="291.55555555555554" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line y1="120" y2="120" x1="40" x2="323" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="323" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="323" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="323" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="323" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="323" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M40,96C71.444,81.6,71.444,81.6,71.444,81.6C102.889,100.8,102.889,100.8,102.889,100.8C134.333,88.8,134.333,88.8,134.333,88.8C165.778,72,165.778,72,165.778,72C197.222,84,197.222,84,197.222,84C228.667,72,228.667,72,228.667,72C260.111,38.4,260.111,38.4,260.111,38.4C291.556,48,291.556,48,291.556,48" class="ct-line ct-white"></path><line x1="40" y1="96" x2="40.01" y2="96" class="ct-point ct-white" value="10" opacity="1"></line><line x1="71.44444444444444" y1="81.6" x2="71.45444444444445" y2="81.6" class="ct-point ct-white" value="16" opacity="1"></line><line x1="102.88888888888889" y1="100.8" x2="102.89888888888889" y2="100.8" class="ct-point ct-white" value="8" opacity="1"></line><line x1="134.33333333333331" y1="88.8" x2="134.3433333333333" y2="88.8" class="ct-point ct-white" value="13" opacity="1"></line><line x1="165.77777777777777" y1="72" x2="165.78777777777776" y2="72" class="ct-point ct-white" value="20" opacity="1"></line><line x1="197.22222222222223" y1="84" x2="197.23222222222222" y2="84" class="ct-point ct-white" value="15" opacity="1"></line><line x1="228.66666666666666" y1="72" x2="228.67666666666665" y2="72" class="ct-point ct-white" value="20" opacity="1"></line><line x1="260.1111111111111" y1="38.400000000000006" x2="260.1211111111111" y2="38.400000000000006" class="ct-point ct-white" value="34" opacity="1"></line><line x1="291.55555555555554" y1="48" x2="291.56555555555553" y2="48" class="ct-point ct-white" value="30" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="31.444444444444443" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 31px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">'07</span></foreignObject><foreignObject style="overflow: visible;" x="71.44444444444444" y="125" width="31.444444444444443" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 31px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">'08</span></foreignObject><foreignObject style="overflow: visible;" x="102.88888888888889" y="125" width="31.444444444444443" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 31px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">'09</span></foreignObject><foreignObject style="overflow: visible;" x="134.33333333333331" y="125" width="31.444444444444443" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 31px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">'10</span></foreignObject><foreignObject style="overflow: visible;" x="165.77777777777777" y="125" width="31.444444444444457" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 31px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">'11</span></foreignObject><foreignObject style="overflow: visible;" x="197.22222222222223" y="125" width="31.44444444444443" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 31px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">'12</span></foreignObject><foreignObject style="overflow: visible;" x="228.66666666666666" y="125" width="31.44444444444443" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 31px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">'13</span></foreignObject><foreignObject style="overflow: visible;" x="260.1111111111111" y="125" width="31.444444444444457" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 31px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">'14</span></foreignObject><foreignObject style="overflow: visible;" x="291.55555555555554" y="125" width="31.444444444444457" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 31px; height: 20px" xmlns="http://www.w3.org/1999/xhtml">'15</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">10</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">20</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">30</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">40</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/1999/xhtml">50</span></foreignObject></g></svg></div>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Straight Lines Chart</h4>
                        <p class="category">Line Chart with Points</p>
                    </div>
                </div>
            </div> -->
          </div>
            <div class="box box-default">
                <div class="box-header with-border">
                    <div class="box-title">{{ trans('backpack::base.login_status') }}</div>
                </div>

                <div class="box-body">{{ trans('backpack::base.logged_in') }}</div>

            </div>
        </div>
    </div>
@endsection
