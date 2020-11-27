$(document).ready(function(){

// **********************
// Start User Data 
// **********************

    // ........................... 
    // Show User 
    //............................
    function loaduser(){
        $.get(
            "./data/usershow.php",
            function(data){
                $("#usereshow").html(data);
            }
        );
    }
    loaduser();

    // ........................... 
    // Delete User 
    //............................
    $(document).on("click","#delete_user",function(){
        var userid = $(this).data('id');
        if(confirm("Are you sure to DELETE THIS data")){
        $.post(
            "./data/deleteuser.php",
            {
                uid : userid
            },
            function(data){
                if(data==1){
                    loaduser();
                }else{
                    alert("Something Went Wrong !");
                }
            }
        )}
    });

    // ........................... 
    // Search User 
    //............................
    $("#searchUser").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#user_show tr").filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

// **********************
// END User Data 
// **********************


// **********************
// Start Exam Data 
// **********************

    // ........................... 
    // Show Exam 
    //............................
    function loadExam(){
        $.get(
            "./data/examshow.php",
            function(data){
                $("#Examtblbody").html(data);
            }
        );
    }

    loadExam();



    // ........................... 
    // Insert Exam 
    //............................
    $("#examform").on("submit",function(e){
        e.preventDefault();

        $.ajax({
            url: './data/examinsert.php',
            type: 'POST',
            data:  new FormData(this),
            success: function (data) {
                if(data==1){
                    alert("Data Send.");
                    $("#examform").trigger("reset");
                }else{
                    alert(data);
                }
                
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });

    // ........................... 
    // Delete Exam 
    //............................
    $(document).on("click","#Exam_delete",function(){
        var coursecode = $(this).data("id");
        var ExamImg = $(this).data("img");
        if(confirm("Are Your Sure To Delete This Data?")){
        $.post(
            "./data/examdelete.php",
            {
                coucode : coursecode,
                eimg : ExamImg
            },
            function(data){
                if(data==1){
                    loadExam();
                }else{
                    alert(data);
                }
            }
        );}
    });

    // ........................... 
    // Edit Show Exam 
    //............................
    $(document).on("click","#Exam_edit",function(){
        var coucode = $(this).data("id");
        $.post(
            "./data/examedit.php",
            {
                ccode : coucode
            },
            function(data){
                $("#examedit").show();
                $("#exameditform").html(data);
            }
        );
    });

    // ........................... 
    // Update Exam 
    //............................
    $(document).on("submit","#exameditform",function(e){
        e.preventDefault();
        $.ajax({
            url : "./data/examupdate.php",
            type : "POST",
            data : new FormData(this),
            success : function(data){
                if(data==1){
                    alert("Data Updated!");
                    $("#examedit").hide();
                    loadExam();
                }else{
                    alert(data);
                }
            },
            cache : false,
            contentType : false,
            processData : false

        });
    });

// **********************
// Start Exam Question Data 
// **********************

    // ........................... 
    // Insert Question Exam 
    //............................
    $("#QuesForm").on("submit",function(e){
        e.preventDefault();
        var formdata = $(this).serialize();
        
        $.post("./data/quesinert.php",formdata,function(data){
            alert(data);
            $("#QuesForm").trigger("reset");
        });
    });

    // ........................... 
    // Show Question Table 
    //............................
    function loadques(){
        var examc = $("#Examc").val();
        $.get(
            "./data/questionshow.php",
            {examcode : examc},
            function(data){
                $("#QuestionTable").html(data);
            }
        );
    };
    loadques();

    // ........................... 
    // Delete Question 
    //............................
    $(document).on("click","#ques_delete",function(){
        if(confirm("Are you sure to delete this data.")){
        var quesid = $(this).data("id");
        var excode = $(this).data("ecode");
        $.post("./data/quesdelete.php",{qid:quesid, ecode:excode},function(data){
            alert(data);
            loadques();
        });
    }
    });

    // ........................... 
    // Edit Show Question 
    //............................
    $(document).on("click","#ques_edit",function(){
        var quesid = $(this).data("id");

        $.post("./data/quesedit.php",{qid:quesid},function(data){
            $("#EditquesShow").show();
            $("#QuesEditForm").html(data);
        });
    });

    // ........................... 
    // Update Question 
    //............................
    $("#QuesEditForm").on("submit",function(e){
        e.preventDefault();
        var quesdata = $(this).serialize();

        $.post("./data/quesupdate.php",quesdata,function(data){
            alert(data);
            $("#EditquesShow").hide();
            loadques();
        });
    });


    $("#Lbtn").on("click", function(){
        $("#CAccount").hide();
        $("#LAccount").show();
    });

    $("#Cbtn").on("click", function(){
        $("#CAccount").show();
        $("#LAccount").hide();
    });


    $("#Chuser").on("change",function(){
        var datauser = $(this).val();
        $.post(
            "./data/checkuser.php",
            {user : datauser},
            function(data){
                if(data==1){
                    $("#Chuser").val('');
                    alert("This user name in already Exited! Enter Other User Name.")
                }else if(data==0){
                    
                }else{
                    alert("mo");
                }
            }
        );
    });


    // ........................... 
    // Show Conatct 
    //............................
    function loadcontact(){
        $.get(
            "./data/contactshow.php",
            function(data){
                $("#contact_show").html(data);
            }
        );
    };
    loadcontact();
})