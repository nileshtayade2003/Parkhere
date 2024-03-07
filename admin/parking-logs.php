<?php
include "header.php";

$q="select parking_logs.*,slots.name
    from parking_logs,slots
    where parking_logs.slot_id = slots.slot_id";
$result=mysqli_query($conn,$q);

?>
    <main>
        <h2>Parking Logs</h2>
        <table-container>
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ticket ID</th>
                            <th>Vehicle Number</th>
                            <th>Username</th>
                            <th>Slot Name</th>
                            <th>Timestamp</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Populate this section with actual data from your system -->
                        <?php
                        while ($row=mysqli_fetch_array($result))
                        {
                            echo "<tr>";
                            echo "<td>".$row['log_id']."</td>";
                            echo "<td>".$row['ticket_id']."</td>";
                            echo "<td>".$row['vehicle_number']."</td>";
                            echo "<td>".$row['user_name']."</td>";
                            echo "<td>".$row['name']."</td>";
                            echo "<td>".$row['timestamp']."</td>";  
                            echo "</tr>";
                        }
                        ?>
                        <!-- <tr>
                            <td>1</td>
                            <td>T12345</td>
                            <td>ABC123</td>
                            <td>John Doe</td>
                            <td>A1</td>
                            <td>2024-01-25 14:30:00</td>
                        </tr> -->
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </table-container>
    </main>
<?php
include "footer.php";
?>