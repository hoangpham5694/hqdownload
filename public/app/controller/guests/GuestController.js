app.controller('GuestController', function($scope, $http, API,$timeout){	

	$scope.getAllCategories = function (){
		$http.get(API + 'api/category/list-cates').then(function successCallback (response){		
		$scope.categories = response.data;
		
	//	console.log(response.data);
		}  , function errorCallback(response) {
			console.log(response);
    // called asynchronously if an error occurs
    // or server returns response with an error status.
  		}) ;
		
	 };
	$scope.getMostDownloadSoftwares = function (max){
		$http.get(API + 'api/software/most-download/'+max).then(function successCallback (response){		
		$scope.mostDownloadSoftwares = response.data;
		
	//	console.log(response.data);
		}  , function errorCallback(response) {
			console.log(response);
    // called asynchronously if an error occurs
    // or server returns response with an error status.
  		}) ;
		
	 };
	$scope.getHighestViewSoftware = function (cateId){
		var url = API + 'api/software/highest-view-in-cate/'+cateId;
			$http.get(url).then(function successCallback (response){		
			$scope.highestViewSoftware = response.data;

		//	console.log();
			var res = $scope.highestViewSoftware.tags.split(",");
			console.log(res);
		}  , function errorCallback(response) {
			console.log(response);
    // called asynchronously if an error occurs
    // or server returns response with an error status.
  		}) ;
		
	 };
	 $scope.getListNewestSoftwares = function (offset,max){
		var url = API + 'api/software/list-newest/'+offset+'/'+max;
			$http.get(url).then(function successCallback (response){		
			$scope.highestViewSoftwares = response.data;

			console.log($scope.highestViewSoftwares);
	
		}  , function errorCallback(response) {
			console.log(response);
    // called asynchronously if an error occurs
    // or server returns response with an error status.
  		}) ;
		
	 };
	$scope.getListLastUpdateSoftwares = function (offset,max){
		var url = API + 'api/software/list-last-update/'+offset+'/'+max;
			$http.get(url).then(function successCallback (response){		
			$scope.listLastUpdateSoftwares = response.data;

			console.log();
	
		}  , function errorCallback(response) {
			console.log(response);
    // called asynchronously if an error occurs
    // or server returns response with an error status.
  		}) ;
		
	 };
	 $scope.getListRandomSoftwares = function (max,cateid,sysid){

		var url = API + 'api/software/list-random/'+max+'?cateid='+cateid+'&sysid='+sysid;
		console.log(url);
			$http.get(url).then(function successCallback (response){		
			$scope.listRandomSoftwares = response.data;

			console.log(response.data);
	
		}  , function errorCallback(response) {
			console.log(response);
    // called asynchronously if an error occurs
    // or server returns response with an error status.
  		}) ;
		
	 };
	$scope.getListSoftwaresWithCate = function (max,page,cateid,order){
		$scope.cateid = cateid;
		$scope.order= order;
		var url = API + 'api/software/list-with-cate/'+max+'/'+page+'?cateid='+$scope.cateid+'&orderby='+$scope.order;

		console.log(url);
			$http.get(url).then(function successCallback (response){		
			$scope.listSoftwaresWithCate = response.data;

			console.log(response.data);
	
		}  , function errorCallback(response) {
			console.log(response);
    // called asynchronously if an error occurs
    // or server returns response with an error status.
  		}) ;
		
	 };


});
