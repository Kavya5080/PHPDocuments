$('#save').on('click', function() {
    console.log("save");
    var bloodGroup = $('#bloodGroup').val();
    var unit = $('#addUnit').val();
    if (unit != "" && bloodGroup != "") {
        $.ajax({
            url: "save.php",
            type: "POST",
            data: {
                bloodGroup: bloodGroup,
                unit: unit,
            },
            cache: false,
            success: function(dataResult) {
                alert('Detail Added Sucessfully');

            }
        });
    } else {
        alert('Please fill all the field !');
    }
});

$(document).on('submit', '#userForm', function(e) {
    e.preventDefault();
    $.ajax({
        method: "POST",
        url: "register.php",
        data: $(this).serialize(),
        success: function(data) {
            $('#msg').html(data);
            $('#userForm').find('input').val('')
        }
    });
});


$('.brequest').on('click', function() {
    var unit = prompt("How many unit of blood", 1);
    //document.getElementById("requestUnit").value=unit;
    var firedButton = $(this).val();
    var avunit = $(this).closest("tr").find(".availabelUnit").val();
    var numbers = /^[0-9]+$/;
    if (unit.match(numbers)) {
        if (avunit <= unit) {
            $.ajax({
                method: "POST",
                url: "request.php",
                data: {
                    data1: firedButton,
                    data2: unit,
                },
                cache: false,
                success: function() {
                    console.log("kk");
                },
                complete: function() {
                    // Handle the complete event
                    alert("Requested successfully");
                },
                error: function() {
                    alert("error ");
                },
            });
        } else {
            alert("Please enter valid unit");
        }
    } else {
        alert('Please input numeric characters only');
    }
});








$('#htableId').DataTable();

$('#utableId').DataTable();
$('#hstatus').DataTable();
//$('#ustatus').DataTable();
$('#hviewtable').DataTable();



console.log("lld");


//status update
$('.status').click(function() {
    var firedButton = $(this).val();
    console.log(firedButton);

    var bid = $(this).closest("tr").find(".bid").val();
    var userType = $(this).closest("tr").find(".user").val();
    var runit = $(this).closest("tr").find(".runit").val();
    var bloodId = $(this).closest("tr").find(".bloodId").val();
    console.log(userType);
    console.log(bid);
    $.ajax({
        method: "POST",
        url: "statusUpdate.php",
        data: {
            data1: firedButton,
            bid: bid,
            userType: userType,
            runit: runit,
            bloodId: bloodId,
        },
        cache: false,
        success: function() {
            console.log("kk");
        },
        complete: function() {
            // Handle the complete event
            alert("Status Updated successfully");
        },
        error: function() {
            alert("error ");
        },
    });
});

$('.request').click(function() {
    var unit = prompt("How many unit of blood", 1);
    document.getElementById("requestUnit").value = unit;
    var firedButton = $(this).val();
    var unit = $("#requestUnit").val();
    console.log(firedButton);
    console.log(unit);
    $.ajax({
        method: "POST",
        url: "request.php",
        data: {
            data1: firedButton,
            data2: unit,
        },
        cache: false,
        success: function() {
            console.log("kk");
        },
        complete: function() {
            // Handle the complete event
            alert("Requested successfully");
        },
        error: function() {
            alert("error ");
        },
    });
});


$('.ucancel').on('click', function() {
    var firedButton = $(this).val();
    console.log("del");
    $.ajax({

        method: "POST",
        url: "delete.php",
        data: {
            data1: firedButton,

        },
        cache: false,
        success: function() {

            window.location.reload(true);
        },
        complete: function() {
            // Handle the complete event
            alert("Deleted successfully");
        },
        error: function() {
            alert("error ");
        },
    });

});


$('.hcancel').on('click', function() {

    var firedButton = $(this).val();

    $.ajax({
        method: "POST",
        url: "delete.php",
        data: {
            data1: firedButton,

        },
        cache: false,
        success: function() {
            console.log("kk");
        },
        complete: function() {
            // Handle the complete event
            alert("Deleted successfully");
        },
        error: function() {
            alert("error ");
        },
    });

});