$(".btnGetRate").click(function() {
    var $row = $(this).closest(".rate_input");    // Find the row
    var $id = $row.find(".php").val(); // Find the text
  window.location.href = "insert_rating.php?id=" + $id.val() ;
});
