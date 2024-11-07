<?php
    session_start();
    
    error_reporting(0);
    ini_set('display_errors', 0);
    
    if (!isset($_SESSION['admin_id'])) {
        header("Location: ../loginADM.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <script src="https://cdn.userway.org/widget.js" data-account="xGxZhlc6l4"></script>
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
                                <li><a href="../admin/edit-department.php">Editar Especialidade</a></li>
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
                                    <a href="departments.php">Departamento </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <i class="feather-chevron-right"></i>
                                </li>
                                <li class="breadcrumb-item active">Add Departamento</li>
                            </ul>
                        </div>
                    </div>
                </div>





                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="POST" action="add-department.php">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-heading">
                                                <h4>Adicionar Especialidade</h4>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 col-xl-6">
                                            <div class="input-block local-forms">
                                                <label>Médico do Especialidade (Carteirinha)<span
                                                        class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="doctor_carteirinha"
                                                    placeholder="Digite a carteirinha do médico" required />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 col-xl-6">
                                            <div class="input-block local-forms">
                                                <label>Nome da Especialidade<span class="login-danger">*</span></label>
                                                <select class="form-control" name="department_name" required>
                                                    <option value="">Selecione a especialidade</option>
                                                    <option value="Clínico geral">Clínico geral</option>
                                                    <option value="Cardiologista">Cardiologista</option>
                                                    <option value="Pediatra">Pediatra</option>
                                                    <option value="Psiquiatra">Psiquiatra</option>
                                                    <option value="Psicólogo">Psicólogo</option>
                                                    <option value="Fisioterapeuta">Fisioterapeuta</option>
                                                    <option value="Coloproctologista">Coloproctologista</option>
                                                    <option value="Cirurgião geral">Cirurgião geral</option>
                                                    <option value="Cirurgião plástico">Cirurgião plástico</option>
                                                    <option value="Cirurgião de cabeça e pescoço">Cirurgião de cabeça e
                                                        pescoço</option>
                                                    <option value="Cirurgião vascular">Cirurgião vascular</option>
                                                    <option value="Cirurgião Oncológico">Cirurgião Oncológico</option>
                                                    <option value="Neurocirurgião">Neurocirurgião</option>
                                                    <option value="Ortopedista">Ortopedista</option>
                                                    <option value="Odonto">Odonto</option>
                                                    <option value="Oftalmologista">Oftalmologista</option>
                                                    <option value="Ginecologista">Ginecologista</option>
                                                    <option value="Nutricionista">Nutricionista</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12">
                                            <div class="input-block local-forms">
                                                <label>Descrição<span class="login-danger">*</span></label>
                                                <textarea class="form-control" rows="3" cols="30" name="description"
                                                    placeholder="Descrição" required></textarea>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 col-xl-6">
                                            <div class="input-block local-forms cal-icon">
                                                <label>Data de envio<span class="login-danger">*</span></label>
                                                <input class="form-control datetimepicker" type="text"
                                                    name="department_date" placeholder="dd/mm/aaaa" required />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 col-xl-6">
                                            <div class="input-block select-gender">
                                                <label class="gen-label">Status<span
                                                        class="login-danger">*</span></label>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" name="status" value="Ativo"
                                                            class="form-check-input mt-0" required />Ativo
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" name="status" value="Inativo"
                                                            class="form-check-input mt-0" required />Inativo
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="doctor-submit text-end">
                                                <button type="submit"
                                                    class="btn btn-primary submit-form me-2">Enviar</button>
                                                <button type="button" class="btn btn-primary cancel-form"
                                                    onclick="window.location.href='departments.php';">Cancelar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
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
                                <a href="#" class="btn btn-white" data-bs-dismiss="modal">Close</a>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sidebar-overlay" data-reff></div>
        <script src="../assets/js/jquery-3.7.1.min.js" type="99b33d9fe545964c14218df7-text/javascript"></script>
        <script src="../assets/js/bootstrap.bundle.min.js" type="99b33d9fe545964c14218df7-text/javascript"></script>
        <script src="../assets/js/feather.min.js" type="99b33d9fe545964c14218df7-text/javascript"></script>
        <script src="../assets/js/jquery.slimscroll.js" type="99b33d9fe545964c14218df7-text/javascript"></script>
        <script src="../assets/js/select2.min.js" type="99b33d9fe545964c14218df7-text/javascript"></script>

        <script src="../assets/plugins/moment/moment.min.js" type="99b33d9fe545964c14218df7-text/javascript"></script>
        <script src="../assets/js/bootstrap-datetimepicker.min.js" type="99b33d9fe545964c14218df7-text/javascript">
        </script>
        <script src="../assets/js/app.js" type="99b33d9fe545964c14218df7-text/javascript"></script>
        <script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
            data-cf-settings="99b33d9fe545964c14218df7-|49" defer></script>
</body>


</html>

<?php
// Inicia o buffer de saída
ob_start();

// Inclui o arquivo de conexão com o banco de dados
include 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $department_name = $_POST['department_name'];
    $doctor_carteirinha = $_POST['doctor_carteirinha'];
    $description = $_POST['description'];
    $department_date = $_POST['department_date'];
    $status = $_POST['status'];

    // Converte a data para o formato correto (Y-m-d)
    $department_date = DateTime::createFromFormat('d/m/Y', $department_date)->format('Y-m-d');

    // Valida o valor de status
    $validStatuses = ['Ativo', 'Inativo'];
    if (!in_array($status, $validStatuses)) {
        echo "Status inválido.";
        exit;
    }

    // Prepara a consulta SQL para inserir o novo departamento
    $sql = "INSERT INTO departments (department_name, doctor_carteirinha, description, department_date, status)
            VALUES (?, ?, ?, ?, ?)";

    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sssss", $department_name, $doctor_carteirinha, $description, $department_date, $status);

        if ($stmt->execute()) {
            // Atualiza o departamento na tabela de médicos com base na carteirinha
            $update_sql = "UPDATE doctors SET department = ? WHERE carteirinha = ?";
            if ($update_stmt = $conn->prepare($update_sql)) {
                $update_stmt->bind_param("ss", $department_name, $doctor_carteirinha);
                $update_stmt->execute();
                $update_stmt->close();
            }

            // Fecha a conexão e limpa o buffer de saída
            $stmt->close();
            $conn->close();
            ob_end_clean(); // Limpa o buffer de saída
            header("Location: departments.php?message=success");
            exit();
        } else {
            echo "Erro: " . $stmt->error;
        }
    } else {
        echo "Erro ao preparar a consulta: " . $conn->error;
    }

    // Fecha a conexão
    $conn->close();
}

// Finaliza o buffer de saída
ob_end_flush();
?>

<!-- Restante do código HTML do formulário -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    // Quando o campo de carteirinha é alterado
    $('input[name="doctor_carteirinha"]').on('change', function() {
        var carteirinha = $(this).val();
        if (carteirinha) {
            $.ajax({
                url: 'get-doctor-name.php', // Arquivo PHP para buscar o nome do médico
                type: 'POST',
                data: {
                    carteirinha: carteirinha
                },
                success: function(response) {
                    // Limpa o campo "Nome do Departamento" quando a carteirinha é alterada
                    $('input[name="department_name"]').val('');
                },
                error: function() {
                    console.log('Erro ao buscar o nome do médico.');
                }
            });
        } else {
            // Limpa o campo "Nome do Departamento" se a carteirinha estiver vazia
            $('input[name="department_name"]').val('');
        }
    });
});
</script>