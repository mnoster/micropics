describe("Load Module", function(){
var app = angular.module('MicroPics',['ui.router']);


it('should configure the providers',function(){
    app.config(function($stateProvider,$locationProvider){
    $stateProvider.caseInsensitiveMatch = true;
    $stateProvider
        .state("home",{
            //url parameters are prefixed with a colon ":"
            url:"/home",
            templateUrl:"templates/home.php",
            controller:"mainController",
            controllerAs: "mc"
        })
        .state("pictures",{
            url: "/pictures",
            templateUrl:"templates/pictures.php",
            controller:"pictureController",
            controllerAs: "pc",
            resolve: {
                getPictures: function($http){
                    return $http.get("getPictures.php")
                        .then(function(response){
                            return response.data;
                        });
                }
            }
        })
        .state("videos",{
            url:"/videos",
            templateUrl: "templates/videos.php",
            controller:"videoController",
            controllerAs: "vc"
        });
});
});
it('should load the pictureController',function(){
    app.controller('pictureController',function(getPictures,$state,$location){
        var self = this;
        self.imageSearch = function(){
            if(self.name){
                $location.url('/imageSearch/' + self.name);
            }else{
                $location.url('/imageSearch');
            }
        };
        self.reloadData = function(){
            $state.reload();
        };
    });
});
//UNIT TEST
});