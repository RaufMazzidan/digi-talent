<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8"></div>
<div class="main-wrapper">
<!-- Table -->
  <div class="row">
    <div class="col">
      <div class="card shadow">
        <div class="row pt-2">
          <div class="col-9">
            <div class="card-header border-0">
              <h3 class="mb-0">List Data Talent</h3>
            </div>
          </div>
          <div class="col-3 pl-md-7">
            <div class="card-header border-0">
              <a href="<?=base_url()?>add-talent" class="btn btn-primary" role="button" aria-pressed="true">Input Talent</a>
            </div>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table align-items-center table-flush">
            <thead class="thead-light">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Role</th>
                <th scope="col">Job Level</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <?php
                $colors = array("red", "green", "blue", "yellow", "yellow", "yellow", "yellow", "yellow", "yellow", "yellow");
                foreach ($colors as $index => $value) {
              ?>
              <tr>
                <td style="width: 30px">
                  <?=$index + 1?>
                </td>
                <td>
                  Rauf Mazzidan
                </td>
                <td>
                  Front End
                </td>
                <td>
                  Junior
                </td>
                <td class="text-center">
                  <div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-h"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </div>
                </td>
              </tr>
              <?php
                }
              ?>
            </tbody>
          </table>
        </div>
        <div class="card-footer py-4">
          <nav aria-label="...">
            <ul class="pagination justify-content-end mb-0">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">
                  <i class="fas fa-angle-left"></i>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">
                  <i class="fas fa-angle-right"></i>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>