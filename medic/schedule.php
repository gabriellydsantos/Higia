<?php
include "conexao.php";
session_start();
//ocultar erros
error_reporting(0);
ini_set('display_errors', 0);

// Verificar se o usuário está logado
$id = $_SESSION['doctor_id'];
if (!isset($id)) {
  header("Location: index.php");
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
  <script src="https://cdn.userway.org/widget.js" data-account="xGxZhlc6l4"></script>


  <div class="main-wrapper">
    <div class="header">
      <div class="header-left">
        <a href="doctor-dashboard.php" class="logo">
          <img src="../assets/img/logo 1.png" width="100" height="40" alt />
        </a>
      </div>
      <a id="mobile_btn" class="mobile_btn float-start" href="#sidebar"><img src="../assets/img/icons/bar-icon.svg"
          alt /></a>
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
            <a class="dropdown-item" href="logout.php">Sair</a>
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
                  <a href="/medic/schedule.php">Doctor Shedule </a>
                </li>
                <li class="breadcrumb-item">
                  <i class="feather-chevron-right"></i>
                </li>
                <li class="breadcrumb-item active">Schedule List</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <div class="card card-table show-entire">
              <div class="card-body">
                <div class="page-table-header mb-2">
                  <div class="row align-items-center">
                    <div class="col">
                      <div class="doctor-table-blk">
                        <h3>Lista de Agendamento </h3>
                        <div class="doctor-search-blk">
                          <div class="top-nav-search table-search-blk">
                            <form>
                              <input type="text" class="form-control" placeholder="Procure aqui" />
                              <a class="btn"><img src="../assets/img/icons/search-normal.svg" alt /></a>
                            </form>
                          </div>
                          <div class="add-group">
                            <a href="/medic/add-schedule.php" class="btn btn-primary add-pluss ms-2"><img
                                src="../assets/img/icons/plus.svg" alt /></a>
                            <a href="/medic/javascript:;" class="btn btn-primary doctor-refresh ms-2"><img
                                src="../assets/img/icons/re-fresh.svg" alt /></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto text-end float-end ms-auto download-grp">
                      <a href="/medic/javascript:;" class="me-2"><img src="../assets/img/icons/pdf-icon-01.svg" alt /></a>
                      <a href="/medic/javascript:;" class="me-2"><img src="../assets/img/icons/pdf-icon-02.svg" alt /></a>
                      <a href="/medic/javascript:;" class="me-2"><img src="../assets/img/icons/pdf-icon-03.svg" alt /></a>
                      <a href="/medic/javascript:;"><img src="../assets/img/icons/pdf-icon-04.svg" alt /></a>
                    </div>
                  </div>
                </div>

                <div class="table-responsive">
                  <table class="table border-0 custom-table comman-table datatable mb-0">
                    <thead>
                      <tr>
                        <th>
                          <div class="form-check check-tables">
                            <input class="form-check-input" type="checkbox" value="something" />
                          </div>
                        </th>
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Data</th>
                        <th>Tempo disponível</th>
                        <th>Status</th>

                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="form-check check-tables">
                            <input class="form-check-input" type="checkbox" value="something" />
                          </div>
                        </td>
                        <td class="profile-image">
                          <a href="/medic/profile.php"><img width="28" height="28" src="../assets/img/profiles/avatar-01.jpg"
                              class="rounded-circle m-r-5" alt />
                            Lorem Ipsum</a>
                        </td>
                        <td> 00/00/0000</td>
                        <td> 00/00/0000</td>
                        <td>09:00 AM - 06:00 PM</td>
                        <td>
                          <button class="custom-badge status-green">
                            Active
                          </button>
                        </td>
                        <td class="text-end">
                          <div class="dropdown dropdown-action">
                            <a href="/medic/#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                              aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="edit-schedule.php"><i
                                  class="fa-solid fa-pen-to-square m-r-5"></i>
                                Edit</a>
                              <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                data-bs-target="#delete_patient"><i class="fa fa-trash-alt m-r-5"></i>
                                Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check check-tables">
                            <input class="form-check-input" type="checkbox" value="something" />
                          </div>
                        </td>
                        <td class="profile-image">
                          <a href="/medic/profile.php"><img width="28" height="28" src="../assets/img/profiles/avatar-02.jpg"
                              class="rounded-circle m-r-5" alt />
                            Lorem Ipsum</a>
                        </td>
                        <td> 00/00/0000</td>
                        <td> 00/00/0000</td>
                        <td>09:00 AM - 04:00 PM</td>
                        <td>
                          <button class="custom-badge status-green">
                            Active
                          </button>
                        </td>
                        <td class="text-end">
                          <div class="dropdown dropdown-action">
                            <a href="/medic/#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                              aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="edit-schedule.php"><i
                                  class="fa-solid fa-pen-to-square m-r-5"></i>
                                Edit</a>
                              <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                data-bs-target="#delete_patient"><i class="fa fa-trash-alt m-r-5"></i>
                                Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check check-tables">
                            <input class="form-check-input" type="checkbox" value="something" />
                          </div>
                        </td>
                        <td class="profile-image">
                          <a href="/medic/profile.php"><img width="28" height="28" src="../assets/img/profiles/avatar-03.jpg"
                              class="rounded-circle m-r-5" alt />
                            Lorem Ipsum</a>
                        </td>
                        <td> 00/00/0000</td>
                        <td> 00/00/0000</td>
                        <td>09:00 AM - 06:00 PM</td>
                        <td>
                          <button class="custom-badge status-green">
                            Active
                          </button>
                        </td>
                        <td class="text-end">
                          <div class="dropdown dropdown-action">
                            <a href="/medic/#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                              aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="edit-schedule.php"><i
                                  class="fa-solid fa-pen-to-square m-r-5"></i>
                                Edit</a>
                              <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                data-bs-target="#delete_patient"><i class="fa fa-trash-alt m-r-5"></i>
                                Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check check-tables">
                            <input class="form-check-input" type="checkbox" value="something" />
                          </div>
                        </td>
                        <td class="profile-image">
                          <a href="/medic/profile.php"><img width="28" height="28" src="../assets/img/profiles/avatar-04.jpg"
                              class="rounded-circle m-r-5" alt />
                            Lorem Ipsum</a>
                        </td>
                        <td> 00/00/0000</td>
                        <td> 00/00/0000</td>
                        <td>010:00 AM - 05:00 PM</td>
                        <td>
                          <button class="custom-badge status-pink">
                            In Active
                          </button>
                        </td>
                        <td class="text-end">
                          <div class="dropdown dropdown-action">
                            <a href="/medic/#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                              aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="edit-schedule.php"><i
                                  class="fa-solid fa-pen-to-square m-r-5"></i>
                                Edit</a>
                              <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                data-bs-target="#delete_patient"><i class="fa fa-trash-alt m-r-5"></i>
                                Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check check-tables">
                            <input class="form-check-input" type="checkbox" value="something" />
                          </div>
                        </td>
                        <td class="profile-image">
                          <a href="/medic/profile.php"><img width="28" height="28" src="../assets/img/profiles/avatar-06.jpg"
                              class="rounded-circle m-r-5" alt />Lorem Ipsum</a>
                        </td>
                        <td> 00/00/0000</td>
                        <td> 00/00/0000</td>
                        <td>09:00 AM - 06:00 PM</td>
                        <td>
                          <button class="custom-badge status-pink">
                            In Active
                          </button>
                        </td>
                        <td class="text-end">
                          <div class="dropdown dropdown-action">
                            <a href="/medic/#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                              aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="edit-schedule.php"><i
                                  class="fa-solid fa-pen-to-square m-r-5"></i>
                                Edit</a>
                              <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                data-bs-target="#delete_patient"><i class="fa fa-trash-alt m-r-5"></i>
                                Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check check-tables">
                            <input class="form-check-input" type="checkbox" value="something" />
                          </div>
                        </td>
                        <td class="profile-image">
                          <a href="/medic/profile.php"><img width="28" height="28" src="../assets/img/profiles/avatar-05.jpg"
                              class="rounded-circle m-r-5" alt />
                            Lorem Ipsum</a>
                        </td>
                        <td> 00/00/0000</td>
                        <td> 00/00/0000</td>
                        <td>09:00 AM - 12:00 PM</td>
                        <td>
                          <button class="custom-badge status-green">
                            Active
                          </button>
                        </td>
                        <td class="text-end">
                          <div class="dropdown dropdown-action">
                            <a href="/medic/#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                              aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="edit-schedule.php"><i
                                  class="fa-solid fa-pen-to-square m-r-5"></i>
                                Edit</a>
                              <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                data-bs-target="#delete_patient"><i class="fa fa-trash-alt m-r-5"></i>
                                Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check check-tables">
                            <input class="form-check-input" type="checkbox" value="something" />
                          </div>
                        </td>
                        <td class="profile-image">
                          <a href="/medic/profile.php"><img width="28" height="28" src="../assets/img/profiles/avatar-01.jpg"
                              class="rounded-circle m-r-5" alt />
                            Lorem Ipsum</a>
                        </td>
                        <td> 00/00/0000</td>
                        <td> 00/00/0000</td>
                        <td>09:00 AM - 06:00 PM</td>
                        <td>
                          <button class="custom-badge status-green">
                            Active
                          </button>
                        </td>
                        <td class="text-end">
                          <div class="dropdown dropdown-action">
                            <a href="/medic/#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                              aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="edit-schedule.php"><i
                                  class="fa-solid fa-pen-to-square m-r-5"></i>
                                Edit</a>
                              <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                data-bs-target="#delete_patient"><i class="fa fa-trash-alt m-r-5"></i>
                                Delete</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="form-check check-tables">
                            <input class="form-check-input" type="checkbox" value="something" />
                          </div>
                        </td>
                        <td class="profile-image">
                          <a href="/medic/profile.php"><img width="28" height="28" src="../assets/img/profiles/avatar-02.jpg"
                              class="rounded-circle m-r-5" alt />
                            Lorem Ipsum</a>
                        </td>
                        <td> 00/00/0000</td>
                        <td> 00/00/0000</td>
                        <td>11:00 AM - 09:00 PM</td>
                        <td>
                          <button class="custom-badge status-pink">
                            In Active
                          </button>
                        </td>
                        <td class="text-end">
                          <div class="dropdown dropdown-action">
                            <a href="/medic/#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown"
                              aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                            <div class="dropdown-menu dropdown-menu-end">
                              <a class="dropdown-item" href="edit-schedule.php"><i
                                  class="fa-solid fa-pen-to-square m-r-5"></i>
                                Edit</a>
                              <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                data-bs-target="#delete_patient"><i class="fa fa-trash-alt m-r-5"></i>
                                Delete</a>
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
    <div id="delete_patient" class="modal fade delete-modal" role="dialog">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body text-center">
            <img src="../assets/img/sent.png" alt width="50" height="46" />
            <h3>Are you sure want to delete this ?</h3>
            <div class="m-t-20">
              <a href="/medic/#" class="btn btn-white" data-bs-dismiss="modal">Close</a>
              <button type="submit" class="btn btn-danger">Delete</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sidebar-overlay" data-reff></div>
  <script src="../assets/js/jquery-3.7.1.min.js" type="a19ae7404a6e661da8106299-text/javascript"></script>
  <script src="../assets/js/bootstrap.bundle.min.js" type="a19ae7404a6e661da8106299-text/javascript"></script>
  <script src="../assets/js/feather.min.js" type="a19ae7404a6e661da8106299-text/javascript"></script>
  <script src="../assets/js/jquery.slimscroll.js" type="a19ae7404a6e661da8106299-text/javascript"></script>
  <script src="../assets/plugins/datatables/jquery.dataTables.min.js"
    type="a19ae7404a6e661da8106299-text/javascript"></script>
  <script src="../assets/plugins/datatables/datatables.min.js" type="a19ae7404a6e661da8106299-text/javascript"></script>
  <script src="../assets/js/app.js" type="a19ae7404a6e661da8106299-text/javascript"></script>
  <script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="a19ae7404a6e661da8106299-|49" defer></script>
</body>

<!-- Mirrored from preclinic.dreamstechnologies.com/html/template/schedule.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jun 2024 21:43:17 GMT -->

</html>