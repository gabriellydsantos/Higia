const professionalsBySpecialty = {
    ortopedia: [
        { id: "dr_silva", name: "Dr. Silva" }
    ],
    nutricionista: [
        { id: "dr_oliveira", name: "Dr. Oliveira" }
    ]
};

function updateSpecialty() {
    const specialty = document.getElementById("specialty").value;
    const professionalSelect = document.getElementById("professional");
    const selectedSpecialtyCard = document.getElementById(`${specialty}-card`);

    document.getElementById("selected-specialty").textContent = specialty.charAt(0).toUpperCase() + specialty.slice(1);

    document.querySelectorAll(".exam-card").forEach(card => card.classList.remove("show"));
    if (selectedSpecialtyCard) {
        selectedSpecialtyCard.classList.add("show");
    }

    professionalSelect.innerHTML = '<option value="" disabled selected>Selecione o profissional</option>';
    if (specialty in professionalsBySpecialty) {
        professionalsBySpecialty[specialty].forEach(professional => {
            const option = document.createElement("option");
            option.value = professional.id;
            option.textContent = professional.name;
            professionalSelect.appendChild(option);
        });
        professionalSelect.disabled = false;
    } else {
        professionalSelect.disabled = true;
    }

    document.querySelector(".appointment-card").classList.remove("show");
    document.getElementById("appointment-date").innerHTML = '<option value="" disabled selected>Data da consulta</option>';
    document.getElementById("availability").innerHTML = '';
}

function updateProfessional() {
    const professionalId = document.getElementById("professional").value;

    document.querySelectorAll(".doctor-card").forEach(card => card.classList.remove("show"));

    const selectedDoctorCard = document.getElementById(`${professionalId}-card`);
    if (selectedDoctorCard) {
        selectedDoctorCard.classList.add("show");
    }
    document.querySelector(".appointment-card").classList.add("show");

    const dates = ["2024-07-30", "2024-07-31", "2024-08-01", "2024-08-02"];
    const dateSelect = document.getElementById("appointment-date");
    dates.forEach(date => {
        const option = document.createElement("option");
        option.value = date;
        option.textContent = new Date(date).toLocaleDateString("pt-BR", { weekday: 'long', day: 'numeric', month: 'long' });
        dateSelect.appendChild(option);
    });
}

function updateAvailability() {
    const selectedDate = document.getElementById("appointment-date").value;
    const availabilityDiv = document.getElementById("availability");

    availabilityDiv.innerHTML = '';

    const hours = ["09:00", "10:00", "11:00", "14:00", "15:00"];
    hours.forEach(hour => {
        const div = document.createElement("div");
        div.className = "day";
        div.innerHTML = `<h5>${new Date(selectedDate).toLocaleDateString("pt-BR", { weekday: 'long' })}</h5><p>${hour}</p><button onclick="confirmAppointment('${hour}')">Agendar</button>`;
        availabilityDiv.appendChild(div);
    });
}

function confirmAppointment(time) {
    alert(`Agendamento confirmado para ${time}.`);
}

function clearFilters() {
    document.getElementById("specialty").value = "";
    document.getElementById("professional").value = "";
    document.getElementById("professional").disabled = true;
    document.querySelectorAll(".exam-card, .doctor-card, .appointment-card").forEach(card => card.classList.remove("show"));
    document.getElementById("selected-specialty").textContent = "";
}

function clearSelection(specialty) {
    document.getElementById(`${specialty}-card`).classList.remove("show");
    document.getElementById("specialty").value = "";
    document.getElementById("professional").value = "";
    document.getElementById("professional").disabled = true;
    document.querySelector(".appointment-card").classList.remove("show");
}
