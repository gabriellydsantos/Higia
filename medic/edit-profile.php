<?php
include "conexao.php";
session_start();

// Verificar se o usuário está logado
$id = $_SESSION['doctor_id'];
if (!isset($id)) {
    header("Location: index.php");
    exit();
}

// Verificar se o ID foi passado para edição
if (isset($_SESSION['doctor_id'])) {
    //$id = $_SESSION['doctor_id'];

    // Buscar o registro a ser editado
    $sql = "SELECT * FROM doctors WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $doctor = $result->fetch_assoc();

        // Atualizar a sessão com os dados do médico
        $_SESSION['doctor_first_name'] = $doctor['first_name'];
        $_SESSION['doctor_last_name'] = $doctor['last_name'];
        $_SESSION['doctor_username'] = $doctor['username'];
        $_SESSION['doctor_phone'] = $doctor['phone'];
        $_SESSION['doctor_email'] = $doctor['email'];
        $_SESSION['doctor_password'] = $doctor['password'];
        $_SESSION['doctor_carteirinha'] = $doctor['carteirinha'];
        $_SESSION['doctor_birth_date'] = $doctor['birth_date'];
        $_SESSION['gender'] = $doctor['gender'];
        $_SESSION['doctor_address'] = $doctor['address'];
        $_SESSION['doctor_city'] = $doctor['city'];
        $_SESSION['doctor_state'] = $doctor['state'];
        $_SESSION['doctor_department'] = $doctor['department'];
        $_SESSION['doctor_image'] = $doctor['image'];
    } else {
        echo "Registro não encontrado!";
        exit();
    }
}

// Atualizar os dados após o envio do formulário
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'] ?? '';
    $image = $_POST['image'] ?? '';
    $last_name = $_POST['last_name'] ?? '';
    $username = $_POST['username'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $carteirinha = $_POST['carteirinha'] ?? '';
    $birth_date = $_POST['birth_date'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $address = $_POST['adress'] ?? ''; // Corrigir para 'adress'
    $city = $_POST['city'] ?? '';
    $state = $_POST['state'] ?? '';
    $department = $_POST['department'] ?? '';

    // Verifica se o arquivo de imagem foi enviado
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $image = '../uploads/uploads_doctor/' . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $image);
    } else {
        $image = $_SESSION['doctor_image']; // Caso a imagem não seja alterada
    }

    // Atualizar o registro no banco de dados
    $query = "UPDATE doctors SET 
        first_name = ?, 
        last_name = ?, 
        username = ?, 
        phone = ?, 
        email = ?, 
        password = ?, 
        carteirinha = ?, 
        birth_date = ?, 
        gender = ?, 
        address = ?, 
        city = ?, 
        state = ?, 
        department = ?, 
        image = ? 
        WHERE id = ?";

    $stmt = $conn->prepare($query);

    // Bind dos parâmetros com os valores do formulário
    $stmt->bind_param(
        "ssssssssssssssi",
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
        $city,
        $state,
        $department,
        $image,
        $id
    );

    if ($stmt->execute()) {
        echo "Registro atualizado com sucesso!";
        // Atualizar as variáveis de sessão
        $_SESSION['doctor_first_name'] = $first_name;
        $_SESSION['doctor_last_name'] = $last_name; //
        $_SESSION['doctor_username'] = $username;
        $_SESSION['doctor_phone'] = $phone; //
        $_SESSION['doctor_email'] = $email; //
        $_SESSION['doctor_password'] = $password; //
        $_SESSION['doctor_carteirinha'] = $carteirinha;
        $_SESSION['doctor_birth_date'] = $birth_date;
        $_SESSION['gender'] = $gender; //
        $_SESSION['doctor_address'] = $address; //
        $_SESSION['doctor_city'] = $city; //
        $_SESSION['doctor_state'] = $state; //
        $_SESSION['doctor_department'] = $department; //
        $_SESSION['doctor_image'] = $image;
    } else {
        echo "Erro ao atualizar o registro: " . $stmt->error;
    }
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
            <a id="mobile_btn" class="mobile_btn float-start" href="#sidebar"><img
                    src="../assets/img/icons/bar-icon.svg" alt /></a>
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
           <a href="/medic/javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><img
                    src="../assets/img/icons/note-icon-01.svg" alt><span class="pulse"></span> </a>
        </li> -->
                <li class="nav-item dropdown has-arrow user-profile-list">
                    <a href="/medic/#" class="dropdown-toggle nav-link user-link" data-bs-toggle="dropdown">
                        <div class="user-names">
                            <h5><?php echo $_SESSION['doctor_username']; ?></h5>
                            <span>Médico</span>
                        </div>
                        <span class="user-img">
                            <?php
                            echo "<img src='" . $_SESSION['doctor_image'] . "' alt='img'/>";
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
                                <li><a href="appointmentsDia.php">Consultas de hoje</a></li>
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
                                <li class="breadcrumb-item"><a href="index.php">Dashboard </a></li>
                                <li class="breadcrumb-item"><i class="feather-chevron-right"></i></li>
                                <li class="breadcrumb-item active">Editar Perfil</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <form method="POST">
                    <div class="card-box">
                        <h3 class="card-title">Minhas informações</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-img-wrap">
                                    <img class="inline-block" <?php echo "src='" . $_SESSION['doctor_image'] . "'"; ?>
                                        name="image" alt="user">
                                    <!-- <div class="fileupload btn">
                                        <span class="btn-text">editar</span>
                                        <input class="upload" type="file" name="image">
                                    </div> -->
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-block local-forms">
                                                <label class="focus-label">Primeiro nome</label>
                                                <input type="text" class="form-control floating" name="first_name"
                                                    value="<?php echo $_SESSION['doctor_first_name']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-block local-forms">
                                                <label class="focus-label">Sobrenome</label>
                                                <input type="text" class="form-control floating" name="last_name"
                                                    value="<?php echo $_SESSION['doctor_last_name']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-block local-forms ">
                                                <label class="focus-label">Data de Nascimento</label>
                                                <div class="cal-icon">
                                                    <input class="form-control floating datetimepicker" type="text"
                                                        name="birth_date"
                                                        value="<?php echo $_SESSION['doctor_birth_date']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-block local-forms">
                                                <label class="focus-label">Gênero</label>
                                                <select class="form-control select" name="gender">
                                                    <option>Selecionar gênero</option>
                                                    <option value="Feminino"
                                                        <?php if ($_SESSION['gender'] == 'Feminino') echo 'selected'; ?>>
                                                        Feminino</option>
                                                    <option value="Masculino"
                                                        <?php if ($_SESSION['gender'] == 'Masculino') echo 'selected'; ?>>
                                                        Masculino</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="card-box">
                        <h3 class="card-title">Informações para contato</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-block local-forms">
                                    <label class="focus-label">Endereço</label>
                                    <input type="text" class="form-control floating" name="adress"
                                        value="<?php echo $_SESSION['doctor_address']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block local-forms">
                                    <label class="focus-label">Cidade</label>
                                    <input type="text" class="form-control floating" name="city"
                                        value="<?php echo $_SESSION['doctor_city']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block local-forms">
                                    <label class="focus-label">Estado</label>
                                    <input type="text" class="form-control floating" name="state"
                                        value="<?php echo $_SESSION['doctor_state']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block local-forms">
                                    <label class="focus-label">E-mail</label>
                                    <input type="text" class="form-control floating" name="email"
                                        value="<?php echo $_SESSION['doctor_email']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block local-forms">
                                    <label class="focus-label">Telefone</label>
                                    <input type="text" class="form-control floating" name="phone"
                                        value="<?php echo $_SESSION['doctor_phone']; ?>">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-box">
                        <h3 class="card-title">Informações gerais</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-block local-forms">
                                    <label class="focus-label">Especialidade</label>
                                    <input type="text" class="form-control floating" name="department"
                                        value="<?php echo $_SESSION['doctor_department']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block local-forms">
                                    <label class="focus-label">CRM</label>
                                    <input type="text" class="form-control floating" value="CRM/SP 123456">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block local-forms">
                                    <label class="focus-label">Nome social</label>
                                    <input type="text" class="form-control floating" name="username"
                                        value="<?php echo $_SESSION['doctor_username']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block local-forms">
                                    <label class="focus-label">Carteirinha</label>
                                    <input type="text" class="form-control floating" name="carteirinha"
                                        value="<?php echo $_SESSION['doctor_carteirinha']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="input-block local-forms">
                                    <label class="focus-label">Senha</label>
                                    <input type="text" class="form-control floating" name="password"
                                        value="<?php echo $_SESSION['doctor_password']; ?>">
                                </div>
                            </div>
                        </div>

                        <div class="text-center ">
                            <button class="btn btn-primary submit-btn mb-4" type="submit">Salvar</button>
                        </div>

                    </div>



                </form>
            </div>

        </div>


    </div>
    </div>

    <div class="sidebar-overlay" data-reff></div>

    <script src="../assets/js/jquery-3.7.1.min.js" type="289d0519ad93de500f359347-text/javascript"></script>

    <script src="../assets/js/bootstrap.bundle.min.js" type="289d0519ad93de500f359347-text/javascript"></script>

    <script src="../assets/js/feather.min.js" type="289d0519ad93de500f359347-text/javascript"></script>

    <script src="../assets/js/jquery.slimscroll.js" type="289d0519ad93de500f359347-text/javascript"></script>

    <script src="../assets/js/select2.min.js" type="289d0519ad93de500f359347-text/javascript"></script>

    <script src="../assets/plugins/datatables/jquery.dataTables.min.js" type="289d0519ad93de500f359347-text/javascript">
    </script>
    <script src="../assets/plugins/datatables/datatables.min.js" type="289d0519ad93de500f359347-text/javascript">
    </script>

    <script src="../assets/js/jquery.waypoints.js" type="289d0519ad93de500f359347-text/javascript"></script>
    <script src="../assets/js/jquery.counterup.min.js" type="289d0519ad93de500f359347-text/javascript"></script>

    <script src="../assets/plugins/apexchart/apexcharts.min.js" type="289d0519ad93de500f359347-text/javascript">
    </script>
    <script src="../assets/plugins/apexchart/chart-data.js" type="289d0519ad93de500f359347-text/javascript">
    </script>

    <script src="../assets/js/circle-progress.min.js" type="289d0519ad93de500f359347-text/javascript"></script>

    <script src="../assets/js/app.js" type="289d0519ad93de500f359347-text/javascript"></script>
    <script src="../cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"
        data-cf-settings="289d0519ad93de500f359347-|49" defer></script>
</body>

<!-- Mirrored from preclinic.dreamstechnologies.com/html/template/edit-profile.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Jun 2024 21:42:44 GMT -->

</html>