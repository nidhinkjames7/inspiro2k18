$(document).ready(function () {
        $("#myModal").modal('show');
    $('#clg').change(function(){
        var sam = $('#clg option:selected').val();
        if(sam == 'other'){
            $("#modal2").modal('show');
        }
    });
		
   $("#quiz").click(function () {
      $('#quiz_t').removeAttr("readonly", $(this).is(":checked"));
      $('#quiz_t').attr("required", $(this).is(":checked"));
      });
   $("#market").click(function () {
      $('#market_p1').removeAttr("readonly", $(this).is(":checked"));
      $('#market_p2').removeAttr("readonly", $(this).is(":checked"));
      $('#market_p3').removeAttr("readonly", $(this).is(":checked"));
	  $('#market_p1').attr("required", $(this).is(":checked"));
      $('#market_p2').attr("required", $(this).is(":checked"));
      $('#market_p3').attr("required", $(this).is(":checked"));
      });
   $("#treasure").click(function () {
      $('#treasure_p1').removeAttr("readonly", $(this).is(":checked"));
      $('#treasure_p2').removeAttr("readonly", $(this).is(":checked"));
      $('#treasure_p3').removeAttr("readonly", $(this).is(":checked"));
      $('#treasure_p1').attr("required", $(this).is(":checked"));
      $('#treasure_p2').attr("required", $(this).is(":checked"));
      });
    $("#web").click(function () {
      $('#web_t').removeAttr("readonly", $(this).is(":checked"));
      $('#web_t').attr("required", $(this).is(":checked"));
      });
    $("#idea").click(function () {
      $('#idea_p1').removeAttr("readonly", $(this).is(":checked"));
      $('#idea_p2').removeAttr("readonly", $(this).is(":checked"));
      $('#idea_p1').attr("required", $(this).is(":checked"));
      $('#idea_p2').attr("required", $(this).is(":checked"));
      });
    
     $("#modal2").dialog({
		modal: true,
        autoOpen: false
    });
    $("#clg").change(function () {
        if ($(this).val() == "other") {
            $("#modal2").dialog('open');
        }
    });
   });
	