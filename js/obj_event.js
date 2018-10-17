$.on("click", ".to_main", function() {
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
});
