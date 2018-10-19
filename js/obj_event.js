$(document).on("click", ".to_main", function() {
  var obj = $(this);
  var url = obj.attr("data-url");
  var main = $("#main");
  main.empty();
  $.ajax({
    async : false,
    url : url,
    success : function(rs) {
      main.append(rs);
    },
    error : function() {
      main.append("[ File not found ]");
      console.log("[File not found : " + url + "]");
    },
    complete : function() {
      $("#main_menu a.current").removeClass("current");
      var current = $("#main_menu a[data-url='" + url + "']");
      var parent = current.parent().parent().parent();
      if(parent.attr("id") == "main_menu"){
        current.addClass("current");
      } else {
        parent.children("a").addClass("current");
      }
    }
  });
});
