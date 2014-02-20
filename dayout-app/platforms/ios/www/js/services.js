angular.module('starter.services', [])

/**
 * A simple example service that returns some data.
 */
.factory('PetService', function() {
  // Might use a resource here that returns a JSON array

  // Some fake testing data
  var pets = [
    { id: 0, title: 'Tomorrowland 2014', description: 'Furry little creatures. Obsessed with plotting assassination, but never following through on it.', bname: 'Tomorrowland' },
    { id: 1, title: 'Trinity Ball 2014', description: 'Lovable. Loyal almost to a fault. Smarter than they let on.', bname: 'MCD Promotions' },
      ];

  return {
    all: function() {
      return pets;
    },
    get: function(petId) {
      // Simple index lookup
      return pets[petId];
    }
  }
});
