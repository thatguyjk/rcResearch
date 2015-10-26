
<div class="row" ng-if="trendCategory === 'Culture' || trendCategory === ''">
	<div class="col-sm-11">
		<h4 class="pink"><strong>CULTURE</strong></h4>
		<hr class="pinkBorder noMargin">
	</div>

	<div class="col-sm-11">
		<div class="table-responsive" style="overflow-x: scroll;" ng-scrollbar>
			<table class="table-condensed">
				<tr>
					<td ng-repeat="trend in currentTrends | filter: {category:'Culture'} | filter:search | filter:season | filter:year">

						<div class="panel panel-default">
							<div class="panel-body text-center">
								<a ng-href="../trend_reports/{{ trend.name }}.pdf" target="_blank">
									<img ng-src="../trend_reports/thumbs/{{ trend.name }}.jpg" width="200" height="200" />

									<h5>
										{{ trend.pretty }}
									</h5>
								</a>
							</div>
						</div>

					</td>
				</tr>
			</table>
		</div>
	</div>
	<br>
</div>

<div class="row" ng-if="trendCategory === 'Industry' || trendCategory === ''">
	<div class="col-sm-11">
		<h4 class="pink"><strong>INDUSTRY RESEARCH</strong></h4>
		<hr class="pinkBorder noMargin">
	</div>

	<div class="col-sm-11">
		<div class="table-responsive" style="overflow-x: scroll;">
			<table class="table-condensed">
				<tr>
					<td ng-repeat="trend in currentTrends | filter: {category:'Industry'} | filter:search | filter:season | filter:year">

						<div class="panel panel-default">
							<div class="panel-body text-center">
								<a ng-href="../trend_reports/{{ trend.name }}.pdf" target="_blank">
									<img ng-src="../trend_reports/thumbs/{{ trend.name }}.jpg"  width="200" height="200"  />

									<h5>
										{{ trend.pretty }}
									</h5>
								</a>
							</div>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<br>
</div>


<div class="row" ng-if="trendCategory === 'Jewelry' || trendCategory === ''">
	<div class="col-sm-11">
		<h4 class="pink"><strong>JEWELRY TRENDS</strong></h4>
		<hr class="pinkBorder noMargin">
	</div>

	<div class="col-sm-11">
		<div class="table-responsive" style="overflow-x: scroll;">
			<table class="table-condensed">
				<tr>
					<td ng-repeat="trend in currentTrends | filter: {category:'Jewelry'} | filter:search | filter:season | filter:year">

						<div class="panel panel-default">
							<div class="panel-body text-center">
								<a ng-href="../trend_reports/{{ trend.name }}.pdf" target="_blank">
									<img ng-src="../trend_reports/thumbs/{{ trend.name }}.jpg"  width="200" height="200"  />

									<h5>
										{{ trend.pretty }}
									</h5>
								</a>
							</div>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<br>
</div>


<div class="row" ng-if="trendCategory === 'Macro' || trendCategory === ''">
	<div class="col-sm-11">
		<h4 class="pink"><strong>MACROTRENDS</strong></h4>
		<hr class="pinkBorder noMargin">
	</div>

	<div class="col-sm-11">
		<div class="table-responsive" style="overflow-x: scroll;">
			<table class="table-condensed">
				<tr>
			 		<td ng-repeat="trend in currentTrends | filter: {category:'Macro'} | filter:search | filter:season | filter:year">

			 			<div class="panel panel-default">
			 				<div class="panel-body text-center">
								<a ng-href="../trend_reports/{{ trend.name }}.pdf" target="_blank">
									<img ng-src="../trend_reports/thumbs/{{ trend.name }}.jpg"  width="200" height="200" />

									<h5>
										{{ trend.pretty }}
									</h5>
								</a>
							</div>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<br>
</div>



<div class="row" ng-if="trendCategory === 'Runway' || trendCategory === ''">
	<div class="col-sm-11">
		<h4 class="pink"><strong>RUNWAY</strong></h4>
		<hr class="pinkBorder noMargin">
	</div>

	<div class="col-sm-11">
		<div class="table-responsive" style="overflow-x: scroll;">
			<table class="table-condensed">
				<tr>
					<td ng-repeat="trend in currentTrends | filter: {category:'Runway'} | filter:search | filter:season | filter:year">

						<div class="panel panel-default">
							<div class="panel-body text-center">
								<a ng-href="../trend_reports/{{ trend.name }}.pdf" target="_blank">
									<img ng-src="../trend_reports/thumbs/{{ trend.name }}.jpg"  width="200" height="200" />

									<h5>
										{{ trend.pretty }}
									</h5>
								</a>
							</div>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
	<br>
</div>


<div class="row" ng-if="trendCategory === 'Visual Merchandising' || trendCategory === ''">
	<div class="col-sm-11">
		<h4 class="pink"><strong>VISUAL MERCHANDISING</strong></h4>
		<hr class="pinkBorder noMargin">
	</div>

	<div class="col-sm-11">
		<div class="table-responsive" style="overflow-x: scroll;">
			<table class="table-condensed">
				<tr>
					<td ng-repeat="trend in currentTrends | filter: {category:'Visual Merchandising'} | filter:search | filter:season | filter:year">
						<div class="panel panel-default">
							<div class="panel-body text-center">
								<a ng-href="../trend_reports/{{ trend.name }}.pdf" target="_blank">
									<img ng-src="../trend_reports/thumbs/{{ trend.name }}.jpg"  width="200" height="200" />

									<h5>
										{{ trend.pretty }}
									</h5>
								</a>
							</div>
						</div>
					</td>
				</tr>
			</table>
		</div>
	</div>
</div>
<br>
<p class="text-info lead">
	# of reports (all reports in category): {{ currentTrends.length }}
</p>
