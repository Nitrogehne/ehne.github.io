$(function() {
    load_file();
});

function load_file() {
  var count = $("element").length;
  $(".file").each(function(i) {
    var obj = $(this);
    var file = obj.attr("data-file");
    $.ajax({
      async : false,
      url : file,
      success : function(rs) {
        obj.after(rs);
      },
      error : function() {
        obj.after("[File not found : " + file + "]");
      },
      complete : function() {
        obj.remove();  
          /*
        if (i + 1 === count) {
          //load_file();
            console.log($(".file"), $(".file").length);
        }
        */
      }
    });
  }).promise().done(function() {    
      console.log("promise");
    if($(".file").length) {          
        if (i + 1 === count) {
          //load_file();
            console.log($(".file"), $(".file").length);
        }
    }
  });
}
