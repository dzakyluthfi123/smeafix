<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Kritik & Saran</h1>
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Pengirim</th>
                            <th>Email Pengirim</th>
                            <th>Isi Kritik/Saran</th>
                            <th>Tanggal Kirim</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php if (!empty($kritiksaran)): ?>
                            <?php foreach ($kritiksaran as $ks): ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($ks->nama_pengirim); ?></td>
                                    <td><?php echo htmlspecialchars($ks->email_pengirim); ?></td>
                                    <td><?php echo nl2br(htmlspecialchars($ks->isi_kritik_saran)); ?></td>
                                    <td><?php echo date('d-m-Y', strtotime($ks->tanggal_kirim)); ?></td>
                                    <td>
                                        <?php 
                                            if ($ks->status == 'unread') {
                                                echo '<span class="badge badge-danger">Unread</span>';
                                            } elseif ($ks->status == 'read') {
                                                echo '<span class="badge badge-success">Read</span>';
                                            } else {
                                                echo '<span class="badge badge-secondary">Unknown</span>';
                                            }
                                        ?>
                                    </td>
                                    <td>
                                        <?php if ($ks->status == 'unread'): ?>
                                            <a href="<?php echo site_url('kritiksaran/mark_feedback_as_read/'.$ks->id); ?>" class="btn btn-sm btn-primary">Mark as Read</a>
                                        <?php else: ?>
                                            <span class="text-muted">Already Read</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6" class="text-center text-muted">Tidak ada kritik dan saran yang ditemukan.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
