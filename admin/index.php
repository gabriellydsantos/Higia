<?php
    session_start();

    if (!isset($_SESSION['admin_id'])) {
        header("Location: ../loginADM.php");
        exit();
    }
?>
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
    <link rel="stylesheet" type="text/css" href="./search/styles.css" />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.userway.org/widget.js" data-account="xGxZhlc6l4"></script>


    < <style>
        .chart-title {
        margin-bottom: 20px;
        }
        </style>
        <!-- acessibilidade -->
        <script src="https://cdn.userway.org/widget.js" data-account="xGxZhlc6l4"></script>


</head>

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




    <div class="header">
        <div class="header-left">
            <a href="index.php" class="logo">
                <img src="../assets/img/logo 1.png" width="100" height="40" alt />
            </a>
        </div>
        <a id="toggle_btn" href="javascript:void(0);"><img src="../assets/img/icons/bar-icon.svg" alt /></a>
        <a id="mobile_btn" class="mobile_btn float-start" href="#sidebar"><img src="../assets/img/icons/bar-icon.svg"
                alt /></a>

        <div class="top-nav-search mob-view">
            <form onsubmit="return false;">
                <input type="text" class="form-control" id="search-input" placeholder="Pesquisar aqui"
                    oninput="showSuggestions(this.value)" />
                <a class="btn"><img src="../assets/img/icons/search-normal.svg" alt /></a>
            </form>
            <div id="suggestions-box" class="suggestions-box"></div> <!-- Contêiner para sugestões -->
        </div>

        <script src="search/search.js"></script> <!-- Caminho atualizado para o JS -->
        <link rel="stylesheet" type="text/css" href="./search/styles.css" />

        <ul class="nav user-menu float-end">
            <li class="nav-item dropdown d-none d-md-block">
                <!-- <a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown"><img
                    src="../assets/img/icons/note-icon-02.svg" alt><span class="pulse"></span> </a> -->
                <div class="dropdown-menu notifications">
                    <div class="topnav-dropdown-header">
                        <span>Notificações</span>
                    </div>
                    <div class="drop-scroll">
                        <ul class="notification-list">
                            <li class="notification-message">
                                <a href="activities.php">
                                    <div class="media">
                                        <span class="avatar">
                                            <img alt="John Doe" src="../assets/img/user.jpg" class="img-fluid" />
                                        </span>
                                        <div class="media-body">
                                            <p class="noti-details">
                                                <span class="noti-title">Lorem ipsum</span>
                                                adicionou nova tarefa
                                                <span class="noti-title">Reserva de compromisso do paciente</span>
                                            </p>
                                            <p class="noti-time">
                                                <span class="notification-time">4 minutos atrás</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="activities.php">
                                    <div class="media">
                                        <span class="avatar">V</span>
                                        <div class="media-body">
                                            <p class="noti-details">
                                                <span class="noti-title">Tarah Shropshire</span>
                                                alterou o nome da tarefa
                                                <span class="noti-title">Agendamento de consulta com gateway de
                                                    pagamento</span>
                                            </p>
                                            <p class="noti-time">
                                                <span class="notification-time">6 minutos atrás</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="activities.php">
                                    <div class="media">
                                        <span class="avatar">L</span>
                                        <div class="media-body">
                                            <p class="noti-details">
                                                <span class="noti-title">Misty Tison</span>
                                                adicionou
                                                <span class="noti-title">Domenic Houston</span> e
                                                <span class="noti-title">Claire Mapes</span> ao
                                                projeto
                                                <span class="noti-title">Módulo de disponibilidade do médico</span>
                                            </p>
                                            <p class="noti-time">
                                                <span class="notification-time">8 minutos atrás</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="activities.php">
                                    <div class="media">
                                        <span class="avatar">G</span>
                                        <div class="media-body">
                                            <p class="noti-details">
                                                <span class="noti-title">Rolland Webber</span>
                                                completou a tarefa
                                                <span class="noti-title">Videoconferência entre Paciente e
                                                    Médico</span>
                                            </p>
                                            <p class="noti-time">
                                                <span class="notification-time">12 minutos atrás</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <!-- <li class="nav-item dropdown d-none d-md-block">
            <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><img
                    src="../assets/img/icons/note-icon-01.svg" alt><span class="pulse"></span> </a>
        </li> -->
            <li class="nav-item dropdown has-arrow user-profile-list">
                <a href="#" class="dropdown-toggle nav-link user-link" data-bs-toggle="dropdown">
                    <div class="user-names">
                        <h5><?php echo $_SESSION['admin_first_name'] . " " . $_SESSION['admin_last_name']; ?></h5>
                        <span>Admin</span>
                    </div>
                    <span class="user-img">
                        <img <?php echo 'src="' . $_SESSION['admin_image'] . '"'; ?> alt="Admin" />
                    </span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="profile.php">Meu Perfil</a>
                    <a class="dropdown-item" href="edit-profile.php">Editar Perfil</a>
                    <a class="dropdown-item" href="settings.php">Configurações</a>
                    <a class="dropdown-item" href="login.php">Sair</a>
                </div>
            </li>
            <!-- <li class="nav-item ">
            <a href="settings.php" class="hasnotifications nav-link"><img
                    src="../assets/img/icons/setting-icon-01.svg" alt> </a>
        </li> -->
        </ul>
        <div class="dropdown mobile-user-menu float-end">
            <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
                    class="fa-solid fa-ellipsis-vertical"></i></a>
            <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="profile.php">Meu Perfil</a>
                <a class="dropdown-item" href="edit-profile.php">Editar Perfil</a>
                <a class="dropdown-item" href="settings.php">Configurações</a>
                <a class="dropdown-item" href="login.php">Sair</a>
            </div>
        </div>
    </div>

    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">Interface Base</li>
                    <li class="submenu">
                        <a href="#"><span class="menu-side"><img src="../assets/img/icons/menu-icon-01.svg"
                                    alt="" /></span>
                            <span> Controle </span>
                            <span class="menu-arrow"></span></a>
                        <ul style="display: none">
                            <li><a href="../admin/index.php">Painel do Admin</a></li>

                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><span class="menu-side"><img src="../assets/img/icons/menu-icon-02.svg"
                                    alt="" /></span>
                            <span> Médicos </span> <span class="menu-arrow"></span></a>
                        <ul>
                            <li><a href="../admin/doctors.php">Lista de Médicos</a></li>
                            <li><a href="../admin/add-doctor.php">Adicionar Médico</a></li>
                            <li><a href="../admin/edit-doctor.php">Editar Médico</a></li>
                            <li><a href="../admin/doctor-profile.php">Perfil do Médico</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><span class="menu-side"><img src="../assets/img/icons/menu-icon-03.svg"
                                    alt="" /></span>
                            <span> Pacientes </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none">
                            <li><a href="../admin/patients.php">Lista de Pacientes</a></li>
                            <li><a href="../admin/add-patient.php">Adicionar Paciente</a></li>
                            <li><a href="../admin/edit-patient.php">Editar Paciente</a></li>
                            <li><a href="../admin/patient-profile.php">Perfil do Paciente</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><span class="menu-side"><img src="../assets/img/icons/menu-icon-08.svg"
                                    alt="" /></span>
                            <span> Funcionários </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none">
                            <li><a href="../admin/staff-list.php">Lista de Funcionários</a></li>
                            <li><a href="../admin/add-staff.php">Adicionar Funcionário</a></li>
                            <li><a href="../admin/edit-staff.php">Editar Funcionário</a></li>
                            <li>
                                <a href="staff-profile.php">Perfil do Funcionário</a>
                            </li>

                        </ul>
                    </li>
                    <!-- <li class="submenu">
              <a href="#"><span class="menu-side"><img src="../assets/img/icons/menu-icon-04.svg" alt="" /></span>
                <span> Consultas </span> <span class="menu-arrow"></span></a>
              <ul style="display: none">
                <li><a href="../admin/appointments.php">Lista de Consultas</a></li>
                <li><a href="../admin/add-appointment.php">Agendar Consulta</a></li>
                <li><a href="../admin/edit-appointment.php">Editar Consulta</a></li>
              </ul>
            </li> -->
                    <!-- <li class="submenu">
              <a href="#"><span class="menu-side"><img src="../assets/img/icons/menu-icon-05.svg" alt="" /></span>
                <span> Agenda do Médico </span>
                <span class="menu-arrow"></span></a>
              <ul style="display: none">
                <li><a href="../admin/schedule.php">Lista de Agendas</a></li>
                <li><a href="../admin/add-schedule.php">Adicionar Agenda</a></li>
                <li><a href="../admin/edit-schedule.php">Editar Agenda</a></li>
              </ul>
            </li> -->


                    <li class="submenu">
                        <a href="#"><span class="menu-side"><img src="../assets/img/icons/menu-icon-06.svg"
                                    alt /></span>
                            <span> Especialidade</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none">
                            <li>
                                <a class="" href="departments.php">Especialidade</a>
                            </li>
                            <li><a href="../admin/add-department.php">Add Especialidade</a></li>

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
                                <a href="index.php">Dashboard </a>
                            </li>
                            <li class="breadcrumb-item">
                                <i class="feather-chevron-right"></i>
                            </li>
                            <li class="breadcrumb-item active">
                                Painel de administrador
                            </li>
                        </ul>




                    </div>
                </div>
            </div>


            <div class="good-morning-blk">
                <div class="row">
                    <div class="col-md-6">
                        <div class="morning-user">
                            <h2>Olá, Admin
                                <span><?php echo $_SESSION['admin_first_name'] . " " . $_SESSION['admin_last_name']; ?></span>
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
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="dash-widget">
                        <div class="dash-boxs comman-flex-center">
                            <img src="../assets/img/icons/menu-icon-03.svg" alt="Ícone de Funcionários" />
                        </div>
                        <div class="dash-content dash-count">
                            <h4>Funcionários</h4>
                            <h2><span class="counter-up" id="staff-count">0</span></h2> <!-- ID para o contador -->
                            <p>
                                <span class="passive-view"><i class="feather-arrow-up-right me-1"></i>40%</span>
                                Mês Passado
                            </p>
                        </div>
                    </div>
                </div>


                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    // Defina o caminho correto para get_staff_count.php
                    fetch('get_staff_count.php')
                        .then(response => response.text())
                        .then(data => {
                            document.getElementById('staff-count').innerText =
                                data; // Atualiza o contador
                        })
                        .catch(error => console.error('Erro ao buscar a quantidade de funcionários:',
                            error));
                });
                </script>




                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="dash-widget">
                        <div class="dash-boxs comman-flex-center">
                            <img src="../assets/img/icons/menu-icon-03.svg" alt="Ícone de Pacientes" />
                        </div>
                        <div class="dash-content dash-count">
                            <h4>Pacientes</h4>
                            <h2><span class="counter-up" id="patient-count">0</span></h2>
                            <p>
                                <span class="passive-view"><i class="feather-arrow-up-right me-1"></i>40%</span>
                                Mês Passado
                            </p>
                        </div>
                    </div>
                </div>

                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    // Defina o caminho correto para get_patient_count.php
                    fetch('get_patient_count.php')
                        .then(response => response.text())
                        .then(data => {
                            document.getElementById('patient-count').innerText = data;
                        })
                        .catch(error => console.error('Erro ao buscar a quantidade de pacientes:', error));
                });
                </script>

                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="dash-widget">
                        <div class="dash-boxs comman-flex-center">
                            <img src="../assets/img/icons/menu-icon-02.svg" alt />
                        </div>
                        <div class="dash-content dash-count">
                            <h4>Médicos</h4>
                            <h2><span class="counter-up" id="doctor-count">0</span></h2>
                            <p>
                                <span class="negative-view"><i class="feather-arrow-down-right me-1"></i>15%</span>
                                Mês passado
                            </p>
                        </div>
                    </div>
                </div>


                <script>
                document.addEventListener('DOMContentLoaded', function() {
                    // Defina o caminho correto para get_patient_count.php
                    fetch('get_doctor_count.php')
                        .then(response => response.text())
                        .then(data => {
                            document.getElementById('doctor-count').innerText = data;
                        })
                        .catch(error => console.error('Erro ao buscar a quantidade de pacientes:', error));
                });
                </script>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3"></div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6 col-xl-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="chart-title patient-visit">
                                <h4>Visita por gênero</h4>
                                <div>
                                    <ul class="nav chat-user-total" id="gender-stats">
                                        <li>
                                            <i class="fa fa-circle current-users" aria-hidden="true"></i>Masculino:
                                            <span id="masculino-percentage">0%</span>
                                        </li>
                                        <li>
                                            <i class="fa fa-circle old-users" aria-hidden="true"></i>Feminino:
                                            <span id="feminino-percentage">0%</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="input-block mb-0">
                                    <select class="form-control select" id="year-select">
                                        <option value="">2024</option>

                                    </select>
                                </div>
                            </div>
                            <div id="patient-chart" style="width: 100%; height: 400px;">
                                <canvas id="genderChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                async function fetchGenderData() {
                    const response = await fetch(
                        'gender_data.php'); // Altere para o caminho correto se necessário
                    const data = await response.json();
                    return data;
                }

                async function createChart() {
                    const genderData = await fetchGenderData();
                    const ctx = document.getElementById('genderChart').getContext('2d');

                    // Prepara os dados para o gráfico
                    const months = Array.from({
                        length: 12
                    }, (_, i) => i + 1); // 1 a 12
                    const masculinoData = months.map(month => genderData.Masculino[month] || 0);
                    const femininoData = months.map(month => genderData.Feminino[month] || 0);

                    // Total de visitas masculinas e femininas
                    const totalMasculino = masculinoData.reduce((a, b) => a + b, 0);
                    const totalFeminino = femininoData.reduce((a, b) => a + b, 0);
                    const total = totalMasculino + totalFeminino;

                    // Calcular as porcentagens
                    const masculinoPercentage = total ? ((totalMasculino / total) * 100).toFixed(2) : 0;
                    const femininoPercentage = total ? ((totalFeminino / total) * 100).toFixed(2) : 0;

                    // Atualiza os elementos de porcentagem
                    document.getElementById('masculino-percentage').innerText = masculinoPercentage + '%';
                    document.getElementById('feminino-percentage').innerText = femininoPercentage + '%';

                    const genderChart = new Chart(ctx, {
                        type: 'bar', // Gráfico de barras
                        data: {
                            labels: [
                                'Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun',
                                'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'
                            ],
                            datasets: [{
                                    label: 'Masculino',
                                    data: masculinoData,
                                    backgroundColor: 'rgba(46, 55, 164, 0.85)', // Nova cor para masculino
                                    borderColor: 'rgba(46, 55, 164, 1)',
                                    borderWidth: 1
                                },
                                {
                                    label: 'Feminino',
                                    data: femininoData,
                                    backgroundColor: 'rgba(0, 211, 199, 0.85)', // Nova cor para feminino
                                    borderColor: 'rgba(0, 211, 199, 1)',
                                    borderWidth: 1
                                }
                            ]
                        },
                        options: {
                            responsive: true,
                            scales: {
                                y: {
                                    beginAtZero: true // Começar o eixo Y em zero
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
                                            label += context.raw; // Adiciona o número de registros
                                            return label;
                                        }
                                    }
                                }
                            }
                        }
                    });
                }

                // Chamar a função para criar o gráfico ao carregar a página
                window.onload = createChart;
                </script>
                <?php
                // Conexão com o banco de dados
                $conn = new mysqli("localhost", "root", "200812", "higia");

                if ($conn->connect_error) {
                    die("Falha na conexão: " . $conn->connect_error);
                }

                // Executar a consulta para obter o nome do departamento e o total de pacientes
                $sql = "SELECT d.department_name, COUNT(a.id) AS total_pacientes 
        FROM agendamentos a 
        JOIN departments d ON a.department = d.id 
        GROUP BY d.department_name"; // Aqui estamos agrupando pelo nome do departamento

                $result = $conn->query($sql);

                // Preparar os dados para o gráfico
                $departments = [];
                $patients = [];

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $departments[] = $row['department_name']; // Mudança aqui para pegar o nome
                        $patients[] = $row['total_pacientes'];
                    }
                }
                $conn->close();
                ?>

                <script>
                var departments = <?php echo json_encode($departments); ?>;
                var patients = <?php echo json_encode($patients); ?>;
                </script>

                <div class="col-12 col-md-12 col-lg-6 col-xl-3 d-flex">
                    <div class="card">
                        <div class="card-body">
                            <div class="chart-title">
                                <h4>Pacientes por Departamento</h4>
                            </div>
                            <canvas id="donut-chart-dash"></canvas>
                        </div>
                    </div>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                var ctx = document.getElementById('donut-chart-dash').getContext('2d');
                var donutChart = new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: departments, // Aqui já estamos usando os nomes dos departamentos
                        datasets: [{
                            label: 'Pacientes',
                            data: patients, // quantidade de pacientes
                            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0',
                                '#9966FF'
                            ], // cores para os departamentos
                            hoverBackgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0',
                                '#9966FF'
                            ]
                        }]
                    },
                    options: {
                        responsive: true,
                        layout: {
                            padding: {
                                top: 0,
                                bottom: 20, // Adicionando padding na parte inferior para mover a legenda para baixo
                                left: 0,
                                right: 0
                            }
                        },
                        plugins: {
                            legend: {
                                position: 'bottom', // Legenda na parte inferior
                            },
                            title: {
                                display: true,
                                text: 'Pacientes por Departamento'
                            }
                        }
                    }
                });
                </script>





                <?php
                // Conexão com o banco de dados
                include('database.php');

                // Consulta SQL para contar os agendamentos por departamento
                $query = "
    SELECT department, COUNT(*) as total_agendamentos 
    FROM agendamentos 
    GROUP BY department 
    ORDER BY total_agendamentos DESC;
";

                $result = $conn->query($query);

                // Obter o total de agendamentos
                $totalQuery = "SELECT COUNT(*) as total FROM agendamentos";
                $totalResult = $conn->query($totalQuery);
                $totalRow = $totalResult->fetch_assoc();
                $totalAgendamentos = $totalRow['total'];

                // Preparar os dados para exibição
                $departamentos = [];
                while ($row = $result->fetch_assoc()) {
                    $departamento = $row['department'];
                    $total = $row['total_agendamentos'];
                    $porcentagem = ($total / $totalAgendamentos) * 100;
                    $departamentos[] = [
                        'department' => $departamento,
                        'total' => $total,
                        'percentage' => round($porcentagem, 2) // Arredondar para 2 casas decimais
                    ];
                }
                ?>



                <div class="col-12 col-md-12 col-xl-4">
                    <div class="card top-departments">
                        <div class="card-header">
                            <h4 class="card-title mb-0">Departamentos principais</h4>
                        </div>
                        <div class="card-body">
                            <?php foreach ($departamentos as $dep): ?>
                            <div class="activity-top">
                                <div class="activity-boxs comman-flex-center">
                                    <!-- <img src="../assets/img/icons/dep-icon-01.svg" alt /> -->
                                </div>
                                <div class="departments-list">
                                    <h4><?php echo $dep['department']; ?></h4>
                                    <p><?php echo $dep['percentage']; ?>%</p>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>






                <?php
                // Conectar ao banco de dados
                include('database.php');

                // Consultar os pacientes logados
                $sql_logged_patients = "SELECT * FROM logged_patients ORDER BY data_login DESC";
                $result = $conn->query($sql_logged_patients);
                ?>


                <?php
include("database.php"); // Inclui o arquivo de conexão

// Consulta para obter os logins recentes
$sql_recent_logins = "SELECT * FROM logged_patients ORDER BY data_login DESC LIMIT 10";
$result = $conn->query($sql_recent_logins);
?>

                <div class="col-12 col-md-12 col-xl-8">
                    <div class="card rounded-card">
                        <div class="card-header pb-0">
                            <h4 class="card-title d-inline-block">Pacientes recentes</h4>
                        </div>
                        <div class="card-block table-dash">
                            <div class="table-responsive">
                                <table class="table mb-0 border-0 datatable custom-table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Carteirinha</th>
                                            <th>Nome do paciente</th>
                                            <th>Telefone</th>
                                            <th>Data de Login</th>
                                            <th>Hora de Login</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                // Extrair a data e a hora separadamente
                                $data_login = date('d/m/Y', strtotime($row['data_login']));
                                $hora_login = date('H:i', strtotime($row['data_login']));

                                echo "<tr>";
                                echo "<td><div class='form-check check-tables'><input class='form-check-input' type='checkbox' /></div></td>";
                                echo "<td>" . $row['carteirinha'] . "</td>";
                                echo "<td>" . $row['nome'] . "</td>";
                                echo "<td>" . $row['telefone'] . "</td>";
                                echo "<td>" . $data_login . "</td>";
                                echo "<td>" . $hora_login . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='6'>Nenhum paciente logado recentemente.</td></tr>";
                        }
                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>



                <style>
                .rounded-card {
                    border-radius: 0.5rem;
                    /* Ajuste o valor conforme necessário */
                    overflow: hidden;
                    /* Isso garante que os cantos arredondados se apliquem corretamente */
                }
                </style>




            </div>






        </div>
    </div>
    <div class="sidebar-overlay" data-reff></div>





    <script src="../assets/js/jquery-3.7.1.min.js" type="df5f729902501f2e3972e202-text/javascript"></script>

    <script src="../assets/js/bootstrap.bundle.min.js" type="df5f729902501f2e3972e202-text/javascript"></script>

    <script src="../assets/js/feather.min.js" type="df5f729902501f2e3972e202-text/javascript"></script>

    <script src="../assets/js/jquery.slimscroll.js" type="df5f729902501f2e3972e202-text/javascript"></script>

    <script src="../assets/js/select2.min.js" type="df5f729902501f2e3972e202-text/javascript"></script>

    <script src="../assets/plugins/datatables/jquery.dataTables.min.js" type="df5f729902501f2e3972e202-text/javascript">
    </script>
    <script src="../assets/plugins/datatables/datatables.min.js" type="df5f729902501f2e3972e202-text/javascript">
    </script>

    <script src="../assets/js/jquery.waypoints.js" type="df5f729902501f2e3972e202-text/javascript"></script>
    <script src="../assets/js/jquery.counterup.min.js" type="df5f729902501f2e3972e202-text/javascript"></script>

    <script src="../assets/plugins/apexchart/apexcharts.min.js" type="df5f729902501f2e3972e202-text/javascript">
    </script>
    <script src="../assets/plugins/apexchart/chart-data.js" type="df5f729902501f2e3972e202-text/javascript">
    </script>

    <script src="../assets/js/app.js" type="df5f729902501f2e3972e202-text/javascript"></script>
    <script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="df5f729902501f2e3972e202-|49" defer></script>
</body>

</html>