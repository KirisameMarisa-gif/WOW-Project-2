var select = 0;
var getid = "";
var finalid = "";
var editing = 0;
var edit = 0;
var formopen = 0;
var arrayLength = tabledata.length;
var tempArrayLength = tabledata.length;
var datacopied = "";

function createCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

for (var i = 0; i < arrayLength; i++) {
    var tempname = tabledata[i][0].trim();
    var tempdetails = tabledata[i][1].trim();
    var tempcolour = tabledata[i][2].trim();
    var tempplace = tabledata[i][3].trim();
    $("#"+tempplace).children("div.name").text(tempname);
    $("#"+tempplace).children("div.details").text(tempdetails);
    $("#"+tempplace).css("background-color", tempcolour);
    $("#"+tempplace).css("color", "white");
    if (tempcolour == "cyan") {
        $("#"+tempplace).css("color", "black");
    }
    if (tempcolour == "yellow") {
        $("#"+tempplace).css("color", "black");
    }
    if (tempcolour == "white") {
        $("#"+tempplace).css("color", "black");
    }
    $("#"+tempplace).addClass("unabletoactivate");
    if (tempname == "") {
        $("#"+tempplace).removeClass("unabletoactivate");
        tempArrayLength -= 2
    }
}

if (tempArrayLength > 0) {
    document.getElementById("editEvent").style.opacity = 1.0;
    document.getElementById("editEvent").style.cursor = "default";
    document.getElementById("editEvent").disabled = false;
}

function beginEditing() {
    if (edit == 0) {
        if (editing == 0) {
            editing = 1;
            $("#editEvent").text("Editing Event")
        }
        else {
            editing = 0;
            $("#editEvent").text("Edit Event")
        }
    }
}

$('td').hover(function() {
    var t = parseInt($(this).index()) + 1;
    if ($(this).children("div.name").text() != "") {
        let detailsthis = $(this).children("div.details").text();
        if (detailsthis == "") {
            detailsthis = "-";
        }
        $("#details").text("Details: " + detailsthis);
        //console.log(detailsthis);
    }
    $('td:nth-child(' + t + ')').addClass('highlighted');
},function() {
    $("#details").text("");
    var t = parseInt($(this).index()) + 1;
    $('td:nth-child(' + t + ')').removeClass('highlighted');
});

$('td').click(function() {
    if (formopen == 0) {
        if ($(this).parent().parent().children().index($(this).parent()) > 0 && $(this).parent().children().index($(this)) > 0) {
            if (editing == 1) {
                if($(this).hasClass('unabletoactivate') == true) {
                    finalid = $(this).attr('id');
                    document.getElementById("newEventForm").style.visibility = "visible";
                    datacopied = getCookie("name");
                    if (datacopied != "") {
                        document.getElementById("pasteEvent").disabled = false;
                        document.getElementById("pasteEvent").style.cursor = "default";
                        document.getElementById("clearClipboard").disabled = false;
                        document.getElementById("clearClipboard").style.cursor = "default";
                    }
                    formopen = 1;
                    document.getElementById("deleteEvent").disabled = false;
                    document.getElementById("copyEvent").disabled = false;
                    document.getElementById("deleteEvent").style.cursor = "default";
                    document.getElementById("copyEvent").style.cursor = "default";
                    editing = 0;
                    edit = 1;
                }
            }
            document.getElementById("addEvent").style.opacity = 1.0;
            document.getElementById("addEvent").style.cursor = "default";
            document.getElementById("addEvent").disabled = false;
            if($(this).hasClass('selected') == true) {
                $(this).removeClass('activated');
                $(this).removeClass('selected'); 
                $(this).addClass('wasRemoved');
                if (tempArrayLength > 0) {
                    document.getElementById("editEvent").style.opacity = 1.0;
                    document.getElementById("editEvent").style.cursor = "default";
                    document.getElementById("editEvent").disabled = false;
                }
                select--;
            }
            if($(this).hasClass('wasRemoved') == false) {
                $(this).addClass('activated');
                $(this).addClass('selected');
                if (tempArrayLength > 0) {
                    document.getElementById("editEvent").style.opacity = 0.6;
                    document.getElementById("editEvent").style.cursor = "not-allowed";
                    document.getElementById("editEvent").disabled = true;
                }
                select++;
                getid = $(this).attr('id');
            }
            $('td').removeClass('wasRemoved');
            if($(this).hasClass('unabletoactivate') == true) {
                $(this).removeClass('activated');
                $(this).removeClass('selected');
                if (tempArrayLength > 0) {
                    document.getElementById("editEvent").style.opacity = 1.0;
                    document.getElementById("editEvent").style.cursor = "default";
                    document.getElementById("editEvent").disabled = false;
                }
                select--;
                getid = "";
            }
            if (select>1) {
                alert("You have already selected a slot!");
                $(this).removeClass('activated');
                $(this).removeClass('selected');
                select--;
                getid = ""
            }
            if (select==0) {
                document.getElementById("addEvent").style.opacity = 0.6;
                document.getElementById("addEvent").style.cursor = "not-allowed";
                document.getElementById("addEvent").disabled = true;
            }
            if (getid != "") {
                finalid = getid;
            }
        }
    }
});

function openForm() {
    if (edit == 0) {
        document.getElementById("newEventForm").style.visibility = "visible";
        datacopied = getCookie("name");
        if (datacopied != "") {
            document.getElementById("pasteEvent").disabled = false;
            document.getElementById("pasteEvent").style.cursor = "default";
            document.getElementById("clearClipboard").disabled = false;
            document.getElementById("clearClipboard").style.cursor = "default";
        }
        formopen = 1;
        edit = 1;
        if (editing == 1) {
            editing = 0;
        }
    }
}

function deletingEvent() {
    createCookie("id", finalid, "10");
    finalid = "";
    getid = "";
    location.href = "dataedit.php";
}

function clearCopy() {
    createCookie("name", "", "10");
    createCookie("details", "", "10");
    createCookie("colour", "", "10");
    location.href = "WOWY1phptest.php";
}

function copyingEvent() {
    var newname = $("#" + finalid).children("div.name").text();
    var newdetails = $("#" + finalid).children("div.details").text();
    var newcolour = $("#" + finalid).css("background-color");
    createCookie("name", newname, "10");
    createCookie("details", newdetails, "10");
    createCookie("colour", newcolour, "10");
    location.href = "WOWY1phptest.php";
}

function pasteData() {
    createCookie("id", finalid, "10");
    location.href = "datapaste.php";
}

$("#newEventForm").submit(function() {
    createCookie("id", finalid, "10");
    if (edit == 1) {
        edit = 0;
    }
    finalid = "";
    getid = "";
});

function deleteAllData() {
    var comfirm1 = confirm("Are you sure you wish to clear all timetable data?");
    if (comfirm1 == true) {
        var comfirm2 = confirm("Are you really sure? \n Current data will not be able to be restored after performing this action.");
        if (comfirm2 == true) {
            location.href = "dataclear.php";
        }
    }
}
