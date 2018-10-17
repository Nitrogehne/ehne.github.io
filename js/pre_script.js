$(function() {
    load_file();
});

function load_file() {
  var count = $("element").length;
  $(".load").each(function(i) {
    var obj = $(this);
    var url = obj.attr("data-url");
    $.ajax({
      async : false,
      url : url,
      success : function(rs) {
        obj.after(rs);
      },
      error : function() {
        obj.after("[File not found : " + url + "]");
      },
      complete : function() {
        obj.remove();  
        if (i + 1 === count) {
            
          //load_file();
            console.log("complete", $(".load"), $(".load").length);
        }
      }
    });
  }).promise().done(function() {    
      console.log("promise");
    if($(".load").length) {          
        if (i + 1 === count) {
          //load_file();
            console.log($(".load"), $(".load").length);
        }
    }
  });
}
