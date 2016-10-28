<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Micro Pics</title>
    <meta name="keywords" content="">
    <meta name="description" content="Micro Pictures of bugs, plants, and more!">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!--    Goog Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Eczar" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/micropics/src/css/pre-style.css">
    <!--    AOS -->
    <link href="https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="">
</head>
<body ng-app="microPics">
<nav class="navbar navbar-inverse" id="nav">
    <div class="contatiner-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" ui-sref="main-page"><img  class="logo" src="">MC</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a ui-sref="pictures">Pictures</a></li>
                <li class="active"><a ui-sref="videos">Videos</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">Info<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a ui-sref="about">About</a></li>
                        <li><a ui-sref="FAQ">FAQ</a></li>
                        <li><a ui-sref="contact">Contact</a></li>
                        <li class="last-item"><a ui-sref="compliance">Compliance</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<ui-view></ui-view>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
<!--    routing-->
<!--<script src="http://code.angularjs.org/1.3.15/angular-route.js"></script>-->
<!--UI Routing Angular-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.3.1/angular-ui-router.js"></script>
<!--    AOS script-->
<script src="https://cdn.rawgit.com/michalsnik/aos/2.0.4/dist/aos.js"></script>

<script>
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
</script>
<script>AOS.init();</script>
</body>
</html>