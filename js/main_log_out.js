$(document).ready(function() {
    $("#menu_logOut").load("/intranetSDB/includes/menu-principal-log-out.php");
    $("#footer").load("/intranetSDB/includes/footer.html");
  
 
});

function sortByKey(array, key) {
    return array.sort(function(a, b) {
        var x = a[key];
        var y = b[key];
        return ((x < y) ? -1 : ((x > y) ? 1 : 0));
    });

}
