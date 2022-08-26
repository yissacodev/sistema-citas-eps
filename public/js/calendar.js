let nav = 0;
let clicked = null;
let events;

const $calendarContainer = document.querySelector(".calendar__container");
const calendar = document.querySelector(".calendar");
const weekdays = [
    "Sunday",
    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday",
    "Saturday",
];

const $templateScheduleInstructions = document.createElement("template");
$templateScheduleInstructions.innerHTML = `
    <div id="scheduleInstructions" class="schedule_instruction-cards d-flex justify-content-between">
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
`;

const $templateScheduleAppointInfo = document.createElement("template")
$templateScheduleAppointInfo.innerHTML = `
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10">
            <div class="card-form p-4">
                <h4 class="form-title mb-3">
                    <i class="fas fa-map-marker-alt"></i>
                    Información previa
                </h4>

                <div class="row">
                    <div class="form-group col-12 col-md-6 m-0">
                        <label class="form-label">Médico</label>
                        <p id="appointMedic">Lorem ipsum</p>
                    </div>
                    <div class="form-group col-12 col-md-6 m-0">
                        <label class="form-label">Tipo de cita</label>
                        <p id="appointType">Lorem ipsum</p>

                    </div>
                    <div class="form-group col-12 col-md-6 m-0">
                        <label>Sede</label>
                        <p id="appointBranchOffice">Lorem ipsum</p>
                    </div>
                    <div class="form-group col-12 col-md-6 m-0">
                        <label>Fecha</label>
                        <p id="appointDate">Lorem ipsum</p>
                    </div>
                    <div class="form-group col-12 col-md-6 m-0">
                        <label>Hora</label>
                        <p id="appointHour">Lorem ipsum</p>
                        </div>
                    </div>
                    
                <form action="" name="frm_appoint_create" enctype="multipart/form-data" method="post">        
                    <input type="hidden" name="_token"">                
                    <input type="hidden" name="idmedic">
                    <input type="hidden" name="date">
                    <input type="hidden" name="hour">
                    <input type="hidden" name="status">
                    <div class="form-group text-center">
                    <button id="appointConfirmBtn" class="btn btn-primary">Confirmar</button>
                    </div>
                </form>
                </div>


                
            </div>
        </div>
    </div>
</div>`;

function loadSchedule() {
    let $availableBranchOffices = document.getElementById("availableBranchoffices");
    let $availableMedics = document.getElementById("availableMedics");
    let $fragment = document.createDocumentFragment();

    $availableBranchOffices.addEventListener("change", () => {
        $availableMedics.innerHTML = "";
        fetch(
            "getmedics/" + $availableBranchOffices.value + "/" +$availableBranchOffices.dataset.area
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
        
        fetch("getdiary/" + $availableMedics.value)
        .then((res) => {
            console.log(res);
            return res.ok ? res.json() : Promise.reject(res);
        })
        .then((json) => {
            console.log(json);
            nav = 0;
            events = json;
            loadCalendar();
            
        });
    });
}



function loadCalendar() {
    $calendarContainer.style.display = "block";
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
                eventDiv.innerText = occupied;

                daySquare.appendChild(eventtitle);
                daySquare.appendChild(eventDiv);
            }

            daySquare.addEventListener("click", () =>
                openModal(eventForDay, dateString)
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




function initButtons() {
    document.querySelector(".next-btn").addEventListener("click", () => {
        nav++;
        loadCalendar();
    });

    document.querySelector(".back-btn").addEventListener("click", () => {
        nav--;
        loadCalendar();
    });
    document.querySelector(".center-btn").addEventListener("click", () => {
        nav = 0;
        loadCalendar();
    });
}

function openModal(eventForDay, dateString) {

    /*Hacer las variables globales */
    console.log("Array enviado desde load", eventForDay);

    const $modalBody = document.getElementById("modalBody");
    $modalBody.innerHTML = "";

    /*--Panel izquierdo de la ventana modal--*/
    const $scheduleScrollBackground = document.createElement("div");
    $scheduleScrollBackground.classList.add("schedule_scroll-background");

    const $scheduleDay = document.createElement("div");
    $scheduleDay.classList.add("schedule_day");

    const $scheduleAllHours = document.getElementsByClassName("schedule_hour-selected");

    const $fragment = document.createDocumentFragment();


    /*--Panel derecho de la ventana modal--*/
    const $scheduleInfoPanel = document.createElement("div");
    $scheduleInfoPanel.id = "scheduleInfoPanel";
    $scheduleInfoPanel.classList.add("schedule_info", "d-none", "d-sm-flex", "flex-column", "justify-content-center", "align-items-center");
    const $scheduleInstructions = document.importNode($templateScheduleInstructions.content, true);                        
                        
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

            $scheduleHour.innerHTML = (n < 12 && n !== 12) ?
                hourString.substring(0, hourString.length - 3) + " am" :
                `${String(hourAfter).padStart(2,"0")}:${String(20 * minutes).padStart(2, "0")} pm`;
                
            minutes++;

            /*Encontrar horas ocupadas si no agregar evento*/
            let occupiedHour = eventForDay.find((e) => $scheduleHour.dataset.hour === e.appoint_start_hour);
            if(occupiedHour){
                $scheduleHour.classList.add("schedule_hour-occupied");
            }
            else{
                $scheduleHour.addEventListener('click', () => {
                    for (const hour of $scheduleAllHours) {
                        hour.classList.remove("schedule_hour-selected");
                    }
                    $scheduleHour.classList.add("schedule_hour-selected");

                    const $scheduleInfoPanel = document.getElementById("scheduleInfoPanel");
                    $scheduleInfoPanel.innerHTML = "";

                    const $scheduleCardInfo = document.importNode($templateScheduleAppointInfo.content, true);
                    $scheduleInfoPanel.appendChild($scheduleCardInfo);
                    
                    const $appointMedic = document.getElementById("appointMedic"),
                        $appointType = document.getElementById("appointType"),
                        $appointBranchOffice = document.getElementById("appointBranchOffice"),
                        $appointHour = document.getElementById("appointHour"),
                        $appointDate = document.getElementById("appointDate"),
                        $appointConfirmBtn = document.getElementById("appointConfirmBtn");

                    const $selectedMedic = document.getElementById("availableMedics");
                    $appointMedic.innerHTML = $selectedMedic.options[$selectedMedic.selectedIndex].innerText;

                    $appointType.innerHTML = document.querySelector(".welcome_title").innerHTML;

                    const $selectedBranchOffice = document.getElementById("availableBranchoffices");
                    $appointBranchOffice.innerHTML = $selectedBranchOffice.options[$selectedBranchOffice.selectedIndex].innerText;

                    $appointHour.innerHTML = $scheduleHour.innerHTML;
                    $appointDate.innerHTML = dateString;
                    
                    const $confirmButton = document.getElementById("appointConfirmBtn");
                    $confirmButton.addEventListener('click', (e) => {
                        e.preventDefault();
                        /*Poner la dirección actual en el action del form*/
                        document.forms.frm_appoint_create.action = location.href.split(/[0-9]/ig)[0] + 'create';

                        /*Preparar los inputs del formulario para ser enviados */
                        const formAppointCreate = document.forms.frm_appoint_create;
                        let csrf = document.querySelector('meta[name="csrf-token"]').content;
                        formAppointCreate._token.value = csrf;
                        formAppointCreate.idmedic.value = $selectedMedic.value;
                        formAppointCreate.date.value = dateString;
                        formAppointCreate.hour.value = $scheduleHour.dataset.hour;
                        formAppointCreate.status.value = '1';


                        console.log(document.forms.frm_appoint_create.action);
                        formAppointCreate.submit();
                    })
                })
            }

            $scheduleDay.appendChild($scheduleHour);
        }
        if (n > 12) hourAfter++;
        minutes = 0;
    }

    $fragment.appendChild($scheduleDay);
    $scheduleScrollBackground.appendChild($fragment);
    $scheduleInfoPanel.appendChild($scheduleInstructions);
    $modalBody.append($scheduleScrollBackground, $scheduleInfoPanel);

}


/*Cargar todo el componente */
initButtons();
loadSchedule();

