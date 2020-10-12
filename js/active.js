function changeColor(id) {

    var elem = document.getElementById(id);

    if(id=="primaria"){
        elem.style.backgroundColor = "#0066b2";

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
    }
    if(id=="servprof"){
        idelement.style.backgroundColor = "#0066b2";
    }
    if(id=="empleodiv"){
        idelement.style.backgroundColor = "#0066b2";
    }
    if(id=="empleocor"){
        idelement.style.backgroundColor = "#0066b2";
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
    if(id=="spanish"){
        elem.style.backgroundColor = "#0066b2";
    }
    if(id=="english"){
        elem.style.backgroundColor = "#0066b2";
    }
    if(id=="chinese"){
        elem.style.backgroundColor = "#0066b2";
    }
    if(id=="german"){
        elem.style.backgroundColor = "#0066b2";
    }
    if(id=="french"){
        elem.style.backgroundColor = "#0066b2";
    }
    if(id=="italy"){
        elem.style.backgroundColor = "#0066b2";
    }
    if(id=="other"){
        elem.style.backgroundColor = "#0066b2";
    }
}
