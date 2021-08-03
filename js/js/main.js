$(document).ready(function() {
    $("#menu").load("/intranetSDB/includes/menu-principal.php");
    $("#footer").load("/intranetSDB/includes/footer.html");
  
 
});

function sortByKey(array, key) {
    return array.sort(function(a, b) {
        var x = a[key];
        var y = b[key];
        return ((x < y) ? -1 : ((x > y) ? 1 : 0));
    });

}
