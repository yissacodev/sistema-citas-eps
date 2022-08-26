const $delForm = document.querySelectorAll(".delete_form");

$delForm.forEach((form) => {
    form.addEventListener("submit", (e) => {
        e.preventDefault();

        Swal.fire({
            title: "¿Desea eliminar este item?",
            text: "Esta operacion es irreversible",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Si, Eliminar!",
            cancelButtonText: "Cancelar",
        }).then((result) => {
            if (result.value) {
                form.submit();
            }
        });
    });
});

(function () {
    "use strict";
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll(".needs-validation");

    // Loop over them and prevent submission
    Array.prototype.slice.call(forms).forEach(function (form) {
        form.addEventListener(
            "submit",
            function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                    form.classList.add("was-validated");
                }
                else{
                    event.preventDefault();
                    form.classList.add("was-validated");
                    Swal.fire({
                        title: "¿La Información ingresada es correcta?",
                        showDenyButton: true,
                        showCancelButton: true,
                        confirmButtonText: "Aceptar",
                    }).then((result) => {
                        if (result.value) {
                            form.submit();
                        }
                    });
                }
            },
            false
        );
    });
})();

$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});

(function () {
    let $department = document.getElementById("department");
    let $municipalityList = document.getElementById("municipality");
    let $fragment = document.createDocumentFragment();
    let url = location.pathname.split("/")[2];
    $department.addEventListener("change", (e) => {
        $municipalityList.innerHTML = "";
        fetch(url + "/getmunicipalities/" + $department.value)
            .then((res) => {
                console.log(res);
                return res.ok ? res.json() : Promise.reject(res);
            })
            .then((json) => {
                console.log(json);
                json.forEach((el) => {
                    const $option = document.createElement("option");
                    $option.value = el.id_municipality;
                    $option.innerHTML = `${el.municipality_name}`;
                    $fragment.appendChild($option);
                });
                $municipalityList.appendChild($fragment);
            });
    });
})();

(function () {
    let $area = document.querySelector("#area");
    let $doctorOfficeList = document.querySelector("#eps_doctor_office");
    let $fragment = document.createDocumentFragment();

    $area.addEventListener('change', () => {
        $doctorOfficeList.innerHTML = "";
        fetch('medic/getbranchoffices/' + $area.value)
        .then((res) => {
            console.log(res);
            return res.ok ? res.json() : Promise.reject(res);
        })
        .then((json) => {
            console.log(json);
            json.forEach((el) => {
                const $option = document.createElement("option");
                $option.value = el.id_branch;
                $option.innerHTML = `${el.name_branch_office}`;
                $fragment.appendChild($option);
            });
            $doctorOfficeList.appendChild($fragment);
        });
    })
})();

(function(){
    let $typeIdentificacion = document.querySelector('#idtype'),
        $userIdentification = document.querySelector('#idnumber'),
        $invalid = document.querySelector('#idtype ~ .invalid-feedback'),
        $btn_enabled = document.querySelector('#btn_enabled');

    function userExistQuery(){
        fetch('medic/getidentification/' + $typeIdentificacion.value + '/' + $userIdentification.value)
        .then((res) => {
            console.log(res);
            return res.ok ? res.json() : Promise.reject(res);
        })
        .then((json) =>{
            if(json.length){
                $userIdentification.classList.add('is-invalid');
                $typeIdentificacion.classList.add('is-invalid');
                $invalid.textContent = "El usuario con el tipo y número de identificación ya existe!";
                $invalid.style.display = "block";
                $btn_enabled.disabled = true;
                // console.log('Valor de json: ', json);
            }
        })
        .catch((err) => {
            let message = err.statusText || "Ocurrio un error";
            console.error('Error: ', message);
        })
    }
    
    function focusFieldOfIdentify(){
        $userIdentification.classList.remove('is-invalid');
        $typeIdentificacion.classList.remove('is-invalid');
        $invalid.textContent = "Campo incorrecto";
        $invalid.style.display = "none";
        $btn_enabled.disabled = false;
    }
    
    $typeIdentificacion.addEventListener('change', userExistQuery);
    $userIdentification.addEventListener('blur', userExistQuery);
    $typeIdentificacion.addEventListener('change', focusFieldOfIdentify);
    $userIdentification.addEventListener('focus', focusFieldOfIdentify);


})()



/*
Pongo el campo de una foto en los formularios?
Cambio el titulo de los formularios?
Cambio los textos de las alertas?
Si un usuario existe bloqueo el boton de submit? o 
    Desabilito el resto de los campos  ?
    o lanzo una alerta?

*/