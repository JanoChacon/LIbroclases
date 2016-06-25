var users = [
	{name: 'Juan', lastname: 'Nieves', picture: 'https://pbs.twimg.com/profile_images/613894506480439296/MGWBzW3B.jpg'},
	{name: 'Daenerys', lastname: 'Targaryen', picture: 'https://pbs.twimg.com/profile_images/699219278927675393/de5Cjrju.png'},
	{name: 'Eddard', lastname: 'Stark', picture: 'https://pbs.twimg.com/profile_images/623606708531818496/8ap1ZAb6.jpg'}
];

var app = angular.module('holamundo',[]);

app.controller('Controlador',function($scope){
	this.usuarios = users;
	$scope.mostrar = false;
    $scope.ShowHide = function () {
		$scope.mostrar= $scope.mostrar ? false : true;
    }
});
