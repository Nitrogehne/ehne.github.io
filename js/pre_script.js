$(function() {
    init_main();
    load_file();
});

function init_main(){
    if(location.search != "") {
        arr_get = location.search.substr(1).split("?");
        obj_get = {};
        for(i = 0; i < arr_get.length; i++){
            obj_get[arr_get[i].split("=")[0]] = arr_get[i].split("=")[1];
        }
        if(obj_get["menu"]){
            $("#main .load").attr("data-url", obj_get["menu"] + "/index.html");
        }
    }
}
function load_file() {
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
