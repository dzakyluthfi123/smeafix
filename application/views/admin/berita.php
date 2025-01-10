<!-- views/admin/berita.php -->
<div class="container">
    <h1>Daftar Berita</h1>
    <a href="javascript:void(0);" class="btn btn-primary" onclick="addBerita()">Tambah Berita</a>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody id="berita-list">
            <?php foreach ($berita as $item): ?>
                <tr>
                    <td><?php echo $item->judul; ?></td>
                    <td><?php echo $item->penulis; ?></td>
                    <td><img src="<?php echo base_url('uploads/berita/' . $item->img); ?>" width="100"></td>
                    <td>
                        <button class="btn btn-warning" onclick="editBerita('<?php echo $item->judul; ?>')">Edit</button>
                        <button class="btn btn-danger" onclick="deleteBerita('<?php echo $item->judul; ?>')">Hapus</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Modal untuk form tambah/edit berita -->
<div class="modal" id="beritaModal" tabindex="-1" role="dialog" aria-labelledby="beritaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="beritaModalLabel">Tambah/Edit Berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="beritaForm">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" required>
                    </div>
                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis" required>
                    </div>
                    <div class="form-group">
                        <label for="konten">Konten</label>
                        <textarea class="form-control" id="konten" name="konten" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="img">Gambar</label>
                        <input type="file" class="form-control" id="img" name="img">
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Menambahkan berita
    function addBerita() {
        $('#beritaForm')[0].reset(); // Reset form
        $('#beritaModal').modal('show');
    }

    // Edit berita
    function editBerita(judul) {
        $.ajax({
            url: "<?php echo base_url('berita/edit'); ?>",
            type: "POST",
            data: {judul: judul},
            success: function(response) {
                var data = JSON.parse(response);
                if (data.status == 'error') {
                    alert(data.message);
                } else {
                    $('#judul').val(data.judul);
                    $('#penulis').val(data.penulis);
                    $('#konten').val(data.konten);
                    $('#beritaModal').modal('show');
                }
            }
        });
    }

    // Menghapus berita
    function deleteBerita(judul) {
        if (confirm('Apakah Anda yakin ingin menghapus berita ini?')) {
            $.ajax({
                url: "<?php echo base_url('berita/delete'); ?>",
                type: "POST",
                data: {judul: judul},
                success: function(response) {
                    var data = JSON.parse(response);
                    if (data.status == 'success') {
                        alert(data.message);
                        location.reload(); // Refresh halaman
                    } else {
                        alert(data.message);
                    }
                }
            });
        }
    }

    // Kirim form
    $('#beritaForm').submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: "<?php echo base_url('berita/save'); ?>",
            type: "POST",
            data: new FormData(this),
            processData: false,
            contentType: false,
            success: function(response) {
                var data = JSON.parse(response);
                alert(data.message);
                if (data.status == 'success') {
                    location.reload(); // Refresh halaman
                }
            }
        });
    });
</script>
