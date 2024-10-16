// search.js
const pages = [
    { name: "Adicionar Departamento", url: "add-department.php" },
    { name: "Adicionar Médico", url: "add-doctor.php" },
    { name: "Adicionar Paciente", url: "add-patient.php" },
    { name: "Adicionar Funcionário", url: "add-staff.php" },
    { name: "Departamentos", url: "departments.php" },
    { name: "Perfil do Médico", url: "doctor-profile.php" },
    { name: "Configurações do Médico", url: "doctor-setting.php" },
    { name: "Médicos", url: "doctors.php" },
    { name: "Editar Departamento", url: "edit-department.php" },
    { name: "Editar Médico", url: "edit-doctor.php" },
    { name: "Editar Paciente", url: "edit-patient.php" },
    { name: "Editar Funcionário", url: "edit-staff.php" },
    { name: "Buscar Departamento", url: "fetch_department.php" },
    { name: "Buscar Médicos", url: "fetch_doctors.php" },
    { name: "Buscar Pacientes", url: "fetch_patients.php" },
    { name: "Buscar Funcionários", url: "fetch_staff.php" },
    { name: "Dados de Gênero", url: "gender_data.php" },
    { name: "Perfil do Paciente", url: "patient-profile.php" },
    { name: "Configurações do Paciente", url: "patient-setting.php" },
    { name: "Pacientes", url: "patients.php" },
    { name: "Lista de Funcionários", url: "staff-list.php" },
    { name: "Página Inicial", url: "index.php" },
];

function showSuggestions(value) {
    const suggestionsBox = document.getElementById('suggestions-box');
    suggestionsBox.innerHTML = ''; // Limpa as sugestões anteriores

    if (value.length === 0) {
        suggestionsBox.style.display = 'none'; // Esconde se não há entrada
        return;
    }

    const filteredPages = pages.filter(page => page.name.toLowerCase().includes(value.toLowerCase()));

    if (filteredPages.length === 0) {
        suggestionsBox.style.display = 'none'; // Esconde se não há correspondência
        return;
    }

    // Cria e exibe as sugestões
    filteredPages.forEach(page => {
        const suggestionItem = document.createElement('div');
        suggestionItem.textContent = page.name;
        suggestionItem.onclick = () => navigateToPage(page.url); // Seleciona a sugestão
        suggestionsBox.appendChild(suggestionItem);
    });

    suggestionsBox.style.display = 'block'; // Exibe a caixa de sugestões
}

function navigateToPage(url) {
    window.location.href = url; // Redireciona para a página
}
