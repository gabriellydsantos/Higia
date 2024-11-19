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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    <!-- acessibilidade -->
    <script src="https://cdn.userway.org/widget.js" data-account="xGxZhlc6l4"></script>


</head>


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
                <img src="../assets/img/logo 1.png" width="100" height="40" alt>
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
                            <li class="breadcrumb-item"><a href="doctors.php">Pacientes </a></li>
                            <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                            <li class="breadcrumb-item active">Lista de pacientes</li>
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
                                            <h3>Lista dos funcionários</h3>
                                            <div class="doctor-search-blk">
                                                <div class="top-nav-search table-search-blk">
                                                    <form method="GET">
                                                        <input type="text" id="search-staff" class="form-control"
                                                            placeholder="Procure aqui"
                                                            style="background-color:#c0c4e599;">
                                                        <button type="submit" class="btn"><img
                                                                src="../assets/img/icons/search-normal.svg"
                                                                alt="Search"></button>
                                                    </form>
                                                </div>
                                                <div class="add-group">
                                                    <a href="add-staff.php" class="btn btn-primary add-pluss ms-2">
                                                        <img src="../assets/img/icons/plus.svg" alt>
                                                    </a>
                                                    <a href="javascript:;" id="refresh-button"
                                                        class="btn btn-primary doctor-refresh ms-2">
                                                        <img src="../assets/img/icons/re-fresh.svg" alt>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto text-end float-end ms-auto download-grp">
                                        <a href="javascript:;" class="me-2"><img
                                                src="../assets/img/icons/pdf-icon-01.svg" alt></a>
                                        <a href="javascript:;" class="me-2"><img
                                                src="../assets/img/icons/pdf-icon-02.svg" alt></a>
                                    </div>
                                </div>
                            </div>

                            <?php
                            // Incluindo o arquivo de conexão ao banco de dados
                            include('database.php');

                            // Verificando se a pesquisa foi feita
                            $query = "";
                            if (isset($_GET['query'])) {
                                $query = $_GET['query'];
                            }

                            // Consultar os dados dos pacientes
                            $sql = "SELECT id, first_name, last_name, carteirinha, phone, email, created_at, image FROM staff";
                            if (!empty($query)) {
                                $sql .= " WHERE CONCAT(first_name, ' ', last_name) LIKE '%$query%' OR carteirinha LIKE '%$query%'";
                            }
                            $result = $conn->query($sql);
                            ?>
                            <div class="table-responsive">
                                <table class="table border-0 custom-table comman-table datatable mb-0">
                                    <thead>
                                        <tr>
                                            <th>
                                                <div class="form-check check-tables">
                                                    <input class="form-check-input" type="checkbox" value="something">
                                                </div>
                                            </th>
                                            <th>Nome</th>
                                            <th>Carteirinha</th>
                                            <th>Telefone</th>
                                            <th>E-mail</th>
                                            <th>Data de ingresso</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="staff-table-body">
                                        <?php
                                        if ($result->num_rows > 0) {
                                            // Exibir os dados de cada paciente
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td>
                            <div class='form-check check-tables'>
                                <input class='form-check-input' type='checkbox' value='something'>
                            </div>
                          </td>";
                                                echo "<td class='profile-image'><a href='profile.php?id=" . $row['id'] . "'><img width='28' height='28' src='" . $row['image'] . "' class='rounded-circle m-r-5' alt> " . $row['first_name'] . " " . $row['last_name'] . "</a></td>";
                                                echo "<td>" . $row['carteirinha'] . "</td>";
                                                echo "<td><a href='javascript:;'>" . $row['phone'] . "</a></td>";
                                                echo "<td><a href='mailto:" . $row['email'] . "'>" . $row['email'] . "</a></td>";
                                                echo "<td>" . date("d.m.Y", strtotime($row['created_at'])) . "</td>";
                                                echo "<td class='text-end'>
                            <div class='dropdown dropdown-action'>
                                <a href='#' class='action-icon dropdown-toggle' data-bs-toggle='dropdown' aria-expanded='false'><i class='fa fa-ellipsis-v'></i></a>
                                <div class='dropdown-menu dropdown-menu-end'>
                                    <a class='dropdown-item' href='edit-staff.php?id=" . $row['id'] . "'><i class='fa-solid fa-pen-to-square m-r-5'></i> Editar</a>
                                    <a class='dropdown-item' href='#' data-bs-toggle='modal' data-bs-target='#delete_staff'><i class='fa fa-trash-alt m-r-5'></i> Excluir</a>
                                </div>
                            </div>
                          </td>";
                                                echo "</tr>";
                                            }
                                        } else {
                                            echo "<tr><td colspan='7'>Nenhum paciente encontrado.</td></tr>";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>


                            <?php
                            $conn->close();
                            ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="delete_patient" class="modal fade delete-modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img src="../assets/img/sent.png" alt width="50" height="46">
                    <h3>Are you sure want to delete this ?</h3>
                    <div class="m-t-20"> <a href="#" class="btn btn-white" data-bs-dismiss="modal">Fechar</a>
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="sidebar-overlay" data-reff></div>


<script>
$(document).ready(function() {
    // Função para realizar a busca dinâmica
    $('#search-staff').on('input', function() {
        var query = $(this).val();

        $.ajax({
            url: 'fetch_staff.php',
            type: 'GET',
            data: {
                query: query
            },
            success: function(data) {
                $('#staff-table-body').html(data);
            }
        });
    });

    // Recarregar a página ao clicar no botão de refresh
    $('#refresh-button').on('click', function() {
        location.reload();
    });
});
</script>

<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="../assets/js/jquery-3.7.1.min.js" type="2baeca2c3f656ada6eadd5bb-text/javascript"></script>

<script src="../assets/js/bootstrap.bundle.min.js" type="2baeca2c3f656ada6eadd5bb-text/javascript"></script>

<script src="../assets/js/feather.min.js" type="2baeca2c3f656ada6eadd5bb-text/javascript"></script>

<script src="../assets/js/jquery.slimscroll.js" type="2baeca2c3f656ada6eadd5bb-text/javascript"></script>

<script src="../assets/js/select2.min.js" type="2baeca2c3f656ada6eadd5bb-text/javascript"></script>

<script src="../assets/plugins/datatables/jquery.dataTables.min.js" type="2baeca2c3f656ada6eadd5bb-text/javascript">
</script>
<script src="../assets/plugins/datatables/datatables.min.js" type="2baeca2c3f656ada6eadd5bb-text/javascript"></script>

<script src="../assets/js/app.js" type="2baeca2c3f656ada6eadd5bb-text/javascript"></script>
<script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="2baeca2c3f656ada6eadd5bb-|49" defer></script>
</body>



</html>