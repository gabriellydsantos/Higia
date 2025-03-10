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
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png" />
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
                                <li><a href="../admin/edit-department.php"></a></li>
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
                                    <a href="doctors.php">Médicos </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <i class="feather-chevron-right"></i>
                                </li>
                                <li class="breadcrumb-item active">Editar médico</li>
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
                                $cpf = '';
                                $rg = '';
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
                                $status = '';
                                $department = '';
                                $image = '';

                                // Verificando se o ID foi passado pela URL
                                if (isset($_GET['id']) && !empty($_GET['id'])) {
                                    $id = $_GET['id'];

                                    // Executando a consulta no banco de dados para buscar os dados do médico
                                    $query = "SELECT * FROM doctors WHERE id = ?";
                                    $stmt = $conn->prepare($query);
                                    $stmt->bind_param("i", $id);
                                    $stmt->execute();
                                    $result = $stmt->get_result();

                                    if ($result && $result->num_rows > 0) {
                                        // Atribuindo os valores do banco de dados às variáveis
                                        $row = $result->fetch_assoc();
                                        $first_name = $row['first_name'];
                                        $last_name = $row['last_name'];
                                        $username = $row['username'];
                                        $cpf = $row['cpf'];
                                        $rg = $row['rg'];
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
                                        $status = $row['status'];
                                        $department = $row['department'];
                                        $image = $row['image'];
                                    } else {
                                        echo "Médico não encontrado.";
                                    }
                                } else {
                                    echo "ID do médico não fornecido.";
                                }

                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                    // Captura os dados do formulário
                                    $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
                                    $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';
                                    $username = isset($_POST['username']) ? $_POST['username'] : '';
                                    $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
                                    $rg = isset($_POST['rg']) ? $_POST['rg'] : '';
                                    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
                                    $email = isset($_POST['email']) ? $_POST['email'] : '';
                                    $password = isset($_POST['password']) ? $_POST['password'] : '';
                                    $carteirinha = isset($_POST['carteirinha']) ? $_POST['carteirinha'] : '';
                                    $birth_date = isset($_POST['birth_date']) ? $_POST['birth_date'] : '';
                                    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
                                    $address = isset($_POST['address']) ? $_POST['address'] : '';
                                    $city = isset($_POST['city']) ? $_POST['city'] : '';
                                    $state = isset($_POST['state']) ? $_POST['state'] : '';
                                    $country = isset($_POST['country']) ? $_POST['country'] : '';
                                    $zipcode = isset($_POST['zipcode']) ? $_POST['zipcode'] : '';
                                    $status = isset($_POST['status']) ? $_POST['status'] : '';
                                    $department = isset($_POST['department']) ? $_POST['department'] : '';

                                    // Verifica se o arquivo de imagem foi enviado
                                    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
                                        $image = '../uploads/uploads_doctor/' . basename($_FILES['image']['name']);
                                        move_uploaded_file($_FILES['image']['tmp_name'], $image);
                                    }

                                    $query = "UPDATE doctors SET 
    first_name = ?,
    last_name = ?,
    username = ?,
    cpf = ?,
    rg = ?,
    phone = ?,
    email = ?,
    password = ?,
    carteirinha = ?,
    birth_date = ?,
    gender = ?,
    address = ?,
    zipcode = ?,
    city = ?,
    country = ?,
    state = ?,
    status = ?,
    department = ?,
    image = ?
    WHERE id = ?";

                                    $stmt = $conn->prepare($query);

                                    // Atualize a string de tipos para corresponder ao número e tipo dos parâmetros
                                    $stmt->bind_param(
                                        "sssssssssssssssssssi",
                                        $first_name,
                                        $last_name,
                                        $username,
                                        $cpf,
                                        $rg,
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
                                        $department,
                                        $image,
                                        $id
                                    );

                                    if ($stmt->execute()) {
                                        echo "Registro atualizado com sucesso!";
                                    } else {
                                        echo "Erro ao atualizar o registro: " . $stmt->error;
                                    }
                                }
                                ?>

                                <form action="edit-doctor.php?id=<?php echo htmlspecialchars($id); ?>" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-heading">
                                                <h4>Detalhes do Médico</h4>
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
                                                    value="<?php echo htmlspecialchars($password); ?>" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 col-xl-6">
                                            <div class="input-block local-forms">
                                                <label>Carteirinha<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="carteirinha"
                                                    value="<?php echo htmlspecialchars($carteirinha); ?>" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 col-xl-6">
                                            <div class="input-block local-forms">
                                                <label>Data de nascimento<span class="login-danger">*</span></label>
                                                <input class="form-control" type="date" name="birth_date"
                                                    value="<?php echo htmlspecialchars($birth_date); ?>" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 col-xl-3">
                                            <div class="input-block local-forms">
                                                <label>Gênero<span class="login-danger">*</span></label>
                                                <select class="form-control" name="gender" required>
                                                    <option value="Masculino"
                                                        <?php echo ($gender == 'Masculino') ? 'selected' : ''; ?>>
                                                        Masculino</option>
                                                    <option value="Feminino"
                                                        <?php echo ($gender == 'Feminino') ? 'selected' : ''; ?>>
                                                        Feminino</option>
                                                    <option value="Outro"
                                                        <?php echo ($gender == 'Outro') ? 'selected' : ''; ?>>Outro
                                                    </option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 col-xl-3">
                                            <div class="input-block local-forms">
                                                <label>Departamento<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="department"
                                                    value="<?php echo htmlspecialchars($department); ?>" required />
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-12">
                                            <div class="input-block local-forms">
                                                <label>Endereço<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="address" id="address"
                                                    value="<?php echo htmlspecialchars($address); ?>" required />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 col-xl-3">
                                            <div class="input-block local-forms">
                                                <label>CEP<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="zipcode" id="zipcode"
                                                    value="<?php echo htmlspecialchars($zipcode); ?>" required
                                                    onblur="buscarEndereco()" />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 col-xl-3">
                                            <div class="input-block local-forms">
                                                <label>Cidade<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="city" id="city"
                                                    value="<?php echo htmlspecialchars($city); ?>" required />
                                            </div>
                                        </div>

                                        <div class="col-12 col-md-6 col-xl-3">
                                            <div class="input-block local-forms">
                                                <label>País<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="country" id="country"
                                                    value="<?php echo htmlspecialchars($country); ?>" required />
                                            </div>
                                        </div>


                                        <div class="col-12 col-md-6 col-xl-3">
                                            <div class="input-block local-forms">
                                                <label>Estado<span class="login-danger">*</span></label>
                                                <input class="form-control" type="text" name="state" id="state"
                                                    value="<?php echo htmlspecialchars($state); ?>" required />
                                            </div>
                                        </div>


                                        <div class="col-12 col-md-6 col-xl-6">
                                            <div class="input-block local-forms">
                                                <label>Status<span class="login-danger">*</span></label>
                                                <select class="form-control" name="status" required>
                                                    <option value="Ativa"
                                                        <?php echo ($status == 'Ativa') ? 'selected' : ''; ?>>Ativo
                                                    </option>
                                                    <option value="Inativo"
                                                        <?php echo ($status == 'Inativo') ? 'selected' : ''; ?>>Inativo
                                                    </option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-12 col-md-6 col-xl-6">
                                            <div class="input-block local-forms">
                                                <label>Foto</label>
                                                <input class="form-control" type="file" name="image" />
                                                <?php if ($image): ?>
                                                <img src="<?php echo htmlspecialchars($image); ?>" alt="Avatar"
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
                                            <a href="doctors.php" class="btn btn-primary">Cancelar</a>
                                        </div>
                                    </div>
                                </form>

                                <script>
                                $(document).ready(function() {
                                    $('input[name="phone"]').mask('(00) 00000-0000');
                                });

                                function buscarEndereco() {
                                    var cep = document.getElementById('zipcode').value;
                                    var url = 'https://viacep.com.br/ws/' + cep + '/json/';

                                    if (cep.length == 8) { // Verifica se o CEP tem 8 dígitos
                                        fetch(url)
                                            .then(response => response.json())
                                            .then(data => {
                                                if (data.erro) {
                                                    alert('CEP não encontrado.');
                                                } else {
                                                    document.getElementById('address').value = data.logradouro;
                                                    document.getElementById('city').value = data.localidade;
                                                    document.getElementById('state').value = data.uf;
                                                    document.getElementById('country').value =
                                                        'Brasil'; // País fixo como Brasil
                                                }
                                            })
                                            .catch(error => {
                                                console.error('Erro:', error);
                                                alert('Erro ao buscar o endereço.');
                                            });
                                    }
                                }
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