let nav = 0;
let clicked = null;
let events = localStorage.getItem("events")
    ? JSON.parse(localStorage.getItem("events"))
    : [];

const calendar = document.querySelector(".calendar");
const newEventModal = document.querySelector(".newEventModal");
const deleteEventModal = document.querySelector(".deleteEventModal");
const backDrop = document.querySelector(".modalBackDrop");
const eventTitleInput = document.querySelector(".eventTitleInput");
const weekdays = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
];

const $scheduleAppointInfo = document.createElement("template")
$scheduleAppointInfo.innerHTML = `
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10">
            <div class="card-form p-4">
                <h4 class="form-title mb-3">
                    <i class="fas fa-map-marker-alt"></i>
                    Información previa
                </h4>

                <div class="row">
                    <div class="form-group col-6">
                        <label for="department" class="form-label">Médico</label>
                        <p>Lorem ipsum</p>
                    </div>
                    <div class="form-group col-6">
                        <label for="municipality" class="form-label">Tipo de cita</label>
                        <p>Lorem ipsum</p>

                    </div>
                    <div class="form-group col-6">
                        <label for="neigh">Consultorio</label>
                        <p>Lorem ipsum</p>

                    </div>
                    <div class="form-group col-6">
                        <label for="address">Sede</label>
                        <p>Lorem ipsum</p>
                    </div>
                    <div class="form-group col-6">
                        <label for="address">Dirección</label>
                        <p>Lorem ipsum</p>
                    </div>
                </div>
                <div class="row">
                    <button class="btn">Confirmar</button>
                </div>
            </div>
        </div>
    </div>
</div>`;

function openModal(eventForDay) {
    /*fecha clickeada */
    // clicked = date;

    /*Si la fecha del evento pasado conincide con uno guardado en el JSON
    La ventana modal muestra los datos de eses evento

    Si no, se muestra un formulario para registrar un nuevo evento
    */
    // const eventForDay = events.find((e) => e.date === clicked);

    /*Hacer las variables globales */
    console.log("Array enviado desde load", eventForDay);

    const $modalBody = document.getElementById("modalBody");
    $modalBody.innerHTML = "";

    const $scheduleScrollBackground = document.createElement("div");
    $scheduleScrollBackground.classList.add("schedule_scroll-background");

    const $scheduleDay = document.createElement("div");
    $scheduleDay.classList.add("schedule_day");

    const $fragment = document.createDocumentFragment();

    const $scheduleinstructions = document.createElement("template");
    $scheduleinstructions.innerHTML = `
    <div id="scheduleInfo" class="schedule_info d-none d-sm-flex flex-column justify-content-center align-items-center">
        <div class="schedule_instruction"><span>Pasos</span></div>
        <div class="schedule_instruction-cards d-flex justify-content-between">
            <div class="instruction_card d-flex flex-row">
                <div class="instruction_card-icon d-flex justify-content-center align-items-center">
                    <i class="fas fa-mouse-pointer"></i>
                </div>
                <div class="instruction_text">
                    <div class="instruction_title">Seleccionar</div>
                    <div class="instruction_paragraph">Hora de su cita</div>
                </div>
            </div>
            <div class="instruction_card d-flex flex-row">
                <div class="instruction_card-icon d-flex justify-content-center align-items-center">
                    <i class="fa fa-address-book" aria-hidden="true"></i>
                </div>
                <div class="instruction_text">
                    <div class="instruction_title">Llenar formulario</div>
                    <div class="instruction_paragraph">Información opcional de su solicitud</div>
                </div>
            </div>
            <div class="instruction_card d-flex flex-row">
                <div class="instruction_card-icon d-flex justify-content-center align-items-center">
                    <i class="fas fa-check"></i>
                </div>
                <div class="instruction_text">
                    <div class="instruction_title">Confirmar</div>
                    <div class="instruction_paragraph">Solicitud de si cita</div>
                </div>
            </div>
        </div>
    </div>
    `;
    const $scheduleAllHours = document.getElementsByClassName("schedule_hour-selected");



    let minutes = 0;
    let hourAfter = 1;
    let hourString;
    for (let n = 7; n < 17; n++) {
        while (minutes < 3 && n !== 12) {
            const $scheduleHour = document.createElement("div");
            $scheduleHour.classList.add("schedule_hour");
            hourString = `${String(n).padStart(2, "0")}:${String(
                20 * minutes
            ).padStart(2, "0")}:00`;
            $scheduleHour.setAttribute("data-hour", hourString);

            if (n < 12) {
                $scheduleHour.innerHTML = hourString.substring(0, hourString.length - 3) + " am";
            }
            if (n > 12) {
                $scheduleHour.innerHTML = `${String(hourAfter).padStart(
                    2,
                    "0"
                )}:${String(20 * minutes).padStart(2, "0")} pm`;
            }
            minutes++;

            let occupiedHour = eventForDay.find((e) => $scheduleHour.dataset.hour === e.appoint_start_hour);
            if(occupiedHour){
                $scheduleHour.classList.add("schedule_hour-occupied");
            }
            
            
            $scheduleHour.addEventListener('click', () => {
                
                for (const hour of $scheduleAllHours) {
                    hour.classList.remove("schedule_hour-selected");
                }

                $scheduleHour.classList.add("schedule_hour-selected")
                const $scheduleInfo = document.getElementById("scheduleInfo");
                $scheduleInfo.innerHTML = "";
                $scheduleInfo.appendChild($scheduleAppointInfo.content)
                

                /*
                    A schedule info añadirle un template de formulario que 
                    hay que crear arriba
                    aqui adentro vamos a agregarlo
                    obtener sus clases y añadirle los valores
                    Añadir un boton con ajax
                    Obtener valores
                    enviarlos a la base de datos
                */
            })

            $scheduleDay.appendChild($scheduleHour);
        }
        if (n > 12) hourAfter++;
        minutes = 0;
    }

    $fragment.appendChild($scheduleDay);
    $scheduleScrollBackground.appendChild($fragment)
    $modalBody.append($scheduleScrollBackground, $scheduleinstructions.content);

}

function load(eventsSchedule) {
    const dt = new Date();

    if (nav !== 0) {
        dt.setMonth(new Date().getMonth() + nav);
    }

    const day = dt.getDate();
    const month = dt.getMonth();
    const year = dt.getFullYear();

    const firstDayOfMonth = new Date(year, month, 1);
    const daysInMonth = new Date(year, month + 1, 0).getDate();

    const dateString = firstDayOfMonth.toLocaleDateString("en-us", {
        weekday: "long",
        year: "numeric",
        month: "numeric",
        day: "numeric",
    });
    const paddingDays = weekdays.indexOf(dateString.split(", ")[0]);

    document.querySelector(".month-name").innerText = `${dt.toLocaleDateString(
        "es-es",
        {
            month: "long",
        }
    )} ${year}`;

    /*Cada vez que se navega por los meses se borra todo el calendario*/
    calendar.innerHTML = "";

    const daysFragment = document.createDocumentFragment("div");
    /*
    Crear el calendario del mes actual y
    Poner las ventanas modales en todos los cuadritos 
    paddingDays Son los dias de otro mes vistos desde el mes actual*/
    for (let i = 1; i <= paddingDays + daysInMonth; i++) {
        let daySquare = document.createElement("div");
        daySquare.classList.add("day");

        const monthString = String(month + 1).padStart(2, "0");
        const dayString = String(i - paddingDays).padStart(2, "0");
        const dateString = `${year}-${monthString}-${dayString}`;

        if (i > paddingDays) {
            daySquare.innerText = i - paddingDays;

            if (nav < 0 || (nav === 0 && i - paddingDays < day)) {
                daySquare.classList.add("past_day");
            } else if (i - paddingDays === day && nav === 0) {
                daySquare.classList.add("current_day");
            } else if ((i - paddingDays > day && nav === 0) || nav > 0) {
                daySquare.classList.add("available_day");
            }
        } else {
            daySquare.classList.add("padding");
        }

        if (
            daySquare.classList.contains("current_day") ||
            daySquare.classList.contains("available_day")
        ) {
            daySquare.setAttribute("data-toggle", "modal");
            daySquare.setAttribute("data-target", ".day-schedule-modal-lg");

            let eventForDay = [];
            let occupied = 0;
            for (const eventItem of events) {
                if (eventItem.appoint_start_date === dateString) {
                    eventForDay.push(eventItem);
                    occupied++;
                }
                /*If occupied === 16 cambiarle el color al cuadrito  */
            }
            console.log(occupied);
            /*Agregar eventos */
            if (eventForDay.length) {
                const eventtitle = document.createElement("div");
                eventtitle.classList.add("desc_availability");
                eventtitle.innertext = "Disponiilidad";

                const eventDiv = document.createElement("div");
                eventDiv.classList.add("event");
                eventDiv.innerText = eventForDay.appoint_start_date;

                daySquare.appendChild(eventtitle);
                daySquare.appendChild(eventDiv);
            }

            daySquare.addEventListener("click", () =>
                openModal(eventForDay)
            ); /*Esta abre la ventana modal */
        }

        daysFragment.appendChild(daySquare);
        if (i % 7 === 0) {
            const weekRow = document.createElement("div");
            weekRow.classList.add("week__row");
            weekRow.appendChild(daysFragment);
            calendar.appendChild(weekRow);
            daysFragment.innerHTML = "";
        }
        /*Agregar última fila e indicación de días de proximo */
        if (i === paddingDays + daysInMonth) {
            const weekRow = document.createElement("div");
            let outterDays = 7 - daysFragment.childNodes.length;
            while (outterDays && outterDays != 7) {
                let daySquare = document.createElement("div");
                daySquare.classList.add("day", "padding");
                daysFragment.appendChild(daySquare);
                outterDays--;
            }
            weekRow.classList.add("week__row");
            weekRow.appendChild(daysFragment);
            calendar.appendChild(weekRow);
        }
    }
}

function loadSchedule() {
    let $availableBranchOffices = document.getElementById(
        "available_branchoffices"
    );
    let $availableMedics = document.getElementById("available_medics");
    let $fragment = document.createDocumentFragment();

    $availableBranchOffices.addEventListener("change", () => {
        $availableMedics.innerHTML = "";
        fetch(
            "getmedics/" +
                $availableBranchOffices.value +
                "/" +
                $availableBranchOffices.dataset.area
        )
            .then((res) => {
                console.log(res);
                return res.ok ? res.json() : Promise.reject(res);
            })
            .then((json) => {
                console.log(json);
                const $option = document.createElement("option");
                $option.innerHTML = "Seleccione un médico";
                $option.value = "";
                $option.selected = true;
                $option.disabled = true;
                $option.hidden = true;
                $fragment.appendChild($option);
                json.forEach((el) => {
                    const $option = document.createElement("option");
                    $option.value = el.id_medic;
                    $option.innerText = `${el.name_medic}`;
                    $fragment.appendChild($option);
                });
                $availableMedics.appendChild($fragment);
            });
    });

    $availableMedics.addEventListener("change", () => {
        let idMedic = $availableMedics.value;

        fetch("getdiary/" + idMedic)
            .then((res) => {
                console.log(res);
                return res.ok ? res.json() : Promise.reject(res);
            })
            .then((json) => {
                console.log(json);
                events = json;
                load(json);
            });
    });
}

function closeModal() {
    eventTitleInput.classList.remove(
        "error"
    ); /*Borrar el focus de entrada invalida*/
    newEventModal.style.display = "none"; /*Ocultar la modal de registro*/
    deleteEventModal.style.display =
        "none"; /*Ocultar la modal de borrar evento */
    backDrop.style.display = "none";
    eventTitleInput.value = ""; /*Eliminar el valor de la caja de texto*/
    clicked = null;
    load(); /*Volver a desplegar el calendario */
}

function saveEvent() {
    if (eventTitleInput.value) {
        eventTitleInput.classList.remove("error");

        events.push({
            date: clicked,
            title: eventTitleInput.value,
        });
        console.log("Esto es events: ", events);
        localStorage.setItem("events", JSON.stringify(events));
        closeModal();
    } else {
        eventTitleInput.classList.add("error");
    }
}

function deleteEvent() {
    events = events.filter((e) => e.date !== clicked);
    localStorage.setItem("events", JSON.stringify(events));
    closeModal();
}

function initButtons() {
    document.querySelector(".next-btn").addEventListener("click", () => {
        nav++;
        load();
    });

    document.querySelector(".back-btn").addEventListener("click", () => {
        nav--;
        load();
    });

    document.querySelector(".saveButton").addEventListener("click", saveEvent);
    document
        .querySelector(".cancelButton")
        .addEventListener("click", closeModal);
    document
        .querySelector(".deleteButton")
        .addEventListener("click", deleteEvent);
    document
        .querySelector(".closeButton")
        .addEventListener("click", closeModal);
}

initButtons();

/*Cargar los medicos */
loadSchedule();

/*Cargar todos los eventos en el calendario*/
load();

/*HAcer una funcion ajax hacia los médicos*/
