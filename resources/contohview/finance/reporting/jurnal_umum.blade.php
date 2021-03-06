<!-- Modal -->
<div id="jurnalumum" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header bg-gradient-info">
        <h4 class="modal-title">Setting Jurnal Umum</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <div class="row">
          
            <div class="col-md-12 col-sm-12 col-xs-12">
              <label>Jenis Transaksi</label>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <select class="form-control form-control-sm" id="filter">
                  <option disabled selected>--Pilih--</option>
                  <option value="kas">Jurnal Kas</option>
                  <option value="bank">Jurnal Bank</option>
                  <option value="memorial">Jurnal Memorial</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 alamraya-no-padding">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <label>Periode Mulai</label>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <div id="datepicker-popup" class="input-group date datepicker alamraya-no-padding">
                      <input type="text" class="form-control" placeholder="dd-mm-yyyy">
                      <div class="input-group-addon alamraya-input-group-addon">
                        <span class="mdi mdi-calendar"></span>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 alamraya-no-padding">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <label>Periode Selesai</label>
              </div>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="form-group">
                  <div id="datepicker-popup" class="input-group date datepicker alamraya-no-padding">
                      <input type="text" class="form-control" placeholder="dd-mm-yyyy">
                      <div class="input-group-addon alamraya-input-group-addon">
                        <span class="mdi mdi-calendar"></span>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <label>Dengan Nama Perkiraan</label>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="form-group">
                <select class="form-control form-control-sm" id="filter">
                  <option disabled selected>--Pilih--</option>
                  <option value="yes">Ya</option>
                  <option value="no">Tidak</option>
                </select>
              </div>
            </div>          

         </div> <!-- End div row -->
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" type="button">Process</button>
        <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>