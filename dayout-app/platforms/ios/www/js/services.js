var backendURL = "http://localhost/dayout-app/php/";

angular.module('starter.services', [])

/**
 * BUDGET PROFILE
 */
.factory('BudgetService', function() {
         // Might use a resource here that returns a JSON array
         
         // Some fake testing data
         var offers;
         
         jQuery.ajax( backendURL + "budgetprocess.php", {
                     async: false,
                     cache: false,
                     error: function() { console.log("oh no"); },
                     success: function(oData) {
                     offers = oData;
                     }
                     });
         
         
         return {
         all: function() {
         return offers;
         }
         }
         })

/**
 * EVENTS SUMMARY
 */
.factory('EventService', function() {
         // Might use a resource here that returns a JSON array
         
         // Some fake testing data
         var events;
         
         jQuery.ajax( backendURL + "events_summary.php", {
                     async: false,
                     cache: false,
                     error: function() { console.log("oh no"); },
                     success: function(oData) {
                     events = oData;
                     }
                     });
         
         
         return {
         all: function() {
         return events;
         }
         }
         })


/**
 * EVENT DETAILS
 */
.factory('EventDetailService', function() {
         // Might use a resource here that returns a JSON array
         
         var event;
         
         return {
         get: function(nId) {
         jQuery.ajax( backendURL + "events_details.php?event_id="+nId, {
                     async: false,
                     cache: false,
                     error: function() { console.log("oh no"); },
                     success: function(oData) {
                     event = oData;
                     }
                     });
         
         return event;
         }
         
         };
         
         })




/**
 * DEALS SUMMARY
 */
.factory('DealService', function() {
         // Might use a resource here that returns a JSON array
         
         var deals;
         
         jQuery.ajax( backendURL + "deals_summary.php", {
                     async: false,
                     cache: false,
                     error: function() { console.log("oh no"); },
                     success: function(oData) {
                     deals = oData;
                     }
                     });
         
         
         return {
         all: function() {
         return deals;
         }
         }
         })


/**
 * DEAL DETAILS
 */
.factory('DealDetailService', function() {
         // Might use a resource here that returns a JSON array
         
         var deal;

         return {
         get: function(nId) {
                  jQuery.ajax( backendURL + "deals_detail.php?deal_id="+nId, {
                              async: false,
                              cache: false,
                              error: function() { console.log("oh no"); },
                             success: function(oData) {
                              deal = oData;
                              }
                              });
         
         return deal;
         }
         
         };

         })


/**
 * ATTRACTIONS SUMMARY
 */
.factory('AttractionService', function() {
         // Might use a resource here that returns a JSON array
         
         var attractions;
         
         jQuery.ajax( backendURL + "attractions_summary.php", {
                     async: false,
                     cache: false,
                     error: function() { console.log("oh no"); },
                     success: function(oData) {
                     attractions = oData;
                     }
                     });
         
         
         return {
         all: function() {
         return attractions;
         }
         }
         })


/**
 * ATTRACTION DETAILS
 */
.factory('AttractionDetailService', function() {
         // Might use a resource here that returns a JSON array
         
         var attraction;
         
         return {
         get: function(nId) {
         jQuery.ajax( backendURL + "attractions_detail.php?attraction_id="+nId, {
                     async: false,
                     cache: false,
                     error: function() { console.log("oh no"); },
                     success: function(oData) {
                     attraction = oData;
                     }
                     });
         
         return attraction;
         }
         
         };
         
         });



