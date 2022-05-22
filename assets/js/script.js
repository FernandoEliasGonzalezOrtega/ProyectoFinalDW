function actualizarTablaTrabajadores() {
    let tabla = document.getElementById("tablaTrabajadores");
    tabla.innerHTML = "";
    
    let trabajadores = [
        {
            "idTrabajador": 1,
            "nombreTrabajador": "Tony Stark",
            "fechaTrabajador":1963,
            "fotoTrabajador":"./assets/img/person-circle.svg"
        },
        {
            "idTrabajador": 2,
            "nombreTrabajador": "Steve Rogers",
            "fechaTrabajador":1936,
            "fotoTrabajador":"./assets/img/person-circle.svg"
        },
        {
            "idTrabajador": 3,
            "nombreTrabajador": "Matt Murdock",
            "fechaTrabajador":1978,
            "fotoTrabajador":"./assets/img/person-circle.svg"
        },
        {
            "idTrabajador": 4,
            "nombreTrabajador": "Peter Parker",
            "fechaTrabajador":1996,
            "fotoTrabajador":"./assets/img/person-circle.svg"
        }
    ];
    console.log(trabajadores);
    for(let i=0; i<trabajadores.length; i++){
        tabla.innerHTML += "<div class='row border-top border-bottom border-dark border-2'><div class='col-md-3 align-middle'><img src='"+trabajadores[i].fotoTrabajador+"' alt='prof-pic' height='100px' class='p-1 mx-5'></div><div class='col-md-3'><div class='row m-3'><div class='col-md-12'><label class='form-check-label' for='trabajador1'>"+trabajadores[i].nombreTrabajador+"</label></div></div><div class='row m-3'><div class='col-md-6'>"+trabajadores[i].fechaTrabajador+"</div><div class='col-md-6'>"+trabajadores[i].idTrabajador+"</div></div></div><div class='col-md-3 align-middle'><a class='btn btn-primary btn-guardar m-4' href='./expediente.html'>Ver Datos</a></div><div class='col-md-3 align-middle'><button class='btn btn-primary btn-guardar my-4 mx-2' href='#'><i class='bi bi-file-earmark-person'></i></button><button type='submit' class='btn btn-primary btn-guardar my-4 mx-2' href='#'><i class='bi bi-pencil-square'></i></button><button type='submit' class='btn btn-primary btn-guardar my-4 mx-2' href='#'><i class='bi bi-eraser-fill'></i></button></div></div>";
    }
}

function actualizarTablaEmpresas() {
    let tabla = document.getElementById("tablaEmpresas");
    tabla.innerHTML = "";
    
    let trabajadores = [
        {
            "idTrabajador": 1,
            "nombreTrabajador": "S.H.I.E.L.D.",
            "fechaTrabajador":1963,
            "fotoTrabajador":"./assets/img/building.svg"
        },
        {
            "idTrabajador": 2,
            "nombreTrabajador": "Stark Industries",
            "fechaTrabajador":1980,
            "fotoTrabajador":"./assets/img/building.svg"
        },
        {
            "idTrabajador": 3,
            "nombreTrabajador": "Nelson & Murdock",
            "fechaTrabajador":2002,
            "fotoTrabajador":"./assets/img/building.svg"
        },
        {
            "idTrabajador": 4,
            "nombreTrabajador": "S.S.R.",
            "fechaTrabajador":1945,
            "fotoTrabajador":"./assets/img/building.svg"
        }
    ];
    console.log(trabajadores);
    for(let i=0; i<trabajadores.length; i++){
        tabla.innerHTML += "<div class='row border-top border-bottom border-dark border-2'><div class='col-md-3 align-middle'><img src='"+trabajadores[i].fotoTrabajador+"' alt='prof-pic' height='100px' class='p-1 mx-5'></div><div class='col-md-3'><div class='row m-3'><div class='col-md-12'><label class='form-check-label' for='trabajador1'>"+trabajadores[i].nombreTrabajador+"</label></div></div><div class='row m-3'><div class='col-md-6'>"+trabajadores[i].fechaTrabajador+"</div><div class='col-md-6'>"+trabajadores[i].idTrabajador+"</div></div></div><div class='col-md-3 align-middle'><a class='btn btn-primary btn-guardar m-4' href='./expediente.html'>Ver Datos</a></div><div class='col-md-3 align-middle'><button class='btn btn-primary btn-guardar my-4 mx-2' href='#'><i class='bi bi-file-earmark-person'></i></button><button type='submit' class='btn btn-primary btn-guardar my-4 mx-2' href='#'><i class='bi bi-pencil-square'></i></button><button type='submit' class='btn btn-primary btn-guardar my-4 mx-2' href='#'><i class='bi bi-eraser-fill'></i></button></div></div>";
    }
}