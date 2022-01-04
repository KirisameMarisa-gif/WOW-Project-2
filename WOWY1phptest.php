<!--
Additional fixes in the future:
4. Utilize new timetable button to make multiple timetables at once, enable timetable swapping?
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <link rel="stylesheet" href="WOWY1cssstyling.css" type="text/css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WOW project</title>
</head>
<body>
    <?php
    $getdata = fopen("localdata.txt", "r");
    $tabledata = array();
    while(!feof($getdata)) {
        array_push($tabledata, array(fgets($getdata), fgets($getdata), fgets($getdata), fgets($getdata)));
    }
    fclose($getdata);
    unset($tabledata[count($tabledata)-1]);
    ?>
    <h2 style = 'color:white'> DIY Timetable! </h2>
    <button id = "deleteAll" type = button onclick = "deleteAllData()">Clear Timetable</button>
    <button id = "addEvent" type = button onclick = "openForm()" disabled>New Event</button>
    <button id = "editEvent" type = button onclick = "beginEditing()" disabled>Edit Event</button>
    <div id = "background"></div>
    <table id = “timetable” border = "1">
        <tr>
            <td></td>
            <td>8-8.30am</td>
            <td>8.30-9am</td>
            <td>9-9.30am</td>
            <td>9.30-10am</td>
            <td>10-10.30am</td>
            <td>10.30-11am</td>
            <td>11-11.30am</td>
            <td>11.30-12pm</td>
            <td>12-12.30pm</td>
            <td>12.30-1pm</td>
            <td>1-1.30pm</td>
            <td>1.30-2pm</td>
            <td>2-2.30pm</td>
            <td>2.30-3pm</td>
            <td>3-3.30pm</td>
            <td>3.30-4pm</td>
            <td>4-4.30pm</td>
            <td>4.30-5pm</td>
            <td>5-5.30pm</td>
            <td>5.30-6pm</td>
            <td>6-6.30pm</td>
            <td>6.30-7pm</td>
            <td>7-7.30pm</td>
            <td>7.30-8pm</td>
        </tr> 
        <tr>
            <td>Monday</td>
            <td id = "a1"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "a2"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "a3"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "a4"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "a5"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "a6"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "a7"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "a8"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "a9"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "a10"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "a11"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "a12"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "a13"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "a14"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "a15"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "a16"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "a17"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "a18"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "a19"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "a20"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "a21"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "a22"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "a23"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "a24"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
        </tr>
        <tr>
            <td>Tuesday</td>
            <td id = "b1"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "b2"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "b3"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "b4"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "b5"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "b6"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "b7"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "b8"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "b9"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "b10"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "b11"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "b12"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "b13"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "b14"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "b15"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "b16"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "b17"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "b18"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "b19"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "b20"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "b21"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "b22"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "b23"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "b24"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
        </tr>
        <tr>
            <td>Wednesday</td>
            <td id = "c1"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "c2"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "c3"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "c4"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "c5"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "c6"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "c7"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "c8"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "c9"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "c10"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "c11"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "c12"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "c13"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "c14"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "c15"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "c16"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "c17"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "c18"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "c19"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "c20"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "c21"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "c22"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "c23"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "c24"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
        </tr>
        <tr>
            <td>Thursday</td>
            <td id = "d1"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "d2"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "d3"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "d4"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "d5"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "d6"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "d7"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "d8"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "d9"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "d10"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "d11"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "d12"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "d13"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "d14"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "d15"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "d16"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "d17"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "d18"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "d19"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "d20"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "d21"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "d22"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "d23"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "d24"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
        </tr>
        <tr>
            <td>Friday</td>
            <td id = "e1"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "e2"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "e3"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "e4"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "e5"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "e6"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "e7"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "e8"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "e9"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "e10"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "e11"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "e12"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "e13"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "e14"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "e15"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "e16"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "e17"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "e18"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "e19"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "e20"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "e21"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "e22"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "e23"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "e24"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
        </tr>
        <tr>
            <td>Saturday</td>
            <td id = "f1"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "f2"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "f3"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "f4"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "f5"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "f6"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "f7"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "f8"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "f9"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "f10"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "f11"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "f12"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "f13"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "f14"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "f15"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "f16"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "f17"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "f18"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "f19"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "f20"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "f21"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "f22"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "f23"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "f24"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
        </tr>
        <tr>
            <td>Sunday</td>
            <td id = "g1"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "g2"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "g3"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "g4"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "g5"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "g6"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "g7"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "g8"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "g9"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "g10"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "g11"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "g12"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "g13"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "g14"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "g15"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "g16"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "g17"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "g18"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "g19"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "g20"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "g21"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "g22"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "g23"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
            <td id = "g24"><div class = "name"></div><div class = "details" style = "display:none"></div></td>
        </tr>
    </table>
    <br>
    <div style = 'color:white'> Click on the time period of your event on the timetable to create it :)</div>
    <form id = "newEventForm" method = "post" action = "formhandle.php">
        Event Name: <input type = "text" name = "name" id = "inputName" value = "" maxlength = "10" required = True/><br>
        Details(optional):<input type = "text" name = "details" id = "inputDetails" value = "" maxlength="150"/><br>
        Choose the Colour:
        <input type="radio" id="red" name="colour" value="red"/>
        <label for="red">Red</label>
        <input type="radio" id="green" name="colour" value="green"/>
        <label for="green">Green</label>
        <input type="radio" id="blue" name="colour" value="blue"/>
        <label for="blue">Blue</label>
        <input type="radio" id="cyan" name="colour" value="cyan"/>
        <label for="cyan">Cyan</label>
        <input type="radio" id="magenta" name="colour" value="magenta"/>
        <label for="magenta">Magenta</label>
        <input type="radio" id="yellow" name="colour" value="yellow"/>
        <label for="yellow">Yellow</label>
        <input type="radio" id="black" name="colour" value="black"/>
        <label for="black">Black</label>
        <input type="radio" id="white" name="colour" value="white"/>
        <label for="white">White</label> <br>

        <input type="submit"/>
        <button id = "deleteEvent" type = button onclick = "deletingEvent()" disabled>Delete Event</button>
        <button id = "copyEvent" type = button onclick = "copyingEvent()" disabled>Copy Event</button>
        <button id = "pasteEvent" type = button onclick = "pasteData()" disabled>Paste Event</button>
        <button id = "clearClipboard" type = button onclick = "clearCopy()" disabled>Clear Clipboard</button>
    </form>
    <div id = "details"></div>
    <script type="text/javascript"> var tabledata = <?php echo json_encode($tabledata); ?>; </script>
    <script type="text/javascript" src="WOWY1jsscripttest.js"></script>
</body>
</html>
