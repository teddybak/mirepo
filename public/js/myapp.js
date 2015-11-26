/**
 * Created by Clean on 08/10/2015.
 */
var myapp = angular.module('todoApp', [], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});

myapp.controller('todoController', function($scope, $http) {

    $scope.sortType     = ''; // set the default sort type
    $scope.sortReverse  = false;  // set the default sort order
    $scope.searchName   = '';     // set the default search/filter term


    $scope.todos = [];
    $scope.loading = false;

    $scope.init = function() {
        $scope.loading = true;
        $http.get('/api/students').
            success(function(data, status, headers, config) {
                $scope.todos = data;
                $scope.loading = false;

            });
    }

    $scope.addTodo = function() {
        $scope.loading = true;

        $http.post('/api/students', {
            title: $scope.todo.title,
            done: $scope.todo.done
        }).success(function(data, status, headers, config) {
            $scope.todos.push(data);
            $scope.todo = '';
            $scope.loading = false;

        });
    };

    $scope.updateTodo = function(todo) {
        $scope.loading = true;

        $http.put('/api/students/' + todo.id, {
            title: todo.title,
            done: todo.done
        }).success(function(data, status, headers, config) {
            todo = data;
            $scope.loading = false;

        });;
    };

    $scope.deleteTodo = function(index) {
        $scope.loading = true;

        var todo = $scope.todos[index];

        $http.delete('/api/students' + todo.id)
            .success(function() {
                $scope.todos.splice(index, 1);
                $scope.loading = false;

            });;
    };


    $scope.init();

});
