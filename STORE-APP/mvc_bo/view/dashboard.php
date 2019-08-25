<?php include 'layout/menu.inc.php';?>

<!-- START CONTENT -->
<div class="row col-12 container d-flex justify-content-center m-0">
    <div class="col-xs-6 col-sm-4">
        <div class="box p-a">
            <div class="pull-left m-r">
                <span class="w-48 rounded  accent">
                    <i class="material-icons"></i>
                </span>
            </div>
            <div class="clear">
                <h4 class="m-0 text-lg _300"><a href="">125 <span class="text-sm">Emails</span></a></h4>
                <small class="text-muted">6 new arrivals.</small>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-sm-4">
        <div class="box p-a">
            <div class="pull-left m-r">
                <span class="w-48 rounded primary">
                    <i class="material-icons"></i>
                </span>
            </div>
            <div class="clear">
                <h4 class="m-0 text-lg _300"><a href="">40 <span class="text-sm">Projects</span></a></h4>
                <small class="text-muted">38 open.</small>
            </div>
        </div>
    </div>
    <div class="col-xs-6 col-sm-4">
        <div class="box p-a">
            <div class="pull-left m-r">
                <span class="w-48 rounded warn">
                    <i class="material-icons"></i>
                </span>
            </div>
            <div class="clear">
                <h4 class="m-0 text-lg _300"><a href="">600 <span class="text-sm">Users</span></a></h4>
                <small class="text-muted">632 vips.</small>
            </div>
        </div>
    </div>
</div>
<div class="row col-12 container d-flex justify-content-center m-0">
    <div class="col-sm-6 col-md-4">
        <div class="box">
            <div class="box-header">
                <h3>Projects monitor</h3>
                <small>Calculated in last 30 days</small>
            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="nav-link">
                            <i class="material-icons md-18"></i>
                        </a>
                    </li>
                    <li class="nav-item inline dropdown">
                        <a class="nav-link" data-toggle="dropdown">
                            <i class="material-icons md-18"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-scale pull-right">
                            <a class="dropdown-item" href="">This week</a>
                            <a class="dropdown-item" href="">This month</a>
                            <a class="dropdown-item" href="">This week</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item">Today</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="box-body">
                <div class="text-center m-b">
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-sm white">
                            <input type="radio" name="options" autocomplete="off"> Month
                        </label>
                        <label class="btn btn-sm white">
                            <input type="radio" name="options" autocomplete="off"> Day
                        </label>
                    </div>
                </div>
                <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
	              [
	                { data: [[1, 3.6], [2, 3.5], [3, 6], [4, 4], [5, 4.3], [6, 3.5], [7, 3.6]],
	                  points: { show: true, radius: 0},
                  	  splines: { show: true, tension: 0.45, lineWidth: 2, fill: 1 }
	                },
	                { data: [[1, 3], [2, 2.6], [3, 3.2], [4, 3], [5, 3.5], [6, 3], [7, 3.5]],
	                  points: { show: true, radius: 0},
                  	  splines: { show: true, tension: 0.45, lineWidth: 2, fill: 1 }
	                },
	                { data: [[1, 2], [2, 1.6], [3, 2.4], [4, 2.1], [5, 1.7], [6, 1.5], [7, 1.7]],
	                  points: { show: true, radius: 0},
                  	  splines: { show: true, tension: 0.45, lineWidth: 2, fill: 1 }
	                }
	              ],
	              {
	                colors: ['#a88add','#0cc2aa','#fcc100'],
	                series: { shadowSize: 3 },
	                xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
	                yaxis:{ show: true, font: { color: '#ccc' }},
	                grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
	                tooltip: true,
	                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
	              }
	            " style="height: 188px; padding: 0px; position: relative;">
                    <canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 293px; height: 188px;" width="439" height="282"></canvas>
                    <div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                        <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                            <div style="position: absolute; max-width: 41px; top: 175px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 8px; text-align: center;">1</div>
                            <div style="position: absolute; max-width: 41px; top: 175px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 55px; text-align: center;">2</div>
                            <div style="position: absolute; max-width: 41px; top: 175px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 101px; text-align: center;">3</div>
                            <div style="position: absolute; max-width: 41px; top: 175px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 148px; text-align: center;">4</div>
                            <div style="position: absolute; max-width: 41px; top: 175px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 194px; text-align: center;">5</div>
                            <div style="position: absolute; max-width: 41px; top: 175px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 241px; text-align: center;">6</div>
                            <div style="position: absolute; max-width: 41px; top: 175px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 287px; text-align: center;">7</div>
                        </div>
                        <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                            <div style="position: absolute; top: 164px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">1</div>
                            <div style="position: absolute; top: 136px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">2</div>
                            <div style="position: absolute; top: 109px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">3</div>
                            <div style="position: absolute; top: 82px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">4</div>
                            <div style="position: absolute; top: 55px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">5</div>
                            <div style="position: absolute; top: 28px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">6</div>
                            <div style="position: absolute; top: 1px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">7</div>
                        </div>
                    </div><canvas class="flot-overlay" width="439" height="282" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 293px; height: 188px;"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="box">
            <div class="box-header">
                <h3>Tasks</h3>
                <small>Calculated in last 7 days</small>
            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="nav-link">
                            <i class="material-icons md-18"></i>
                        </a>
                    </li>
                    <li class="nav-item inline dropdown">
                        <a class="nav-link" data-toggle="dropdown">
                            <i class="material-icons md-18"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-scale pull-right">
                            <a class="dropdown-item" href="">This week</a>
                            <a class="dropdown-item" href="">This month</a>
                            <a class="dropdown-item" href="">This week</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item">Today</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="box-body">
                <div class="text-center m-b">
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-sm rounded white">
                            <input type="radio" name="options" autocomplete="off"> This Month
                        </label>
                        <label class="btn btn-sm rounded white">
                            <input type="radio" name="options" autocomplete="off"> This Week
                        </label>
                    </div>
                </div>
                <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
	              [
	                { data: [[1, 2], [2, 4], [3, 5], [4, 7], [5, 6], [6, 4], [7, 5], [8, 4]] }
	              ],
	              {
	                bars: { show: true, fill: true,  barWidth: 0.25, lineWidth: 1, fillColor: { colors: [{ opacity: 0.8 }, { opacity: 1}] }, align: 'center' },
	                colors: ['#a88add'],
	                series: { shadowSize: 3 },
	                xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
	                yaxis:{ show: true, font: { color: '#ccc' }},
	                grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
	                tooltip: true,
	                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
	              }
	            " style="height: 188px; padding: 0px; position: relative;">
                    <canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 293px; height: 188px;" width="439" height="282"></canvas>
                    <div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                        <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                            <div style="position: absolute; max-width: 29px; top: 175px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 13px; text-align: center;">1</div>
                            <div style="position: absolute; max-width: 29px; top: 175px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 51px; text-align: center;">2</div>
                            <div style="position: absolute; max-width: 29px; top: 175px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 88px; text-align: center;">3</div>
                            <div style="position: absolute; max-width: 29px; top: 175px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 126px; text-align: center;">4</div>
                            <div style="position: absolute; max-width: 29px; top: 175px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 164px; text-align: center;">5</div>
                            <div style="position: absolute; max-width: 29px; top: 175px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 202px; text-align: center;">6</div>
                            <div style="position: absolute; max-width: 29px; top: 175px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 239px; text-align: center;">7</div>
                            <div style="position: absolute; max-width: 29px; top: 175px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 277px; text-align: center;">8</div>
                        </div>
                        <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                            <div style="position: absolute; top: 164px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">0</div>
                            <div style="position: absolute; top: 123px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">2</div>
                            <div style="position: absolute; top: 83px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">4</div>
                            <div style="position: absolute; top: 42px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">6</div>
                            <div style="position: absolute; top: 2px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">8</div>
                        </div>
                    </div><canvas class="flot-overlay" width="439" height="282" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 293px; height: 188px;"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-4">
        <div class="box">
            <div class="box-header">
                <h3>Sales</h3>
                <small>Calculated in last 7 days</small>
            </div>
            <div class="box-tool">
                <ul class="nav">
                    <li class="nav-item inline">
                        <a class="nav-link">
                            <i class="material-icons md-18"></i>
                        </a>
                    </li>
                    <li class="nav-item inline dropdown">
                        <a class="nav-link" data-toggle="dropdown">
                            <i class="material-icons md-18"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-scale pull-right">
                            <a class="dropdown-item" href="">This week</a>
                            <a class="dropdown-item" href="">This month</a>
                            <a class="dropdown-item" href="">This week</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item">Today</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="box-body">
                <div class="text-center m-b">
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-sm rounded white">
                            <input type="radio" name="options" autocomplete="off"> Market
                        </label>
                        <label class="btn btn-sm rounded white">
                            <input type="radio" name="options" autocomplete="off"> Referral
                        </label>
                    </div>
                </div>
                <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
	              [
	                { data: [[3, 1], [2, 2], [6, 3], [5, 4], [7, 5]] }
	              ],
	              {
	                bars: { horizontal: true, show: true, fill: true,  barWidth: 0.3, lineWidth: 1, fillColor: { colors: [{ opacity: 0.8 }, { opacity: 1}] }, align: 'center' },
	                colors: ['#0cc2aa'],
	                series: { shadowSize: 3 },
	                xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
	                yaxis:{ show: true, font: { color: '#ccc' }},
	                grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
	                tooltip: true,
	                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
	              }
	            " style="height: 188px; padding: 0px; position: relative;">
                    <canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 293px; height: 188px;" width="439" height="282"></canvas>
                    <div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);">
                        <div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                            <div style="position: absolute; max-width: 36px; top: 175px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 8px; text-align: center;">0</div>
                            <div style="position: absolute; max-width: 36px; top: 175px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 47px; text-align: center;">1</div>
                            <div style="position: absolute; max-width: 36px; top: 175px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 86px; text-align: center;">2</div>
                            <div style="position: absolute; max-width: 36px; top: 175px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 125px; text-align: center;">3</div>
                            <div style="position: absolute; max-width: 36px; top: 175px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 165px; text-align: center;">4</div>
                            <div style="position: absolute; max-width: 36px; top: 175px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 204px; text-align: center;">5</div>
                            <div style="position: absolute; max-width: 36px; top: 175px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 243px; text-align: center;">6</div>
                            <div style="position: absolute; max-width: 36px; top: 175px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 282px; text-align: center;">7</div>
                        </div>
                        <div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;">
                            <div style="position: absolute; top: 164px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">0</div>
                            <div style="position: absolute; top: 137px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">1</div>
                            <div style="position: absolute; top: 110px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">2</div>
                            <div style="position: absolute; top: 83px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">3</div>
                            <div style="position: absolute; top: 56px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">4</div>
                            <div style="position: absolute; top: 29px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">5</div>
                            <div style="position: absolute; top: 2px; font: 400 11px/13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">6</div>
                        </div>
                    </div><canvas class="flot-overlay" width="439" height="282" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 293px; height: 188px;"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END CONTENT -->

<?php include 'layout/footer.inc.php';?>
<?php include 'layout/scripts.inc.php';?>