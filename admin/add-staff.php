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
                            <li class="breadcrumb-item active">Adicione um paciente</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">

                            <?php
// Conectar ao banco de dados
include 'database.php'; // Ajuste o caminho conforme necessário para o arquivo database.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe os dados do formulário
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $carteirinha = $_POST['carteirinha'];
    $birthDate = $_POST['birth_date'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $zipcode = $_POST['zipcode'];
    $status = $_POST['status'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];


    // Converte a data de nascimento para o formato correto (Y-m-d)
    $birthDate = DateTime::createFromFormat('d/m/Y', $birthDate)->format('Y-m-d');

    // Processa a imagem de upload
    $targetDir = "../uploads/uploads_funcionarios/";  // Diretório fora da pasta admin

    // Verifica se o diretório existe; se não existir, cria-o
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);  // Cria o diretório com permissões apropriadas
    }

    // Define o caminho do arquivo de destino
    $targetFile = $targetDir . basename($_FILES["image"]["name"]);

    // Move o arquivo temporário para o diretório de destino
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        $imagePath = $targetFile;
    } else {
        echo "Erro ao enviar a imagem.";
        $imagePath = null;
    }

    // Valida o valor de status
    $validStatuses = ['Ativa', 'Inativo'];
    if (!in_array($status, $validStatuses)) {
        echo "Status inválido.";
        exit;
    }

    // Prepara a consulta SQL
    $sql = "INSERT INTO staff (first_name, last_name, username, phone, email, password, carteirinha, birth_date, gender, address, city, state, country, zipcode, status, image, cpf, rg)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

if ($stmt = $conn->prepare($sql)) {
    // Adiciona os parâmetros cpf e rg
    $stmt->bind_param("ssssssssssssssssss", $firstName, $lastName, $username, $phone, $email, $password, $carteirinha, $birthDate, $gender, $address, $city, $state, $country, $zipcode, $status, $imagePath, $cpf, $rg);

    if ($stmt->execute()) {
        echo '<div class="message success">Novo colaborador cadastrado com sucesso!</div>';
    } else {
        echo '<div class="message error">Erro: ' . $stmt->error . '</div>';
    }

    $stmt->close();
} else {
    echo "Erro ao preparar a consulta: " . $conn->error;
}

$conn->close();
}

?>

                            <form action="add-staff.php" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-heading">
                                            <h4>Detalhes do colaborador</h4>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div class="input-block local-forms">
                                            <label>Primeiro nome<span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" name="first_name"
                                                placeholder="Digite o primeiro nome" required />
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div class="input-block local-forms">
                                            <label>Sobrenome<span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" name="last_name"
                                                placeholder="Digite o sobrenome" required />
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-xl-4">
                                        <div class="input-block local-forms">
                                            <label>Nome de usuário<span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" name="username"
                                                placeholder="Digite o nome de usuário" required />
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="input-block local-forms">
                                            <label>CPF<span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" name="cpf"
                                                placeholder="Digite o CPF" required />
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="input-block local-forms">
                                            <label>RG<span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" name="rg" placeholder="Digite o RG"
                                                required />
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="input-block local-forms">
                                            <label>Telefone<span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" name="phone"
                                                placeholder="Digite o telefone" required />
                                        </div>
                                    </div>


                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="input-block local-forms">
                                            <label>E-mail<span class="login-danger">*</span></label>
                                            <input class="form-control" type="email" name="email"
                                                placeholder="Digite o e-mail" required />
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="input-block local-forms">
                                            <label>Senha<span class="login-danger">*</span></label>
                                            <input class="form-control" type="password" name="password"
                                                placeholder="Digite a senha" required />
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="input-block local-forms">
                                            <label>Carteirinha<span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" name="carteirinha"
                                                placeholder="Digite a carteirinha"
                                                value="<?php echo str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT); ?>"
                                                required />
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="input-block local-forms cal-icon">
                                            <label>Data de nascimento<span class="login-danger">*</span></label>
                                            <input class="form-control datetimepicker" type="text" name="birth_date"
                                                placeholder="dd/mm/aaaa" required />
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="input-block select-gender">
                                            <label class="gen-label">Gênero<span class="login-danger">*</span></label>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" name="gender" value="masculino"
                                                        class="form-check-input mt-0" required />Masculino
                                                </label>
                                            </div>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" name="gender" value="feminino"
                                                        class="form-check-input mt-0" required />Feminino
                                                </label>
                                            </div>





                                        </div>
                                    </div>

                                    <div class="col-12 col-sm-12">
                                        <div class="input-block local-forms">
                                            <label>Endereço<span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" name="address"
                                                placeholder="Digite o endereço" required />
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="input-block local-forms">
                                            <label>CEP<span class="login-danger">*</span></label>
                                            <input class="form-control" type="text" name="zipcode"
                                                placeholder="Digite o CEP" required />
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="input-block local-forms">
                                            <label>Cidade<span class="login-danger">*</span></label>
                                            <select class="form-control select" name="city" required>
                                                <option value="">Selecione a cidade</option>
                                                <option value="São Paulo">São Paulo</option>
                                                <option value="Rio de Janeiro">Rio de Janeiro</option>
                                                <!-- Outras opções de cidades -->
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="input-block local-forms">
                                            <label>País<span class="login-danger">*</span></label>
                                            <select class="form-control select" name="country" required>
                                                <option value="Brasil">Brasil</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-xl-3">
                                        <div class="input-block local-forms">
                                            <label>Estado<span class="login-danger">*</span></label>
                                            <select class="form-control select" name="state" required>
                                                <option value="">Selecione o estado</option>
                                                <option value="AC">Acre (AC)</option>
                                                <option value="AL">Alagoas (AL)</option>
                                                <option value="AP">Amapá (AP)</option>
                                                <option value="AM">Amazonas (AM)</option>
                                                <option value="BA">Bahia (BA)</option>
                                                <option value="CE">Ceará (CE)</option>
                                                <option value="DF">Distrito Federal (DF)</option>
                                                <option value="ES">Espírito Santo (ES)</option>
                                                <option value="GO">Goiás (GO)</option>
                                                <option value="MA">Maranhão (MA)</option>
                                                <option value="MT">Mato Grosso (MT)</option>
                                                <option value="MS">Mato Grosso do Sul (MS)</option>
                                                <option value="MG">Minas Gerais (MG)</option>
                                                <option value="PA">Pará (PA)</option>
                                                <option value="PB">Paraíba (PB)</option>
                                                <option value="PR">Paraná (PR)</option>
                                                <option value="PE">Pernambuco (PE)</option>
                                                <option value="PI">Piauí (PI)</option>
                                                <option value="RJ">Rio de Janeiro (RJ)</option>
                                                <option value="RN">Rio Grande do Norte (RN)</option>
                                                <option value="RS">Rio Grande do Sul (RS)</option>
                                                <option value="RO">Rondônia (RO)</option>
                                                <option value="RR">Roraima (RR)</option>
                                                <option value="SC">Santa Catarina (SC)</option>
                                                <option value="SP">São Paulo (SP)</option>
                                                <option value="SE">Sergipe (SE)</option>
                                                <option value="TO">Tocantins (TO)</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="input-block select-gender">
                                            <label class="gen-label">Status<span class="login-danger">*</span></label>
                                            <div class="form-check-inline">
                                                <label class="form-check-label">
                                                    <input type="radio" name="status" value="Ativa"
                                                        class="form-check-input mt-0" required />Ativa
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
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="input-block local-top-form">
                                            <label class="local-top">Foto<span class="login-danger">*</span></label>
                                            <div class="settings-btn upload-files-avator">
                                                <input type="file" accept="image/*" name="image" id="file"
                                                    class="hide-input" required />
                                                <label for="file" class="upload">Escolher arquivo</label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-12">
                                        <div class="doctor-submit text-end">
                                            <button type="submit"
                                                class="btn btn-primary submit-form me-2">Enviar</button>
                                            <button type="button" class="btn btn-secondary cancel-form"
                                                onclick="window.location.href='staff.php';">Cancelar</button>
                                        </div>
                                    </div>
                                </div>

                                <script>
                                // Máscara para CPF
                                $('input[name="cpf"]').mask('000.000.000-00', {
                                    reverse: true

                                });

                                // Máscara para RG (ajustar conforme o formato desejado)
                                $('input[name="rg"]').mask('00.000.000-0');
                                $(document).ready(function() {
                                    $('input[name="phone"]').mask('(00) 00000-0000');
                                });


                                document.addEventListener('DOMContentLoaded', function() {
                                    document.querySelector('input[name="zipcode"]').addEventListener('blur',
                                        function() {
                                            var cep = this.value.replace(/\D/g,
                                                ''); // Remove caracteres não numéricos

                                            if (cep.length === 8) { // Verifica se o CEP tem 8 dígitos
                                                fetch(`https://viacep.com.br/ws/${cep}/json/`)
                                                    .then(response => response.json())
                                                    .then(data => {
                                                        if (!data.erro) {
                                                            // Preenche o campo de Endereço
                                                            document.querySelector(
                                                                    'input[name="address"]').value =
                                                                data.logradouro + ', ' + data.bairro;

                                                            // Atualiza o campo de Estado
                                                            var stateSelect = document.querySelector(
                                                                'select[name="state"]');
                                                            var optionFound = false;

                                                            // Itera sobre as opções do select de estado para selecionar a correta
                                                            for (var i = 0; i < stateSelect.options
                                                                .length; i++) {
                                                                if (stateSelect.options[i].value ===
                                                                    data.uf) {
                                                                    stateSelect.selectedIndex = i;
                                                                    optionFound = true;
                                                                    break;
                                                                }
                                                            }

                                                            // Se a opção não foi encontrada, exibe uma mensagem
                                                            if (!optionFound) {
                                                                alert(
                                                                    'Estado não encontrado no select. Verifique se a sigla do estado está correta.'
                                                                );
                                                            }

                                                            // Força a atualização do campo visível
                                                            stateSelect.dispatchEvent(new Event(
                                                                'change'));

                                                            // Atualiza o campo de Cidade
                                                            var citySelect = document.querySelector(
                                                                'select[name="city"]');
                                                            citySelect.innerHTML =
                                                                `<option value="${data.localidade}">${data.localidade}</option>`;

                                                            // Preenche o campo de País com 'Brasil'
                                                            document.querySelector(
                                                                    'select[name="country"]').value =
                                                                'Brasil';
                                                        } else {
                                                            alert('CEP não encontrado.');
                                                        }
                                                    })
                                                    .catch(error => {
                                                        console.error('Erro ao buscar CEP:', error);
                                                        alert('Erro ao buscar CEP. Tente novamente.');
                                                    });
                                            } else {
                                                alert('Por favor, insira um CEP válido.');
                                            }
                                        });
                                });
                                </script>
                            </form>


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
                    <img src="../assets/img/sent.png" alt width="50" height="46" />
                    <h3>Você tem certeza que deseja deletar isso ?</h3>
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

<script src="../assets/js/jquery-3.7.1.min.js" type="47d543a399884d7bc4ffb078-text/javascript"></script>

<script src="../assets/js/bootstrap.bundle.min.js" type="47d543a399884d7bc4ffb078-text/javascript"></script>

<script src="../assets/js/feather.min.js" type="47d543a399884d7bc4ffb078-text/javascript"></script>

<script src="../assets/js/jquery.slimscroll.js" type="47d543a399884d7bc4ffb078-text/javascript"></script>

<script src="../assets/js/select2.min.js" type="47d543a399884d7bc4ffb078-text/javascript"></script>

<script src="../assets/plugins/moment/moment.min.js" type="47d543a399884d7bc4ffb078-text/javascript"></script>
<script src="../assets/js/bootstrap-datetimepicker.min.js" type="47d543a399884d7bc4ffb078-text/javascript"></script>

<script src="../assets/js/app.js" type="47d543a399884d7bc4ffb078-text/javascript"></script>
<script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
    data-cf-settings="47d543a399884d7bc4ffb078-|49" defer></script>



<!-- 
<style>
  .message {

}



</style> -->




</body>

</html>