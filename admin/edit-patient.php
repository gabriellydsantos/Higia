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
                <span> Departments </span> <span class="menu-arrow"></span></a>
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
                  <a href="doctors.php">Pacientes </a>
                </li>
                <li class="breadcrumb-item">
                  <i class="feather-chevron-right"></i>
                </li>
                <li class="breadcrumb-item active">Editar pacientes</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-body">
              <?php
// Incluindo o arquivo de conexão ao banco de dados
include('database.php');

// Inicializando variáveis vazias para evitar warnings
$first_name = '';
$last_name = '';
$username = '';
$phone = '';
$email = '';
$password = '';
$carteirinha = '';
$birth_date = '';
$gender = '';
$address = '';
$zipcode = '';
$city = '';
$country = '';
$state = '';
$avatar = '';
$status = '';

// Verificando se o ID foi passado pela URL
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = intval($_GET['id']); // Convertendo para inteiro para segurança

    // Executando a consulta no banco de dados para buscar os dados do paciente
    $query = "SELECT * FROM patients WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        // Atribuindo os valores do banco de dados às variáveis
        $row = mysqli_fetch_assoc($result);
        $first_name = htmlspecialchars($row['first_name']);
        $last_name = htmlspecialchars($row['last_name']);
        $username = htmlspecialchars($row['username']);
        $phone = htmlspecialchars($row['phone']);
        $email = htmlspecialchars($row['email']);
        $password = htmlspecialchars($row['password']);
        $carteirinha = htmlspecialchars($row['carteirinha']);
        $birth_date = htmlspecialchars($row['birth_date']);
        $gender = htmlspecialchars($row['gender']);
        $address = htmlspecialchars($row['address']);
        $zipcode = htmlspecialchars($row['zipcode']);
        $city = htmlspecialchars($row['city']);
        $country = htmlspecialchars($row['country']);
        $state = htmlspecialchars($row['state']);
        $avatar = htmlspecialchars($row['image']); // Ajustado para 'image'
        $status = htmlspecialchars($row['status']);
    } else {
        echo "Paciente não encontrado.";
    }
} else {
    echo "ID do paciente não fornecido.";
}
?>

<form action="edit-patient.php" method="POST" enctype="multipart/form-data">
    <div class="row">
        <div class="col-12">
            <div class="form-heading">
                <h4>Detalhes do paciente</h4> <!-- Corrigido para 'paciente' -->
            </div>
        </div>

        <!-- Formulário com campos -->
        <div class="col-12 col-md-6 col-xl-4">
            <div class="input-block local-forms">
                <label>Primeiro nome<span class="login-danger">*</span></label>
                <input class="form-control" type="text" name="first_name" value="<?php echo $first_name; ?>" required />
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-4">
            <div class="input-block local-forms">
                <label>Sobrenome<span class="login-danger">*</span></label>
                <input class="form-control" type="text" name="last_name" value="<?php echo $last_name; ?>" required />
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-4">
            <div class="input-block local-forms">
                <label>Nome de usuário<span class="login-danger">*</span></label>
                <input class="form-control" type="text" name="username" value="<?php echo $username; ?>" required />
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-6">
            <div class="input-block local-forms">
                <label>Telefone<span class="login-danger">*</span></label>
                <input class="form-control" type="text" name="phone" value="<?php echo $phone; ?>" required />
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-6">
            <div class="input-block local-forms">
                <label>E-mail<span class="login-danger">*</span></label>
                <input class="form-control" type="email" name="email" value="<?php echo $email; ?>" required />
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-6">
            <div class="input-block local-forms">
                <label>Senha<span class="login-danger">*</span></label>
                <input class="form-control" type="password" name="password" value="<?php echo $password; ?>" required />
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-6">
            <div class="input-block local-forms">
                <label>Carteirinha<span class="login-danger">*</span></label>
                <input class="form-control" type="text" name="carteirinha" value="<?php echo $carteirinha; ?>" required />
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-6">
            <div class="input-block local-forms cal-icon">
                <label>Data de nascimento<span class="login-danger">*</span></label>
                <input class="form-control datetimepicker" type="text" name="birth_date" value="<?php echo $birth_date; ?>" required />
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-6">
            <div class="input-block select-gender">
                <label class="gen-label">Gênero<span class="login-danger">*</span></label>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" name="gender" value="Masculino" class="form-check-input" <?php echo ($gender == 'Masculino') ? 'checked' : ''; ?> />Masculino
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" name="gender" value="Feminino" class="form-check-input" <?php echo ($gender == 'Feminino') ? 'checked' : ''; ?> />Feminino
                    </label>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-12">
            <div class="input-block local-forms">
                <label>Endereço<span class="login-danger">*</span></label>
                <input class="form-control" type="text" name="address" value="<?php echo $address; ?>" required />
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-3">
            <div class="input-block local-forms">
                <label>CEP<span class="login-danger">*</span></label>
                <input class="form-control" type="text" name="zipcode" value="<?php echo $zipcode; ?>" required />
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-3">
            <div class="input-block local-forms">
                <label>Cidade<span class="login-danger">*</span></label>
                <select class="form-control select" name="city" required>
                    <option value="">Selecione a cidade</option>
                    <option value="São Paulo" <?php echo ($city == 'São Paulo') ? 'selected' : ''; ?>>São Paulo</option>
                    <option value="Rio de Janeiro" <?php echo ($city == 'Rio de Janeiro') ? 'selected' : ''; ?>>Rio de Janeiro</option>
                    <option value="Santos" <?php echo ($city == 'Santos') ? 'selected' : ''; ?>>Santos</option>
                </select>
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-3">
            <div class="input-block local-forms">
                <label>País<span class="login-danger">*</span></label>
                <select class="form-control select" name="country" required>
                    <option value="Brasil" <?php echo ($country == 'Brasil') ? 'selected' : ''; ?>>Brasil</option>
                </select>
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-3">
            <div class="input-block local-forms">
                <label>Estado<span class="login-danger">*</span></label>
                <select class="form-control select" name="state" required>
                    <option value="">Selecione o estado</option>
                    <option value="AC" <?php echo ($state == 'AC') ? 'selected' : ''; ?>>Acre</option>
                    <option value="SP" <?php echo ($state == 'SP') ? 'selected' : ''; ?>>São Paulo</option>
                </select>
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-6">
            <div class="input-block local-top-form">
                <label class="local-top">Avatar<span class="login-danger">*</span></label>
                <div class="settings-btn upload-files-avator">
                    <input type="file" accept="image/*" name="avatar" id="file" class="hide-input" />
                    <label for="file" class="upload">Escolher arquivo</label>
                </div>
                <div class="upload-images upload-size">
                    <img src="<?php echo $avatar; ?>" alt="Avatar" />
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-xl-6">
            <div class="input-block select-gender">
                <label>Status<span class="login-danger">*</span></label>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" name="status" value="Ativa" class="form-check-input" <?php echo ($status == 'Ativa') ? 'checked' : ''; ?> />Ativa
                    </label>
                </div>
                <div class="form-check-inline">
                    <label class="form-check-label">
                        <input type="radio" name="status" value="Inativo" class="form-check-input" <?php echo ($status == 'Inativo') ? 'checked' : ''; ?> />Inativo
                    </label>
                </div>
            </div>
        </div>

        <div class="col-12">
            <div class="submit-section">
                <button class="btn btn-primary submit-btn" type="submit">Salvar</button>
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
                      <span class="message-author">johnDoe</span>
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
                      <span class="message-author">Melita Faucher</span>
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
                      <span class="avatar">J</span>
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
                      <span class="avatar">L</span>
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
                      <span class="avatar">T</span>
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
            </ul>
          </div>
          <div class="topnav-dropdown-footer">
            <a href="chat.php">Veja todas as mensagens</a>
          </div>
        </div>
      </div>
    </div>
    <div id="delete_patient" class="modal fade delete-modal" role="dialog">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body text-center">
            <img src="../assets/img/sent.png" alt width="50" height="46" />
            <h3>Você tem certeza que deseja excluir isso?</h3>
            <div class="m-t-20">
              <a href="#" class="btn btn-white" data-bs-dismiss="modal">Fechar</a>
              <button type="submit" class="btn btn-danger">Excluir</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="sidebar-overlay" data-reff></div>

  <script src="../assets/js/jquery-3.7.1.min.js" type="59a698b85aa9560b4d73d8b9-text/javascript"></script>

  <script src="../assets/js/bootstrap.bundle.min.js" type="59a698b85aa9560b4d73d8b9-text/javascript"></script>

  <script src="../assets/js/feather.min.js" type="59a698b85aa9560b4d73d8b9-text/javascript"></script>

  <script src="../assets/js/jquery.slimscroll.js" type="59a698b85aa9560b4d73d8b9-text/javascript"></script>

  <script src="../assets/js/select2.min.js" type="59a698b85aa9560b4d73d8b9-text/javascript"></script>

  <script src="../assets/plugins/moment/moment.min.js" type="59a698b85aa9560b4d73d8b9-text/javascript"></script>
  <script src="../assets/js/bootstrap-datetimepicker.min.js" type="59a698b85aa9560b4d73d8b9-text/javascript"></script>

  <script src="../assets/js/app.js" type="59a698b85aa9560b4d73d8b9-text/javascript"></script>
  <script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="59a698b85aa9560b4d73d8b9-|49" defer></script>
</body>

<!-- Mirrored from preclinic.dreamstechnologies.com/html/template/edit-doctor.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jun 2024 21:43:07 GMT -->

</html>