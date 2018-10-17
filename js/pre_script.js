$(function() {
    load_file();
});

function load_file() {
  $(".file").each(function() {
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
      }
    });
  }).promise().done(function() {    
    if($(".file").length) {
      //load_file();
        console.log($(".file"), $(".file").length);
    }
  });
}
