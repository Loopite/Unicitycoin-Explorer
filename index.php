<!DOCTYPE html>
<html class="js rgba borderradius boxshadow textshadow opacity cssgradients" lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="description" content="UnicityCoin, the official UnicityCoin blockchain">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>UnicityCoin - The official UnicityCoin blockchain explorer</title>

    <!-- <link rel="icon" type="image/ico" href="https://UnicityCoin.info/favicon.png"> -->

	  <!-- Define CSS and JS files. -->
    <link rel="stylesheet" href="assets/css/prettyCheckable.css">
    <link rel="stylesheet" href="assets/css/sangoma-blue.css">

    <script src="assets/js/RPCConfiguration.js"></script>
    <script src="assets/js/index.js" defer></script>
  </head>
  <body>
    <?php include_once 'components/header.html'; ?>

    <div style="min-height: 80%;">
      <div id="wrapper">
        <section class="container" role="main">
          <div class="row">
            <article class="col-sm-4 col-xs-12">
	            <div class="data-block plan-block">
	              <section id="current_price"><h3>0.00 USD/UNIFY</h3><p>Last trade price on Binance</p></section>
	            </div>
            </article>
            <article class="col-sm-4 col-xs-12">
	            <div class="data-block plan-block">
	              <section>
	                <h3 id="total_work">0</h3>
	                <p>Current chain work</p>
	              </section>
	            </div>
            </article>
            <article class="col-sm-4 col-xs-12">
	            <div id="blocks_count_container" class="data-block plan-block">
	              <section>
	                <h3 id="block_height">0</h3>
	                <p>Blocks in chain</p>
	              </section>
	            </div>
            </article>
          </div>
          <div class="row">
            <article id="latest-blocks-article" class="col-sm-12 col-lg-8">
              <div class="data-block">
                <header>
                  <h2>Latest blocks</h2>
                </header>
                <section>
                  <table id="latest-blocks-table" class="datatable table table-striped table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>Block</th>
                        <th>Time</th>
                        <th>Transactions</th>
                        <th class="hide-for-small">Difficulty</th>
                      </tr>
                    </thead>
                  </table>
                </section>
              </div>
            </article>
            <article id="latest-blocks-miners-article" class="col-sm-4 col-lg-4 miners-pie">
              <div class="data-block" style="height: 510px;">
                <header>
                  <h2>Miners</h2>
                </header>
                <section>
                  <div id="miner-pie-chart" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto" data-highcharts-chart="0"><div class="highcharts-container" id="highcharts-0" style="position: relative; overflow: hidden; width: 326.667px; height: 400px; text-align: left; line-height: normal; z-index: 0; left: 0px; top: 0px;"><svg version="1.1" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="326.667" height="400"><desc>Created with Highcharts 4.0.4</desc><defs><clipPath id="highcharts-1"><rect x="0" y="0" width="307" height="298"></rect></clipPath></defs><rect x="0" y="0" width="326" height="400" strokeWidth="0" fill="#FFFFFF" class=" highcharts-background"></rect><path fill="rgba(228,211,84,0.25)" d="M 0 0"></path><g class="highcharts-series-group" zIndex="3"><g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(10,10) scale(1 1)" style="cursor:pointer;"><path fill="#7cb5ec" d="M 153.47168942468636 10.000002883052815 A 139 139 0 0 1 292.215425154777 140.11007175903703 L 153.5 149 A 0 0 0 0 0 153.5 149 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="#434348" d="M 292.2242457238295 140.24879160603632 A 139 139 0 0 1 228.13356308037518 266.26393845478526 L 153.5 149 A 0 0 0 0 0 153.5 149 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="#90ed7d" d="M 228.01626184468597 266.3385133734623 A 139 139 0 0 1 162.3616754415303 287.7172329177921 L 153.5 149 A 0 0 0 0 0 153.5 149 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="#f7a35c" d="M 162.22295380089471 287.72602523314595 A 139 139 0 0 1 102.43247161020003 278.27918449679737 L 153.5 149 A 0 0 0 0 0 153.5 149 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="#8085e9" d="M 102.30321798101184 278.228052337332 A 139 139 0 0 1 71.92327015518356 261.54437857052585 L 153.5 149 A 0 0 0 0 0 153.5 149 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="#f15c80" d="M 71.81076658373198 261.46274558209257 A 139 139 0 0 1 58.42687034540859 250.40069042014085 L 153.5 149 A 0 0 0 0 0 153.5 149 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path><path fill="#e4d354" d="M 58.325517208449426 250.30556660599083 A 139 139 0 0 1 153.30693178860804 10.00013408400082 L 153.5 149 A 0 0 0 0 0 153.5 149 Z" stroke="#FFFFFF" stroke-width="1" stroke-linejoin="round" transform="translate(0,0)"></path></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(10,10) scale(1 1)"></g></g><g class="highcharts-legend" zIndex="7" transform="translate(18,328)"><g zIndex="1"><g><g class="highcharts-legend-item" zIndex="1" transform="translate(8,3)"><text x="21" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2" y="15">DMr3fEiV...</text><rect x="0" y="4" width="16" height="12" zIndex="3" fill="#7cb5ec"></rect></g><g class="highcharts-legend-item" zIndex="1" transform="translate(117.0999984741211,3)"><text x="21" y="15" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2">F2Pool</text><rect x="0" y="4" width="16" height="12" zIndex="3" fill="#434348"></rect></g><g class="highcharts-legend-item" zIndex="1" transform="translate(198.41666412353516,3)"><text x="21" y="15" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2">DQvuJB3e...</text><rect x="0" y="4" width="16" height="12" zIndex="3" fill="#90ed7d"></rect></g><g class="highcharts-legend-item" zIndex="1" transform="translate(8,21)"><text x="21" y="15" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2">D5gVXk2r...</text><rect x="0" y="4" width="16" height="12" zIndex="3" fill="#f7a35c"></rect></g><g class="highcharts-legend-item" zIndex="1" transform="translate(121.94999694824219,21)"><text x="21" y="15" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2">D5gk59fV...</text><rect x="0" y="4" width="16" height="12" zIndex="3" fill="#8085e9"></rect></g><g class="highcharts-legend-item" zIndex="1" transform="translate(8,39)"><text x="21" y="15" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2">DHFu8Wjw...</text><rect x="0" y="4" width="16" height="12" zIndex="3" fill="#f15c80"></rect></g><g class="highcharts-legend-item" zIndex="1" transform="translate(125.44999694824219,39)"><text x="21" y="15" style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;" text-anchor="start" zIndex="2"><tspan>38 Small Pools</tspan></text><rect x="0" y="4" width="16" height="12" zIndex="3" fill="#e4d354"></rect></g></g></g></g><g class="highcharts-tooltip" zIndex="8" style="cursor:default;padding:0;white-space:nowrap;" transform="translate(1,-9999)" opacity="0" visibility="visible"><path fill="none" d="M 3.5 0.5 L 132.5 0.5 C 135.5 0.5 135.5 0.5 135.5 3.5 L 135.5 45.5 C 135.5 48.5 135.5 48.5 132.5 48.5 L 3.5 48.5 C 0.5 48.5 0.5 48.5 0.5 45.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)" width="135" height="48"></path><path fill="none" d="M 3.5 0.5 L 132.5 0.5 C 135.5 0.5 135.5 0.5 135.5 3.5 L 135.5 45.5 C 135.5 48.5 135.5 48.5 132.5 48.5 L 3.5 48.5 C 0.5 48.5 0.5 48.5 0.5 45.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)" width="135" height="48"></path><path fill="none" d="M 3.5 0.5 L 132.5 0.5 C 135.5 0.5 135.5 0.5 135.5 3.5 L 135.5 45.5 C 135.5 48.5 135.5 48.5 132.5 48.5 L 3.5 48.5 C 0.5 48.5 0.5 48.5 0.5 45.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)" width="135" height="48"></path><path fill="rgba(249, 249, 249, .85)" d="M 3.5 0.5 L 132.5 0.5 C 135.5 0.5 135.5 0.5 135.5 3.5 L 135.5 45.5 C 135.5 48.5 135.5 48.5 132.5 48.5 L 3.5 48.5 C 0.5 48.5 0.5 48.5 0.5 45.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" stroke="#e4d354" stroke-width="1"></path><text x="8" zIndex="1" style="font-size:12px;color:#333333;fill:#333333;" y="21"><tspan style="font-size: 10px">38 Small Pools</tspan><tspan x="8" dy="16">Mining share: </tspan><tspan style="font-weight:bold" dx="0">38.0%</tspan></text></g><text x="317" text-anchor="end" zIndex="8" style="cursor:pointer;color:#909090;font-size:9px;fill:#909090;" y="395">unicitycoin.info</text></svg></div></div>
                </section>
              </div>
            </article>
          </div>
          <div class="row">
            <article class="col-sm-12">
              <div class="data-block">
                <header>
                  <h2>Latest transactions</h2>
                </header>
                <section>
                  <div class="table-responsive">
                    <table id="latest_transactions_table" class="table table-striped table-bordered table-hover">
                      <thead>
                        <tr>
                          <th>Hash</th>
                          <th class="hide-for-small">Amount</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="trunk8_1">
                            <a href="#">f5799f731597aab452859b272887ab5b11269a4037cb847e91cf3613b48d6362</a>
                          </td>
                          <td class="hide-for-small">15.00000000 UNIFY</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </section>
              </div>
            </article>
          </div>
        </section>
      </div>
    </div>

    <?php include_once 'components/footer.html'; ?>
</body>
</html>