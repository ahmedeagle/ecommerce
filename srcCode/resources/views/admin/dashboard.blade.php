@extends('layouts.admin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div id="crypto-stats-3" class="row">
                    <div class="col-xl-4 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="cc BTC warning font-large-2" title="BTC"></i></h1>
                                        </div>
                                        <div class="col-5 pl-2">
                                            <h4>BTC</h4>
                                            <h6 class="text-muted">Bitcoin</h6>
                                        </div>
                                        <div class="col-5 text-right">
                                            <h4>$9,980</h4>
                                            <h6 class="success darken-4">31% <i class="la la-arrow-up"></i></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="btc-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="cc ETH blue-grey lighten-1 font-large-2" title="ETH"></i></h1>
                                        </div>
                                        <div class="col-5 pl-2">
                                            <h4>ETH</h4>
                                            <h6 class="text-muted">Ethereum</h6>
                                        </div>
                                        <div class="col-5 text-right">
                                            <h4>$944</h4>
                                            <h6 class="success darken-4">12% <i class="la la-arrow-up"></i></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="eth-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-12">
                        <div class="card crypto-card-3 pull-up">
                            <div class="card-content">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-2">
                                            <h1><i class="cc XRP info font-large-2" title="XRP"></i></h1>
                                        </div>
                                        <div class="col-5 pl-2">
                                            <h4>XRP</h4>
                                            <h6 class="text-muted">Balance</h6>
                                        </div>
                                        <div class="col-5 text-right">
                                            <h4>$1.2</h4>
                                            <h6 class="danger">20% <i class="la la-arrow-down"></i></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <canvas id="xrp-chartjs" class="height-75"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Candlestick Multi Level Control Chart -->

                <!-- Sell Orders & Buy Order -->
                <div class="row match-height">
                    <div class="col-12 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Sell Order</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <p class="text-muted">Total BTC available: 6542.56585</p>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-de mb-0">
                                        <thead>
                                        <tr>
                                            <th>Price per BTC</th>
                                            <th>BTC Ammount</th>
                                            <th>Total($)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="bg-success bg-lighten-5">
                                            <td>10583.4</td>
                                            <td><i class="cc BTC-alt"></i> 0.45000000</td>
                                            <td>$ 4762.53</td>
                                        </tr>
                                        <tr>
                                            <td>10583.5</td>
                                            <td><i class="cc BTC-alt"></i> 0.04000000</td>
                                            <td>$ 423.34</td>
                                        </tr>
                                        <tr>
                                            <td>10583.7</td>
                                            <td><i class="cc BTC-alt"></i> 0.25100000</td>
                                            <td>$ 2656.51</td>
                                        </tr>
                                        <tr>
                                            <td>10583.8</td>
                                            <td><i class="cc BTC-alt"></i> 0.35000000</td>
                                            <td>$ 3704.33</td>
                                        </tr>
                                        <tr>
                                            <td>10595.7</td>
                                            <td><i class="cc BTC-alt"></i> 0.30000000</td>
                                            <td>$ 3178.71</td>
                                        </tr>
                                        <tr class="bg-danger bg-lighten-5">
                                            <td>10599.5</td>
                                            <td><i class="cc BTC-alt"></i> 0.02000000</td>
                                            <td>$ 211.99</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Buy Order</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <p class="text-muted">Total USD available: 9065930.43</p>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-de mb-0">
                                        <thead>
                                        <tr>
                                            <th>Price per BTC</th>
                                            <th>BTC Ammount</th>
                                            <th>Total($)</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="bg-danger bg-lighten-5">
                                            <td>10599.5</td>
                                            <td><i class="cc BTC-alt"></i> 0.02000000</td>
                                            <td>$ 211.99</td>
                                        </tr>
                                        <tr>
                                            <td>10583.5</td>
                                            <td><i class="cc BTC-alt"></i> 0.04000000</td>
                                            <td>$ 423.34</td>
                                        </tr>
                                        <tr>
                                            <td>10583.8</td>
                                            <td><i class="cc BTC-alt"></i> 0.35000000</td>
                                            <td>$ 3704.33</td>
                                        </tr>
                                        <tr>
                                            <td>10595.7</td>
                                            <td><i class="cc BTC-alt"></i> 0.30000000</td>
                                            <td>$ 3178.71</td>
                                        </tr>
                                        <tr class="bg-danger bg-lighten-5">
                                            <td>10583.7</td>
                                            <td><i class="cc BTC-alt"></i> 0.25100000</td>
                                            <td>$ 2656.51</td>
                                        </tr>
                                        <tr>
                                            <td>10595.8</td>
                                            <td><i class="cc BTC-alt"></i> 0.29697926</td>
                                            <td>$ 3146.74</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Sell Orders & Buy Order -->
                <!-- Active Orders -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Active Order</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <td>
                                        <button class="btn btn-sm round btn-danger btn-glow"><i class="la la-close font-medium-1"></i> Cancel all</button>
                                    </td>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="table-responsive">
                                    <table class="table table-de mb-0">
                                        <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Type</th>
                                            <th>Amount BTC</th>
                                            <th>BTC Remaining</th>
                                            <th>Price</th>
                                            <th>USD</th>
                                            <th>Fee (%)</th>
                                            <th>Cancel</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>2018-01-31 06:51:51</td>
                                            <td class="success">Buy</td>
                                            <td><i class="cc BTC-alt"></i> 0.58647</td>
                                            <td><i class="cc BTC-alt"></i> 0.58647</td>
                                            <td>11900.12</td>
                                            <td>$ 6979.78</td>
                                            <td>0.2</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2018-01-31 06:50:50</td>
                                            <td class="danger">Sell</td>
                                            <td><i class="cc BTC-alt"></i> 1.38647</td>
                                            <td><i class="cc BTC-alt"></i> 0.38647</td>
                                            <td>11905.09</td>
                                            <td>$ 4600.97</td>
                                            <td>0.2</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2018-01-31 06:49:51</td>
                                            <td class="success">Buy</td>
                                            <td><i class="cc BTC-alt"></i> 0.45879</td>
                                            <td><i class="cc BTC-alt"></i> 0.45879</td>
                                            <td>11901.85</td>
                                            <td>$ 5460.44</td>
                                            <td>0.2</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2018-01-31 06:51:51</td>
                                            <td class="success">Buy</td>
                                            <td><i class="cc BTC-alt"></i> 0.89877</td>
                                            <td><i class="cc BTC-alt"></i> 0.89877</td>
                                            <td>11899.25</td>
                                            <td>$ 10694.6</td>
                                            <td>0.2</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2018-01-31 06:51:51</td>
                                            <td class="danger">Sell</td>
                                            <td><i class="cc BTC-alt"></i> 0.45712</td>
                                            <td><i class="cc BTC-alt"></i> 0.45712</td>
                                            <td>11908.58</td>
                                            <td>$ 5443.65</td>
                                            <td>0.2</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2018-01-31 06:51:51</td>
                                            <td class="success">Buy</td>
                                            <td><i class="cc BTC-alt"></i> 0.58647</td>
                                            <td><i class="cc BTC-alt"></i> 0.58647</td>
                                            <td>11900.12</td>
                                            <td>$ 6979.78</td>
                                            <td>0.2</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Active Orders -->
            </div>
        </div>
    </div>
@endsection
