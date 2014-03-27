var backendURL = "http://localhost/dayout-app/php/";

angular.module('starter.services', [])

/**
 * BUDGET PROFILE
 */
.factory('BudgetService', function() {
         // Might use a resource here that returns a JSON array
         
         var offers;
         
         return {
         get: function(filter) {
         
         jQuery.ajax( backendURL + "budgetprocess.php", {
                     type: "POST",
                     data: {"deals" : filter.deals, "events" : filter.events, "attractions" : filter.attractions, "budget": filter.budget},
                     async: false,
                     cache: false,
                     error: function() { console.log("oh no"); },
                     success: function(oData) {
                     offers = oData;
                     }
                     });
         
         
         return offers;
         }
         }
         })

/**
 * EVENTS SUMMARY
 */
.factory('EventService', function() {
         // Might use a resource here that returns a JSON array
         
         var events;
         
         return {
         all: function() {
         
         jQuery.ajax( backendURL + "events_summary.php", {
                     async: false,
                     cache: false,
                     error: function() { console.log("oh no"); },
                     success: function(oData) {
                     events = oData;
                     }
                     });
         
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
         
         return {
         all: function() {
         
         jQuery.ajax( backendURL + "deals_summary.php", {
                     async: false,
                     cache: false,
                     error: function() { console.log("oh no"); },
                     success: function(oData) {
                     deals = oData;
                     }
                     });
         
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
         
         return {
         all: function() {
         
         jQuery.ajax( backendURL + "attractions_summary.php", {
                     async: false,
                     cache: false,
                     error: function() { console.log("oh no"); },
                     success: function(oData) {
                     attractions = oData;
                     }
                     });
         
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



