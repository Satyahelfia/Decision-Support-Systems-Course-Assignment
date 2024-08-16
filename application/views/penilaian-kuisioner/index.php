<?php
$this->load->view('layouts/header_admin');
?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-edit"></i>Penilaian Kuisioner</h1>
</div>

<div class="card">
    <div class="card-header">
        <h6 class="font-weight-bold mb-0 text-primary"><i class="fas fa-fw fa-edit"></i>Biodata</h6>
    </div>
    <div class="card-body">
        <?php echo form_open('Kuisioner/question') ?>
        <div class="row mb-3">
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama"
                    aria-label="Username" aria-describedby="basic-addon1" name="nama" required>
            </div>
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">NIM</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="NIM"
                    aria-label="Username" aria-describedby="basic-addon1" name="nim" required>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Kelas</label>
                <select class="form-control" aria-label="Default select example" name="kelas" id="kelas" required>
                    <option value="">Kelas</option>
                    <option value="IF-10-A">IF-10-A</option>
                    <option value="IF-10-B">IF-10-B</option>
                    <option value="IF-10-C">IF-10-C</option>
                    <option value="IF-10-D">IF-10-D</option>
                    <option value="IF-10-E">IF-10-E</option>
                    <option value="IF-10-F">IF-10-F</option>
                    <option value="IF-10-G">IF-10-G</option>
                    <option value="IF-10-H">IF-10-H</option>
                </select>
            </div>
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Semester</label>
                <select class="form-control" aria-label="Default select example" name="semester" id="semester" required>
                    <option value="">Pilih Semester</option>
                    <option value="5">Semester 5</option>
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary px-4">Lanjut</button>
        <?php echo form_close() ?>
    </div>
</div>
<div id="pertanyaan">
</div>
<?php
$this->load->view('layouts/footer_admin');
?>