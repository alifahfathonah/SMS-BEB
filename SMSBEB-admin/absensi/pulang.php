<table class="table table-bordered dataTable" id="dataTable">
               <thead>
                <tr>
                      <th>NIS</th>
                      <th>Nama</th>
                      <th>
                          Status Kehadiran(Pulang)
                      </th>
                  </tr>

               </thead>
               <tbody>

                <?php
                $where = "";
                $d = $_POST;
                  if (isset($_POST['cari'])) {
                    if($d['jenis'] == 'datang'){
                      $where = " WHERE ts.id_kelas='$d[kelas]'";
                    }else{
                      $where = " WHERE ts.id_kelas='$d[kelas]'";
                    }
                  }
                    $ql = mysqli_query($koneksi, "SELECT * FROM tb_siswa ts $where");
                    while($data = mysqli_fetch_array($ql)){

                ?>
                <tr>
                    <td><?= $data["nis"] ?></td>
                    <td><?= $data["nama"] ?></td>
                    <input type="text" name="kelas" hidden value="<?= $data["id_kelas"] ?>">
                    <input type="text" name="nis[]" hidden value="<?= $data["nis"] ?>">
                    <input type="hidden" name="type" value="2">
                    <?php
                    $now = date('Y-m-d');
                    $qs = mysqli_query($koneksi, "SELECT * FROM tb_absen_harian WHERE id_kelas='$data[id_kelas]'");
                    $d = mysqli_fetch_array($qs);
                    $qcek = mysqli_query($koneksi, "SELECT * FROM tb_absen_harian WHERE tanggal like '%$now%' and nis='$data[nis]' and type='2'");
                    $dd = mysqli_fetch_array($qcek);
                    ?>
                    <td>
                    <select name="status_absen[]" id="status_absen" class="form-control">
                            <option value="">Pilih Status</option>
                            <option value="Pulang" <?= $dd['status_absen'] == "Pulang" ? 'selected' : '' ?>>Pulang</option>
                        </select>
                    </td>
                </tr>
                    <?php } ?>
                    </tbody>
            </table>