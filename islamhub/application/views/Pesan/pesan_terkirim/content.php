<div class="container-fluid">
  <div class="row">
      <div class="col-md-12">
      <?php $this->load->view('notification')?>
          <div class="card">
              <div class="card-header card-header-icon" data-background-color="green">
                  <i class="material-icons">message</i>
              </div>
              <div class="card-content">
                  <h4 class="card-title"><?=$title?></h4>
                  <div class="row" style="padding:20px;">
                    <div class="material-datatables">
                        <table id="tabelpesan" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Penerima</th>
                                    <th>Subjek</th>
                                    <th>Isi</th>
                                    <th>Tanggal</th>
                                    <th class="disabled-sorting">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($tblPesan as $value): ?>
                                    <tr>
                                        <td><?=$value->penerima_chat?></td>
                                        <td><?=$value->subjek?></td>
                                        <td><?=$value->isi_chat?></td>
                                        <td><?=$value->date_created?></td>
                                        <td>
                                            <div class="dropdown">
                                                <button href="#" class="dropdown-toggle btn btn-primary btn-round" data-toggle="dropdown">Action
                                                    <b class="caret"></b>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-left">
                                                    <li>
                                                        <a href="<?=base_url('Pesan/LihatPesan/'.$value->id_chat)?>">Lihat Pesan</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <tbody>
                        </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>