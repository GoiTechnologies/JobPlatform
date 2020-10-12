function changeColor(id) {

    var elem = document.getElementById(id);

    if(id=="primaria"){
        elem.style.backgroundColor = "#0066b2";
        document.getElementById("primaria").value = "Primaria";
        var state = document.getElementById('fnpr').style.display;
        if (state == 'block') {
            document.getElementById('fnpr').style.display = 'none';
        }
        else {
            document.getElementById('fnpr').style.display = 'block';
        }

    }
    if(id=="secu"){
        elem.style.backgroundColor = "#0066b2";
        document.getElementById("secu").value = "Secundaria";
        var state = document.getElementById('fnse').style.display;
        if (state == 'block') {
            document.getElementById('fnse').style.display = 'none';
        }
        else {
            document.getElementById('fnse').style.display = 'block';
        }
        // enable
    }



    if(id=="bachiller"){
        elem.style.backgroundColor = "#0066b2";
        document.getElementById("bachiller").value = "Bachillerato";
        var state = document.getElementById('fnba').style.display;
        if (state == 'block') {
            document.getElementById('fnba').style.display = 'none';
        }
        else {
            document.getElementById('fnba').style.display = 'block';
        }

    }
    if(id=="uni"){
        elem.style.backgroundColor = "#0066b2";
        document.getElementById("uni").value = "Universidad";
        // enable
        var state = document.getElementById('fnun').style.display;
        if (state == 'block') {
            document.getElementById('fnun').style.display = 'none';
        }
        else {
            document.getElementById('fnun').style.display = 'block';
        }
    }
    if(id=="posgrado"){
        elem.style.backgroundColor = "#0066b2";
        document.getElementById("posgrado").value = "Posgrado";
        // enable
        var state = document.getElementById('fnpo').style.display;
        if (state == 'block') {
            document.getElementById('fnpo').style.display = 'none';
        }
        else {
            document.getElementById('fnpo').style.display = 'block';
        }
    }



}



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

    }
    if(id=="empleocor"){
        idelement.style.backgroundColor = "#0066b2";
        document.getElementById("empleocor").value = "Empleos corporativos";
    }
}




function change(id) {

    var elem = document.getElementById(id);

    if(id=="id-o"){
        elem.style.backgroundColor = "#0066b2";
        document.getElementById("fu").style.color = "#ffffff";
        document.getElementById("tfu").style.color = "#ffffff";
    }
    if(id=="ido2"){
        elem.style.backgroundColor = "#0066b2";
        document.getElementById("fu2").style.color = "#ffffff";
        document.getElementById("tfu2").style.color = "#ffffff";
    }
}





function idioma(id) {

    var elem = document.getElementById(id);
    if(id=="spanishh"){
        elem.style.backgroundColor = "#0066b2";
        document.getElementById("spanishh").value = "Español";
    }
    if(id=="englishh"){
        elem.style.backgroundColor = "#0066b2";
        document.getElementById("englishh").value = "Inglés";
    }
    if(id=="chinesee"){
        elem.style.backgroundColor = "#0066b2";
        document.getElementById("chinesee").value = "Chino";
    }
    if(id=="germann"){
        elem.style.backgroundColor = "#0066b2";
        document.getElementById("germann").value = "Alemán";
    }
    if(id=="frenchh"){
        elem.style.backgroundColor = "#0066b2";
        document.getElementById("frenchh").value = "Francés";
    }
    if(id=="italyy"){
        elem.style.backgroundColor = "#0066b2";
        document.getElementById("italyy").value = "Italiano";
    }
    if(id=="otherr"){
        elem.style.backgroundColor = "#0066b2";
        document.getElementById("otherr").value = "Otro";
    }
}
