
  <?php include "header.php"; ?>

  <section class="panel-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nr Ip</th>
                  <th>Status</th>
                  <th>Odblokuj</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>172.168.0.1</td>
                  <td class="text-danger">Zablokowane</td>
                  <td><i class="fa fa-unlock-alt" aria-hidden="true"></i></td>
                </tr>
                <tr>
                  <td>192.168.1.129</td>
                  <td class="text-danger">Zablokowane</td>
                  <td><i class="fa fa-unlock-alt" aria-hidden="true"></i></td>
                </tr>
                <tr>
                  <td>80.22.42.1</td>
                  <td class="text-danger">Zablokowany</td>
                  <td><i class="fa fa-unlock-alt" aria-hidden="true"></i></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel-tile">
            <div class="panel-header">
              <h3 class="text-center">Blokuj ip</h3>
            </div>
            <div class="panel-body">
              <p>Podaj nr ip w celu zbanowania użytkownika</p>
              <form>
                <div class="form-group">
                  <input class="form-control" placeholder="Nr ip"/>
                  <span></span>
                </div>
                <div class="form-group text-center buttons-modal">
                  <button type="submit" class="btn btn-accept">Potwierdź</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include "footer.php"; ?>
