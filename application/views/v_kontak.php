<? $this->load->view('tugas/header');?>

<div class="container">
    <div class="row">
        <div class="jumbotron">
            <table class="table table-condensed table-striped table-bordered table-paginate table-hover" cellspacing="0" width="100%" style="background-color: rgb(234,239,181)">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Nomor</th>
            </tr>
            <tbody>
                <?php
                    $no=1;
                    foreach ($datakontak as $dosen) {
                ?>
                <tr>
                    <td><?php echo $dosen->id; ?></td>
                    <td><?php echo $dosen->nama; ?></td>
                    <td><?php echo $dosen->nomor; ?></td>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </thead>
    </table>
    <?php
        echo $this->pagination->create_links();
    ?>

        </div>
    </div>
</div>

    </html>