<?php
    include('db.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add</title>
    <link rel="stylesheet" href="table.css">
</head>
<body>
    <div class="add">
            <table class="add-table">
                <tr>
                    <th>Фамилия родителя</th>
                    <th>Имя родителя</th>
                    <th>Номер телефона</th>
                    <th>Адрес</th>
                    <th>Фамилия ребенка</th>
                    <th>Имя ребенка</th>
                    <th>Год рождения</th>
                </tr>
            <?
                $users = mysqli_query($connect, "SELECT * FROM `users`");
                while($users_array = mysqli_fetch_assoc($users)){
                    $parent_surname = $users_array['parentSurname'];
                    $parent_name = $users_array['parentName'];
                    $parent_phone = $users_array['parentPhone'];
                    $parent_address = $users_array['parentAddress'];
                    $child_surname = $users_array['childSurname'];
                    $child_name = $users_array['childName'];
                    $child_date = $users_array['childDate'];

                    $users_count_query = mysqli_query($connect, "SELECT COUNT(*) FROM `users`");
                    $users_count = mysqli_fetch_row($users_count_query)[0];
                    ?>
                        <tr>
                            <td><?echo  $parent_surname?></td>
                            <td><?echo $parent_name?></td>
                            <td><?echo $parent_phone?></td>
                            <td><?echo $parent_address?></td>
                            <td><?echo $child_surname?></td>
                            <td><?echo $child_name?></td>
                            <td><?echo $child_date?></td>
                        </tr>
                        
                    <?
                }
                ?>
                        <tr>
                            <td class="add-table-links"><a href="#">Всего:</a></td>
                            <td><?echo $users_count?></td>
                        </tr>
            </table>
    </div>
</body>
</html>