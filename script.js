function myFunction() {
var x1 = document.getElementById("x").value;
var y1 = document.getElementById("y").value;
var dir1 = document.getElementById("dir").value;
var str1 = document.getElementById("str").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = '&x=' + x1 + '&y=' + y1 + '&dir=' + dir1 + '&str=' + str1;
if (x1 == '' || y1 == '' || dir1 == '' || str1 == '') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.
$.ajax({
type: "POST",
url: "back_end.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
return false;
}