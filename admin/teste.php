<?php
    session_start();

    if (!isset($_SESSION['doctor_id'])) {
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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
                <a href="index.php" class="logo">
                    <img src="../assets/img/logo 1.png" width="100" height="40" alt />
                </a>
            </div>
            <a id="toggle_btn" href="javascript:void(0);"><img src="../assets/img/icons/bar-icon.svg" alt /></a>
            <a id="mobile_btn" class="mobile_btn float-start" href="#sidebar"><img
                    src="../assets/img/icons/bar-icon.svg" alt /></a>
            <div class="top-nav-search mob-view">
                <form>
                    <input type="text" class="form-control" placeholder="Pesquisar aqui" />
                    <a class="btn"><img src="../assets/img/icons/search-normal.svg" alt /></a>
                </form>
            </div>
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
                                <h2>Olá, Adm <span>lorem ipsum</span></h2>
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
                            <div class="dash-content dash-count">
                                <h4>Compromissos</h4>
                                <h2><span class="counter-up">250</span></h2>
                                <p>
                                    <span class="passive-view"><i class="feather-arrow-up-right me-1"></i>40%</span>
                                    Mês Passado
                                </p>
                            </div>
                        </div>
                    </div>
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
                                        <ul class="nav chat-user-total">
                                            <li>
                                                <i class="fa fa-circle current-users" aria-hidden="true"></i>Masculino
                                                75%
                                            </li>
                                            <li>
                                                <i class="fa fa-circle old-users" aria-hidden="true"></i>
                                                Feminino 25%
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="input-block mb-0">
                                        <select class="form-control select">
                                            <option></option>
                                            <option>2024</option>
                                            <option>2023</option>
                                            <option>2022</option>
                                        </select>
                                    </div>
                                </div>
                                <div id="patient-chart"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-6 col-xl-3 d-flex">
                        <div class="card">
                            <div class="card-body">
                                <div class="chart-title">
                                    <h4>Paciente por departamento</h4>
                                </div>
                                <div id="donut-chart-dash" class="chart-user-icon">
                                    <img src="../assets/img/icons/user-icon.svg" alt />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12 col-xl-4">
                        <div class="card top-departments">
                            <div class="card-header">
                                <h4 class="card-title mb-0">Departamentos principais</h4>
                            </div>
                            <div class="card-body">
                                <div class="activity-top">
                                    <div class="activity-boxs comman-flex-center">
                                        <img src="../assets/img/icons/dep-icon-01.svg" alt />
                                    </div>
                                    <div class="departments-list">
                                        <h4>Clínico geral</h4>
                                        <p>35%</p>
                                    </div>
                                </div>
                                <div class="activity-top">
                                    <div class="activity-boxs comman-flex-center">
                                        <img src="../assets/img/icons/dep-icon-02.svg" alt />
                                    </div>
                                    <div class="departments-list">
                                        <h4>Dentista</h4>
                                        <p>24%</p>
                                    </div>
                                </div>
                                <div class="activity-top">
                                    <div class="activity-boxs comman-flex-center">
                                        <img src="../assets/img/icons/dep-icon-03.svg" alt />
                                    </div>
                                    <div class="departments-list">
                                        <h4>Otorrinolaringologista</h4>
                                        <p>10%</p>
                                    </div>
                                </div>
                                <div class="activity-top">
                                    <div class="activity-boxs comman-flex-center">
                                        <img src="../assets/img/icons/dep-icon-04.svg" alt />
                                    </div>
                                    <div class="departments-list">
                                        <h4>Cardiologista</h4>
                                        <p>15%</p>
                                    </div>
                                </div>
                                <div class="activity-top mb-0">
                                    <div class="activity-boxs comman-flex-center">
                                        <img src="../assets/img/icons/dep-icon-05.svg" alt />
                                    </div>
                                    <div class="departments-list">
                                        <h4>oftalmologista</h4>
                                        <p>20%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-xl-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title d-inline-block">Próximas Edições</h4>
                                <a href="appointments.php" class="patient-views float-end">Mostre tudo</a>
                            </div>
                            <div class="card-body p-0 table-dash">
                                <div class="table-responsive">
                                    <table class="table mb-0 border-0 datatable custom-table">
                                        <thead>
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_1"
                                                    rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                                                    
                                                        
                                                    
                                                : activate to sort column descending" style="width: 21px">
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="something" />
                                                    </div>
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Carterinha: activate to sort column ascending"
                                                    style="width: 78.975px">
                                                    Carterinha
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Nome do paciente: activate to sort column ascending"
                                                    style="width: 131.6px">
                                                    Nome do paciente
                                                </th>
                                                <!-- <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Idade: activate to sort column ascending"
                                                    style="width: 41.275px">
                                                    Idade
                                                </th> -->
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Data de nascimento : activate to sort column ascending"
                                                    style="width: 145.788px">
                                                    Médico
                                                </th>
                                                <!-- <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Diagnóstico: activate to sort column ascending"
                                                    style="width: 87.2875px">
                                                    Diagnóstico
                                                </th> -->
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="something" />
                                                    </div>
                                                </td>
                                                <td>R00001</td>
                                                <td>Lorem Ipsum</td>
                                                <td class="table-image appoint-doctor">
                                                    <img width="28" height="28" class="rounded-circle"
                                                        src="../assets/img/profiles/avatar-02.jpg" alt />
                                                    <h2>Dr.Lorem Ipsum</h2>
                                                </td>

                                                <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="edit-appointment.php"><i
                                                                    class="fa-solid fa-pen-to-square m-r-5"></i>
                                                                Editar</a>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                                data-bs-target="#delete_appointment"><i
                                                                    class="fa fa-trash-alt m-r-5"></i>
                                                                Excluir</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="something" />
                                                    </div>
                                                </td>
                                                <td>R00002</td>
                                                <td>Lorem Ipsum</td>
                                                <td class="table-image appoint-doctor">
                                                    <img width="28" height="28" class="rounded-circle"
                                                        src="../assets/img/profiles/avatar-03.jpg" alt />
                                                    <h2>Dr.Lorem Ipsum</h2>
                                                </td>

                                                <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="edit-appointment.php"><i
                                                                    class="fa-solid fa-pen-to-square m-r-5"></i>
                                                                Editar</a>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                                data-bs-target="#delete_appointment"><i
                                                                    class="fa fa-trash-alt m-r-5"></i>
                                                                Excluir</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="something" />
                                                    </div>
                                                </td>
                                                <td>R00003</td>
                                                <td>Lorem ipsum</td>
                                                <td class="table-image appoint-doctor">
                                                    <img width="28" height="28" class="rounded-circle"
                                                        src="../assets/img/profiles/avatar-04.jpg" alt />
                                                    <h2>Dr.Lorem Ipsum</h2>
                                                </td>

                                                <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="edit-appointment.php"><i
                                                                    class="fa-solid fa-pen-to-square m-r-5"></i>
                                                                Editar</a>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                                data-bs-target="#delete_appointment"><i
                                                                    class="fa fa-trash-alt m-r-5"></i>
                                                                Excluir</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="something" />
                                                    </div>
                                                </td>
                                                <td>R00004</td>
                                                <td>Lorem ipsum</td>
                                                <td class="table-image appoint-doctor">
                                                    <img width="28" height="28" class="rounded-circle"
                                                        src="../assets/img/profiles/avatar-05.jpg" alt />
                                                    <h2>Dr.Lorem ipsum</h2>
                                                </td>

                                                <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="../edit-appointment.php"><i
                                                                    class="fa-solid fa-pen-to-square m-r-5"></i>
                                                                Editar</a>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                                data-bs-target="#delete_appointment"><i
                                                                    class="fa fa-trash-alt m-r-5"></i>
                                                                Excluir</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="something" />
                                                    </div>
                                                </td>
                                                <td>R00005</td>
                                                <td>Lorem ipsum</td>
                                                <td class="table-image appoint-doctor">
                                                    <img width="28" height="28" class="rounded-circle"
                                                        src="../assets/img/profiles/avatar-03.jpg" alt />
                                                    <h2>Dr.Lorem ipsum</h2>
                                                </td>

                                                <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="edit-appointment.php"><i
                                                                    class="fa-solid fa-pen-to-square m-r-5"></i>
                                                                Editar</a>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                                data-bs-target="#delete_appointment"><i
                                                                    class="fa fa-trash-alt m-r-5"></i>
                                                                Excluir</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="col-12 col-xl-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4 class="card-title d-inline-block">Pacientes recentes</h4>
                                <a href="patients.php" class="float-end patient-views">Mostre tudo</a>
                            </div>
                            <div class="card-block table-dash">
                                <div class="table-responsive">
                                    <table class="table mb-0 border-0 datatable custom-table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="something" />
                                                    </div>
                                                </th>
                                                <th>Carterinha</th>
                                                <th>Nome do paciente</th>
                                                <th>Idade</th>
                                                <th>Data de nascimento</th>
                                                <th>Diagnóstico</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="something" />
                                                    </div>
                                                </td>
                                                <td>R00001</td>
                                                <td class="table-image">
                                                    <img width="28" height="28" class="rounded-circle"
                                                        src="../assets/img/profiles/avatar-02.jpg" alt />
                                                    <h2>Lorem Ipsum</h2>
                                                </td>
                                                <td>21</td>
                                                <td>07 de janeiro de 2002</td>
                                                <td>Lorem Ipsum</td>
                                                <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="edit-patient.php"><i
                                                                    class="fa-solid fa-pen-to-square m-r-5"></i>
                                                                Editar</a>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                                data-bs-target="#delete_appointment"><i
                                                                    class="fa fa-trash-alt m-r-5"></i>
                                                                Excluir</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="something" />
                                                    </div>
                                                </td>
                                                <td>R00002</td>
                                                <td class="table-image">
                                                    <img width="28" height="28" class="rounded-circle"
                                                        src="../assets/img/profiles/avatar-03.jpg" alt />
                                                    <h2>Lorem Ipsum</h2>
                                                </td>
                                                <td>23</td>
                                                <td>06 de janeiro de 2002</td>
                                                <td>Lorem Ipsum</td>

                                                <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="edit-patient.php"><i
                                                                    class="fa-solid fa-pen-to-square m-r-5"></i>
                                                                Editar</a>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                                data-bs-target="#delete_appointment"><i
                                                                    class="fa fa-trash-alt m-r-5"></i>
                                                                Excluir</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="something" />
                                                    </div>
                                                </td>
                                                <td>R00003</td>
                                                <td class="table-image">
                                                    <img width="28" height="28" class="rounded-circle"
                                                        src="../assets/img/profiles/avatar-04.jpg" alt />
                                                    <h2>Lorem ipsum</h2>
                                                </td>
                                                <td>25</td>
                                                <td>10 de janeiro de 2002</td>
                                                <td>Lorem ipsum</td>
                                                <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="edit-patient.php"><i
                                                                    class="fa-solid fa-pen-to-square m-r-5"></i>
                                                                Editar</a>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                                data-bs-target="#delete_appointment"><i
                                                                    class="fa fa-trash-alt m-r-5"></i>
                                                                Excluir</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox"
                                                            value="something" />
                                                    </div>
                                                </td>
                                                <td>R00004</td>
                                                <td class="table-image">
                                                    <img width="28" height="28" class="rounded-circle"
                                                        src="../assets/img/profiles/avatar-05.jpg" alt />
                                                    <h2>Lorem Ipsum</h2>
                                                </td>
                                                <td>21</td>
                                                <td>09 de janeiro de 2002</td>
                                                <td>Lorem Ipsum</td>

                                                <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                                class="fa fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="edit-patient.php"><i
                                                                    class="fa-solid fa-pen-to-square m-r-5"></i>
                                                                Edit</a>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                                data-bs-target="#delete_appointment"><i
                                                                    class="fa fa-trash-alt m-r-5"></i>
                                                                Excluir</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>






            </div>
            <div class="notification-box">
                <div class="msg-sidebar notifications msg-noti">
                    <div class="topnav-dropdown-header">
                        <span>Mensagens</span>
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
                                            <span class="message-author">Lorem Ipsum </span>
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
                                            <span class="message-author">Lorem Ipsum</span>
                                            <span class="message-time">1 de agosto</span>
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
                                            <span class="message-author"> Lorem Ipsum</span>
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
                                            <span class="message-author">Lorem Ipsum</span>
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
                                            <span class="message-author"> Lorem Ipsum </span>
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
                                            <span class="message-author"> Lorem Ipsum </span>
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
                                            <span class="message-author">Lorem Ipsum </span>
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
                                            <span class="message-author"> Lorem Ipsum </span>
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
                                            <span class="message-author"> Lorem Ipsum</span>
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
                                            <span class="message-author">Lorem Ipsum</span>
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
                                            <span class="message-author">Lorem Ipsum</span>
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
                                            <span class="message-author">Lorem Ipsum</span>
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
                                            <span class="message-author">Lorem Ipsum</span>
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
                        <a href="chat.php">Veja todas as mensagens</a>
                    </div>
                </div>
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
    <script src="../assets/plugins/apexchart/chart-data.js" type="df5f729902501f2e3972e202-text/javascript"></script>

    <script src="../assets/js/app.js" type="df5f729902501f2e3972e202-text/javascript"></script>
    <script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="df5f729902501f2e3972e202-|49" defer></script>
</body>

</html>