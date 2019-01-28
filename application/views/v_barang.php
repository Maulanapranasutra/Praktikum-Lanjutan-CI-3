<div class="block-header">
</div>
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div class="header">
          <div class="row clearfix">
            <div class="col-xs-12 col-sm-6">
              <h1 style="margin-left:400px;margin-top:100px;"class=>Barang</h1>
            </div>
          </div>
          <div class="body">
            <div class="row" style="width:850px; height:50px;margin-left:400px;margin-top:px;">
              <a style="margin: 35px;margin-left: 1px;background:#64c3c2;" href="#tambah" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphiconplus"></span> Tambah</a>
              <table class="table table-hover table-striped">
                <tr>
                  <th>NO</th><th>ID BARANG</th><th>NAMA BARANG</th><th>HARGA</th><th>STOK</th><th>ID KATEGORI</th>
                </tr>
                <?php
                $no=0;
                foreach ($data_barang as $dt_bar) {
                  $no++;
                  echo '<tr>
                  <td>'.$no.'</td>
                  <td>'.$dt_bar->id_barang.'</td>
                    <td>'.$dt_bar->nama_barang.'</td>
                    <td>'.$dt_bar->harga.'</td>
                    <td>'.$dt_bar->stok.'</td>
                    <td>'.$dt_bar->id_kategori.'</td>
                    </tr>';
                  }
                  ?>
                </table>
                <?php if($this->session->flashdata('pesan')!=null): ?>
                  <div class="alert alert-danger">
                    <?= $this->session->flashdata('pesan');?></div>
                  <?php endif ?>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="tambah">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><span ariahidden="true">&times;</span><span class="sr-only">Close</span></button>
                  <h4 class="modal-title">Tambah Barang</h4>
                </div>
                <div class="modal-body">
                  <form action="<?=base_url('index.php/barang/simpan_barang')?>"method="post">
                    <label>Nama Barang</label>
                    <input type="text" name="nama_barang" class="form-control"placeholder=""><br>
                    <label>Harga Barang</label>
                    <input type="text" name="harga" class="form-control" placeholder=""><br>
                    <label>Stok</label>
                    <input type="text" name="stok" class="form-control" placeholder=""><br>
                    <label>ID Kategori</label>
                    <select name="id_kategori">
                      <?php foreach($data_kategori as $kat):
                        echo "<option value= '".$kat->id_kategori."'>".$kat->nama_kategori."</option>";endforeach ?>
                      </select><br>
                      <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" datadismiss="modal">Close</button>
                  </div>
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
