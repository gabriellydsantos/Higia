<?php

include "conexao.php";
session_start();

// Verificar se a variável de sessão 'contador' existe, se não, iniciar com 0
if (!isset($_SESSION['contador'])) {
    $_SESSION['contador'] = 0;
}

// Verificar se o botão foi pressionado
if (isset($_POST['incrementar'])) {
    // Incrementar o valor da variável de sessão 'contador'
    $_SESSION['contador']++;
}

// Armazenar o valor do contador em uma variável
$contador = $_SESSION['contador'];

//ocultar erros
error_reporting(0);
ini_set('display_errors', 0);
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
    <style>
        .medida {
            width: 100%;
        }
    </style> <!-- acessibilidade -->
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
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="/medic/index.php" class="logo">
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
                <!-- <li class="nav-item dropdown d-none d-md-block">
           <a href="/medic/javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><img
                    src="../assets/img/icons/note-icon-01.svg" alt><span class="pulse"></span> </a>
        </li> -->
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
                            echo "<img src='" . $_SESSION['doctor_image'] . "' alt='Admin'/>";
                            ?>
                        </span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="profile.php">Meu Perfil</a>
                        <a class="dropdown-item" href="login.php">Sair</a>
                    </div>
                </li>
                <!-- <li class="nav-item ">
           <a href="/medic/settings.php" class="hasnotifications nav-link"><img
                    src="../assets/img/icons/setting-icon-01.svg" alt> </a>
        </li> -->
            </ul>
            <div class="dropdown mobile-user-menu float-end">
                <a href="/medic/#" class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i
                        class="fa-solid fa-ellipsis-vertical"></i></a>
                <div class="dropdown-menu dropdown-menu-end">
                    <a class="dropdown-item" href="profile.php">Meu Perfil</a>
                    <a class="dropdown-item" href="login.php">Sair</a>
                </div>
            </div>
        </div>

        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>

                        <li class="submenu">
                            <a href="/medic/#"><span class="menu-side"><img src="../assets/img/icons/menu-icon-01.svg"
                                        alt="" /></span>
                                <span> Controle </span>
                                <span class="menu-arrow"></span></a>
                            <ul style="display: none">
                                <!-- <li><a href="index.php">Painel do Admin</a></li> -->
                                <li><a href="doctor-dashboard.php">Painel do Médico</a></li>
                                <!-- <li>
                 <a href="/medic/patient-dashboard.php">Painel do Paciente</a>
                </li> -->
                            </ul>
                        </li>
                        <!-- <li class="submenu">
             <a href="/medic/#"><span class="menu-side"><img src="../assets/img/icons/menu-icon-02.svg" alt="" /></span>
                <span> Médicos </span> <span class="menu-arrow"></span></a>
              <ul style="display: none">
                <li><a href="doctors.php">Lista de Médicos</a></li>
                <li><a href="add-doctor.php">Adicionar Médico</a></li>
                <li><a href="edit-doctor.php">Editar Médico</a></li>
                <li><a href="doctor-profile.php">Perfil do Médico</a></li>
              </ul>
            </li> -->
                        <!-- <li class="submenu">
             <a href="/medic/#"><span class="menu-side"><img src="../assets/img/icons/menu-icon-03.svg" alt="" /></span>
                <span> Pacientes </span> <span class="menu-arrow"></span></a>
              <ul style="display: none">
                <li><a href="patients.php">Lista de Pacientes</a></li>
                <li><a href="add-patient.php">Adicionar Paciente</a></li>
                <li><a href="edit-patient.php">Editar Paciente</a></li>
                <li><a href="patient-profile.php">Perfil do Paciente</a></li>
              </ul>
            </li> -->
                        <!-- <li class="submenu">
             <a href="/medic/#"><span class="menu-side"><img src="../assets/img/icons/menu-icon-08.svg" alt="" /></span>
                <span> Funcionários </span> <span class="menu-arrow"></span></a>
              <ul style="display: none">
                <li><a href="staff-list.php">Lista de Funcionários</a></li>
                <li><a href="add-staff.php">Adicionar Funcionário</a></li>
                <li>
                 <a href="/medic/staff-profile.php">Perfil do Funcionário</a>
                </li>
                <li><a href="staff-leave.php">Licenças</a></li>
                <li><a href="staff-holiday.php">Feriados</a></li>
                <li><a href="staff-attendance.php">Presenças</a></li>
              </ul>
            </li> -->
                        <li class="submenu">
                            <a href="/medic/#"><span class="menu-side"><img src="../assets/img/icons/menu-icon-04.svg"
                                        alt="" /></span>
                                <span> Consultas </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none">
                                <li><a href="appointments.php">Lista de Consultas</a></li>
                                <li><a href="add-appointment.php">Agendar Consulta</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="/medic/#"><span class="menu-side"><img src="../assets/img/icons/menu-icon-05.svg"
                                        alt="" /></span>
                                <span> Agenda</span>
                                <span class="menu-arrow"></span></a>
                            <ul style="display: none">
                                <li><a href="schedule.php">Lista de Agendas</a></li>
                                <li><a href="add-schedule.php">Adicionar Agenda</a></li>
                                <li><a href="edit-schedule.php">Editar Agenda</a></li>
                            </ul>
                        </li>




                        <li class="submenu">
                            <a href="#"><span class="menu-side"><img src="../assets/img/icons/menu-icon-13.svg"
                                        alt></span> <span> Receita</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="reagendamento.php">Receita</a></li>

                            </ul>
                        </li>


                        <li class="submenu">
                            <a href="#"><span class="menu-side"><img src="../assets/img/icons/menu-icon-15.svg"
                                        alt></span> <span>Encaminhamento</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="reagendamento.php">Gerar guia</a></li>

                            </ul>
                        </li>


                    </ul>
                    <div class="logout-btn">
                        <a href="/medic/login.php"><span class="menu-side"><img src="../assets/img/icons/logout.svg"
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
                                <li class="breadcrumb-item"><a href="inbox.php">Encaminhamento</a></li>
                                <li class="breadcrumb-item">
                                    <i class="feather-chevron-right"></i>
                                </li>
                                <li class="breadcrumb-item active">Gerar guia</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-4 d-flex">
                        <div class="card chat-box">
                            <div class="chat-widgets">
                                <div class="chat-user-group d-flex align-items-center">
                                    <div class="img-users call-user">
                                        <?php
                                        echo '<img src="' . $_SESSION["doctor_image"] . '" alt="img"/>'
                                        ?>

                                    </div>
                                    <div class="chat-users user-main">
                                        <div class="user-titles user-head-compse">
                                            <?php
                                            echo "<h5>" . $_SESSION['doctor_username'] . "</h5>";
                                            ?>
                                            <div class="chat-user-time">
                                                <p>CRM/SP 123456</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="compose-mail">
                                    <a href="#gerarGuia" class="btn btn-primary"><img
                                            src="../assets/img/icons/edit-2.svg" class="me-2" alt="img" />Escrever guia</a>
                                </div>
                                <div class="email-menu-blk">
                                    <ul>
                                        <li class="active">
                                            <a href="/medic/javascript:;"><img src="../assets/img/icons/inbox.svg"
                                                    class="me-2" alt="img" />Guias geradas<span
                                                    class="comman-flex"><?php echo $_SESSION['contador']; ?></span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form method="post" id="gerarGuia">
                        <div class="col-xl-8">
                            <div class="card chat-box mb-2 medida">
                                <div class="compose-mail">
                                    <h3>Gerar nova guia </h3>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-block local-forms">
                                            <label>Nome do paciente</label>
                                            <input type="text" class="form-control" name="nome">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-block local-forms">
                                            <label>Carteirinha</label>
                                            <input type="text" class="form-control" name="carteirinha">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-block local-forms">
                                            <label>Procedimento</label>
                                            <input type="text" class="form-control" name="procedimento">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-block local-forms">
                                            <label>Quantidade de sessões</label>
                                            <select class="form-control" name="sessoes" id="">
                                                <option value="5sesoes"> 5 Sessões </option>
                                                <option value="10sesoes"> 10 Sessões </option>
                                                <option value="15sesoes"> 15 Sessões </option>
                                                <option value="20sesoes"> 20 Sessões </option>
                                                <option value="exame"> Exame </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-block local-forms">
                                            <label>Data de vencimento</label>
                                            <input type="date" class="form-control" name="dataRetorno">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-block summer-mail">
                                            <textarea rows="4" cols="5" class="form-control"
                                                placeholder="Observações" name="obs"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="mail-send">
                                            <button type="submit" class="btn btn-primary" name="incrementar">Enviar</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <?php

                    // Verificar se o formulário foi enviado
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        // Pegar os dados enviados pelo formulário
                        $nome = $_POST['nome'];
                        $carteirinha = $_POST['carteirinha'];
                        $procedimento = $_POST['procedimento'];
                        $sessoes = $_POST['sessoes'];
                        $dataRetorno = $_POST['dataRetorno'];
                        $obs = $_POST['obs'];

                        // Prevenir SQL Injection
                        $nome = $conn->real_escape_string($nome);
                        $carteirinha = $conn->real_escape_string($carteirinha);
                        $procedimento = $conn->real_escape_string($procedimento);
                        $sessoes = $conn->real_escape_string($sessoes);
                        $dataRetorno = $conn->real_escape_string($dataRetorno);
                        $obs = $conn->real_escape_string($obs);

                        // Obter os valores das variáveis de sessão corretamente
                        $carteirinhaDoutor = $_SESSION['doctor_carteirinha'];
                        $doctorUsername = $_SESSION['doctor_username'];

                        // Preparar a consulta SQL de inserção
                        $sql = "INSERT INTO guia (nome, carteirinha, carteirinhaDoutor, doctor, procedimento, sessoes, dataRetorno, obs) 
                                    VALUES ('$nome', '$carteirinha', '$carteirinhaDoutor', '$doctorUsername', '$procedimento', '$sessoes', '$dataRetorno', '$obs')";

                        // Executar a consulta
                        if ($conn->query($sql) === TRUE) {
                            echo "Guia cadastrado com sucesso!";
                        } else {
                            echo "Erro ao criar guia: " . $conn->error;
                        }
                    }
                    ?>
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
    <script src="../assets/js/jquery-3.7.1.min.js" type="967dc55985ab8a5097efb074-text/javascript"></script>
    <script src="../assets/js/bootstrap.bundle.min.js" type="967dc55985ab8a5097efb074-text/javascript"></script>
    <script src="../assets/js/feather.min.js" type="967dc55985ab8a5097efb074-text/javascript"></script>
    <script src="../assets/js/jquery.slimscroll.js" type="967dc55985ab8a5097efb074-text/javascript"></script>
    <script src="../assets/js/select2.min.js" type="967dc55985ab8a5097efb074-text/javascript"></script>
    <script src="../assets/plugins/datatables/jquery.dataTables.min.js" type="967dc55985ab8a5097efb074-text/javascript">
    </script>
    <script src="../assets/plugins/datatables/datatables.min.js" type="967dc55985ab8a5097efb074-text/javascript">
    </script>

    <script src="../assets/js/jquery.waypoints.js" type="967dc55985ab8a5097efb074-text/javascript"></script>
    <script src="../assets/js/jquery.counterup.min.js" type="967dc55985ab8a5097efb074-text/javascript"></script>

    <script src="../assets/plugins/summernote/summernote-bs5.min.js" type="967dc55985ab8a5097efb074-text/javascript">
    </script>

    <script src="../assets/plugins/apexchart/apexcharts.min.js" type="967dc55985ab8a5097efb074-text/javascript">
    </script>
    <script src="../assets/plugins/apexchart/chart-data.js" type="967dc55985ab8a5097efb074-text/javascript"></script>
    <script src="../assets/js/app.js" type="967dc55985ab8a5097efb074-text/javascript"></script>
    <script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="967dc55985ab8a5097efb074-|49" defer></script>
</body>

<!-- Mirrored from preclinic.dreamstechnologies.com/html/template/compose.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jun 2024 21:43:51 GMT -->

</html>