var application = angular.module("miAplicacion", []);

application.controller("miControlador", function($scope, $http) {
    $http.get("json/europe.json").then(function(response) { $scope.coches = response.data.pais })
})