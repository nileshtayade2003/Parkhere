<?php
include "header.php";

$q="select bookings.*,slots.name from bookings natural join slots";
$result=mysqli_query($conn,$q);

?>
    <main>
        <h2>Booking Details</h2>
        <table-container>
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Parking Date</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Slot Name</th>
                            <th>Booking Time</th>
                            <th>Parking Cost</th>
                            <th>Parking Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample data, replace with actual booking details -->
                       <?php
                          while ($row=mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>".$row['parking_date']."</td>";

                            //converting 24 hour time to 12 hour and display it
                            $start_time=date("g:i A",strtotime($row["start_time"]));
                            $end_time=date("g:i A",strtotime($row["end_time"]));
                            echo "<td>".$start_time."</td>";
                            echo "<td>".$end_time."</td>";
                            echo "<td>".$row['name']."</td>";

                          
                            echo "<td>".$row['booking_time']."</td>";
                            echo "<td>".$row['parking_cost']."</td>";

                            if ($row["parking_status"]== 1) {
                                 echo "<td> Yes </td>";
                            }
                            else 
                             {
                                 echo "<td>No</td>";
                             }
                            echo "</tr>";

                          }
                        ?>
                        <!-- <tr>
                            <td>2024-02-05</td>
                            <td>02:00 PM</td>
                            <td>04:00 PM</td>
                            <td>Slot B</td>
                            <td>2024-02-01 09:45:00</td>
                            <td>$7.50</td>
                            <td>Pending</td>
                        </tr>
                        Add more rows as needed -->
                    </tbody>
                </table>
  
            </div>
        </table-container>    
    </main>
<?php
include "footer.php";
?>