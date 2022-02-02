var application = angular.module("miAplicacion", []);

application.controller("miControlador", function($scope) {
    $scope.contactos = [
        { nombre: "a", telefono: 1 },
        { nombre: "b", telefono: 2 },
        { nombre: "c", telefono: 3 },
        { nombre: "d", telefono: 1 }
    ];
})