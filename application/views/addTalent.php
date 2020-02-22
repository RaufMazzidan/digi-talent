<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"></div>
<div class="main-wrapper">
  <div class="card bg-secondary shadow">
    <div class="card-header bg-white border-0">
      <h3 class="mb-0">Add Talent</h3>
    </div>
    <div class="card-body">
      <form method="POST" action="<?=base_url()?>addTalent/create">
        <h6 class="heading-small text-muted mb-4">Personal information</h6>
        <div class="pl-lg-4">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label">Nama Lengkap</label>
                <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap" name="post_name">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label">Jenis Kelamin</label>
                <input type="text" class="form-control" placeholder="Laki-Laki / Perempuan" name="post_name">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label">Tempat, Tanggal Lahir</label>
                <input type="text" class="form-control" placeholder="Jakarta, 17 Agustus 1945" name="post_name">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label">Nomor Identitas</label>
                <input type="text" class="form-control" placeholder="Masukkan Nomor Identitas" name="post_name">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label">Nomor Handphone</label>
                <input type="text" class="form-control" placeholder="Masukkan Nomor Handphone" name="post_name">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label">Pendidikan Terakhir</label>
                <select class="form-control" name="post_name">
                  <option disabled selected="selected">Pilih</option>
                  <option value="menu 1">Menu 1</option>
                  <option value="menu 2">Menu 2</option>
                  <option value="menu 3">Menu 3</option>
                  <option value="menu 4">Menu 4</option>
                </select>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label">Nama Universitas</label>
                <input type="text" class="form-control" placeholder="Masukkan Nama Universitas">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label" for="input-last-name">Program Studi</label>
                <select class="form-control" name="post_name">
                  <option disabled selected="selected">Pilih</option>
                  <option value="menu 1">Menu 1</option>
                  <option value="menu 2">Menu 2</option>
                  <option value="menu 3">Menu 3</option>
                  <option value="menu 4">Menu 4</option>
                </select>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label class="form-control-label" for="input-last-name">Role</label>
                <select class="form-control" name="post_name">
                  <option disabled selected="selected">Pilih</option>
                  <option value="menu 1">Menu 1</option>
                  <option value="menu 2">Menu 2</option>
                  <option value="menu 3">Menu 3</option>
                  <option value="menu 4">Menu 4</option>
                </select>
              </div>
            </div>
            <div class="col-lg-6">
              <label class="form-control-label">Photo</label>
              <div class="form-group custom-file">
                <input type="file" class="custom-file-input" id="inputFile" accept="image/*" >
                <label id="inputFile-label" class="custom-file-label file-label-custom">Select file</label>
              </div>
            </div>
          </div>
        </div>
        <hr class="my-4" />
        <!-- Address -->
        <h6 class="heading-small text-muted mb-4">Work Experience</h6>
        <div class="pl-lg-4">
          <div class="row">
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label" for="input-last-name">Waktu</label>
                <input onkeydown="event.preventDefault()" class="form-control datepicker" placeholder="Select date" type="text">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label" for="input-last-name">Posisi</label>
                <select class="form-control" name="post_name">
                  <option disabled selected="selected">Pilih</option>
                  <option value="menu 1">Menu 1</option>
                  <option value="menu 2">Menu 2</option>
                  <option value="menu 3">Menu 3</option>
                  <option value="menu 4">Menu 4</option>
                </select>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="form-group">
                <label class="form-control-label">Perusahaan</label>
                <input type="text" class="form-control" placeholder="Masukkan Nama Perusahaan">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="form-group">
                <label>Deskripsi Pekerjaan</label>
                <textarea rows="6" class="form-control" placeholder="Deskripsikan pekerjaan anda"></textarea>
              </div>
            </div>
          </div>
        </div>
        <hr class="my-4" />
        <!-- Description -->
        <h6 class="heading-small text-muted mb-4">Keahlian</h6>
        <div class="pl-lg-4">
          <div class="row">
            <div class="col-lg-4">
              <label class="form-control-label" for="input-last-name">Database</label>
              <div class="form-group">
                <div class="custom-control custom-checkbox mb-2">
                  <input type='hidden' name='database[0]' value='Oracle' />
                  <input type="checkbox" class="custom-control-input" id="db-0" name="checkbox-db[]" value="0">
                  <label class="custom-control-label" for="db-0">Oracle</label>
                </div>
                <div class="custom-control custom-checkbox mb-2">
                  <input type='hidden' name='database[1]' value='Mongo' />
                  <input type="checkbox" class="custom-control-input" id="db-1" name="checkbox-db[]" value="1">
                  <label class="custom-control-label" for="db-1">Mongo</label>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <label class="form-control-label" for="input-last-name">Backend</label>
              <div class="form-group">
                <div class="custom-control custom-checkbox mb-2">
                  <input type='hidden' name='backend[0]' value='Node JS' />
                  <input type="checkbox" class="custom-control-input" id="be-0" name="checkbox-be[]" value="0">
                  <label class="custom-control-label" for="be-0">Node JS</label>
                </div>
                <div class="custom-control custom-checkbox mb-2">
                  <input type='hidden' name='backend[1]' value='Laravel' />
                  <input type="checkbox" class="custom-control-input" id="be-1"  name="checkbox-be[]" value="1">
                  <label class="custom-control-label" for="be-1">Laravel</label>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <label class="form-control-label" for="input-last-name">Frontend</label>
              <div class="form-group">
                <div class="custom-control custom-checkbox mb-2">
                  <input type='hidden' name='frontend[0]' value='React JS' />
                  <input type="checkbox" class="custom-control-input" id="fe-0" name="checkbox-fe[]" value="0">
                  <label class="custom-control-label" for="fe-0">React JS</label>
                </div>
                <div class="custom-control custom-checkbox mb-2">
                  <input type='hidden' name='frontend[1]' value='Vue JS' />
                  <input type="checkbox" class="custom-control-input" id="fe-1"  name="checkbox-fe[]" value="1">
                  <label class="custom-control-label" for="fe-1">Vue JS</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="pl-lg-4" style="float:right">
          <button class="btn btn-danger" type="button">Cancel</button>
          <button class="btn btn-primary" type="submit">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>