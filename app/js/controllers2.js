'use strict';

/* Controllers */
var myApp = angular.module('myApp',[]);

myApp.controller('PhoneListCtrl', function PhoneListCtrl($scope) {
    $scope.phones = [
        {'name': 'Nexus S',
            'snippet': 'Fast just got faster with Nexus S.'},
        {'name': 'Motorola XOOM™ with Wi-Fi',
            'snippet': 'The Next, Next Generation tablet.'},
        {'name': 'MOTOROLA XOOM™',
            'snippet': 'The Next, Next Generation tablet.'}
    ];
    $scope.dziala = "no działa";
});

myApp.controller('Przedszkole', function Przedszkole($scope) {
    $scope.dzieci = [
        {'imie':'Zenek','lat':4},
        {'imie':'Zosia','lat':5},
        {'imie':'Zenek','lat':2},
        {'imie':'Zosia','lat':3},
        {'imie':'Zenek','lat':5},
        {'imie':'karol','lat':6},
        {'imie':'Zenek','lat':7},
        {'imie':'Gabrysia','lat':8},
        {'imie':'Zenek','lat':9},
        {'imie':'Zosia','lat':4},
        {'imie':'Śmioerdziuch','lat':8},
        {'imie':'Zosia','lat':3},
        {'imie':'Lodzia','lat':5}
    ];
    $scope.rodzice = [
        {'dziecko':'Zenek','imie':'p.Marek'},
        {'dziecko':'Zosia','imie':'p.Marek'},
        {'dziecko':'karol','imie':'p.Marek'},
        {'dziecko':'Gabrysia','imie':'p.Marek'},
        {'dziecko':'Śmioerdziuch','imie':'p.Marek'}];
    $scope.PodajImieRodzica = function(rr,idziecko){

        console.log($scope);

        //var rr = $scope.rodzice;
        for(var rodzic in rr){
            //console.log(idziecko,rr.dziecko);
            if(rodzic.dziecko==idziecko){
                //mam
                return(rodzic.imie);
            }
        }
        return("brak");
    }
});

myApp.controller('PersonsList', function PersonsList($scope){
    $scope.arr = [
        {'person':'Wladek'},
        {'person':'Bonifacy'}
    ];
    $scope.dodaj = function(){
        $scope.arr.push()

    };
    $scope.usun = function(){

    }
});

myApp.controller('Autoform', function Autoform($scope){
    //p
    $scope.name = 'Marian';
    $scope.surname = 'Paździoch';
    $scope.age = '45';
    $scope.persons = [
        {'name':'John','surname':'Doe','age':25},
        {'name':'Marta','surname':'Doe','age':23}
    ];
    //m
    $scope.dodaj = function(name,surname,age){
        var person = {
            'name':name,
            'surname':surname,
            'age':age
        };
        console.log(name,surname,age);
        //$scope.arr.push(person);
    };
    $scope.usun = function(idx){
        var idx = $scope.arr.indexOf(person);
        arr.splice(idx,1);
    }
});

