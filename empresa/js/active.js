function cat(id){

    var idelement = document.getElementById(id);

    if(id=="oficiopopular"){
        idelement.style.backgroundColor = "#0066b2";
        document.getElementById("oficiopopular").value = "Oficios populares";

        var state = document.getElementById('selofpr').style.display;
        if (state == 'block') {
            document.getElementById('selofpr').style.display = 'none';
        }
        else {
            document.getElementById('selofpr').style.display = 'block';
        }
    }
    if(id=="servprof"){
        idelement.style.backgroundColor = "#0066b2";
        document.getElementById("servprof").value = "Servicios profesionales";

        var state = document.getElementById('selservpr').style.display;
        if (state == 'block') {
            document.getElementById('selservpr').style.display = 'none';
        }
        else {
            document.getElementById('selservpr').style.display = 'block';
        }
    }
    if(id=="empleodiv"){
        idelement.style.backgroundColor = "#0066b2";
        document.getElementById("empleodiv").value = "Empleos diversos";

        var state = document.getElementById('selempleodiv').style.display;
        if (state == 'block') {
            document.getElementById('selempleodiv').style.display = 'none';
        }
        else {
            document.getElementById('selempleodiv').style.display = 'block';
        }

    }
    if(id=="empleocor"){
        idelement.style.backgroundColor = "#0066b2";
        document.getElementById("empleocor").value = "Empleos corporativos";

        var state = document.getElementById('selempleocor').style.display;
        if (state == 'block') {
            document.getElementById('selempleocor').style.display = 'none';
        }
        else {
            document.getElementById('selempleocor').style.display = 'block';
        }
    }
}


