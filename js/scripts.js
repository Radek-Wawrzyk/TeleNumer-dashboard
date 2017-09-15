
  //Menu mobile
  $(document).ready(function() {
    $(".toggle-navigation").click(function() {
      $(this).toggleClass('menu-open');
      $(".sidebar").toggleClass('menu-open');
    });
  });

  //preloader
  $(document).ready(function() {
    $(window).load(function(){
      $(".preloader").delay(550).fadeOut('slow');

      $('a').click(function(e){
        redirect = $(this).attr('href');
        e.preventDefault();
        $('body').fadeOut("slow", function(){
          document.location.href = redirect
        });
    });
    });
  });

  //Chars
  var ctx = document.getElementById("log-chart");
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ["Sierpień", "Wrzesień", "Październik", "Listopad", "Grudzień", "Styczeń"],
          datasets: [{
              label: 'Ilość logów danego miesiąca',
              data: [1, 1, 3, 5, 2, 3],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                  'rgba(255,99,132,1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero:true
                  }
              }]
          }
      }
  });
