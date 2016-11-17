// array of arrays

var x ;

$.ajax({
    type: "GET",
    url: "comments.csv",
    dataType: "text",
    success: function(data) { 

        var x = Papa.parse(data, {
          header: true
        });
       
      
      }


      
});


   