<?php

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
                <li class="nav-item dropdown d-none d-md-block">
                    <!--<a href="/medic/#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown"><img
                    src="../assets/img/icons/note-icon-02.svg" alt><span class="pulse"></span> </a> -->
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notificações</span>
                        </div>
                        <div class="drop-scroll">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="/medic/activities.php">
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
                                    <a href="/medic/activities.php">
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
                                    <a href="/medic/activities.php">
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
                                    <a href="/medic/activities.php">
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
                <li class="nav-item dropdown has-arrow user-profile-list">
                    <a href="/medic/#" class="dropdown-toggle nav-link user-link" data-bs-toggle="dropdown">
                        <div class="user-names">
                            <h5><?php
                            include "conexao.php";
                            session_start();
                            echo $_SESSION['doctor_username'];
                        ?></h5>
                            <span>Médico</span>
                        </div>
                        <span class="user-img">
                            <?php
                                echo"<img src='" . $_SESSION['doctor_image'] . "' alt='Admin'/>"; 
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
                    <?php
                                $sql = "SELECT COUNT(*) AS total FROM agendamentos";
                                $result = $conn->query($sql);
                            ?>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <div class="dash-boxs comman-flex-center">
                                <img src="../assets/img/icons/profile-add.svg" alt />
                            </div>
                            <div class="dash-content dash-count">
                                <h4>Pacientes</h4>
                                <h2><span class="counter-up"><?php 
                                                                     if ($result->num_rows > 0) {
                                                                            $row = $result->fetch_assoc();
                                                                            echo $row['total'];
                                                                    } else {
                                                                            echo "0";
                                                                    }
                                ?></span></h2>
                                <p>
                                    <span class="passive-view"><i class="feather-arrow-up-right me-1"></i>20%</span>
                                    vs Mês passado
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <div class="dash-boxs comman-flex-center">
                                <img src="../assets/img/icons/scissor.svg" alt />
                            </div>
                            <div class="dash-content dash-count">
                                <h4>Cancelado</h4>
                                <h2><span class="counter-up">0</span></h2>
                                <p>
                                    <span class="negative-view"><i class="feather-arrow-down-right me-1"></i>15%</span>
                                    Mês passado
                                </p>
                            </div>
                        </div>
                    </div>
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
                    <div class="col-12 col-md-12 col-xl-7">

                        <div class="row">
                            <div class="col-12 col-md-12 col-xl-8">
                                <div class="card rounded-card">
                                    <div class="card-header">
                                        <h4 class="card-title d-inline-block">
                                            Compromissos recentes
                                        </h4>
                                        <a href="appointments.php" class="patient-views float-end">Mostre tudo</a>
                                    </div>
                                    <div class="card-body p-0 table-dash">
                                        <div class="table-responsive">
                                            <table class="table mb-0 border-0 custom-table rounded-table">
                                                <tbody>
                                                    <?php
                            // Consulta para buscar compromissos recentes do médico
                            $doutor = $_SESSION['doctor_username'];
                            $sql = "SELECT id, doctor, carteirinhaPaciente, department, date, time, status 
                                    FROM agendamentos 
                                    WHERE doctor = '$doutor' 
                                    AND DATE(date) = CURDATE() 
                                    ORDER BY time LIMIT 5";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $statusClass = $row["status"] == "Concluído" ? "status-green" : "status-red";
                                    echo '<tr>
                                            <td class="table-image appoint-doctor">
                                                <img width="28" height="28" class="rounded-circle"
                                                    src="../assets/img/profiles/avatar-01.jpg" alt />
                                                <h2>Dr. ' . $row["doctor"] . '</h2>
                                            </td>
                                            <td class="appoint-time text-center">
                                                <h6>Hoje ' . date("H:i", strtotime($row["time"])) . '</h6>
                                                <span>' . $row["department"] . '</span>
                                            </td>
                                            <td>
                                                <form action="update_status.php" method="POST" class="status-form d-inline">
                                                    <input type="hidden" name="id" value="' . $row["id"] . '">
                                                    <input type="hidden" name="status" value="' . ($row["status"] == "Concluído" ? "Inconcluído" : "Concluído") . '">
                                                    <button type="submit" class="check-point ' . $statusClass . ' me-1">
                                                        <i class="feather-check"></i>
                                                    </button>
                                                </form>
                                                <form action="update_status.php" method="POST" class="inconcluido-form d-inline">
                                                    <input type="hidden" name="id" value="' . $row["id"] . '">
                                                    <input type="hidden" name="status" value="Inconcluído">
                                                    <button type="submit" class="check-point status-pink">
                                                        <i class="feather-x"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>';
                                }
                            } else {
                                echo '<tr><td colspan="3">Nenhum compromisso recente encontrado.</td></tr>';
                            }
                            ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-12 col-xl-4 d-flex">
                                <div class="card wallet-widget rounded-card">
                                    <div class="circle-bar circle-bar2">
                                        <div class="circle-graph2" data-percent="66">
                                            <b><img src="../assets/img/icons/timer.svg" alt /></b>
                                        </div>
                                    </div>
                                    <div class="main-limit">
                                        <p>Próximo Compromisso em</p>
                                        <h4>02h:12m</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <style>
                        .rounded-card {
                            border-radius: 15px;
                            /* Arredonda as bordas da div card */
                            overflow: hidden;
                            /* Garante que os conteúdos também sigam o arredondamento */
                        }

                        .rounded-table {
                            border-radius: 15px;
                            /* Arredonda a tabela dentro da card */
                            overflow: hidden;
                        }

                        .status-green {
                            background-color: #28a745;
                            color: white;
                            border: none;
                            border-radius: 4px;
                            padding: 5px 10px;
                        }

                        .status-red {
                            background-color: #dc3545;
                            color: white;
                            border: none;
                            border-radius: 4px;
                            padding: 5px 10px;
                        }

                        .status-pink {
                            background-color: #e83e8c;
                            color: white;
                            border: none;
                            border-radius: 4px;
                            padding: 5px 10px;
                        }
                        </style>









                    </div>
                    <div class="col-12 col-lg-12 col-xl-5 d-flex">
                        <div class="card flex-fill comman-shadow">
                            <div class="card-header">
                                <h4 class="card-title d-inline-block">Compromissos recentes</h4>
                                <a href="/medic/appointments.php" class="patient-views float-end">Show all</a>
                            </div>
                            <div class="card-body">
                                <div class="teaching-card">
                                    <ul class="steps-history">
                                        <li>08:00</li>
                                    </ul>
                                    <ul class="activity-feed">
                                        <li class="feed-item d-flex align-items-center">
                                            <div class="dolor-activity hide-activity">
                                                <ul class="doctor-date-list mb-2">
                                                    <li class="stick-line">
                                                        <i class="fas fa-circle me-2"></i>08:00
                                                        <span>Lorem Ipsum </span>
                                                    </li>
                                                    <li class="stick-line">
                                                        <i class="fas fa-circle me-2"></i>08:00
                                                        <span>Lorem Ipsum </span>
                                                    </li>
                                                    <li class="dropdown ongoing-blk">
                                                        <a href="/medic/#" class="dropdown-toggle active-doctor"
                                                            data-bs-toggle="dropdown">
                                                            <i class="fas fa-circle me-2 active-circles"></i>08:00
                                                            <span>Lorem Ipsum </span><span class="ongoing-drapt">Ongoing
                                                                <i class="feather-chevron-down ms-2"></i></span>
                                                        </a>
                                                        <ul class="doctor-sub-list dropdown-menu">
                                                            <li class="patient-new-list dropdown-item">
                                                                Patient<span>Marie kennedy</span><a href="javascript:;"
                                                                    class="new-dot status-green"><i
                                                                        class="fas fa-circle me-1 fa-2xs"></i>New</a>
                                                            </li>
                                                            <li class="dropdown-item">
                                                                Time<span>8:30 - 9:00 (30min)</span>
                                                            </li>
                                                            <li class="schedule-blk mb-0 pt-2 dropdown-item">
                                                                <ul class="nav schedule-time">
                                                                    <li>
                                                                        <a href="/medic/javascript:;"><img
                                                                                src="../assets/img/icons/trash.svg"
                                                                                alt /></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="/medic/javascript:;"><img
                                                                                src="../assets/img/icons/profile.svg"
                                                                                alt /></a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="/medic/javascript:;"><img
                                                                                src="../assets/img/icons/edit.svg"
                                                                                alt /></a>
                                                                    </li>
                                                                </ul>
                                                                <a class="btn btn-primary appoint-start">Start
                                                                    Appointment</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="teaching-card">
                                    <ul class="steps-history">
                                        <li>09:00</li>
                                    </ul>
                                    <ul class="activity-feed">
                                        <li class="feed-item d-flex align-items-center">
                                            <div class="dolor-activity">
                                                <ul class="doctor-date-list mb-2">
                                                    <li>
                                                        <i class="fas fa-circle me-2"></i>09:00
                                                        <span>Lorem Ipsum </span>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-circle me-2"></i>09:20
                                                        <span>Lorem Ipsum </span>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-circle me-2"></i>09:40
                                                        <span>Lorem Ipsum </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="teaching-card">
                                    <ul class="steps-history">
                                        <li>10:00</li>
                                    </ul>
                                    <ul class="activity-feed">
                                        <li class="feed-item d-flex align-items-center">
                                            <div class="dolor-activity">
                                                <ul class="doctor-date-list mb-2">
                                                    <li>
                                                        <i class="fas fa-circle me-2"></i>10:00
                                                        <span>Lorem Ipsum </span>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-circle me-2"></i>10:30
                                                        <span>Lorem Ipsum </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="teaching-card">
                                    <ul class="steps-history">
                                        <li>11:00</li>
                                    </ul>
                                    <ul class="activity-feed">
                                        <li class="feed-item d-flex align-items-center">
                                            <div class="dolor-activity">
                                                <ul class="doctor-date-list mb-2">
                                                    <li>
                                                        <i class="fas fa-circle me-2"></i>11:00
                                                        <span>Lorem Ipsum </span>
                                                    </li>
                                                    <li>
                                                        <i class="fas fa-circle me-2"></i>11:30
                                                        <span>Lorem Ipsum </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-xl-12">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h4 class="card-title d-inline-block">Pacientes recentes</h4>
                                    <!--<a href="/medic/patients.php" class="float-end patient-views">Mostre tudo</a>-->
                                </div>
                                <div class="card-block table-dash" style="margin-top: 10px;">
                                    <div class="table-responsive" style="margin-top: 10px;">


                                        <?php
                                        $sql = "SELECT carteirinhaPaciente, paciente, doctor, date, time FROM agendamentos ORDER BY date, time";
                                        $result = $conn->query($sql);
                                    ?>
                                        <table class="table mb-0 border-0 datatable custom-table">
                                            <thead>
                                                <tr>
                                                    <th>Carteirinha</th>
                                                    <th>Nome do paciente</th>
                                                    <th>Médico</th>
                                                    <th>Data</th>
                                                    <th>Horário</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                if ($result->num_rows > 0) {
                                                    // Loop pelos resultados da consulta e exibição na tabela HTML
                                                    while ($row = $result->fetch_assoc()) {
                                                        echo "<tr>";
                                                        echo "<td>" . htmlspecialchars($row['carteirinhaPaciente']) . "</td>";
                                                        echo "<td>" . htmlspecialchars($row['paciente']) . "</td>";
                                                        echo "<td>" . htmlspecialchars($row['doctor']) . "</td>";
                                                        echo "<td>" . date("d.m.Y", strtotime($row['date'])) . "</td>";
                                                        echo "<td>" . date("H:i", strtotime($row['time'])) . "</td>";
                                                        echo "</tr>";
                                                    }
                                                } else {
                                                    echo "<tr><td colspan='5'>Nenhum agendamento encontrado.</td></tr>";
                                                }
                                                ?>
                                            </tbody>
                                        </table>


                                        <?php
                                            $conn->close(); // Fecha a conexão com o banco de dados
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>






            </div>
            <div class="notification-box">
                <div class="msg-sidebar notifications msg-noti">
                    <div class="topnav-dropdown-header">
                        <span>Messages</span>
                    </div>
                    <div class="drop-scroll msg-list-scroll" id="msg_list">
                        <ul class="list-box">
                            <li>
                                <a href="/medic/chat.php">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Richard Miles </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/medic/chat.php">
                                    <div class="list-item new-message">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">John Doe</span>
                                            <span class="message-time">1 Aug</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/medic/chat.php">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Tarah Shropshire </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/medic/chat.php">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Mike Litorus</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/medic/chat.php">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Catherine Manseau </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/medic/chat.php">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">D</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Domenic Houston </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/medic/chat.php">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">B</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Buster Wigton </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/medic/chat.php">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Rolland Webber </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/medic/chat.php">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Claire Mapes </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/medic/chat.php">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Melita Faucher</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/medic/chat.php">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Jeffery Lalor</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/medic/chat.php">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">L</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Loren Gatlin</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="/medic/chat.php">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Tarah Shropshire</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="/medic/chat.php">See all messages</a>
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
    <script src="../assets/plugins/apexchart/chart-data.js" type="289d0519ad93de500f359347-text/javascript"></script>

    <script src="../assets/js/circle-progress.min.js" type="289d0519ad93de500f359347-text/javascript"></script>

    <script src="../assets/js/app.js" type="289d0519ad93de500f359347-text/javascript"></script>
    <script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="289d0519ad93de500f359347-|49" defer></script>
</body>

<!-- Mirrored from preclinic.dreamstechnologies.com/html/template/doctor-dashboard.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jun 2024 21:42:55 GMT -->

</html>