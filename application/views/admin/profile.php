

<div class="content-page">
            <div class="content">
            <h2 class="ml-3"> User Pofile</h2>

                <!-- Start Content-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                                                <div class="card-body">
                                    <div class="button-list text-end">
                                        <button type="button" class="btn btn-light btn-sm waves-effect waves-light"
                                            data-bs-toggle="modal" data-bs-target="#edit-1"><i
                                                class="ti-pencil-alt"></i></button>
                                    </div>
                                    <img src="<?php echo base_url('template/assets/img/smkn 1 slawi.png'); ?>" alt="user-img"
                                        title="SPASI Moving Image" width="12%">
                                    <div class="dropdown">
                                       
                                    </div>

                                    <hr>
                                    <div class="table-responsive" >
                                        <table class="table mb-0" >
                                           
                                            <tbody>
                                                <tr>
                                                    <th scope="row" class="bg-purple ">Username</th>
                                                    <td> <?php echo $username; ?></td>
                                                </tr>
                                                <tr>
                                                    <th scope="row" class="bg-purple ">Password</th>
                                                    <td> <?php echo $password; ?></td>
</tr>
                                            </tbody>

                                        </table>
                                    </div>
