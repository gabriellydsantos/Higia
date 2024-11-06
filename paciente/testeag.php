<?php
// Iniciar a sessão e incluir a conexão com o banco de dados
session_start();
include "../database.php";

// Variáveis para dados do paciente
$selected_department = '';
$selected_doctor = '';
$horario = '';
$data = '';

// Verifica se a carteirinha está definida na sessão
if (isset($_SESSION['patients_carteirinha'])) {
    $carteirinha = $_SESSION['patients_carteirinha'];

    // Consulta para obter o nome e o sobrenome do paciente
    $stmt = $conn->prepare("SELECT first_name, last_name FROM patients WHERE carteirinha = ?");
    $stmt->bind_param("s", $carteirinha);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['patients_first_name'] = $row['first_name'];
        $_SESSION['patients_last_name'] = $row['last_name'];
        $paciente = $_SESSION['patients_first_name'] . " " . $_SESSION['patients_last_name'];
    } else {
        echo "Paciente não encontrado.";
        exit;
    }
    $stmt->close();
} else {
    echo "Carteirinha não definida na sessão.";
    exit;
}

// Processa o agendamento quando o formulário é enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selected_department = $_POST['departments'] ?? '';
    $selected_doctor = $_POST['doctors'] ?? '';
    $data = $_POST['data'] ?? '';
    $horario = $_POST['horario'] ?? '';
    $status = "inconcluído";
    $carteirinha = $_SESSION['patients_carteirinha'];

    if ($selected_department && $selected_doctor && $data && $horario) {
        $horario = str_replace('h', ':', $horario);

        // Inserir agendamento no banco de dados
        $stmt = $conn->prepare("INSERT INTO agendamentos (doctor, carteirinhaPaciente, paciente, department, date, status, time) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('sssssss', $selected_doctor, $carteirinha, $paciente, $selected_department, $data, $status, $horario);

        if ($stmt->execute()) {
            $message = "Agendamento confirmado com sucesso!";
        } else {
            $message = "Erro ao confirmar o agendamento.";
        }
        $stmt->close();
    }
}

// Consultar departamentos
$sql_departments = "SELECT id, department_name FROM departments";
$result_departments = $conn->query($sql_departments);
if ($selected_department) {
    $stmt = $conn->prepare("SELECT department_name FROM departments WHERE id = ?");
    $stmt->bind_param('i', $selected_department);
    $stmt->execute();
    $result = $stmt->get_result();
    $department_row = $result->fetch_assoc();
    $department_name = $department_row['department_name'];
    $stmt->close();
}

// Consultar médicos para um departamento selecionado
$doctors_options = '';
if ($selected_department) {
    $stmt = $conn->prepare("SELECT username, image FROM doctors WHERE department = (SELECT department_name FROM departments WHERE id = ?)");
    $stmt->bind_param('i', $selected_department);
    $stmt->execute();
    $result_doctors = $stmt->get_result();

    while ($row = $result_doctors->fetch_assoc()) {
        $selected = ($row['username'] == $selected_doctor) ? 'selected' : '';
        $doctors_options .= '<option value="' . htmlspecialchars($row['username']) . '" ' . $selected . '>' . htmlspecialchars($row['username']) . '</option>';
    }
}

$fotoSelecionada = null;
if ($selected_doctor) {
    $stmt = $conn->prepare("SELECT image FROM doctors WHERE username = ?");
    $stmt->bind_param("s", $selected_doctor);
    $stmt->execute();
    $result = $stmt->get_result();
    $fotoSelecionada = $result->fetch_assoc();
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleção de Departamento e Médico</title>
    <link rel="stylesheet" href="agendamento.css">

    <script>
    function updateDoctors() {
        var form = document.getElementById('selectionForm');
        form.submit();
    }

    function selectTime(value) {
        var validTime = value.replace('h', ':');
        document.getElementById('horario').value = validTime;
        document.getElementById('selectedHorario').innerText = 'Horário Selecionado: ' + validTime;
    }
    </script>

</head>

<body>
    <div class="navbar">
        <?php include 'ecommerce/navbar.html'; ?>
    </div>

    <div class="container">
        <h1>Agendamento</h1>
        <form id="selectionForm" method="post">
            <div class="form-container">
                <div class="left-column">
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
                </div>
                <div class="right-column">
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
                                    <tr><td class='days'>";

                            if ($selected_doctor && $data) {
                                $stmt = $conn->prepare("SELECT horario FROM appointments WHERE medico = ? AND data = ?");
                                $stmt->bind_param('ss', $selected_doctor, $data);
                                $stmt->execute();
                                $result = $stmt->get_result();

                                $appointments = [];
                                while ($row = $result->fetch_assoc()) {
                                    $appointments[] = $row['horario'];
                                }
                                $stmt->close();
                            }

                            if (!empty($appointments)) {
                                foreach ($appointments as $horario) {
                                    echo "<button type='button' value='" . htmlspecialchars($horario) . "' name='horario' class='day' onclick='selectTime(this.value)'>" . htmlspecialchars($horario) . "</button>";
                                }
                            } else {
                                echo "<p>Nenhum horário disponível.</p>";
                            }

                            echo "</td></tr></table>";
                        }
                    }
                    ?>
                </div>
            </div>


            <?php if ($fotoSelecionada) : ?>
            <div class="card">
                <img src="<?php echo htmlspecialchars($fotoSelecionada['image']); ?>" alt="Imagem do médico">
                <div class="card-content">
                    <h3>Médico Selecionado: <?php echo htmlspecialchars($selected_doctor); ?></h3>
                    <p>Especialidade: <?php echo htmlspecialchars($department_name); ?></p>
                    <p>Data: <?php echo htmlspecialchars($data); ?></p>
                    <p id="selectedHorario">Horário Selecionado: <?php echo htmlspecialchars($horario); ?></p>
                </div>
            </div>
            <?php endif; ?>
            <br>
            <button class="btn btn-primary confirm-button" type="submit">Confirmar Agendamento</button>
        </form>
    </div>

    <?php if (isset($message)) : ?>
    <div class="alert-message">
        <p><?php echo htmlspecialchars($message); ?></p>
    </div>
    <?php endif; ?>

    <style>
    /* Estilo do alert */
    .alert-message {
        position: fixed;
        top: 45%;
        right: 45%;
        background-color: #FAD939;
        color: #333;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        font-size: 16px;
        z-index: 9999;
        opacity: 1;
        transition: opacity 0.5s ease-in-out;
    }

    .alert-message p {
        margin: 0;
    }

    .alert-message.close {
        opacity: 0;
    }

    .alert-message.success {
        background-color: #FAD939;
        color: #FAD939;
    }

    .alert-message.error {
        background-color: #FAD939;
        color: #FAD939;
    }

    .alert-message.warning {
        background-color: #FAD939;
        color: #856404;
    }
    </style>

    <script>
    window.onload = function() {
        var alertMessage = document.querySelector('.alert-message');
        if (alertMessage) {
            setTimeout(function() {
                alertMessage.classList.add('close');
            }, 5000); // Alerta desaparece após 5 segundos
        }
    };
    </script>

</body>
<div class="footer">
    <?php include 'navEfooter/footer.html';?>
</div>


</div>
</body>

</html>