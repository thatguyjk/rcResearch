'use strict';

/**
 * @ngdoc overview
 * @name richlineCreative2014App
 * @description
 * # richlineCreative2014App
 *
 * Main module of the application.
 */
angular
  .module('richlineCreative2014App', [
    'ngAnimate',
    'ngRoute',
    'ng-scrollbar'
  ])
  .config(function ($routeProvider) {
    $routeProvider
      .when('/', {
        templateUrl: 'views/main.php'
      })
      .otherwise({
        redirectTo: '/'
      });
  });



function checkModalCookie(){
    if(Modernizr.localstorage) {
        var showModal = window.localStorage.getItem("showmodal");

        if(showModal !== "true") {
            $('#infoModal').modal();
        }
    } else {
        var showModalCookie = document.cookie.replace(/(?:(?:^|.*;\s*)showmodal\s*\=\s*([^;]*).*$)|^.*$/, "$1");

        if(showModalCookie !== "true") {
            $('#infoModal').modal();
        }
    }
}

function setModalCookie() {
  var checkbox = document.getElementById("hideModal");

  if(checkbox.checked) {
    if(Modernizr.localstorage) {
        window.localStorage.setItem("showmodal", "true");
    } else {
        document.cookie = "showmodal=true";
    }
  }

  $("#infoModal").modal('hide');
}
