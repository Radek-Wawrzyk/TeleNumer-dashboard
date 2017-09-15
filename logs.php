
  <?php include "header.php"; ?>

  <section class="panel-content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="panel-tile">
            <div class="panel-header">
              <h3 class="text-center">Logi strony</h3>
            </div>
            <div class="panel-body">
              <p>Znajduję się tu baza logów wraz z wykresami przedstawiającymi statystyki owych logów</p>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>IP</th>
                  <th>Opis</th>
                  <th>Data</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>192.168.1.1</td>
                  <td>Dodał nowy komentarz</td>
                  <td>25.08.2017</td>
                </tr>
                <tr>
                  <td>20.20.20.20</td>
                  <td>Zalogował się do panelu</td>
                  <td>15.12.2016</td>
                </tr>
                <tr>
                  <td>172.168.1.0</td>
                  <td>Dodał nowy nr telefonu</td>
                  <td>02.04.2017</td>
                </tr>
                <tr>
                  <td>172.168.1.0</td>
                  <td>Dodał nowy nr telefonu</td>
                  <td>02.04.2017</td>
                </tr>
                <tr>
                  <td>172.168.1.0</td>
                  <td>Dodał nowy nr telefonu</td>
                  <td>02.04.2017</td>
                </tr>
                <tr>
                  <td>172.168.1.0</td>
                  <td>Dodał nowy nr telefonu</td>
                  <td>02.04.2017</td>
                </tr>
                <tr>
                  <td>172.168.1.0</td>
                  <td>Dodał nowy nr telefonu</td>
                  <td>02.04.2017</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="panel-tile">
            <div class="panel-header">
              <h3 class="text-center">Wykres</h3>
            </div>
            <div class="panel-body">
              <canvas class="panel-chart" id="log-chart"></canvas>
            </div>
          </div>
        </div>

    </div>
  </section>

  <?php include "footer.php"; ?>
