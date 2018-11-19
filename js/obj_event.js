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
      if($("#main_menu li.semi_current")) {
        $("#main_menu li.semi_current").removeClass("semi_current");
      }
      $("#main_menu li.current").removeClass("current");
      var current = $("#main_menu a[data-url='" + url + "']").parent("li");
      var parent = current.parent().parent();
      current.addClass("current");
      if(parent.attr("id") != "main_menu") {
        parent.children("li").addClass("semi_current");
      }
    }
  });
});
