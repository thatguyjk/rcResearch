<?php
  require_once('../manage/cms.php');
?>
  <cms:template title='Top Trends' clonable='1'>
    <cms:editable name='trend_title' type='text' order='1' />
    <cms:editable name='trend_image' crop='1' type='image' order='2' />
    <cms:editable name="trend_url" type='text' order='3' />
  </cms:template>

  <?
  include('../trend-header.php');

  include_once('scripts/password_protect.php');
  ?>

    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

    <div class="container-fluid">
      <div class="row hidden-xs">
        <div id="topReports" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <cms:pages paginate='1'>
              <li data-target="#topReports" data-slide-to="<cms:sub k_count '1' />" <cms:if k_count="1">class="active"</cms:if>></li>
            </cms:pages>
          </ol>

          <div class="carousel-inner" role="listbox">
            <cms:pages paginate="1">
              <div class="item <cms:if k_count='1'><cms:show 'active' /></cms:if>">
                <a href="<cms:show trend_url />" title="<cms:show trend_title />" target="_blank">
                  <img style="width: 100%;" src="<cms:show trend_image />">
                </a>
              </div>
            </cms:pages>
          </div>

          <a class="left carousel-control" href="#topReports" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" style="color: #FF00F1;" aria-hidden="true"></span>
          </a>
          <a class="right carousel-control" href="#topReports" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" style="color: #FF00F1;" aria-hidden="true"></span>
          </a>
        </div>
      </div>
    </div>

    <br>

    <div class="container" ng-controller="MainCtrl as ctrl">
      <div class="row">

        <div class="col-sm-2 col-md-2">
          <form name="trendCategories" class="form-vertical">
            <span>Year</span>
            <select class="form-control" ng-model="year">
              <option ng-value="" value="" selected="selected"></option>
              <option ng-value="2014" value="">2014</option>
              <option ng-value="2015" value="">2015</option>
              <option ng-value="2016" value="">2016</option>
              <option ng-value="2017" value="">2017</option>
            </select>

            <br><br>
            <div class="form-group form-group-lg">
              <span>Season</span>
              <hr style="margin: 0;"><br>
              <label style="font-weight: normal">
                <input type="radio" ng-model="season" value="" ng-selected="selected"> &nbsp;&nbsp;All
              </label>
              <br>
              <label style="font-weight: normal">
                <input type="radio" ng-model="season" value="F/W"> &nbsp;&nbsp;F/W
              </label>
              <br>
              <label style="font-weight: normal">
                <input type="radio" ng-model="season" value="S/S"> &nbsp;&nbsp;S/S
              </label>
            </div>

            <div class="form-group">
              <span>Category</span>
              <hr style="margin: 0;">
              <br>

              <ul class="list-unstyled">
                <li><input type="radio" ng-model="trendCategory" value="" ng-change="filterTrends('')">&nbsp;&nbsp; All</li>
                <li><input type="radio" ng-model="trendCategory" value="Culture" ng-change="filterTrends('Culture')">&nbsp;&nbsp; Culture</li>
                <li><input type="radio" ng-model="trendCategory" value="Industry" ng-change="filterTrends('Industry')">&nbsp;&nbsp; Industry Research</li>
                <li><input type="radio" ng-model="trendCategory" value="Jewelry" ng-change="filterTrends('Jewelry')">&nbsp;&nbsp; Jewelry</li>
                <li><input type="radio" ng-model="trendCategory" value="Macro" ng-change="filterTrends('Macro')">&nbsp;&nbsp; Macro</li>
                <li><input type="radio" ng-model="trendCategory" value="Runway" ng-change="filterTrends('Runway')">&nbsp;&nbsp; Runway</li>
                <li><input type="radio" ng-model="trendCategory" value="Visual Merchandising" ng-change="filterTrends('Visual Merchandising')">&nbsp;&nbsp; Visual Merchandising</li>
              </ul>
            </div>

          </form>
        </div>

        <div class="col-sm-10">
          <div class="row">
            <br>
            <div class="col-sm-10">
              <input type="text" class="form-control" placeholder="Search for a trend" ng-model="search">
            </div>
          </div>

          <br>

          <div class="row">
            <div class="col-sm-10">
              <div class="row well well-sm">
                <h3 class="blue noMargin text-center">RICHLINE REPORTS</h3>
                <br>
                <cms:pages masterpage="rl_reports.php">
                    <div class="col-xs-6 col-sm-3 img-responsive">
                      <a href="<cms:show report_url />" title="<cms:show report_title />" target="_blank">
                        <img class="thumbnail img-responsive" src="<cms:show report_image />">
                      </a>
                    </div>
                </cms:pages>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-11">
              <div ng-view=""></div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <footer>
      <div class="jumbotron greenBG noPadding" style="height: 7px;"></div>

      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 text-center">
            <ul class="list-inline">
              <li>
                <button id="servicesButton" type="button" class="btn btn-link popover-dismiss" data-toggle="popover" data-placement="top">
                    SERVICES
                </button>
              </li>
              <li><button class="btn btn-link"><a href="../education.html">EDUCATION</a></button></li>
              <li><button class="btn btn-link"><a href="../our_work.html">OUR WORK</a></button></li>
              <li><button class="btn btn-link"><a href="../resources.html">CLIENT RESOURCES</a></button></li>
            <ul>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-sm-12 col-md-12 text-center grey">
            1385 Broadway, New York, NY 10018 | <a href="mailto:Info@RichlineGroup.com">Info@RichlineGroup.com</a> <br>
              Copyright © <script>var d = new Date(); document.write(d.getFullYear());</script> Richline Creative. All rights reserved.
          </div>
        </div>
      </div>

    <!-- build:js(.) scripts/oldieshim.js -->
    <!--[if lt IE 9]>
    <script src="bower_components/es5-shim/es5-shim.js"></script>
    <script src="bower_components/json3/lib/json3.js"></script>
    <![endif]-->
    <!-- endbuild -->

    <!-- build:js(.) scripts/vendor.js -->
    <!-- bower:js -->
    <!-- endbower -->
    <!-- endbuild -->

        <!-- build:js({.tmp,app}) scripts/scripts.js -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../bower_components/angular/angular.min.js"></script>
        <script src="../bower_components/angular-animate/angular-animate.min.js"></script>
        <script src="../bower_components/angular-route/angular-route.min.js"></script>
        <script src="../bower_components/ng-scrollbar/dist/ng-scrollbar.min.js"></script>

        <script src="scripts/app.js"></script>
        <script src="scripts/controllers/main.js"></script>
        <!-- endbuild -->


        <script>
          checkModalCookie();
        </script>

    <footer>
</body>
</html>

<?php COUCH::invoke(); ?>
