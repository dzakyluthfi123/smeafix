
    <br>
    <br>
    <br>
    <br>
    <div class="containersambutankepalasekolah">
        <h4 class="home" style="font-size: 20px; margin-top: 4px;">Home</h4>
        <i class="fa fa-angle-right icon" style="font-size: 20px;"></i>
        <i class="fa fa-angle-right icon" style="font-size: 20px;"></i>
        <h4 style="margin-left: 1%; font-size: 20px; margin-top: 4px;">Guru dan Staff</h4>
    </div>
    <br>
    <!-- <div class="imagepramuka">
        <img src="assets/image/paskib 4.jpg" alt="pramuka" class="pramuka-img" width="50%" style="margin-left: 25%;">
    </div> -->
    <br>
    <div class="judulsambutan">
        <h2>Guru dan Staff</h2>
        <div class="underline"></div>
    </div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Nomer</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                if (!empty($gurustaff)):
                    foreach ($gurustaff as $guru): ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $guru->nama; ?></td>
                            <td><?php echo $guru->jabatan; ?></td>
                        </tr>
                    <?php endforeach;
                else: ?>
                    <tr>
                        <td colspan="3">Data guru dan staff tidak tersedia.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <br>


