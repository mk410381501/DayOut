angular.module('starter.controllers', [])

// EVENTS SUMMARY
// A simple controller that fetches a list of data from a service
.controller('BudgetIndexCtrl', function($scope, $timeout, $ionicLoading, BudgetService) {
            
            var loading = $ionicLoading.show({
                                             content: 'Loading...',
                                             showBackdrop: true,
                                             maxWidth: 200,
                                             showDelay: 500
                                             });
            
            //            $timeout(function() {
            //                     loading.hide();
            //                     }, 3000);
            
            // "Pets" is a service returning mock data (services.js)
            $scope.offers = BudgetService.all();
            
            loading.hide();
            })


// EVENTS SUMMARY
// A simple controller that fetches a list of data from a service
.controller('EventIndexCtrl', function($scope, $timeout, $ionicLoading, EventService) {
            
            var loading = $ionicLoading.show({
                content: 'Loading...',
                showBackdrop: true,
                maxWidth: 200,
                showDelay: 500
            });
            
//            $timeout(function() {
//                     loading.hide();
//                     }, 3000);
            
  // "Pets" is a service returning mock data (services.js)
  $scope.events = EventService.all();
            
            loading.hide();
})


// EVENT DETAILS
// A simple controller that shows a tapped item's data
.controller('EventDetailCtrl', function($scope, $stateParams, EventDetailService) {
  // "Pets" is a service returning mock data (services.js)
  $scope.event = EventDetailService.get($stateParams.id);
})



// DEALS SUMMARY
// A simple controller that fetches a list of data from a service
.controller('DealIndexCtrl', function($scope, $ionicLoading, DealService) {
            
            var loading = $ionicLoading.show({
                content: 'Loading...',
                showBackdrop: true,
                maxWidth: 200,
                showDelay: 500
            });
            
            
        // "Pets" is a service returning mock data (services.js)
        $scope.deals = DealService.all();
            
            loading.hide();

})


// DEAL DETAILS
// A simple controller that shows a tapped item's data
.controller('DealDetailCtrl', function($scope, $stateParams, DealDetailService) {
            // "Pets" is a service returning mock data (services.js)
            $scope.deal = DealDetailService.get($stateParams.id);
            
            })



// ATTRACTIONS SUMMARY
// A simple controller that fetches a list of data from a service
.controller('AttractionIndexCtrl', function($scope, $ionicLoading, AttractionService) {

            var loading = $ionicLoading.show({
                content: 'Loading...',
                showBackdrop: true,
                maxWidth: 200,
                showDelay: 500
            });
            
            
        // "Pets" is a service returning mock data (services.js)
        $scope.attractions = AttractionService.all();
            
            loading.hide();
})

// ATTRACTION DETAILS
// A simple controller that shows a tapped item's data
.controller('AttractionDetailCtrl', function($scope, $stateParams, AttractionDetailService) {
            // "Pets" is a service returning mock data (services.js)
            $scope.attraction = AttractionDetailService.get($stateParams.id);
            });



