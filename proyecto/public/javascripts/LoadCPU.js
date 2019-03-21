//*******************************************************************************gráficas




$(function () {

  var data = [],
    totalPoints = 200, newValue =0;

    function callbacks(returnData) {
      newValue = returnData;
  $('#cpu').prepend().html($.trim(returnData));
    }

  function getRandomData() {

    if (data.length > 0)
      data = data.slice(1);


    while (data.length < totalPoints) {

      getCPU();
      var prev = data.length > 0 ? data[data.length - 1] : 50,
        y =newValue ;

      if (y < 0) {
        y = 0;
      } else if (y > 100) {
        y = 100;
      }

      data.push(y);
    }

    // Zip the generated y values with the x values

    var res = [];
    for (var i = 0; i < data.length; ++i) {
      res.push([i, data[i]])
    }

    return res;
  }

  // Intervalo de la actualización

  var updateInterval = 50;


  var plot = $.plot("#placeholder", [ getRandomData() ], {
    series: {
      shadowSize: 0	// Drawing is faster without shadows
    },
    yaxis: {
      min: 0,
      max: 100
    },
    xaxis: {
      show: false
    }
  });

  function update() {

    plot.setData([getRandomData()]);
    plot.draw();
    setTimeout(update, updateInterval);
  }

  update();

  function getCPU() {
  //  var command = $(this).val();
  var result = 0;

     $.ajax({
      url: '/getcpu/',
      data: {
        //'command': command
      },
      type: 'get',
      success: callbacks
    });

  }

});
