angular.module('starter.services', [])

/**
 * A simple example service that returns some data.
 */
.factory('PetService', function() {
  // Might use a resource here that returns a JSON array

  // Some fake testing data
  var pets = [
    { id: 0, title: 'Tomorrowland 2014', description: 'nvjvnj', bname: 'Tomorrowland' },
    { id: 1, title: 'Trinity Ball 2014', description: 'jnfl', bname: 'MCD Promotions' },
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
