<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png" />
    <link rel="manifest" href="/site.webmanifest" />

    <title>Higia</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css" />

    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css" />
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.min.css" />

    <link rel="stylesheet" type="text/css" href="../assets/css/select2.min.css" />

    <link rel="stylesheet" href="../assets/plugins/datatables/datatables.min.css" />

    <link rel="stylesheet" href="../assets/css/feather.css" />

    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
</head>

<body>
    <script id="__bs_script__">
    //<![CDATA[
    document.write(
        "<script async src='/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace(
            "HOST",
            location.hostname
        )
    );
    //]]>
    </script>
    <script async="" src="/browser-sync/browser-sync-client.js?v=2.26.7"></script>
    <script id="__bs_script__">
    //<![CDATA[
    document.write(
        "<script async src='/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace(
            "HOST",
            location.hostname
        )
    );
    //]]>
    </script>
    <script async="" src="/browser-sync/browser-sync-client.js?v=2.26.7"></script>
    <script async="" src="/browser-sync/browser-sync-client.js?v=2.26.7"></script>

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
                                                    <span class="noti-title">Lorem ipsum</span>
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
                            <h5>lorem ipsum</h5>
                            <span>Admin</span>
                        </div>
                        <span class="user-img">
                            <img src="../assets/img/user-06.jpg" alt="Admin" />
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
                                <li>
                                    <a href="staff-profile.php">Perfil do Funcionário</a>
                                </li>
                                <li><a href="../admin/staff-leave.php">Licenças</a></li>
                                <li><a href="../admin/staff-holiday.php">Feriados</a></li>
                                <li><a href="../admin/staff-attendance.php">Presenças</a></li>
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
                                <span> Departamentos </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none">
                                <li>
                                    <a class="" href="departments.php">Departamento</a>
                                </li>
                                <li><a href="../admin/add-department.php">Add departamento</a></li>
                                <li><a href="../admin/edit-department.php">Editar departamento</a></li>
                            </ul>
                        </li>








                    </ul>
                    <div class="logout-btn">
                        <a href="login.php"><span class="menu-side"><img src="../assets/img/icons/logout.svg"
                                    alt="" /></span>
                            <span>Sair</span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="page-wrapper" style="min-height: 854px">
            <div class="content">
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="doctors.php">Médicos </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <i class="feather-chevron-right"></i>
                                </li>
                                <li class="breadcrumb-item active">Perfil dos médicos</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="about-info">
                                            <h4>
                                                Perfil do paciente<span><a href="javascript:;"><i
                                                            class="feather-more-vertical"></i></a></span>
                                            </h4>
                                        </div>
                                        <div class="doctor-profile-head">
                                            <div class="profile-bg-img">
                                                <img src="../assets/img/profile-bg.jpg" alt="Profile" />
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="profile-user-box">
                                                        <div class="profile-user-img">
                                                            <img src="../assets/img/Group 127.png" alt="Profile" />
                                                            <div
                                                                class="input-block doctor-up-files profile-edit-icon mb-0">
                                                                <div class="uplod d-flex">
                                                                    <!-- <label class="file-upload profile-upbtn mb-0">
        <img src="../assets/img/icons/camera-icon.svg" alt="Profile"></i><input type="file">
        </label> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="names-profiles">
                                                            <h4>Dr. Lorem Ipsum</h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="doctor-personals-grp">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="heading-detail">
                                                <h4 class="mb-3">Sobre mim</h4>
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing
                                                    elit. Velit cumque ut quaerat hic ducimus, quo minus
                                                </p>
                                            </div>
                                            <div class="about-me-list">
                                                <ul class="list-space">
                                                    <li>
                                                        <h4>Gênero</h4>
                                                        <span>Feminino</span>
                                                    </li>

                                                    <li>
                                                        <h4>Designação</h4>
                                                        <span>Sr. Doctor</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="doctor-personals-grp">
                                    <div class="card"></div>
                                </div>
                                <div class="doctor-personals-grp">
                                    <div class="card"></div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="doctor-personals-grp">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="tab-content-set">
                                                <ul class="nav">
                                                    <li>
                                                        <a href="patient-profile.php"><span
                                                                class="set-about-icon me-2"><img
                                                                    src="../assets/img/icons/menu-icon-02.svg"
                                                                    alt="" /></span>Sobre mim</a>
                                                    </li>
                                                    <li>
                                                        <a href="doctor-setting.php" class="active"><span
                                                                class="set-about-icon me-2"><img
                                                                    src="../assets/img/icons/menu-icon-16.svg"
                                                                    alt="" /></span>Configurações</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="setting-form-blk">
                                                <form>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-heading">
                                                                <h4>Configurações de conta</h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-12">
                                                            <div class="input-block local-forms">
                                                                <label>Nome de usuário </label>
                                                                <input class="form-control" type="text"
                                                                    value="Lorem ipsum" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-12">
                                                            <div class="input-block local-forms">
                                                                <label>Móvel </label>
                                                                <input class="form-control" type="text"
                                                                    value="+55 11 987654321" />
                                                            </div>
                                                        </div>
                                                        <div class="col-12 col-sm-12">
                                                            <div class="input-block local-forms">
                                                                <label>E-mail </label>
                                                                <input class="form-control" type="email"
                                                                    value="loremIpsum@gmail.com" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-heading">
                                                            <h4>Configuração de segurança</h4>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12">
                                                        <div class="input-block local-forms">
                                                            <label>Senha atual </label>
                                                            <input class="form-control" type="password" value="12345" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12">
                                                        <div class="input-block local-forms">
                                                            <label>Nova Senha </label>
                                                            <input class="form-control" type="password"
                                                                placeholder="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12">
                                                        <div class="input-block local-forms">
                                                            <label>Confirme sua senha</label>
                                                            <input class="form-control" type="password"
                                                                placeholder="" />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-12">
                                                        <div class="profile-check-blk input-block"></div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="doctor-submit">
                                                            <button type="submit"
                                                                class="btn btn-primary submit-form me-2">
                                                                Enviar
                                                            </button>
                                                            <button type="submit" class="btn btn-primary cancel-form">
                                                                Cancelar
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
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
                    <span>Mensagens</span>
                </div>
                <div class="slimScrollDiv" style="
              position: relative;
              overflow: hidden;
              width: auto;
              height: 730px;
            ">
                    <div class="drop-scroll msg-list-scroll" id="msg_list"
                        style="overflow: hidden; width: auto; height: 730px">
                        <ul class="list-box">
                            <li>
                                <a href="chat.php">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Lorem Ipsum </span>
                                            <span class="message-time">12:28</span>
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
                                            <span class="message-author"> Lorem Ipsum </span>
                                            <span class="message-time">12:28</span>
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
                                            <span class="message-author">Lorem Ipsum </span>
                                            <span class="message-time">12:28</span>
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
                                            <span class="message-time">12:28</span>
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
                                            <span class="message-time">12:28</span>
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
                                            <span class="message-author"> Lorem Ipsum</span>
                                            <span class="message-time">12:28</span>
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
                                            <span class="message-time">12:28</span>
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
                    <div class="slimScrollBar" style="
                background: rgb(135, 135, 135);
                width: 4px;
                position: absolute;
                top: 0px;
                opacity: 0.4;
                display: none;
                border-radius: 0px;
                z-index: 99;
                right: 1px;
                height: 784.8px;
              "></div>
                    <div class="slimScrollRail" style="
                width: 4px;
                height: 100%;
                position: absolute;
                top: 0px;
                display: none;
                border-radius: 7px;
                background: rgb(51, 51, 51);
                opacity: 0.2;
                z-index: 90;
                right: 1px;
              "></div>
                </div>
                <div class="topnav-dropdown-footer">
                    <a href="chat.php">See all messages</a>
                </div>
            </div>
        </div>
    </div>
    <div id="delete_patient" class="modal fade delete-modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img src="../assets/img/sent.png" alt="" width="50" height="46" />
                    <h3>Are you sure want to delete this ?</h3>
                    <div class="m-t-20">
                        <a href="#" class="btn btn-white" data-bs-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="sidebar-overlay" data-reff=""></div>

    <script src="../assets/js/jquery-3.7.1.min.js" type="text/javascript"></script>

    <script src="../assets/js/bootstrap.bundle.min.js" type="text/javascript"></script>

    <script src="../assets/js/feather.min.js" type="text/javascript"></script>

    <script src="../assets/js/jquery.slimscroll.js" type="text/javascript"></script>

    <script src="../assets/js/select2.min.js" type="text/javascript"></script>

    <script src="../assets/plugins/moment/moment.min.js" type="text/javascript"></script>
    <script src="../assets/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>

    <script src="../assets/js/app.js" type="text/javascript"></script>
</body>
<!-- Mirrored from preclinic.dreamstechnologies.com/html/template/doctor-setting.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jun 2024 21:45:38 GMT -->

</html>