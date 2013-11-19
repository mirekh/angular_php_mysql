/**
 * User: mirek
 * Date: 14.11.13
 * Time: 15:48
 */
function PersonalnyCtrl($scope) {
    $scope.users = [
        {'imie':'Zenek', 'lat':4, phone:'213-231', status:'1'},
        {'imie':'Zosia', 'lat':5, phone:'2341234', status:'2'},
        {'imie':'Zenek', 'lat':2, phone:'453534', status:'4'},
        {'imie':'Zosia', 'lat':3, phone:'23131231', status:'3'},
        {'imie':'Zenek', 'lat':5, phone:'345345', status:'2'},
        {'imie':'karol', 'lat':6, phone:'567567', status:'2'},
        {'imie':'Zenek', 'lat':7, phone:'3765766', status:'1'},
        {'imie':'Gabrysia', 'lat':8, phone:'67567', status:'1'},
        {'imie':'Zenek', 'lat':9, phone:'6737465767', status:'3'},
        {'imie':'Zosia', 'lat':4, phone:'567456', status:''},
        {'imie':'Śmioerdziuch', 'lat':8, phone:'7647646', status:'1'},
        {'imie':'Zosia', 'lat':3, phone:'7647456', status:'3'},
        {'imie':'Lodzia', 'lat':5, phone:'2452345', status:'2'}
    ];
    $scope.rb = 'imie';
    $scope.byStatus = function (status) {

    };


    $scope.friends = [
        {name:'John', phone:'555-1276'},
        {name:'Mary', phone:'800-BIG-MARY'},
        {name:'Mike', phone:'555-4321'},
        {name:'Adam', phone:'555-5678'},
        {name:'Julie', phone:'555-8765'},
        {name:'Juliette', phone:'555-5678'}
    ];
}