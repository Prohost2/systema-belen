  $( function() {
    $( "#accordion" ).accordion();
  } );

  $(document).ready(function() {

    base_url = "http://localhost/belen/index.php/";
  	
    $("#save_filed").click(function(event) {
      $.post(base_url+'insertFiled', {'filed_name': $('#filed_type').val(),'filed_type': $('#filed_type').val() }, function(data, textStatus, xhr) {
        alert($("#filed_type").val());
      });
    });

    $(".delete").click(function(event) {
  		var drop = confirm('Surely you want to delete?');
        if (drop == true) 
          {
            confirm('Surely you want to delete?');
          }
  	});

    $('#upc').keyup(function(event) {
    var id = $(this).attr('id');
    var options = {

    url: base_url+'Home/consultAjaxPoduct/',

    getValue: "upc",

    list: {
      match: {
        enabled: true
      }
  }
};

$("#upc").easyAutocomplete(options);
/**/
  });

    $('#upc_13').keyup(function(event) {
    var id = $(this).attr('id');
    var options = {

    url: base_url+'Home/consultAjaxPoduct/',

    getValue: "upc_13",

    list: {
      match: {
        enabled: true
      }
  }
};

$("#upc_13").easyAutocomplete(options);
/**/
  });
    $('#asin').keyup(function(event) {
    var id = $(this).attr('id');
    var options = {

    url: base_url+'Home/consultAjaxPoduct/',

    getValue: "asin",

    list: {
      match: {
        enabled: true
      }
  }
};

$("#asin").easyAutocomplete(options);
/**/
  });

/*Auto completador para parent*/
    $('#parent').keyup(function(event) {
    var id = $(this).attr('id');
    var options = {

    url: base_url+'Home/consultAjaxPoduct/',

    getValue: "sku",

    list: {
      match: {
        enabled: true
      }
  }
};

$("#upc_13").easyAutocomplete(options);

});

  });
  
  var app = angular.module('MyApp', []);

  app.controller('firstCtrl',function ($scope) {
  	$scope.SKU = "";
  })

  app.controller('myCtrl', function($scope) {

});