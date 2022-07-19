const $addForm = document.querySelector(".add-form");
console.log($addForm);

$addForm.addEventListener("submit", (e) => {
    e.preventDefault();
    console.log("Paso");
    Swal.fire({
        title: "¿La Información ingresada es correcta?",
        showDenyButton: true,
        showCancelButton: true,
        confirmButtonText: "Aceptar",
    }).then((result) => {
        if (result.value) {
            console.log("Paso");
            // Swal.fire('Paciente guardado!', '', 'success')
            $addForm.submit();
        }
        // else if (result.isDenied) {
        //     Swal.fire('Changes are not saved', '', 'info')
        // }
    });
});

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
                }

                form.classList.add("was-validated");
            },
            false
        );
    });
})();

$(function () {
    $('[data-toggle="tooltip"]').tooltip();
});
