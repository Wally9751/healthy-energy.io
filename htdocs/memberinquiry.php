<?php
include 'test2.php';

$query = "SELECT * FROM user_data";
$result = mysqli_query($link, $query);

// 创建 HTML 表格
echo "<table border='1'>
      <tr>
      <th>ID</th>
      <th>Phone</th>
      <th>birthdate</th>
      <th>Username</th>
      <th>member</th>
      </tr>";

// 遍历结果集并输出数据
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['phone'] . "</td>";
    echo "<td>" . $row['birthdate'] . "</td>";
    echo "<td>" . $row['username'] . "</td>";
    echo "<td>" . $row['member'] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>