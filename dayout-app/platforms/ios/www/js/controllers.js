angular.module('starter.controllers', [])

// BUDGET PROFILE
// A simple controller that fetches a list of data from a service
.controller('HomeScreenController', function($scope, $timeout, $ionicLoading, $location) {
            
            // "Pets" is a service returning mock data (services.js)
            $scope.filter = {events: false, deals: false, attractions: false, budget: 0};
            $scope.navigate = function(){ $location.path( "/tab/home/budget/" + $scope.filter.deals + "/" + $scope.filter.events + "/" + $scope.filter.attractions + "/" + $scope.filter.budget );};

})

// BUDGET PROFILE
// A simple controller that fetches a list of data from a service
.controller('BudgetIndexCtrl', function($scope, $location, $stateParams, $ionicLoading, BudgetService) {
            console.log($stateParams);
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
            $scope.offers = BudgetService.get($stateParams);
            console.log($scope.offers);
            loading.hide();
            
            // this function is done to look for the TYPE of offer and
            $scope.navigate = function(arg) {
            
            if (arg.item_type == "DEAL") {
                $location.path("/tab/home/budget/deal/" + arg.id);
                //$location.path("/home/budget/deal/" + arg.id);
            }
            
            if (arg.item_type == "EVENT") {
                $location.path("/tab/home/budget/event/" + arg.id);
            }
            
            if (arg.item_type == "ATTRACTION") {
                $location.path("/tab/home/budget/attraction/" + arg.id);
            }
            
//            console.log(arg);
            };
            
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
            
            $scope.onRefresh = function() {
            console.log("refreshing...");
            // Load content
            $scope.events = EventService.all();
            
            // Trigger refresh complete on the pull to refresh action
            $scope.$broadcast('scroll.refreshComplete');
            $scope.$apply();
            };
            
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
            
            $scope.onRefresh = function() {
            console.log("refreshing...");
            // Load content
            $scope.deals = DealService.all();
            
            // Trigger refresh complete on the pull to refresh action
            $scope.$broadcast('scroll.refreshComplete');
            $scope.$apply();
            };
            
            
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
            
            $scope.onRefresh = function() {
            console.log("refreshing...");
                // Load content
                $scope.attractions = AttractionService.all();
            
                // Trigger refresh complete on the pull to refresh action
                $scope.$broadcast('scroll.refreshComplete');
                $scope.$apply();
            };
            
            
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



