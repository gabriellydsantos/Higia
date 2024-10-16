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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

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
                        <a href="../login.php"><span class="menu-side"><img src="../assets/img/icons/logout.svg"
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
                                    <a href="doctors.php">Funcionários </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <i class="feather-chevron-right"></i>
                                </li>
                                <li class="breadcrumb-item active">Editar Funcionários</li>
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
                                $first_name = $last_name = $username = $phone = $email = $password = '';
                                $carteirinha = $birth_date = $gender = $address = $zipcode = $city = $country = $state = $avatar = $status = $cpf = $rg = '';

                                // Verificando se o ID foi passado pela URL
                                if (isset($_GET['id']) && !empty($_GET['id'])) {
                                    $id = $_GET['id'];

                                    // Executando a consulta no banco de dados para buscar os dados do paciente
                                    $query = "SELECT * FROM staff WHERE id = ?";
                                    if ($stmt = $conn->prepare($query)) {
                                        $stmt->bind_param("i", $id);
                                        $stmt->execute();
                                        $result = $stmt->get_result();

                                        if ($result && $result->num_rows > 0) {
                                            // Atribuindo os valores do banco de dados às variáveis
                                            $row = $result->fetch_assoc();
                                            $first_name = $row['first_name'];
                                            $last_name = $row['last_name'];
                                            $username = $row['username'];
                                            $phone = $row['phone'];
                                            $email = $row['email'];
                                            $password = $row['password'];
                                            $carteirinha = $row['carteirinha'];
                                            $birth_date = $row['birth_date'];
                                            $gender = $row['gender'];
                                            $address = $row['address'];
                                            $zipcode = $row['zipcode'];
                                            $city = $row['city'];
                                            $country = $row['country'];
                                            $state = $row['state'];
                                            $avatar = $row['image'];
                                            $status = $row['status'];
                                            $cpf = $row['cpf'];
                                            $rg = $row['rg'];
                                        } else {
                                            echo "funcionários não encontrado.";
                                        }
                                    } else {
                                        echo "Erro na preparação da consulta: " . $conn->error;
                                    }
                                } else {
                                    echo "ID do funcionário não fornecido.";
                                }

                                // Verificação do método POST para  atualização de dados
                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                    // Captura os dados do formulário
                                    $first_name = $_POST['first_name'];
                                    $last_name = $_POST['last_name'];
                                    $username = $_POST['username'];
                                    $phone = $_POST['phone'];
                                    $email = $_POST['email'];
                                    $carteirinha = $_POST['carteirinha'];
                                    $birth_date = date('Y-m-d', strtotime(str_replace('/', '-', $_POST['birth_date']))); // Formato YYYY-MM-DD
                                    $gender = $_POST['gender'];
                                    $address = $_POST['address'];
                                    $zipcode = $_POST['zipcode'];
                                    $city = $_POST['city'];
                                    $country = $_POST['country'];
                                    $state = $_POST['state'];
                                    $status = $_POST['status'];
                                    $cpf = $_POST['cpf'];
                                    $rg = $_POST['rg'];

                                    // Verifica se a senha foi alterada
                                    $new_password = $_POST['password'];
                                    if (!empty($new_password)) {
                                        $password = password_hash($new_password, PASSWORD_DEFAULT); // Criptografando a senha
                                    }

                                    // Verifica o upload de imagem
                                    $upload_dir = '../uploads/uploads_funcionarios/';
                                    if (!file_exists($upload_dir)) {
                                        mkdir($upload_dir, 0777, true);
                                    }

                                    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                                        $avatar = $upload_dir . basename($_FILES['image']['name']);
                                        $allowed_types = ['image/jpeg', 'image/png'];
                                        if (in_array($_FILES['image']['type'], $allowed_types)) {
                                            if (move_uploaded_file($_FILES['image']['tmp_name'], $avatar)) {
                                                // Imagem movida com sucesso
                                            } else {
                                                echo "Erro ao mover o arquivo de imagem.";
                                            }
                                        } else {
                                            echo "Tipo de arquivo inválido. Apenas JPEG e PNG são permitidos.";
                                        }
                                    }

                                    // Atualiza os dados do paciente no banco de dados usando prepared statements
                                    $query = "UPDATE staff SET 
        first_name = ?, last_name = ?, username = ?, phone = ?, email = ?, password = ?, carteirinha = ?, 
        birth_date = ?, gender = ?, address = ?, zipcode = ?, city = ?, country = ?, state = ?, 
        status = ?, image = ?, cpf = ?, rg = ? WHERE id = ?";

                                    if ($stmt = $conn->prepare($query)) {
                                        $stmt->bind_param(
                                            "ssssssssssssssssssi",
                                            $first_name,
                                            $last_name,
                                            $username,
                                            $phone,
                                            $email,
                                            $password,
                                            $carteirinha,
                                            $birth_date,
                                            $gender,
                                            $address,
                                            $zipcode,
                                            $city,
                                            $country,
                                            $state,
                                            $status,
                                            $avatar,
                                            $cpf,
                                            $rg,
                                            $id
                                        );

                                        if ($stmt->execute()) {
                                            echo "Registro atualizado com sucesso!";
                                        } else {
                                            echo "Erro ao atualizar o registro: " . $stmt->error;
                                        }
                                    } else {
                                        echo "Erro na preparação da consulta: " . $conn->error;
                                    }
                                }
                                ?>

                                <form action="edit-staff.php?id=<?php echo htmlspecialchars($id); ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-heading">
                                                <h4>Detalhes do Funcionário</h4>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 col-xl-4">
                                            <div class="input-block local-forms">
                                                <label>Primeiro nome<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="first_name"
                                                    value="<?php echo htmlspecialchars($first_name); ?>" required />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 col-xl-4">
                                            <div class="input-block local-forms">
                                                <label>Sobrenome<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="last_name"
                                                    value="<?php echo htmlspecialchars($last_name); ?>" required />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 col-xl-4">
                                            <div class="input-block local-forms">
                                                <label>Nome de usuário<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="username"
                                                    value="<?php echo htmlspecialchars($username); ?>" required />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 col-xl-6">
                                            <div class="input-block local-forms">
                                                <label>CPF<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="cpf"
                                                    value="<?php echo htmlspecialchars($cpf ?? ''); ?>" required />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 col-xl-6">
                                            <div class="input-block local-forms">
                                                <label>RG<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="rg"
                                                    value="<?php echo htmlspecialchars($rg ?? ''); ?>" required />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 col-xl-6">
                                            <div class="input-block local-forms">
                                                <label>Telefone<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="phone"
                                                    value="<?php echo htmlspecialchars($phone); ?>" required />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 col-xl-6">
                                            <div class="input-block local-forms">
                                                <label>E-mail<span class="login-danger">*</span></label>
                                                <input class="form-control" type="email" name="email"
                                                    value="<?php echo htmlspecialchars($email); ?>" required />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 col-xl-6">
                                            <div class="input-block local-forms">
                                                <label>Senha<span class="login-danger">*</span></label>
                                                <input class="form-control" type="password" name="password"
                                                    value="<?php echo htmlspecialchars($password); ?>" required />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 col-xl-6">
                                            <div class="input-block local-forms">
                                                <label>Carteirinha<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="carteirinha"
                                                    value="<?php echo htmlspecialchars($carteirinha); ?>" required />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 col-xl-6">
                                            <div class="input-block local-forms cal-icon">
                                                <label>Data de nascimento<span class="login-danger">*</span></label>
                                                <input class="form-control datetimepicker" type="text" name="birth_date"
                                                    value="<?php echo htmlspecialchars(date('d/m/Y', strtotime($birth_date))); ?>"
                                                    required />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 col-xl-6">
                                            <div class="input-block select-gender">
                                                <label class="gen-label">Gênero<span
                                                        class="login-danger">*</span></label>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" name="gender" value="Masculino"
                                                            class="form-check-input"
                                                            <?php echo ($gender == 'Masculino') ? 'checked' : ''; ?> />Masculino
                                                    </label>
                                                </div>
                                                <div class="form-check-inline">
                                                    <label class="form-check-label">
                                                        <input type="radio" name="gender" value="Feminino"
                                                            class="form-check-input"
                                                            <?php echo ($gender == 'Feminino') ? 'checked' : ''; ?> />Feminino
                                                    </label>
                                                </div>

                                            </div>
                                        </div>



                                        <div class="col-12 col-md-6 col-xl-12">
                                            <div class="input-block local-forms">
                                                <label>Endereço<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="address"
                                                    value="<?php echo htmlspecialchars($address); ?>" required />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 col-xl-3">
                                            <div class="input-block local-forms">
                                                <label>CEP<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="zipcode"
                                                    value="<?php echo htmlspecialchars($zipcode); ?>" required />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 col-xl-3">
                                            <div class="input-block local-forms">
                                                <label>Cidade<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="city"
                                                    value="<?php echo htmlspecialchars($city); ?>" required />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 col-xl-3">
                                            <div class="input-block local-forms">
                                                <label>País<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="country"
                                                    value="<?php echo htmlspecialchars($country); ?>" required />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 col-xl-3">
                                            <div class="input-block local-forms">
                                                <label>Estado<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="state"
                                                    value="<?php echo htmlspecialchars($state); ?>" required />
                                            </div>
                                        </div>



                                        <div class="input-block local-forms">
                                            <label>Status<span class="login-danger">*</span></label>
                                            <select class="form-control select" name="status" required>
                                                <option value="Ativa"
                                                    <?php echo ($status == 'Ativa') ? 'selected' : ''; ?>>Ativo</option>
                                                <option value="Inativo"
                                                    <?php echo ($status == 'Inativo') ? 'selected' : ''; ?>>Inativo
                                                </option>
                                            </select>
                                        </div>



                                        <div class="col-12 col-md-6 col-xl-6">
                                            <div class="input-block local-forms">
                                                <label>Foto</label>
                                                <input class="form-control" type="file" name="image" />
                                                <?php if ($avatar): ?>
                                                    <img src="<?php echo htmlspecialchars($avatar); ?>" alt="Avatar"
                                                        width="100" height="100" class="avatar-img" />
                                                <?php endif; ?>
                                                <style>
                                                    .avatar-img {
                                                        margin-top: 0.80rem;
                                                    }
                                                </style>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-12 col-xl-12">
                                            <button class="btn btn-primary" type="submit">Atualizar</button>
                                            <a href="staff-list.php" class="btn btn-primary">Cancelar</a>
                                        </div>
                                        <!-- <div class="col-12">
                                            <div class="submit-section">
                                                <button class="btn btn-primary submit-btn"
                                                    type="submit">Atualizar</button>
                                            </div>
                                        </div> -->
                                    </div>
                                </form>
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