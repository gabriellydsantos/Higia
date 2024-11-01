<?php
    $servername = "localhost";
    $username = "root";
    $password = "200812";
    $dbname = "higia";
    
    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Verifica a conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
     $sql = "SELECT id, username FROM doctors";
     $result = $conn->query($sql);

     if ($result->num_rows > 0) {
        echo '<div class="table-responsive">
            <table class="table border-0 custom-table comman-table datatable mb-0">
                 <thead>
                    <tr>
                        <th>ID</th>
                        <th>Médico(a)</th>

                    </tr>
                </thead>
                  <tbody>';
         while($row = $result->fetch_assoc()) {
            echo '<tr>
                <td>' . $row["id"] . '</td>
                <td>' . $row["username"] . '</td>';
          
         }
                                        
          echo '</tbody></table>';
     } else {
        echo "Nenhum dado encontrado.";
     }
    $conn->close();
?>