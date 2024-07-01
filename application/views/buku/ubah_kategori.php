<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <?= form_open_multipart('buku/ubahkategori/' .$kategori['id_kategori'])?>
            <input type="hidden" name="id_kategori" value="<?php echo $kategori['id_kategori']; ?>">
               
                    <div class="form-group row">
                        <label for="nama_kategori" classs="col-sm-2 col-form-label"> Kategori </label>
                        <input type="text" class="form-control form-control-user" id="nama_kategori" name="nama_kategori" placeholder="Masukkan Kategori Buku" value="<?= $kategori['nama_kategori']; ?>">
                        <?= form_error('nama_kategori' , '<small class="text-danger pl-3>' , '</small>') ; ?>
                    </div>
                    <div class="form-group">
                        <input type="button" class="form-control form-control-user btn btn-dark col-lg-3 mt-3" value="Kembali" onclick="window.history.go(-1)">
                        <button type="submit" class="form-control form-control-user btn btn-primary col-lg-3 mt-3"> Ubah </button>
                    </div>
                </form>
            <?php  ?>
        </div>
    </div>
</div>

