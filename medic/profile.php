<?php
include "conexao.php";

session_start();
//ocultar erros
error_reporting(0);
ini_set('display_errors', 0);

// Verificar se o usuário está logado
if (!isset($_SESSION['doctor_id'])) {
    header("Location: loginM.php");
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- acessibilidade -->
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
                                <li><a href="compose.php">Receita</a></li>

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
                <div class="row">
                    <div class="col-sm-7 col-6">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">Perfil </a></li>
                            <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                            <li class="breadcrumb-item active">Meu Perfil</li>
                        </ul>
                    </div>
                    <?php
                    if (isset($_SESSION['doctor_id'])) {
                        // Criar um link de edição usando o valor de doctor_id da sessão
                        $doctorId = $_SESSION['doctor_id'];
                        //echo '<a href="editar.php?id=' . $doctorId . '">Editar Perfil do Médico</a>';
                    } else {
                        echo 'ID do médico não está definido na sessão!';
                    }
                    ?>

                    <div class="col-sm-5 col-6 text-end m-b-30">
                        <?php echo '<a class="btn btn-primary btn-rounded" href="edit-profile.php?id=' . $doctorId . '">Editar Perfil</a>'; ?>
                    </div>
                </div>
                <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <?php
                                        echo "<img class='avatar' src='" . $_SESSION['doctor_image'] . "' alt='Admin'/>";

                                        ?>
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0"><?php echo $_SESSION['doctor_first_name'] . " " . $_SESSION['doctor_last_name']; ?></h3>
                                                <small class="text-muted"><?php echo $_SESSION['doctor_department']; ?></small>
                                                <div class="staff-id">CRM/SP 123355</div>
                                                <div class="staff-msg"><a href="https://api.whatsapp.com/send?phone=5511941782793&text=Olá,%20gostaria%20de%20acessar%20o%20suporte" target="_blank" class="btn btn-primary">Central de
                                                        ajuda</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <ul class="personal-info">
                                                <li>
                                                    <span class="title">Telefone</span>
                                                    <span class="text"><a href><?php echo $_SESSION['doctor_phone']; ?></a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Email:</span>
                                                    <span class="text"><a href><span class="__cf_email__"
                                                                data-cfemail="4d2e3f243e3924232c2a3f223b283e0d28352c203d2128632e2220">[email&#160;protegido]</span></a></span>
                                                </li>
                                                <li>
                                                    <span class="title">Status:</span>
                                                    <span class="text"><?php echo $_SESSION['doctor_status']; ?></span>
                                                </li>
                                                <li>
                                                    <span class="title">Endereço:</span>
                                                    <span class="text"><?php echo $_SESSION['doctor_address']  . ", " . $_SESSION['doctor_city'] . "-" . $_SESSION['doctor_state']; ?></span>
                                                </li>
                                                <li>
                                                    <span class="title">Gênero:</span>
                                                    <span class="text"><?php echo $_SESSION['doctor_gender']; ?></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>







                <div class="row">



                    <div class="good-morning-blk">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="morning-user" style="padding: 20px 30px 20px">
                                    <h2 id="horarioser">Horários de Serviços</h2>
                                    <p>Adicione seus horários de atendimento</p>
                                </div>
                            </div>

                            <div class="col-md-6 position-blk">
                                <div class="morning-img">
                                    <a href="#adicionar"> <button type="button"
                                            class="btn w-100 btn-outline-primary active">Adicionar</button> </a>
                                    <style>
                                        .row {
                                            margin-top: 40px;
                                            margin-bottom: 40px;
                                        }

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





                    <div class="card card-table show-entire">
                        <div class="card-body">
                            <div class="page-table-header mb-2">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <div class="doctor-table-blk">
                                            <h3>Semanalmente</h3>

                                        </div>
                                    </div>





                                </div>
                            </div>

                            <div class="staff-search-table">
                                <form method="POST" id="adicionar">
                                    <div class="row">

                                        <!-- <div class="col-12 col-md-6 col-xl-4">
                        <div class="input-block local-forms">
                            <label>Especialidade </label>
                            <select class="form-control select">
                                <option>Selecione a especialidade</option>
                                <option>Medical Leave</option>
                                <option>Casual Leave</option>
                                <option>Loss of Pay</option>

                            </select>
                        </div>
                    </div> -->



                                        <div class="col-12 col-md-6 col-xl-4">
                                            <div class="input-block local-forms cal-icon">
                                                <label>Data </label>
                                                <input class="form-control datetimepicker" type="text" name="data" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-xl-4">
                                            <div class="input-block local-forms ">
                                                <label>Horário</label>
                                                <input class="form-control" type="time" name="horario" />
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-xl-4">
                                            <div class="doctor-submit">
                                                <button type="submit" class="btn btn-primary submit-list-form me-2">
                                                    Salvar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <?php
                            // Verifica se o formulário foi enviado
                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                // Capturar os valores enviados pelo formulário
                                $data = $_POST['data'] ?? '';
                                $horario = $_POST['horario'] ?? '';
                                $medico = $_SESSION['doctor_username'];
                                $especialidade = $_SESSION['doctor_department'];

                                // Converte a data de dd/mm/yyyy para yyyy-mm-dd
                                $data_formatada = DateTime::createFromFormat('d/m/Y', $data)->format('Y-m-d');

                                // Valida se os campos foram preenchidos
                                if (!empty($data) && !empty($horario) && !empty($medico) && !empty($especialidade)) {
                                    // Inserir os dados na tabela appointments
                                    $query = "INSERT INTO appointments (data, horario, medico, especialidade) VALUES (?, ?, ?, ?)";

                                    // Preparar a consulta
                                    $stmt = $conn->prepare($query);
                                    if ($stmt) {
                                        // Passar as variáveis diretamente sem aspas simples
                                        $stmt->bind_param("ssss", $data_formatada, $horario, $medico, $especialidade);

                                        // Executar a consulta
                                        if ($stmt->execute()) {
                                            echo " <p class='sucess'> Horário agendada com sucesso! </p>";
                                        } else {
                                            echo "Erro ao agendar a consulta: " . $stmt->error;
                                        }

                                        // Fechar a declaração
                                        $stmt->close();
                                    } else {
                                        echo "Erro ao preparar a consulta: " . $conn->error;
                                    }
                                } else {
                                    echo "Por favor, preencha todos os campos.";
                                }

                                // Fechar a conexão com o banco de dados
                                $conn->close();
                            }
                            ?>


                            <?php
                            include 'conexao.php'; // Certifique-se de ter o arquivo de conexão com o banco de dados

                            // Consulta para buscar os registros da tabela appointments
                            $query = "SELECT * FROM appointments";
                            $result = $conn->query($query);

                            // Verifica se há registros na tabela
                            if ($result->num_rows > 0) {
                                echo '
    <div class="table-responsive">
        <table class="table border-0 custom-table comman-table datatable mb-0">
            <thead>
                <tr style="margin-top: 70px;">
                    <th>
                        <div class="form-check check-tables">
                            <input class="form-check-input" type="checkbox" value="something" />
                        </div>
                    </th>
                    <th>Especialidade</th>
                    <th>Médico(a)</th>
                    <th>Data</th>
                    <th>Horário</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>';

                                // Loop através dos registros e exibe cada um deles na tabela
                                while ($row = $result->fetch_assoc()) {
                                    // Formatar data e horário para exibição
                                    $data_formatada = date("d.m.Y", strtotime($row['data']));
                                    $horario_formatado = date("H:i", strtotime($row['horario']));

                                    echo '
            <tr>
                <td>
                    <div class="form-check check-tables">
                        <input class="form-check-input" type="checkbox" value="something" />
                    </div>
                </td>
                <td class="profile-image">' . htmlspecialchars($row['especialidade']) . '</td>
                <td>' . htmlspecialchars($row['medico']) . '</td>
                <td>' . $data_formatada . '</td>
                <td>' . $horario_formatado . '</td>
            </tr>';
                                }

                                echo '
            </tbody>
        </table>
    </div>';
                            } else {
                                echo 'Nenhum registro encontrado.';
                            }

                            // Fechar a conexão
                            $conn->close();
                            ?>









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
                                <a href="chat.php">
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
                                <a href="chat.php">
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
                                <a href="chat.php">
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
                                <a href="chat.php">
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
                                <a href="chat.php">
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
                                <a href="chat.php">
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
                                <a href="chat.php">
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
                                <a href="chat.php">
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
                                <a href="chat.php">
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
                                <a href="chat.php">
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
                                <a href="chat.php">
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
                                <a href="chat.php">
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
                                <a href="chat.php">
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
                        <a href="chat.php">See all messages</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff></div>
    <script src="../assets/js/jquery-3.7.1.min.js" type="0384ef50617693332c161f48-text/javascript"></script>
    <script src="../assets/js/bootstrap.bundle.min.js" type="0384ef50617693332c161f48-text/javascript"></script>
    <script src="../assets/js/feather.min.js" type="0384ef50617693332c161f48-text/javascript"></script>
    <script src="../assets/js/jquery.slimscroll.js" type="0384ef50617693332c161f48-text/javascript"></script>
    <script src="../assets/js/select2.min.js" type="0384ef50617693332c161f48-text/javascript"></script>

    <script src="../assets/plugins/moment/moment.min.js" type="0384ef50617693332c161f48-text/javascript"></script>
    <script src="../assets/js/bootstrap-datetimepicker.min.js" type="0384ef50617693332c161f48-text/javascript"></script>
    <script src="../assets/js/app.js" type="0384ef50617693332c161f48-text/javascript"></script>
    <script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="0384ef50617693332c161f48-|49" defer></script>
</body>

<!-- Mirrored from preclinic.dreamstechnologies.com/html/template/profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jun 2024 21:42:43 GMT -->

</html>