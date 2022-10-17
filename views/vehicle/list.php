
<h1 align="center">Vehicles list</h1>

<div class="table-container">
        <table border="5" width="40%" align="center" cellpadding="20px">
                <thead align="center">
                        <tr>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>Age</th>
                                <th>Action</th>
                        </tr>
                </thead>
                <tbody align="center">
                        <?php 
                        // foreach de data users
                        foreach ($data['vehicles'] as $dato) {
                                        echo '<tr>';
                                        echo '<td>' . $dato['brand'] . '</td>';
                                        echo '<td>' . $dato['model'] . '</td>';
                                        echo '<td>' . $dato['age'] . '</td>';
                                        echo "<td colspan='2'>
                                        <a class='btn btn-secondary' href='?controller=vehicle&action=modify&id=" . $dato["id"] . "'>Edit</a>
                                        <a class='btn btn-danger' href='?controller=vehicle&action=delete&id=" . $dato["id"] . "'>Delete</a>
                                        </td>";
                                        echo '</tr>';
                                }
                        
                        ?>
                </tbody>
        </table>
        <div class="btn-form">
                <a class="btn btn-primary" href="?controller=vehicle&action=create">Create</a>
                <a class="btn btn-secondary" href="./">Back</a>
        </div>
</div>

