angular.module('starter.controllers', [])

// EVENTS
// A simple controller that fetches a list of data from a service
.controller('EventIndexCtrl', function($scope, EventService) {
  // "Pets" is a service returning mock data (services.js)
  $scope.events = EventService.all();
})


// A simple controller that shows a tapped item's data
.controller('EventDetailCtrl', function($scope, $stateParams, EventService) {
  // "Pets" is a service returning mock data (services.js)
  $scope.event = EventService.get($stateParams.eventId);
})


// DEALS
// A simple controller that fetches a list of data from a service
.controller('DealIndexCtrl', function($scope, DealService) {
            // "Pets" is a service returning mock data (services.js)
            $scope.deals = DealService.all();
            })


// A simple controller that shows a tapped item's data
.controller('DealDetailCtrl', function($scope, $stateParams, DealService) {
            // "Pets" is a service returning mock data (services.js)
            $scope.deal = DealService.get($stateParams.dealId);
            })


// ATTRACTIONS
// A simple controller that fetches a list of data from a service
.controller('AttractionIndexCtrl', function($scope, AttractionService) {
            // "Pets" is a service returning mock data (services.js)
            $scope.attractions = AttractionService.all();
            })


// A simple controller that shows a tapped item's data
.controller('AttractionDetailCtrl', function($scope, $stateParams, AttractionService) {
            // "Pets" is a service returning mock data (services.js)
            $scope.attraction = AttractionService.get($stateParams.attractionId);
            });

