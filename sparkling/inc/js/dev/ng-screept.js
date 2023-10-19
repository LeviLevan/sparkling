(function () {
    var mobilunity = angular.module('main', []);
    mobilunity.component('todoList', {
        templateUrl: 'https://www.hiredynamicsdevelopers.com/wp-content/themes/sparkling/inc/templates/template.html',
        controller: function (database, $scope) {
            var vm = this;

            angular.extend(vm, {
                list: [],
                getList: function () {
                    database.getList().then(function (list) {
                       vm.list = list || [];
                    });
                },
                title: database.getTitle(),
                description: database.getDescription(),
                setTitle: function () {
                    database.setTitle(this.title);
                },
                setDescription: function () {
                    database.setDescription(this.description);
                },
                addTask: function () {
                    if (vm.newTask) {
                        var id = 1;
                        angular.forEach(vm.list, function (it) {
                            if (parseInt(it.id) >= id)
                                id = it.id + 1;

                        });
                        vm.list.push({
                            id: id,
                            status: 0,
                            title: vm.newTask
                        });
                        vm.newTask = '';
                        database.saveList(vm.list);
                    }
                },
                updateTask: function (id) {
                    angular.forEach(vm.list, function (it) {
                        if (it.id == id)
                            it.status = !it.status;
                    });
                    database.saveList(vm.list);
                },
                deleteTask: function (task) {
                    vm.list.splice(vm.list.indexOf(task), 1);
                    database.saveList(vm.list);
                },
                changeTitle: function () {
                    if (vm.title && vm.title.length > 15) {
                        vm.shortTitle = vm.title.replace('...', '');
                        vm.shortTitle = vm.title.substr(0, 15) + '...';
                    } else {
                        vm.shortTitle = vm.title;
                    }
                    vm.showShort = true;
                }
            });
            vm.getList();
            vm.showShort = true;
            vm.shortTitle = vm.title;
            vm.changeTitle();
        }
    });

    mobilunity.service('database', function ($q) {
        return {
            getTitle: getTitle,
            setTitle: setTitle,
            getDescription: getDescription,
            setDescription: setDescription,
            getList: getList,
            saveList: saveList
        };

        function getTitle() {
            return localStorage.getItem('ng-title');
        }

        function setTitle(title) {
            localStorage.setItem('ng-title', title);
        }

        function getDescription() {
            return localStorage.getItem('ng-description');
        }

        function setDescription(description) {
            localStorage.setItem('ng-description', description);
        }
        function  getList () {
            var list = localStorage.getItem('ng-list');
            return $q(function (success, error) {
                try {
                    success(JSON.parse(list));
                } catch(e) {
                    error(e);
                }
            });
        }
        function saveList (list) {
            var string = JSON.stringify(list);
            localStorage.setItem('ng-list', string);
        }
    });

    if (window.innerWidth > 1024) {
        var container = document.getElementById('scroll-container');
        if (container) {
            Ps.initialize(container);
        }
    }
})();