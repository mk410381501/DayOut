// Ionic Starter App

// angular.module is a global place for creating, registering and retrieving Angular modules
// 'starter' is the name of this angular module example (also set in a <body> attribute in index.html)
// the 2nd parameter is an array of 'requires'
// 'starter.services' is found in services.js
// 'starter.controllers' is found in controllers.js
angular.module('starter', ['ionic', 'starter.services', 'starter.controllers'])


.config(function($stateProvider, $urlRouterProvider) {

  // Ionic uses AngularUI Router which uses the concept of states
  // Learn more here: https://github.com/angular-ui/ui-router
  // Set up the various states which the app can be in.
  // Each state's controller can be found in controllers.js
  $stateProvider

    // setup an abstract state for the tabs directive
    .state('tab', {
      url: "/tab",
      abstract: true,
      templateUrl: "templates/tabs.html"
    })
        
        // HOME PAGE
        .state('tab.home', {
               url: '/home',
               views: {
               'home-tab': {
               templateUrl: 'templates/home.html'
               }
               }
               })
        
        .state('tab.home-budget', {
               url: '/home/budget',
               views: {
               'home-tab': {
               templateUrl: 'templates/home-budget.html',
               controller: 'BudgetIndexCtrl'               
               }
               }
               })

    // EVENT PAGE
    .state('tab.event-index', {
      url: '/events',
      views: {
        'events-tab': {
          templateUrl: 'templates/event-index.html',
          controller: 'EventIndexCtrl'
        }
      }
    })

    .state('tab.event-detail', {
      url: '/event/:id',
      views: {
        'events-tab': {
          templateUrl: 'templates/event-detail.html',
          controller: 'EventDetailCtrl'
        }
      }
    })

        // DEALS PAGE
        .state('tab.deal-index', {
               url: '/deals',
               views: {
               'deals-tab': {
               templateUrl: 'templates/deal-index.html',
               controller: 'DealIndexCtrl'
               }
               }
               })
        
        .state('tab.deal-detail', {
               url: '/deal/:id',
               views: {
               'deals-tab': {
               templateUrl: 'templates/deal-detail.html',
               controller: 'DealDetailCtrl'
               }
               }
               })
        
        // ATTRACTIONS PAGE
        .state('tab.attraction-index', {
               url: '/attractions',
               views: {
               'attractions-tab': {
               templateUrl: 'templates/attraction-index.html',
               controller: 'AttractionIndexCtrl'
               }
               }
               })
        
        .state('tab.attraction-detail', {
               url: '/attraction/:id',
               views: {
               'attractions-tab': {
               templateUrl: 'templates/attraction-detail.html',
               controller: 'AttractionDetailCtrl'
               }
               }
               });

  // if none of the above states are matched, use this as the fallback
  $urlRouterProvider.otherwise('/tab/home');

});

