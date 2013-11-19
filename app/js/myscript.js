/**
 * User: mirek
 * Date: 07.11.13
 * Time: 16:27
 */

function CalcCtrl($scope){
    $scope.x1 = 0;
    $scope.x2 = 0;
    $scope.x = 0;
    $scope.y = 0;
    $scope.dodaj = function(){
        $scope.wynik = Number($scope.x1) + Number($scope.x2);
    }
    $scope.odejmij = function(){
        $scope.wynik = Number($scope.x1 - $scope.x2);
    }
    $scope.fax = function(){
        $scope.y = $scope.x + " [ed]";
    }
}


function FormCtrl($scope) {
    $scope.value1 = true;
    $scope.value2 = 'YES';
}