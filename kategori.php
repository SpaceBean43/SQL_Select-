<div class="row justify-content-between">
    <div class="col-10"><b>Kategori </b></div>
    <div class="col-2 d-flex justify-content-end align-items-end"> <button class="btn btn-dark btn-sm"
            type="button">add</button>
    </div>
</div>

<table class="table table-sm border border-dark">
    <thead class="thead-dark">
        <tr>
            <th scope="col" width="5%">No</th>
            <th scope="col">Nama Kategori</th>
            <th scope="col" width="12%">Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $que = "SELECT * FROM kategori";
        $select = mysqli_query($con, $que);
        while ($data = mysqli_fetch_array($select)) {
            ?>
            <tr>
                <th scope="row">
                    <?php echo $data['id_kategori']; ?>
                </th>
                <td>
                    <?php echo $data['nama_kategori']; ?>
                </td>
                <td>
                    <button class="btn btn-dark btn-sm" type="button">edit</button> 
                    <button class="btn btn-dark btn-sm"type="button">delete</button>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
