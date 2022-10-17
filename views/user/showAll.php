
<h1 align="center">Users list</h1>

<div class="table-container">

        <table border="5" width="40%" align="center" cellpadding="20px">
                <thead align="center">
                        <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Action</th>
                        </tr>
                </thead>
                <tbody align="center">
                        <?php 
                        // echo "<br>";
                        // print_r($data['users']);
                        
                        // foreach de data users
                        foreach ($data['users'] as $dato) {
                                echo '<tr>';
                                        echo '<td>' . $dato['name'] . '</td>';
                                        echo '<td>' . $dato['email'] . '</td>';
                                        echo '<td>' . $dato['username'] . '</td>';
                                        echo '<td>' . $dato['password'] . '</td>';
                                        echo "<td colspan='2'>
                                        <a class='btn btn-secondary' href='?controller=User&action=modify&id=" . $dato["id"] . "'>Edit</a>
                                        <a class='btn btn-danger' href='?controller=User&action=delete&id=" . $dato["id"] . "'>Delete</a>
                                        </td>";
                                        echo '</tr>';
                                }
                        
                        ?>
                </tbody>
        </table>
        
        <div class="btn-form">
                <a class="btn btn-primary" href="?controller=User&action=create">Create</a>
                <a class="btn btn-secondary" href="./">Back</a>
        </div>        

</div>