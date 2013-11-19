/**
 * User: mirek
 * Date: 08.11.13
 * Time: 01:02
 */
function Ctrl($scope) {
    $scope.value1 = true;
    $scope.value2 = 'YES'
    $scope.value3 = '0'
    $scope.tictactoe = "default";
    $scope.a1 = "abc?";
    $scope.zmien = function(){
        $scope.a2 = $scope.a1;
    }

}