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
      <a id="mobile_btn" class="mobile_btn float-start" href="#sidebar"><img src="../assets/img/icons/bar-icon.svg"
          alt /></a>
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
                          <span class="noti-title">Videoconferência entre Paciente e Médico</span>
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
              <a href="#"><span class="menu-side"><img src="../assets/img/icons/menu-icon-01.svg" alt="" /></span>
                <span> Controle </span>
                <span class="menu-arrow"></span></a>
              <ul style="display: none">
                <li><a href="../admin/index.php">Painel do Admin</a></li>
              </ul>
            </li>
            <li class="submenu">
              <a href="#"><span class="menu-side"><img src="../assets/img/icons/menu-icon-02.svg" alt="" /></span>
                <span> Médicos </span> <span class="menu-arrow"></span></a>
              <ul>
                <li><a href="../admin/doctors.php">Lista de Médicos</a></li>
                <li><a href="../admin/add-doctor.php">Adicionar Médico</a></li>
                <li><a href="../admin/edit-doctor.php">Editar Médico</a></li>
                <li><a href="../admin/doctor-profile.php">Perfil do Médico</a></li>
              </ul>
            </li>
            <li class="submenu">
              <a href="#"><span class="menu-side"><img src="../assets/img/icons/menu-icon-03.svg" alt="" /></span>
                <span> Pacientes </span> <span class="menu-arrow"></span></a>
              <ul style="display: none">
                <li><a href="../admin/patients.php">Lista de Pacientes</a></li>
                <li><a href="../admin/add-patient.php">Adicionar Paciente</a></li>
                <li><a href="../admin/edit-patient.php">Editar Paciente</a></li>
                <li><a href="../admin/patient-profile.php">Perfil do Paciente</a></li>
              </ul>
            </li>
            <li class="submenu">
              <a href="#"><span class="menu-side"><img src="../assets/img/icons/menu-icon-08.svg" alt="" /></span>
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
              <a href="#"><span class="menu-side"><img src="../assets/img/icons/menu-icon-06.svg" alt /></span>
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
            <a href="login.php"><span class="menu-side"><img src="../assets/img/icons/logout.svg" alt="" /></span>
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
                  <a href="departments.php">Department </a>
                </li>
                <li class="breadcrumb-item">
                  <i class="feather-chevron-right"></i>
                </li>
                <li class="breadcrumb-item active">Edit Department</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-12">
                      <div class="form-heading">
                        <h4>Editar Departamento</h4>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-6">
                      <div class="input-block local-forms">
                        <label>Nome do Departamento
                          <span class="login-danger">*</span></label>
                        <input class="form-control" type="text" value="Urologia" />
                      </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-6">
                      <div class="input-block local-forms">
                        <label>Médico
                          <span class="login-danger">*</span></label>
                        <input class="form-control" type="text" value="Lorem Ipsum" />
                      </div>
                    </div>
                    <div class="col-12 col-sm-12">
                      <div class="input-block local-forms">
                        <label>Descrição
                          <span class="login-danger">*</span></label>
                        <textarea class="form-control" rows="3" cols="30">
        Investiga e trata problemas...</textarea>
                      </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-6">
                      <div class="input-block local-forms cal-icon">
                        <label>Data do Departamento
                          <span class="login-danger">*</span></label>
                        <input class="form-control datetimepicker" type="text" value="28-11-22" />
                      </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-6">
                      <div class="input-block select-gender">
                        <label class="gen-label">Status <span class="login-danger">*</span></label>
                        <div class="form-check-inline">
                          <label class="form-check-label">
                            <input type="radio" name="gender" class="form-check-input" checked />Ativo
                          </label>
                        </div>
                        <div class="form-check-inline">
                          <label class="form-check-label">
                            <input type="radio" name="gender" class="form-check-input" />Inativo
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="doctor-submit text-end">
                        <button type="submit" class="btn btn-primary submit-form me-2">
                          Salvar
                        </button>
                        <button type="submit" class="btn btn-primary cancel-form">
                          Cancelar
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
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
                      <span class="message-author">Lorem Ipsum</span>
                      <span class="message-time">12:28 AM</span>
                      <div class="clearfix"></div>
                      <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
                      <span class="message-time">1 Ago</span>
                      <div class="clearfix"></div>
                      <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
                      <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
                      <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
                      <span class="message-author">Lorem Ipsum</span>
                      <span class="message-time">12:28 AM</span>
                      <div class="clearfix"></div>
                      <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
                      <span class="message-author">Lorem Ipsum</span>
                      <span class="message-time">12:28 AM</span>
                      <div class="clearfix"></div>
                      <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
                      <span class="message-author">Lorem Ipsum</span>
                      <span class="message-time">12:28 AM</span>
                      <div class="clearfix"></div>
                      <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
                      <span class="message-author">Lorem Ipsum</span>
                      <span class="message-time">12:28 AM</span>
                      <div class="clearfix"></div>
                      <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
                      <span class="message-author">Lorem Ipsum</span>
                      <span class="message-time">12:28 AM</span>
                      <div class="clearfix"></div>
                      <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
                      <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
                      <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
                      <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
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
                      <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <div class="topnav-dropdown-footer">
            <a href="chat.php">Ver todas as mensagens</a>
          </div>
        </div>
      </div>
      >
    </div>
    <div id="delete_patient" class="modal fade delete-modal" role="dialog">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body text-center">
            <img src="../assets/img/sent.png" alt width="50" height="46" />
            <h3>Are you sure want to delete this ?</h3>
            <div class="m-t-20">
              <a href="#" class="btn btn-white" data-bs-dismiss="modal">Close</a>
              <button type="submit" class="btn btn-danger">Delete</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sidebar-overlay" data-reff></div>
  <script src="../assets/js/jquery-3.7.1.min.js" type="e171492cedd333a95371061b-text/javascript"></script>
  <script src="../assets/js/bootstrap.bundle.min.js" type="e171492cedd333a95371061b-text/javascript"></script>
  <script src="../assets/js/feather.min.js" type="e171492cedd333a95371061b-text/javascript"></script>
  <script src="../assets/js/jquery.slimscroll.js" type="e171492cedd333a95371061b-text/javascript"></script>
  <script src="../assets/js/select2.min.js" type="e171492cedd333a95371061b-text/javascript"></script>

  <script src="../assets/plugins/moment/moment.min.js" type="e171492cedd333a95371061b-text/javascript"></script>
  <script src="../assets/js/bootstrap-datetimepicker.min.js" type="e171492cedd333a95371061b-text/javascript"></script>
  <script src="../assets/js/app.js" type="e171492cedd333a95371061b-text/javascript"></script>
  <script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="e171492cedd333a95371061b-|49" defer></script>
</body>

<!-- Mirrored from preclinic.dreamstechnologies.com/html/template/edit-department.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jun 2024 21:43:17 GMT -->

</html>