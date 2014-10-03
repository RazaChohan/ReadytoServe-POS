/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$( document ).ready(function() {
    $(":checkbox").click(enable_fields);
    function enable_fields() {
  if (this.checked) {
    $("#"+this.id+"q").removeAttr("disabled");
      $("#"+this.id+"d").removeAttr("disabled");
  } else {
    $("#"+this.id+"q").attr("disabled", true);
      $("#"+this.id+"d").attr("disabled", true);
  }
}
});
