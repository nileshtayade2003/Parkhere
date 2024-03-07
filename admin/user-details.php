<?php
include "header.php";

// select all data from users table to display
$q="select * from users";
$result=mysqli_query($conn,$q);

?>
    <main>
        <h2>User Details</h2>
        <table-container>
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>DOB</th>
                            <th>Address</th>
                            <th>Gender</th>
                            <th>Phone No</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- displaying user Details from database -->
                        <?php
                            while ($row=mysqli_fetch_array($result))
                            {
                                echo "<tr>";
                                echo "<td>".$row['user_id']."</td>";
                                echo "<td>".$row['name']."</td>";
                                echo "<td>".$row['email']."</td>";
                                echo "<td>".$row['dob']."</td>";
                                echo "<td>".$row['address']."</td>";
                                echo "<td>".$row['gender']."</td>";
                                echo "<td>".$row['phone']."</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </table-container>
    </main>
    <footer>
        &copy; 2024 Parking Management System. All rights reserved.
    </footer>

    <script>
        document.getElementById('hamburger-icon').addEventListener('click', function () {
            document.getElementById('mobile-nav').style.display =
                document.getElementById('mobile-nav').style.display === 'flex' ? 'none' : 'flex';
        });
    </script>
</body>
</html>
