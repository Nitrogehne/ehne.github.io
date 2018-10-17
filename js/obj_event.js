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
      main.append("[File not found : " + url + "]");
    },
    complete : function() {
      $("#main_menu a.current").removeClass("current");
      $("#main_menu a[name=" + url + "]").addClass("current");
    }
  });
});
