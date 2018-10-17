$(document).on("click", ".to_main", function() {
  var obj = $(this);
  var url = obj.attr("data-url");
  var main = $("#main");
  main.empty().append("Loading...Loading...Loading...Loading...Loading...Loading...Loading...Loading...").append("<div style=text-align=center;font-size:3em>Loading...</div>");;
  $.ajax({
    async : false,
    url : url,
    success : function(rs) {
      main.empty().append(rs);
    },
    error : function() {
      main.empty().append("[File not found : " + url + "]");
    },
    complete : function() {
      $("#main_menu a.current").removeClass("current");
      $("#main_menu a[data-url='" + url + "']").addClass("current");
    }
  });
});
