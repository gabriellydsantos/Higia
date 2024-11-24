<?php
// Iniciar a sessão e incluir a conexão com o banco de dados
session_start();
include "../database.php";
error_reporting(0);
ini_set('display_errors', 0);
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

    if ($selected_department && $selected_doctor && $data && $horario) {
        $horario = str_replace('h', ':', $horario);

        // Verificar se o horário já está ocupado para o mesmo médico na mesma data
        $stmt = $conn->prepare("SELECT * FROM agendamentos WHERE doctor = ? AND date = ? AND time = ?");
        $stmt->bind_param('sss', $selected_doctor, $data, $horario);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $message = "Este horário já está ocupado. Por favor, escolha outro.";
        } else {
            // Pesquisa o id do doutor com base no seu nome
            $query = "SELECT id FROM doctors WHERE username = ? LIMIT 1";
            $stmt = $conn->prepare($query);

            if ($stmt) {
                $stmt->bind_param("s", $selected_doctor);
                $stmt->execute();
                
                $resultado = $stmt->get_result();
                $doutor = $resultado->fetch_assoc();
                
                if ($doutor && isset($doutor['id'])) {
                    $id_doutor = $doutor['id'];
                } else {
                    echo "Doutor não encontrado para o nome fornecido.";
                    $id_doutor = null;
                }
                $stmt->close();
            } else {
                echo "Erro ao preparar a consulta: " . $conn->error;
            }

            // Pesquisa o id do paciente com base na carteirinha
            $query2 = "SELECT id FROM patients WHERE carteirinha = ? LIMIT 1";
            $stmt2 = $conn->prepare($query2);

            if ($stmt2) {
                $stmt2->bind_param("s", $carteirinha);
                $stmt2->execute();
                
                $resultado2 = $stmt2->get_result();
                $paciente = $resultado2->fetch_assoc();
                
                if ($paciente && isset($paciente['id'])) {
                    $id_paciente = $paciente['id'];
                } else {
                    echo "Paciente não encontrado para a carteirinha fornecida.";
                    $id_paciente = null;
                }
                $stmt2->close();
            } else {
                echo "Erro ao preparar a consulta: " . $conn->error;
            }

            // Inserir agendamento no banco de dados
            $stmt3 = $conn->prepare("INSERT INTO agendamentos (id_paciente, id_medico, doctor, carteirinhaPaciente, paciente, department, date, status, time) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            $stmt3->bind_param('iisssssss', $id_paciente, $id_doutor, $selected_doctor, $carteirinha, $paciente, $selected_department, $data, $status, $horario);

            if ($stmt3->execute()) {
                $message = "Agendamento confirmado com sucesso!";
            } else {
                $message = "Erro ao confirmar o agendamento.";
            }
            $stmt3->close();
        }
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
    <script src="https://cdn.userway.org/widget.js" data-account="xGxZhlc6l4"></script>
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

<style>
.alert-message {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #FAD939;
    color: #333;
    padding: 15px;
    border-radius: 5px;
    font-weight: bold;
    display: none;
    /* Inicialmente escondido */
    z-index: 9999;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
}
</style>

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
                <img src="<?php echo htmlspecialchars($fotoSelecionada['image']); ?>" alt="Imagem do médico"
                    class="doctor-photo">
                <div class="card-content">
                    <h3>Médico Selecionado: <?php echo htmlspecialchars($selected_doctor); ?></h3>
                    <p>Especialidade: <?php echo htmlspecialchars($department_name); ?></p>
                    <p>Data: <?php echo htmlspecialchars($data); ?></p>
                    <p id="selectedHorario">Horário Selecionado: <?php echo htmlspecialchars($horario); ?></p>
                </div>
            </div>
            <?php endif; ?> <br><br>


            <div class="confirm-button">
                <button type="submit" name="confirmar" class="btn-confirmar">Confirmar Agendamento</button>
            </div>

        </form>

        <?php if (isset($message)) : ?>
        <script>
        window.onload = function() {
            // Exibe o alerta
            var message = "<?php echo htmlspecialchars($message); ?>";
            var alertElement = document.createElement('div');
            alertElement.classList.add('alert-message');
            alertElement.innerText = message;

            // Adiciona o alerta à página
            document.body.appendChild(alertElement);

            // Exibe o alerta
            alertElement.style.display = 'block';

            // Remove o alerta após 5 segundos
            setTimeout(function() {
                alertElement.style.display = 'none';
            }, 5000);
        };
        </script>
        <?php endif; ?>
    </div>

    <div class="footer">
        <?php include 'navEfooter/footer.html'; ?>
    </div>


</body>

</html>