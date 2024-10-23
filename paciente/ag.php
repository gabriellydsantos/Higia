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

        input[type="date"]:focus+.date-label,
        input[type="date"]:not(:placeholder-shown)+.date-label {
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

        .appointment-card,
        .doctor-card {
            max-width: 80%;
        }

        @media (max-width: 768px) {
            .date-label {
                display: none;
                /* Esconde o label em dispositivos móveis */
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
    </style> <!-- acessibilidade -->
    <script src="https://cdn.userway.org/widget.js" data-account="xGxZhlc6l4"></script>


</head>
<div class="navbar">
    <?php include 'ecommerce/navbar.html'; ?>
</div>
<br><br>

<script>
    function updateDoctors() {
        var form = document.getElementById('selectionForm');
        form.submit();
    }

    function selectTime(value) {
        var validTime = value.replace('h', ':');
        document.getElementById('horario').value = validTime;

        // Atualizar o texto do card com o horário selecionado
        document.getElementById('selectedHorario').innerText = 'Horário: ' + value;
    }
</script> <!-- acessibilidade -->
<script src="https://cdn.userway.org/widget.js" data-account="xGxZhlc6l4"></script>


</head>

<body>
    <div class="container">
        <h1>Agendamento</h1>
        <form id="selectionForm" method="post">
            <label for="departments">Escolha a especialidade médica:</label>
            <select id="departments" name="departments" onchange="updateDoctors()" class="form-select">
                <option value="">Selecione a especialidade</option>
                <?php
                if ($result_departments->num_rows > 0) {
                    while ($row = $result_departments->fetch_assoc()) {
                        $selected = ($row['id'] == $selected_department) ? 'selected' : '';
                        echo '<option value="' . htmlspecialchars($row['id']) . '" ' . $selected . '>' . htmlspecialchars($row['department_name']) . '</option>';
                    }
                } else {
                    echo '<option value="">Nenhum departamento encontrado</option>';
                }
                ?>
            </select>

            <label for="doctors">Escolha um médico:</label>
            <select id="doctors" name="doctors" class="form-select">
                <option value="">Selecione um médico</option>
                <?php echo $doctors_options; ?>
            </select>

            <label for="data">Escolha uma data:</label>
            <div class="input-group mb-3">
                <input type="date" class="form-control" name="data" value="<?php echo $data; ?>" required
                    onchange="document.getElementById('selectionForm').submit();">
                <input type="hidden" name="horario" id="horario" value="<?php echo $horario; ?>">
            </div>

            <?php
            if ($data) {
                $data_timestamp = strtotime($data);
                $data_atual_timestamp = strtotime(date("Y-m-d"));

                if ($data_timestamp < $data_atual_timestamp) {
                    echo "<p style='color: red; font-weight: 700;'>A data " . date("d/m/Y", $data_timestamp) . " já aconteceu, por favor insira uma data válida.</p>";
                } else {
                    $diaDaSemana = date('w', $data_timestamp);
                    $data_formatada = date('l, d/m/Y', $data_timestamp);
                    echo "<table class='table-info'>
                            <tr><td>" . $data_formatada . "</td></tr>
                            <tr>
                                <td class='days'>
                                    <button type='button' value='08h00' name='horario' class='day' onclick='selectTime(this.value)'>08h</button>
                                    <button type='button' value='10h00' name='horario' class='day' onclick='selectTime(this.value)'>10h</button>
                                    <button type='button' value='13h00' name='horario' class='day' onclick='selectTime(this.value)'>13h</button>
                                    <button type='button' value='15h00' name='horario' class='day' onclick='selectTime(this.value)'>15h</button>
                                </td>
                            </tr>
                        </table>";
                }
            }
            ?>

            <?php if ($fotoSelecionada) : ?>
                <div class="card">
                    <div class="card-content">
                        <h3>Médico Selecionado: <?php echo htmlspecialchars($selected_doctor); ?></h3>
                        <p>Especialidade: <?php echo htmlspecialchars($selected_department); ?></p>
                        <p>Data: <?php echo htmlspecialchars($data); ?></p>
                        <p id="selectedHorario">Horário: <?php echo htmlspecialchars($horario); ?></p>
                        <img src="<?php echo htmlspecialchars($fotoSelecionada['image']); ?>" alt="Imagem do médico">
                    </div>
                </div>
            <?php endif; ?>
            <br>
            <!-- Botão de envio do formulário -->
            <button class="btn btn-primary confirm-button" type="submit">Confirmar Agendamento</button>
        </form>
    </div>
</body>
<div class="footer">
    <?php include 'navEfooter/footer.html'; ?>
</div>

</html>