<?php
// Desativa a exibição de erros no navegador
error_reporting(0);
ini_set('display_errors', 0);
session_start();
//echo $_SESSION['patients_carteirinha'];
include "../database.php";

// Inicializar variáveis
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
        // Armazena os dados do paciente na sessão
        $row = $result->fetch_assoc();
        $_SESSION['patients_first_name'] = $row['first_name'];
        $_SESSION['patients_last_name'] = $row['last_name'];
        
        // Concatena o nome completo na variável $paciente
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


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selected_department = $_POST['departments'] ?? '';
    $selected_doctor = $_POST['doctors'] ?? '';
    $data = $_POST['data'] ?? '';
    $horario = $_POST['horario'] ?? '';
    $status = "inconcluído";
    $carteirinha = $_SESSION['patients_carteirinha'];
    //$paciente = $_SESSION['patients_first_name'] . " "  . $_SESSION['patients_last_name'];  

    if ($selected_department && $selected_doctor && $data && $horario) {
        $horario = str_replace('h', ':', $horario) . ':00';
        
        // Inserir agendamento no banco de dados
        $stmt = $conn->prepare("INSERT INTO agendamentos (doctor, carteirinhaPaciente, paciente, department, date, status, time) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('sssssss', $selected_doctor, $carteirinha, $paciente, $selected_department, $data, $status, $horario);

        if ($stmt->execute()) {
            echo "<script>alert('Agendamento confirmado com sucesso!');</script>";
        } else {
            echo "<script>alert('Erro ao confirmar o agendamento.');</script>";
        }
        $stmt->close();
    }
}

// Buscar departamentos
$sql_departments = "SELECT id, department_name FROM departments";
$result_departments = $conn->query($sql_departments);

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


    <br><br>

<body>
    <div class="navbar">
        <?php include 'ecommerce/navbar.html'; ?>
    </div>

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


    <script>
    function updateDoctors() {
        var form = document.getElementById('selectionForm');
        form.submit();
    }

    function selectTime(value) {
        var validTime = value.replace('h', ':');
        document.getElementById('horario').value = validTime;

        document.getElementById('selectedHorario').innerText = 'Horário: ' + value;
    }
    </script>
    </head>

    <body>
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
                    </div>
                </div>
                <?php if ($fotoSelecionada) : ?>
                <div class="card">
                    <img src="<?php echo htmlspecialchars($fotoSelecionada['image']); ?>" alt="Imagem do médico">
                    <div class="card-content">
                        <h3>Médico Selecionado: <?php echo htmlspecialchars($selected_doctor); ?></h3>
                        <p>Especialidade: <?php echo htmlspecialchars($selected_department); ?></p>
                        <p>Data: <?php echo htmlspecialchars($data); ?></p>
                        <p id="selectedHorario">Horário: <?php echo htmlspecialchars($horario); ?></p>
                    </div>
                </div>
                <?php endif; ?>
                <br>
                <button class="btn btn-primary confirm-button" type="submit">Confirmar Agendamento</button>
            </form>
        </div>
    </body>
    <div class="footer">
        <?php include 'navEfooter/footer.html';?>
    </div>

</html>