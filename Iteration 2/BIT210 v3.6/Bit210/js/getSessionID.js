$(".use-PTS").click(function() {
    var $row = $(this).closest("tr");    // Find the row    
    var $id = $row.find(".id").text(); // Find the text    
  window.location.href = "regisPersonal.php?id=" + $id ;
});

