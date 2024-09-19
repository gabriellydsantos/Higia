<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .trash-icon {
            color: red;
            font-size: 24px; 
        }
        body {
            background-color: #FAFAFA;
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
        }
        h1 {
            font-weight: 300;
            text-align: left;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .filters {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .filters .filter-container {
            flex: 1;
            margin-right: 20px;
            min-width: 200px;
        }
        .filters .filter-container:last-child {
            margin-right: 0;
        }
        .filters select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            background-color: #FFFFFF;
            color: #333;
            border-radius: 5px;
            font-size: 14px;
        }
        .filters .clear-filters {
            font-size: 14px;
            color: #000;
            cursor: pointer;
            text-align: right;
            margin-top: 10px;
        }
        .exam-selected {
            margin: 20px 0;
            color: #888;
            font-size: 14px;
        }
        .exam-card {
            display: none; 
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            position: relative;
        }
        .exam-card.show {
            display: block; 
        }
        .exam-card h3 {
            margin: 0 0 10px 0;
            font-size: 18px;
        }
        .exam-card p {
            margin: 5px 0;
            color: #888;
            font-size: 14px;
        }
        .trash-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            color: #f00;
            cursor: pointer;
            font-size: 18px;
        }
        .doctor-card {
            display: none; 
            background-color: #E0F7FA;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
            width: 30%;
            box-sizing: border-box;
            margin-right: 2%;
            margin-bottom: 20px;
        }
        .doctor-card.show {
            display: block; 
        }
        .doctor-card img {
            border-radius: 50%;
            width: 80px;
            height: 80px;
            display: block;
            margin: 0 auto 10px auto;
        }
        .doctor-card h4 {
            margin: 10px 0;
            color: #01579B;
            font-size: 16px;
        }
        .doctor-card p {
            margin: 5px 0;
            color: #888;
            font-size: 14px;
        }
        .stars {
            color: #FFD700;
            font-size: 14px;
        }
        .appointment-card {
            display: none; 
            background-color: #E0F7FA;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
            width: 100%;
            box-sizing: border-box;
        }
        .appointment-card.show {
            display: block; 
        }
        .appointment-card select,
        .appointment-card button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            background-color: #FFFFFF;
            color: #333;
            border-radius: 5px;
            font-size: 14px;
        }
        .days {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .day {
            width: 23%;
            text-align: center;
            margin-bottom: 10px;
        }
        .day h5 {
            margin: 0;
            color: #000;
            font-size: 14px;
        }
        .day p {
            margin: 5px 0;
            color: #888;
            font-size: 14px;
        }
        .times {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 10px;
        }
        .time-slot {
            width: 80%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
            background-color: #FFFFFF;
            color: #333;
            margin-bottom: 5px;
        }
        .time-slot.selected {
            background-color: #01579B;
            color: #FFFFFF;
        }
        .confirm-button {
            background-color: #01579B;
            color: #fff;
            border: none;
            cursor: pointer;
            width: 100%;
            padding: 15px;
            font-size: 16px;
            border-radius: 5px;
            text-transform: uppercase;
        }
        .confirm-button:hover {
            background-color: #014570;
            color: #fff;
        }
        .clear {
            clear: both;
        }
        .date-container {
            position: relative;
            width: 25%;
        }
        .date-label {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            background-color: #FAFAFA; 
            padding: 0 5px;
            color: #999;
            font-size: 14px;
            pointer-events: none;
            transition: 0.2s;
        }
        input[type="date"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            background-color: #fff;
            color: #333;
        }
        input[type="date"]:focus + .date-label,
        input[type="date"]:not(:placeholder-shown) + .date-label {
            top: -10px;
            left: 10px;
            font-size: 12px;
            background-color: #FAFAFA;
        }
        .marcar {
    display: flex;
    justify-content: space-between;
    align-items: flex-start; 
    gap: 20px; 
}

.appointment-card, .doctor-card {
    max-width: 80%;
}
        @media (max-width: 768px) {
    .date-label {
        display: none; /* Esconde o label em dispositivos móveis */
    }
}
        @media (max-width: 768px) {
            .container {
                width: 95%;
            }
            .doctor-card {
                width: 48%;
                margin-right: 2%;
                margin-bottom: 10px;
            }
            .day {
                width: 48%;
                margin-bottom: 10px;
            }
            .filters {
                flex-direction: column;
            }
            .filters .filter-container {
                margin-right: 0;
                margin-bottom: 10px;
            }
            .filters .filter-container:last-child {
                margin-bottom: 0;
            }
        }
        @media (max-width: 480px) {
            .doctor-card {
                width: 100%;
                margin-bottom: 10px;
            }
            .day {
                width: 100%;
                margin-bottom: 10px;
            }
            .confirm-button {
                padding: 10px;
                font-size: 14px;
            }
        }
    </style>
</head> <div class="navbar">
        <?php include 'ecommerce/navbar.html'; ?>
    </div>
    <br><br>
<body>
<div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
    new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>
    <div class="container">
        <h1>Agendamento</h1>
        <div class="filters">
            <div class="filter-container">
                <select id="specialty" onchange="updateSpecialty()">
                    <option value="" disabled selected>Selecione a especialidade</option>
                    <option value="ortopedia">Ortopedia</option>
                    <option value="nutricionista">Nutricionista</option>
                </select>
            </div>
            <div class="filter-container">
                <select id="professional" disabled onchange="updateProfessional()">
                    <option value="" disabled selected>Selecione o profissional</option>
                </select>
            </div>
            <div class="clear-filters" onclick="clearFilters()">Limpar filtros X</div>
        </div>
        <div class="exam-selected">Exame selecionado: <span id="selected-specialty"></span></div>
        <div id="ortopedia-card" class="exam-card">
            <h3>Ortopedia</h3>
            <p>Atenção: se o pedido do exame possui data, certifique-se de que está dentro da validade de 30 dias.</p>
            <i class="fas fa-trash trash-icon" onclick="clearFilters()"></i>
        </div>
        <div id="nutricionista-card" class="exam-card">
            <h3>Nutricionista</h3>
            <p>Recomendação de consulta nutricional para avaliação dietética e acompanhamento.</p>
            <i class="fas fa-trash trash-icon" onclick="clearFilters()"></i>
        </div>
        <div class="marcar">
        <div id="dr_silva-card" class="doctor-card">
            <div class="perfil-photo">
                <img src="img/perfil.jfif" alt="">
            </div>
            <h4>Dr. Silva</h4>
            <p>Especialidade: Ortopedia</p>
            <p class="stars">★★★★☆ (97)</p>
        </div>
        <div id="dr_oliveira-card" class="doctor-card">
            <img src="doctor-profile.jpg" alt="Dr. Oliveira">
            <h4>Dr. Oliveira</h4>
            <p>Especialidade: Nutrição</p>
            <p class="stars">★★★★☆ (89)</p>
        </div>
        <div id="appointment-card" class="appointment-card">
            <div class="date-container">
                <label for="appointment-date" class="date-label">Data da consulta</label>
                <input type="date" id="appointment-date" onchange="updateDays()">
            </div>
            </select>
            <br>
            <div class="days">
                <div class="day" id="day1">
                    <h5>SEG</h5>
                    <p id="day1-date"></p>
                    <div class="times" id="times-day1"></div>
                </div>
                <div class="day" id="day2">
                    <h5>TER</h5>
                    <p id="day2-date"></p>
                    <div class="times" id="times-day2"></div>
                </div>
                <div class="day" id="day3">
                    <h5>QUA</h5>
                    <p id="day3-date"></p>
                    <div class="times" id="times-day3"></div>
                </div>
                <div class="day" id="day4">
                    <h5>QUI</h5>
                    <p id="day4-date"></p>
                    <div class="times" id="times-day4"></div>
                </div>
            </div>
            <button class="confirm-button">Confirmar Consulta</button>
        </div>
        </div>
        <div class="clear"></div>
    </div>
    <script>
        function updateSpecialty() {
            const specialty = document.getElementById('specialty').value;
            const professionalSelect = document.getElementById('professional');
            const specialtyText = document.getElementById('selected-specialty');
            
            document.getElementById('ortopedia-card').classList.remove('show');
            document.getElementById('nutricionista-card').classList.remove('show');
            
            specialtyText.textContent = specialty.charAt(0).toUpperCase() + specialty.slice(1);
            
            professionalSelect.innerHTML = '<option value="" disabled selected>Selecione o profissional</option>';
            professionalSelect.disabled = false;

            if (specialty === 'ortopedia') {
                professionalSelect.innerHTML += '<option value="dr_silva">Dr. Silva</option>';
                document.getElementById('ortopedia-card').classList.add('show');
            } else if (specialty === 'nutricionista') {
                professionalSelect.innerHTML += '<option value="dr_oliveira">Dr. Oliveira</option>';
                document.getElementById('nutricionista-card').classList.add('show');
            }
        }

        function updateProfessional() {
            const professional = document.getElementById('professional').value;

            document.getElementById('dr_silva-card').classList.remove('show');
            document.getElementById('dr_oliveira-card').classList.remove('show');
            document.getElementById('appointment-card').classList.remove('show');

            if (professional === 'dr_silva') {
                document.getElementById('dr_silva-card').classList.add('show');
                document.getElementById('appointment-card').classList.add('show');
            } else if (professional === 'dr_oliveira') {
                document.getElementById('dr_oliveira-card').classList.add('show');
                document.getElementById('appointment-card').classList.add('show');
            }
        }

        function updateDays() {
    const appointmentDate = document.getElementById('appointment-date').value;
    const date = new Date(appointmentDate);
    
    const daysOfWeek = ['DOM', 'SEG', 'TER', 'QUA', 'QUI', 'SEX', 'SÁB'];
    
    const startDate = new Date(date);
    
    const days = ['day1', 'day2', 'day3', 'day4', 'day5', 'day6', 'day7'];
    const selectedDayIndex = date.getDay(); 
    
    days.forEach((day, index) => {
        const currentDate = new Date(startDate);
        currentDate.setDate(startDate.getDate() + index);
        const dayElement = document.getElementById(day);
        const options = { day: '2-digit', month: '2-digit', year: 'numeric' };
        dayElement.querySelector('h5').textContent = daysOfWeek[currentDate.getDay()];
        dayElement.querySelector('p').textContent = currentDate.toLocaleDateString('pt-BR', options);
        
        if (currentDate.toDateString() === date.toDateString()) {
            dayElement.classList.add('highlight');
        } else {
            dayElement.classList.remove('highlight');
        }
        
        
        const timesElement = document.getElementById(`times-${day}`);
        timesElement.innerHTML = '';
        const times = ['08:00', '09:00', '10:00', '11:00']; 
        times.forEach(time => {
            const timeSlot = document.createElement('div');
            timeSlot.classList.add('time-slot');
            timeSlot.textContent = time;
            timeSlot.onclick = () => selectTime(timeSlot);
            timesElement.appendChild(timeSlot);
        });
    });
}



        function selectTime(element) {
            const slots = document.querySelectorAll('.time-slot');
            slots.forEach(slot => slot.classList.remove('selected'));
            element.classList.add('selected');
        }

        function clearFilters() {
            const specialtySelect = document.getElementById("specialty");
            const professionalSelect = document.getElementById("professional");
            
            specialtySelect.value = "";
            professionalSelect.value = "";
            professionalSelect.disabled = true;
            document.querySelectorAll('.exam-card').forEach(card => card.classList.remove('show'));
            document.querySelectorAll('.doctor-card').forEach(card => card.classList.remove('show'));
            document.getElementById("selected-specialty").textContent = "";
            document.getElementById("appointment-card").classList.remove("show");
        }
    </script>
</body>
<div class="footer">
        <?php include 'navEfooter/footer.html';?>
    </div>
</html>
