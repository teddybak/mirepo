/**
 * Created by Clean on 08/10/2015.
 */
var myapp = angular.module('app', ['ui.bootstrap'], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

myapp.controller('CarouselDemoCtrl', function($scope) {

    $scope.myInterval = 6000;
    $scope.slides = [
        {
            image: '/images/parking-1.jpg'
        },
        {
            image: '/images/parking-2.jpg'
        },
        {
            image: '/images/parking-3.jpg'
        }
    ];




});
