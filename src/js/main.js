
var app = angular.module('microPics', ['ui.router']);


app.config(function ($stateProvider, $locationProvider, $urlRouterProvider) {
    $stateProvider.caseInsensitiveMatch = true;
    $urlRouterProvider.otherwise('/home');
    $stateProvider
        .state("/home", {
            //url parameters are prefixed with a colon ":"
            url: "/home",
            templateUrl: "/micropics/builds/templates/home.php",
            controller: "mainController",
            controllerAs: "mc"
        })
        .state("pictures", {
            url: "/pictures",
            templateUrl: "templates/pictures.php",
            controller: "pictureController",
            controllerAs: "pc",
            resolve: {
                getPictures: function ($http) {
                    return $http.get("getPictures.php")
                        .then(function (response) {
                            return response.data;
                        });
                }
            }
        })
        .state("videos", {
            url: "/videos",
            templateUrl: "templates/videos.php",
            controller: "videoController",
            controllerAs: "vc"
        })
        .state("categories", {
            url: "/categories",
            templateUrl: "templates/categories.php",
            controller: "catController",
            controllerAs: "cc"
        });
});

app.controller('pictureController', function (getPictures, $state, $location) {
    var self = this;
    self.imageSearch = function () {
        if (self.name) {
            $location.url('/imageSearch/' + self.name);
        } else {
            $location.url('/imageSearch');
        }
    };
    self.reloadData = function () {
        $state.reload();
    };
});