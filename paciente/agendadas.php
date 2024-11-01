
<?php
session_start();
include("../database.php");
                                    $carteirinha = $_SESSION['patients_carteirinha'];
                                    $sql = "SELECT id, doctor, paciente, department, date, status, time  FROM agendamentos WHERE carteirinhaPaciente = '$carteirinha'";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        echo '<div class="table-responsive">
                                                <table class="table border-0 custom-table comman-table datatable mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Médico</th>
                                                            <th>Carteirinha do paciente</th>
                                                            <th>Data</th>
                                                            <th>Horário</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                             <tbody>';
                                        
                                        while($row = $result->fetch_assoc()) {
                                            echo '<tr>
                                                    <td>' . $row["id"] . '</td>
                                                    <td>' . $row["doctor"] . '</td>
                                                    <td>' . $carteirinha . '</td>
                                                    <td>' . date("d.m.Y", strtotime($row["date"])) . '</td>
                                                    <td>' . date("h:i A", strtotime($row["time"])) . '</td>';
                                                    if ($row["status"] == "Concluído"){
                                                        echo '<td> <button id="status-btn" class="custom-badge status-green" onclick="updateStatus(' . $row["id"] . ')">' . $row["status"] . '</button> </td>';
                                                    } else {
                                                        echo '<td> <button id="status-btn" class="custom-badge status-red" onclick="updateStatus(' . $row["id"] . ')">' . $row["status"] . '</button> </td>';
                                                    }
                                             echo  '<td class="text-end">
                                                        <div class="dropdown dropdown-action">
                                                            <a href="/medic/#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class="fa fa-ellipsis-v"></i>
                                                            </a>
                                                            
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                <a class="dropdown-item" href="viewAppointmens.php?id=' . $row["id"] . '"><i class="fa-solid fa-pen-to-square m-r-5"></i> Ver</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>';
                                        }
                                        
                                        echo '</tbody></table>';
                                    } else {
                                        echo "Nenhum dado encontrado.";
                                    }

                                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                        $id = $_POST['id']; // ID da linha a ser atualizada
                                        $sql = "UPDATE sua_tabela SET status='Concluído' WHERE id=$id";
                                    
                                        if ($conn->query($sql) === TRUE) {
                                            echo "Status atualizado com sucesso";
                                        } else {
                                            echo "Erro ao atualizar status: " . $conn->error;
                                        }
                                    }
                                    $conn->close();
                                ?> 