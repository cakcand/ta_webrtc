$(document).ready(function() {

 setInterval(refreshDiv, 1000);
function refreshDiv(){
$(".ganti").load('http://localhost/mascen/online.php');
}
});