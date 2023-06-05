<?php require('header.php'); ?>
<style>
.tablebx {
    justify-content: center;
    align-items: center;
    display: flex;
    padding-bottom: 50px;
}

table {
    max-width: 1600px;
    border: 1px solid black;
}

.tablebx th,
.tablebx td {
    padding: 10px;
    border: 1px solid black;
    font-size: 28px;
}
</style>
<section>
    <div class="tablebx">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Lokasi</th>
                    <th>Fasilitas</th>
                    <th>Rating</th>
                </tr>
            </thead>
            <tbody>
                <?php
        $db = mysqli_connect("localhost", "root", "", "tabel"); // Ganti dengan informasi koneksi database yang benar
        
        $sql = "SELECT * FROM desitanasi";
        $query = mysqli_query($db, $sql); 
        while ($tabel = mysqli_fetch_array($query))
        {
            echo "<tr>";
            echo "<td>".$tabel["id"]."</td>";
            echo "<td>".$tabel["nama"]."</td>";
            echo "<td>".$tabel["lokasi"]."</td>";
            echo "<td>".$tabel["fasilitas"]."</td>";
            echo "<td>".$tabel["rating"]."</td>";
            echo "</tr>";
        }
        mysqli_close($db);
        ?>
            </tbody>
        </table>
    </div>
</section>
<?php require('footer.php'); ?>