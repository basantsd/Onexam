$(document).ready(function(){

// ***************
// Search Exam 
// ***************

    $("#ExamSearch").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#serchExam").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });



    $("input").on("change",function(){
        $("input[type='radio']").parent().removeClass("radioC");
        if ($("input[type='radio']").is(':checked'))
    {
        $("input[type='radio']:checked").parent().addClass("radioC");
    }
      });

      // ........................... 
    // Insert Contact 
    //............................
    $("#Contact").on("submit",function(e){
        e.preventDefault();
        var formdata = $(this).serialize();
        
        $.post("./data/insertcontact.php",formdata,function(data){
            alert(data);
            $("#Contact").trigger("reset");
        });
    });

    //   $("#resSubmit").on("click",function(e){
       
    //     var datares = $("#resultQuiz").serialize();
    //     $.post("../data/resultshow.php", datares, function(data){
    //         alert(data);
    //     });
    //   });
})