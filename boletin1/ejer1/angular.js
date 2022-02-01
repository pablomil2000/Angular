var application = angular.module("miAplicacion", []);

application.controller("miControlador", function($scope) {
    $scope.verduras = [
        { nombre: "Apio", precio: 20 },
        { nombre: "Tomate", precio: 10 }
    ];
})