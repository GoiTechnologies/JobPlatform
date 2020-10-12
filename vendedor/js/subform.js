$(function() {
        $("#pluss").click(function(e) {
            

        var state = document.getElementById('fondoexperiencia2').style.display;
        if (state == 'block') {
            document.getElementById('fondoexperiencia2').style.display = 'none';
        }
        else {
            document.getElementById('fondoexperiencia2').style.display = 'block';
        }
        e.preventDefault();
        $("#pluss").attr("hidden", "hidden");
        var elem = document.getElementById('plus');
        elem.style.backgroundColor = "white";
        
    });


});



$(function() {
    $("#pluss2").click(function(e) {
        

    var state = document.getElementById('fondoexperiencia3').style.display;
    if (state == 'block') {
        document.getElementById('fondoexperiencia3').style.display = 'none';
    }
    else {
        document.getElementById('fondoexperiencia3').style.display = 'block';
    }
    e.preventDefault();
    $("#pluss2").attr("hidden", "hidden");
    var elem = document.getElementById('plus2');
    elem.style.backgroundColor = "white";
    
});


});




