angular.module('starter.controllers', [])

// LOADER - To trigger Loading in your code, use the $ionicLoading service in your angular controllers or directives:
.controller('LoadingCtrl', ['$scope', '$ionicLoading', function($scope, $ionicLoading) {
                            
                        // Trigger the loading indicator
                        $scope.show = function() {
                            
                            // Show the loading overlay and text
                            $scope.loading = $ionicLoading.show({
                                                                
                            // The text to display in the loading indicator
                            content: 'Loading',
                                                                
                            // The animation to use
                            animation: 'fade-in',
                                                                
                            // Will a dark overlay or backdrop cover the entire view
                            showBackdrop: true,
                                                                
                            // The maximum width of the loading indicator
                            // Text will be wrapped if longer than maxWidth
                            maxWidth: 200,
                                                                
                            // The delay in showing the indicator
                            showDelay: 500
                            });
                        };
                            
                        // Hide the loading indicator
                        $scope.hide = function(){
                            $scope.loading.hide();
                        };
}])



// EVENTS SUMMARY
// A simple controller that fetches a list of data from a service
.controller('EventIndexCtrl', function($scope, EventService) {
  // "Pets" is a service returning mock data (services.js)
  $scope.events = EventService.all();
})

// EVENT DETAILS
// A simple controller that shows a tapped item's data
.controller('EventDetailCtrl', function($scope, $stateParams, EventDetailService) {
  // "Pets" is a service returning mock data (services.js)
  $scope.event = EventDetailService.get($stateParams.id);
})



// DEALS SUMMARY
// A simple controller that fetches a list of data from a service
.controller('DealIndexCtrl', function($scope, DealService) {
            // "Pets" is a service returning mock data (services.js)
            $scope.deals = DealService.all();

            })


// DEAL DETAILS
// A simple controller that shows a tapped item's data
.controller('DealDetailCtrl', function($scope, $stateParams, DealDetailService) {
            // "Pets" is a service returning mock data (services.js)
            $scope.deal = DealDetailService.get($stateParams.id);
            
            })



// ATTRACTIONS SUMMARY
// A simple controller that fetches a list of data from a service
.controller('AttractionIndexCtrl', function($scope, AttractionService) {
            // "Pets" is a service returning mock data (services.js)
            $scope.attractions = AttractionService.all();
            })

// ATTRACTION DETAILS
// A simple controller that shows a tapped item's data
.controller('AttractionDetailCtrl', function($scope, $stateParams, AttractionDetailService) {
            // "Pets" is a service returning mock data (services.js)
            $scope.attraction = AttractionDetailService.get($stateParams.id);
            });



