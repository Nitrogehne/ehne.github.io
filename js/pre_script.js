$(function() {
    load_file();
});

function load_file() {
  var count = $(".load").length;
  $(".load").each(function() {
    var obj = $(this);
    var url = obj.attr("data-url");
    $.ajax({
      async : false, // ajax를 동기방식으로 사용한다.
      url : url,
      success : function(rs) {
        obj.after(rs);
      },
      error : function() {
        obj.after("[File not found : " + url + "]");
      },
      complete : function() {
        obj.remove();
      }
    });
  }).promise().done(function() {
    if(0 < $(".load").length) {
      load_file();
    }
  });
}
