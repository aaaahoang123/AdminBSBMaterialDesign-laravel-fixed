@extends('layouts.master')

@section('title')
    Info Box 3
@endsection

@section('extra-css')

@endsection

@section('content')

    <div class="container-fluid">
        <!-- Counter Examples -->
        <div class="block-header">
            <h2>
                COUNTER ANIMATION
                <small>Taken from <a href="https://github.com/mhuggins/jquery-countTo" target="_blank">github.com/mhuggins/jquery-countTo</a></small>
            </h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-2 bg-red">
                    <div class="icon">
                        <i class="material-icons">shopping_cart</i>
                    </div>
                    <div class="content">
                        <div class="text">NEW ORDERS</div>
                        <div class="number count-to" data-from="0" data-to="125" data-speed="1000" data-fresh-interval="20">125</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-2 bg-indigo">
                    <div class="icon">
                        <i class="material-icons">face</i>
                    </div>
                    <div class="content">
                        <div class="text">NEW MEMBERS</div>
                        <div class="number count-to" data-from="0" data-to="257" data-speed="1000" data-fresh-interval="20">257</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-2 bg-purple">
                    <div class="icon">
                        <i class="material-icons">bookmark</i>
                    </div>
                    <div class="content">
                        <div class="text">BOOKMARKS</div>
                        <div class="number count-to" data-from="0" data-to="117" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-2 bg-deep-purple">
                    <div class="icon">
                        <i class="material-icons">favorite</i>
                    </div>
                    <div class="content">
                        <div class="text">LIKES</div>
                        <div class="number count-to" data-from="0" data-to="1432" data-speed="1500" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Counter Examples -->
        <!-- Hover Zoom Effect -->
        <div class="block-header">
            <h2>HOVER ZOOM EFFECT</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-2 bg-pink hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">email</i>
                    </div>
                    <div class="content">
                        <div class="text">MESSAGES</div>
                        <div class="number">15</div>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-2 bg-blue hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">devices</i>
                    </div>
                    <div class="content">
                        <div class="text">CPU USAGE</div>
                        <div class="number">92%</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-2 bg-light-blue hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">access_alarm</i>
                    </div>
                    <div class="content">
                        <div class="text">ALARM</div>
                        <div class="number">07:00 AM</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-2 bg-cyan hover-zoom-effect">
                    <div class="icon">
                        <i class="material-icons">gps_fixed</i>
                    </div>
                    <div class="content">
                        <div class="text">LOCATION</div>
                        <div class="number">Turkey</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Hover Zoom Effect -->
        <!-- Hover Expand Effect -->
        <div class="block-header">
            <h2>HOVER EXPAND EFFECT</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-2 bg-teal hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">equalizer</i>
                    </div>
                    <div class="content">
                        <div class="text">BOUNCE RATE</div>
                        <div class="number">62%</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-2 bg-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">flight_takeoff</i>
                    </div>
                    <div class="content">
                        <div class="text">FLIGHT</div>
                        <div class="number">02:59 PM</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-2 bg-light-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">battery_charging_full</i>
                    </div>
                    <div class="content">
                        <div class="text">BATTERY</div>
                        <div class="number">Charging</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-2 bg-lime hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">brightness_low</i>
                    </div>
                    <div class="content">
                        <div class="text">BRIGHTNESS RATE</div>
                        <div class="number">40%</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Hover Expand Effect -->
        <!-- Chart Samples -->
        <div class="block-header">
            <h2>CHART SAMPLES</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-2 bg-yellow">
                    <div class="icon">
                        <div class="chart chart-bar">6,4,8,6,8,10,5,6,7,9,5</div>
                    </div>
                    <div class="content">
                        <div class="text">WEBSITE TRAFFICS</div>
                        <div class="number">127 526</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-2 bg-amber">
                    <div class="icon">
                        <div class="chart chart-bar">6,4,8,6,8,10,5,6,7,9,5</div>
                    </div>
                    <div class="content">
                        <div class="text">WEBSITE IMPRESSIONS</div>
                        <div class="number">457 512</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-2 bg-orange">
                    <div class="icon">
                        <div class="chart chart-pie">30, 35, 25, 8</div>
                    </div>
                    <div class="content">
                        <div class="text">USAGE</div>
                        <div class="number">98%</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-2 bg-deep-orange">
                    <div class="icon">
                        <div class="chart chart-pie">30, 35, 25, 10</div>
                    </div>
                    <div class="content">
                        <div class="text">USAGE</div>
                        <div class="number">100%</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-2 bg-brown">
                    <div class="icon">
                        <span class="chart chart-line">9,4,6,5,6,4,7,3</span>
                    </div>
                    <div class="content">
                        <div class="text">DAILY SALES</div>
                        <div class="number">$12 526</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-2 bg-grey">
                    <div class="icon">
                        <span class="chart chart-line">9,4,6,5,6,4,7,3</span>
                    </div>
                    <div class="content">
                        <div class="text">TOTAL SALES</div>
                        <div class="number">$125 543</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-2 bg-blue-grey">
                    <div class="icon">
                        <div class="chart chart-bar">4,6,-3,-1,2,-2,4,3,6,7,-2,3</div>
                    </div>
                    <div class="content">
                        <div class="text">CURRENCY</div>
                        <div class="number">$1 063</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box-2 bg-black">
                    <div class="icon">
                        <div class="chart chart-bar">4,6,-3,-1,2,-2,4,3,6,7,-2,3</div>
                    </div>
                    <div class="content">
                        <div class="text">CURRENCY</div>
                        <div class="number">$1 125</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Chart Samples -->
    </div>

@endsection

@section('extra-script')
    <script type="text/javascript" src="{{asset('assets/plugins/jquery-countto/jquery.countTo.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/js/pages/widgets/infobox/infobox-3.js')}}"></script>
@endsection
