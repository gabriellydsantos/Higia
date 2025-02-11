<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon_io/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon_io/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon_io/favicon-16x16.png" />
    <link rel="manifest" href="../site.webmanifest" />
    <title>Higia</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css" />
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/select2.min.css" />
    <link rel="stylesheet" href="../assets/plugins/datatables/datatables.min.css" />
    <link rel="stylesheet" href="../assets/css/feather.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <?php
    include "conexao.php";

    session_start();
    //echo "Bem-vindo, " . $_SESSION['doctor_username'];
    error_reporting(0);
    ini_set('display_errors', 0);

    // Verificar se o usuário está logado
    $id = $_SESSION['doctor_id'];
    if (!isset($id)) {
        header("Location: index.php");
        exit();
    }
    ?>
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

    <script src="https://cdn.userway.org/widget.js" data-account="xGxZhlc6l4"></script>

    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="doctor-dashboard.php" class="logo">
                    <img src="../assets/img/logo 1.png" width="100" height="40" alt />
                </a>
            </div>
            <a id="mobile_btn" class="mobile_btn float-start" href="#sidebar"><img
                    src="../assets/img/icons/bar-icon.svg" alt /></a>
            <ul class="nav user-menu float-end">
                <li class="nav-item dropdown has-arrow user-profile-list">
                    <a href="/medic/#" class="dropdown-toggle nav-link user-link" data-bs-toggle="dropdown">
                        <div class="user-names">
                            <h5><?php
                                include "conexao.php";


                                echo $_SESSION['doctor_username'];
                                ?></h5>
                            <span>Médico</span>
                        </div>
                        <span class="user-img">
                            <?php
                            echo "<img src='" . $_SESSION['doctor_image'] . "' alt='Admin'/>";
                            ?>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.php">Meu Perfil</a>
                        <a class="dropdown-item" href="logout.php">Sair</a>
                    </div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-end">
                <a href="/medic/#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
                        class="fa-solid fa-ellipsis-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="profile.php">Meu Perfil</a>
                    <a class="dropdown-item" href="logout.php">Sair</a>
                </div>
            </div>
        </div>

        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Interface Base</li>

                        <li class="submenu">
                            <a href="/medic/#"><span class="menu-side"><img src="../assets/img/icons/menu-icon-01.svg"
                                        alt="" /></span>
                                <span> Controle </span>
                                <span class="menu-arrow"></span></a>
                            <ul style="display: none">
                                <li><a href="doctor-dashboard.php">Painel do Médico</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="/medic/#"><span class="menu-side"><img src="../assets/img/icons/menu-icon-04.svg"
                                        alt="" /></span>
                                <span> Consultas </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none">
                                <li><a href="appointments.php">Lista de Consultas</a></li>
                                <li><a href="appointmentsDia.php">Consultas de hoje</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="/medic/#"><span class="menu-side"><img src="../assets/img/icons/menu-icon-05.svg"
                                        alt="" /></span>
                                <span> Agenda</span>
                                <span class="menu-arrow"></span></a>
                            <ul style="display: none">
                                <li><a href="fullcalendar/index.php">Agenda</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><span class="menu-side"><img src="../assets/img/icons/menu-icon-13.svg"
                                        alt></span> <span> Receita</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="compose.php">Receita</a></li>
                                <li><a href="view.php">Lista de Receitas</a></li>
                            </ul>
                        </li>

                        <li class="submenu">
                            <a href="#"><span class="menu-side"><img src="../assets/img/icons/menu-icon-15.svg"
                                        alt></span> <span>Encaminhamento</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="reagendamento.php">Gerar Guia</a></li>
                                <li><a href="viewGuia.php">Listar Guias</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="logout-btn">
                        <a href="logout.php"><span class="menu-side"><img src="../assets/img/icons/logout.svg"
                                    alt="" /></span>
                            <span>Sair</span></a>
                    </div>
                </div>
            </div>
        </div>


        <div class="page-wrapper">
            <div class="content">
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/medic/index.php">Dashboard </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <i class="feather-chevron-right"></i>
                                </li>
                                <li class="breadcrumb-item active">Painel médico</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="good-morning-blk">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="morning-user">
                                <h2>Olá, Médico(a)
                                    <span><?php echo $_SESSION['doctor_first_name'] . " " . $_SESSION['doctor_last_name'];  ?></span>
                                </h2>
                                <p>Tenha um bom dia de trabalho</p>
                            </div>
                        </div>
                        <div class="col-md-6 position-blk">
                            <div class="morning-img">
                                <!-- <img src="../assets/img/morning-img-01.png" alt> -->
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <!-- Compromissos -->
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <div class="dash-boxs comman-flex-center">
                                <img src="../assets/img/icons/calendar.svg" alt />
                            </div>
                            <?php
                // Consulta para contar o número de linhas na tabela agendamentos
                $sql_agendamentos = "SELECT COUNT(*) AS total_agendamentos FROM agendamentos";
                $result_agendamentos = $conn->query($sql_agendamentos);
                $total_agendamentos = ($result_agendamentos->num_rows > 0) ? $result_agendamentos->fetch_assoc()['total_agendamentos'] : 0;

                // Consulta para contar o número de linhas na tabela events
                $sql_events = "SELECT COUNT(*) AS total_events FROM events";
                $result_events = $conn->query($sql_events);
                $total_events = ($result_events->num_rows > 0) ? $result_events->fetch_assoc()['total_events'] : 0;

                // Soma dos totais das duas tabelas
                $total_linhas = $total_agendamentos + $total_events;
            ?>
                            <div class="dash-content dash-count">
                                <h4>Compromissos</h4>
                                <h2><span class="counter-up"><?php echo $total_linhas; ?></span></h2>
                                <p>
                                    <span class="passive-view"><i class="feather-arrow-up-right me-1"></i>40%</span>
                                    Mês Passado
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Pacientes -->
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <div class="dash-boxs comman-flex-center">
                                <img src="../assets/img/icons/profile-add.svg" alt />
                            </div>
                            <div class="dash-content dash-count">
                                <h4>Pacientes</h4>
                                <h2><span class="counter-up">
                                        <?php
                    // Consulta para contar o número de pacientes
                    $sql_pacientes = "SELECT COUNT(*) AS total_pacientes FROM patients";
                    $result_pacientes = $conn->query($sql_pacientes);
                    if ($result_pacientes->num_rows > 0) {
                        $row = $result_pacientes->fetch_assoc();
                        echo $row['total_pacientes'];
                    } else {
                        echo "0";
                    }
                    ?>
                                    </span></h2>
                                <p>
                                    <span class="passive-view"><i class="feather-arrow-up-right me-1"></i>20%</span>
                                    vs Mês passado
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Cancelados -->
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <div class="dash-boxs comman-flex-center">
                                <img src="../assets/img/icons/scissor.svg" alt />
                            </div>
                            <div class="dash-content dash-count">
                                <h4>Cancelado</h4>
                                <?php
            // Consulta para contar o número de agendamentos cancelados
            $sql_cancelados = "SELECT COUNT(*) AS total_cancelados FROM agendamentos WHERE TRIM(LOWER(status)) = 'cancelada'"; // Ajustando o status para 'cancelada'
            $result_cancelados = $conn->query($sql_cancelados);

            if ($result_cancelados) {
                $row = $result_cancelados->fetch_assoc();
                $total_cancelados = $row['total_cancelados'];
            } else {
                // Caso haja algum erro na consulta SQL
                $total_cancelados = 0;
                echo "Erro na consulta: " . $conn->error; // Exibe o erro da consulta, caso ocorra
            }
            ?>
                                <h2><span class="counter-up"><?php echo $total_cancelados; ?></span></h2>
                                <p>
                                    <span class="negative-view"><i class="feather-arrow-down-right me-1"></i>15%</span>
                                    Mês passado
                                </p>
                            </div>
                        </div>
                    </div>



                    <!-- Coluna em branco -->
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3"></div>
                </div>







                <div class="good-morning-blk">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="morning-user" style="padding: 20px 30px 20px">
                                <h2 id="horarioser">Horários Serviços</h2>
                                <!-- <p>Tenha um bom dia de trabalho</p> -->
                            </div>
                        </div>

                        <div class="col-md-6 position-blk">
                            <div class="morning-img">
                                <a href="profile.php">
                                    <button type="button"
                                        class="btn w-100 btn-outline-primary active">Adicionar</button>
                                </a>
                                <style>
                                #horarioser {
                                    font-size: 20px;
                                }

                                .btn-outline-primary.active:not(:disabled):not(.disabled),
                                .btn-outline-primary:active:not(:disabled):not(.disabled),
                                .show>.btn-outline-primary.dropdown-toggle {
                                    background-color: #009efb;
                                    border-color: #009efb;
                                    color: #fff;
                                    width: 30%;
                                    margin-left: 60%;
                                }

                                .position-blk {
                                    position: relative;
                                    align-content: center;
                                }
                                </style>
                                <!-- <img src="../assets/img/morning-img-01.png" alt> -->
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">

                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-6 col-xl-10">
                            <div class="card">
                                <div class="card-body">
                                    <div class="chart-title patient-visit">
                                        <h4>Total de Compromissos por Mês</h4>
                                    </div>
                                    <div id="appointment-chart" style="width: 100%; height: 500px;">
                                        <canvas id="appointmentChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                        <script>
                        function createAppointmentChart(total_compromissos) {
                            const ctx = document.getElementById('appointmentChart').getContext('2d');

                            // Define os meses e as cores
                            const labels = ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov',
                                'Dez'
                            ];
                            const colors = [
                                'rgba(255, 99, 132, 0.85)', 'rgba(54, 162, 235, 0.85)',
                                'rgba(255, 206, 86, 0.85)', 'rgba(75, 192, 192, 0.85)',
                                'rgba(153, 102, 255, 0.85)', 'rgba(255, 159, 64, 0.85)',
                                'rgba(255, 99, 71, 0.85)', 'rgba(255, 140, 0, 0.85)',
                                'rgba(0, 204, 204, 0.85)', 'rgba(0, 102, 204, 0.85)',
                                'rgba(153, 0, 153, 0.85)', 'rgba(0, 153, 51, 0.85)'
                            ];

                            const data = {
                                labels: labels,
                                datasets: [{
                                    label: 'Total de Compromissos',
                                    data: total_compromissos,
                                    backgroundColor: colors,
                                    borderColor: 'rgba(46, 55, 164, 1)',
                                }]
                            };

                            new Chart(ctx, {
                                type: 'bar',
                                data: data,
                                options: {
                                    responsive: true,
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    },
                                    plugins: {
                                        legend: {
                                            position: 'top',
                                        },
                                        tooltip: {
                                            callbacks: {
                                                label: function(context) {
                                                    let label = context.dataset.label || '';
                                                    if (label) {
                                                        label += ': ';
                                                    }
                                                    label += context.raw;
                                                    return label;
                                                }
                                            }
                                        }
                                    }
                                }
                            });
                        }

                        // Chama a função para criar o gráfico ao carregar a página
                        window.onload = function() {
                            createAppointmentChart(total_compromissos);
                        };
                        </script>

                        <?php
                        // Conexão com o banco de dados
                        $conn = new mysqli("localhost", "root", "200812", "higia");

                        if ($conn->connect_error) {
                            die("Falha na conexão: " . $conn->connect_error);
                        }

                        // Inicializa o array para os 12 meses com zero
                        $total_compromissos = array_fill(0, 12, 0);

                        // Consulta para contar compromissos por mês
                        $sql = "SELECT MONTH(date) as mes, COUNT(*) as total_compromissos 
            FROM agendamentos 
            WHERE YEAR(date) = YEAR(CURDATE()) 
            GROUP BY MONTH(date) 
            ORDER BY MONTH(date)";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                // Ajusta o índice para corresponder aos meses de 0 a 11
                                $total_compromissos[$row['mes'] - 1] = $row['total_compromissos'];
                            }
                        }


                        ?>
                        <script>
                        // Passa os dados para o JavaScript
                        var total_compromissos = <?php echo json_encode($total_compromissos); ?>;
                        </script>
                    </div>


                    <!-- fechamento da div row grafico -->





                    <div class="row">
                        <div class="col-12 col-md-12 col-xl-7">

                            <?php
                            session_start();
                            include 'db_connection.php'; // Certifique-se de ter uma conexão válida

                            $doutor = $_SESSION['doctor_username'];

                            // Consulta para buscar agendamentos junto com os nomes dos pacientes
                            $sql = "
    SELECT 
        a.id, 
        CONCAT(p.first_name, ' ', p.last_name) AS paciente_nome, a.date, a.time, 
        a.status 
    FROM 
        agendamentos a
    INNER JOIN 
        patients p 
    ON 
        a.id_paciente = p.id
    WHERE 
        a.doctor = '$doutor'
";

                            $result = $conn->query($sql);
                            ?>

                            <div class="row">
                                <div class="col-12">
                                    <div class="card rounded-card">
                                        <div class="card-header">
                                            <h4 class="card-title">Compromissos Recentes</h4>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="table-responsive">
                                                <table class="table mb-0 border-0 custom-table rounded-table">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Nome do Paciente</th>
                                                            <th>Data</th>
                                                            <th>Horário</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                            // Verificar se a consulta retorna resultados
                            if ($result->num_rows > 0) {
                                // Iterar sobre os resultados
                                while ($row = $result->fetch_assoc()) {
                                    // Definir a classe de status com base no valor do status
                                    $statusClass = match ($row["status"]) {
                                        "Concluído" => "status-completed",  // Verde
                                        "Inconcluído" => "status-incomplete", // Laranja
                                        "Cancelada" => "status-canceled", // Vermelho
                                        default => "status-default",
                                    };

                                    // Exibir os dados na tabela
                                    echo '<tr>
                                        <td>' . htmlspecialchars($row["id"]) . '</td>
                                        <td>' . htmlspecialchars($row["paciente_nome"]) . '</td>
                                        <td>' . date("d.m.Y", strtotime($row["date"])) . '</td>
                                        <td>' . date("H:i", strtotime($row["time"])) . '</td>
                                        <td><button class="custom-badge ' . $statusClass . '" onclick="updateStatus(' . $row["id"] . ')">' . htmlspecialchars($row["status"]) . '</button></td>
                                    </tr>';
                                }
                            } else {
                                // Caso não haja dados para exibir
                                echo '<tr><td colspan="5" class="text-center">Nenhum dado encontrado.</td></tr>';
                            }
                            ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <script>
                            document.getElementById('reiniciarBtn').addEventListener('click', function() {
                                location.reload();
                            });

                            function updateStatus(id) {
                                if (confirm('Você deseja atualizar o status deste compromisso?')) {
                                    window.location.href = 'update_status.php?id=' + id; // Exemplo de redirecionamento
                                }
                            }
                            </script>

                            <style>
                            .rounded-card {
                                border-radius: 15px;
                                overflow: hidden;
                            }

                            .rounded-table {
                                border-radius: 15px;
                            }

                            .status-completed {
                                background-color: #28a745;
                                /* verde */
                                color: white;
                                border: none;
                                border-radius: 4px;
                                padding: 5px 10px;
                            }

                            .status-incomplete {
                                background-color: #FF9800;
                                /* laranja */
                                color: white;
                                border: none;
                                border-radius: 4px;
                                padding: 5px 10px;
                            }

                            .status-canceled {
                                background-color: #dc3545;
                                /* vermelho */
                                color: white;
                                border: none;
                                border-radius: 4px;
                                padding: 5px 10px;
                            }
                            </style>











                        </div>


                        <style>
                        .text-decoration-line-through {
                            text-decoration: line-through;
                            color: red;
                            /* Define a cor do texto para vermelho */
                        }
                        </style>
                        <?php
// Conectar ao banco de dados
include './database.php';

session_start();
$doctorLoggedIn = $_SESSION['doctor_username'];
date_default_timezone_set('America/Sao_Paulo'); // Ajuste para o fuso horário correto
$currentDateTime = date('Y-m-d H:i:s');
$startOfDay = date('Y-m-d 00:00:00');
$endDateTime = date('Y-m-d H:i:s', strtotime('+1 day'));

// Verificar se o médico está logado
if (!$doctorLoggedIn) {
    echo "Erro: Médico não logado.";
    exit;
}

// Consulta para compromissos de hoje e próximas 24 horas com junção para obter o nome do paciente
$sql = "
    SELECT agendamentos.*, patients.first_name AS paciente_first_name, patients.last_name AS paciente_last_name
    FROM agendamentos 
    JOIN patients ON agendamentos.id_paciente = patients.id
    WHERE agendamentos.doctor = ? 
    AND CONCAT(agendamentos.date, ' ', agendamentos.time) BETWEEN ? AND ? 
    ORDER BY agendamentos.date, agendamentos.time
";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $doctorLoggedIn, $startOfDay, $endDateTime);
$stmt->execute();
$result = $stmt->get_result();
?>

                        <div class="col-12 col-lg-12 col-xl-5 d-flex">
                            <div class="card flex-fill comman-shadow">
                                <div class="card-header">
                                    <h4 class="card-title d-inline-block">Compromissos</h4>
                                </div>
                                <div class="card-body">
                                    <div class="teaching-card">
                                        <?php if ($result->num_rows > 0): ?>
                                        <ul class="activity-feed">
                                            <?php while ($row = $result->fetch_assoc()):
                        // Concatenar a data e hora do compromisso
                        $appointmentDate = date('d/m/Y', strtotime($row['date']));
                        $appointmentTime = date('H:i', strtotime($row['time']));
                        $appointmentDateTime = $row['date'] . ' ' . $row['time'];

                        // Inicializar a classe vazia
                        $class = '';

                        // Verificar se o horário do compromisso já passou
                        if (strtotime($appointmentDateTime) < strtotime($currentDateTime)) {
                            $class = 'text-decoration-line-through'; // Aplica o riscado se o horário já passou
                        }
                    ?>
                                            <li class="feed-item d-flex align-items-center">
                                                <div class="dolor-activity <?php echo $class; ?>">
                                                    <ul class="doctor-date-list mb-2">
                                                        <li class="">
                                                            <i class="fas fa-circle me-2"></i>
                                                            <?php echo $appointmentDate . ' ' . $appointmentTime; ?>
                                                            <span><?php echo htmlspecialchars($row['paciente_first_name'] . ' ' . $row['paciente_last_name']); ?></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <?php endwhile; ?>
                                        </ul>
                                        <?php else: ?>
                                        <p>Não há compromissos agendados para hoje e próximas 24 horas.</p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>










                </div>
            </div>
        </div>
    </div>


    <div class="sidebar-overlay" data-reff></div>

    <script src="../assets/js/jquery-3.7.1.min.js" type="289d0519ad93de500f359347-text/javascript"></script>

    <script src="../assets/js/bootstrap.bundle.min.js" type="289d0519ad93de500f359347-text/javascript"></script>

    <script src="../assets/js/feather.min.js" type="289d0519ad93de500f359347-text/javascript"></script>

    <script src="../assets/js/jquery.slimscroll.js" type="289d0519ad93de500f359347-text/javascript"></script>

    <script src="../assets/js/select2.min.js" type="289d0519ad93de500f359347-text/javascript"></script>

    <script src="../assets/plugins/datatables/jquery.dataTables.min.js" type="289d0519ad93de500f359347-text/javascript">
    </script>
    <script src="../assets/plugins/datatables/datatables.min.js" type="289d0519ad93de500f359347-text/javascript">
    </script>

    <script src="../assets/js/jquery.waypoints.js" type="289d0519ad93de500f359347-text/javascript"></script>
    <script src="../assets/js/jquery.counterup.min.js" type="289d0519ad93de500f359347-text/javascript"></script>

    <script src="../assets/plugins/apexchart/apexcharts.min.js" type="289d0519ad93de500f359347-text/javascript">
    </script>
    <script src="../assets/plugins/apexchart/chart-data.js" type="289d0519ad93de500f359347-text/javascript">
    </script>

    <script src="../assets/js/circle-progress.min.js" type="289d0519ad93de500f359347-text/javascript"></script>

    <script src="../assets/js/app.js" type="289d0519ad93de500f359347-text/javascript"></script>
    <script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="289d0519ad93de500f359347-|49" defer></script>
</body>


</html>