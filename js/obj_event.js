$(document).on("click", ".to_main", function() {
  var obj = $(this);
  var file = obj.attr("data-href");
  var main = $("#main");
  main.empty();
  $.ajax({
    async : false,
    url : file,
    success : function(rs) {
      main.append(rs);
    },
    error : function() {
      main.append("[File not found : " + file + "]");
    },
    complete : function() {
    }
  });
}).on("ready", ".loading", function() {
  console.log(".loading");
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
    }
  });
});
