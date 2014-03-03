angular.module('starter.services', [])

/**
 * EVENTS
 */
.factory('EventService', function() {
  // Might use a resource here that returns a JSON array

  // Some fake testing data
  var events = [
              { id: 0, event_name: 'Dublin Bay Prawn Festival', event_info: 'The Dublin Bay Prawn is, without doubt, one of the tastiest foods out there and Howth is its home. Whatever way you like your Dublin Bay Prawns - barbecued, whole, shelled, fried, skewered, marinated, sauced - Howths many award winning restaurants will serve your favourite prawn dishes in bite sized portions at the Dublin Bay Prawn Festival  "Food Village", in addition to a variety of other miniature dishes.', event_price: 'Free', event_day: '25', event_month: 'April', event_year: '2014', event_online: 'www.dublinbayprawnfestival.com', event_contact: '0035318396955', bname: 'Dublin Bay Prawn', event_venue: 'Sandyford Road'},
              
              { id: 1, event_name: 'Tomorrowland 2014', event_info: 'Tomorrowland is a large electronic music festival held in Belgium. It used to be organized as a joint venture by the original founders, the brothers Beers together with ID&T, subsidiary of SFX Entertainment.', event_price: '179.99', event_day: '25',event_month: 'July', event_year: '2014', event_online: 'www.tomorrowland.com', event_contact: '00353876293056', bname: 'Tomorrowland', event_venue: 'Boom, Belgium'},
              
              { id: 2, event_name: 'Kings Of Leon', event_info: 'Tomorrowland is a large electronic music festival held in Belgium. It used to be organized as a joint venture by the original founders, the brothers Beers together with ID&T, subsidiary of SFX Entertainment.', event_price: '61.99', event_day: '25',event_month: 'July', event_year: '2014', event_online: 'www.tomorrowland.com', event_contact: '00353876293056', bname: 'Sony Music', event_venue: '02 Arena, Dublin'},
              
      ];
         
    
  return {
    all: function() {
      return events;
    },
    get: function(eventId) {
      // Simple index lookup
      return events[eventId];
    }
  }
})


/**
 * DEALS
 */
.factory('DealService', function() {
         // Might use a resource here that returns a JSON array
         
         // Some fake testing data
         var deals = [
                       { id: 0, item_name: 'Coffee & Muffin', item_info: 'Blah Blah Blah', item_price: '1.99', item_day: '3', item_month: 'March', item_year: '2014', item_contact: 'www.dublinbayprawnfestival.com', item_booking: '0035318396955', bname: 'Starbucks'},
                      
                      { id: 1, item_name: 'Coffee & Muffin', item_info: 'Blah Blah Blah', item_price: '1.99', item_day: '3', item_month: 'March', item_year: '2014', item_contact: 'www.dublinbayprawnfestival.com', item_booking: '0035318396955', bname: 'Starbucks'},
                      
                      { id: 2, item_name: 'Coffee & Muffin', item_info: 'Blah Blah Blah', item_price: '1.99', item_day: '3', item_month: 'March', item_year: '2014', item_contact: 'www.dublinbayprawnfestival.com', item_booking: '0035318396955', bname: 'Starbucks'},
                      
                       
                       ];
         
         
         return {
         all: function() {
         return deals;
         },
         get: function(dealId) {
         // Simple index lookup
         return deals[dealId];
         }
         }
         })


/**
 * ATTRACTIONS
 */
.factory('AttractionService', function() {
         // Might use a resource here that returns a JSON array
         
         // Some fake testing data
         var attractions = [
                      { id: 0, attraction_name: 'Book of Kells', attraction_info: 'Trinity College, formally known as the College of the Holy and Undivided Trinity of Queen Elizabeth near Dublin, is the sole constituent college of the University of Dublin in Ireland. The college was founded in 1592 as the "mother" of a new university, modelled after the collegiate universities of Oxford and of Cambridge, but, unlike these, only one college was ever established; as such, the designations "Trinity College" and "University of Dublin" are usually synonymous for practical purposes. It is one of the seven ancient universities of Britain and Ireland, as well as Irelands oldest university.', attraction_address1: 'Trinity College Dublin', attraction_address2: 'College Green', attraction_address3: 'Dublin 2', attraction_address4: 'Ireland', attraction_price: 'Free', attraction_day: '10', attraction_month: 'June', attraction_year: '2014', attraction_contact: '0035318396955', attraction_booking: 'www.tcd.ie', bname: 'Trinity College Dublin'},
                      
                      ];
         
//         geocoder = new google.maps.Geocoder();
//         var address = (attraction_address1, attraction_address2, attraction_address3, attraction_address4);
//         function getCoordinates = (address, callback) {
//         var coordinates;
//         geocoder.geocode({address: address}, function (results, status)
//                          coords_obj = results[0].geomtry.location;
//                          coordinates = [coords_obj.nb,coords_obj.ob];
//                          callback(coordinates);
//                          )
//         }
         
         
         return {
         all: function() {
         return attractions;
         },
         get: function(attractionId) {
         // Simple index lookup
         return attractions[attractionId];
         }
         }
         });


