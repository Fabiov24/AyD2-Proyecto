$(document).ready(function() {
  setInterval(function() {
    LoadProcs()
  }, 600);
});

function LoadProcs() {
//  var command = $(this).val();

  $.ajax({
    url: '/procs/',
    data: {
      //'command': command
    },
    type: 'get',
    success: function (data) {
      console.log(data);
      $('#procs').prepend().html($.trim(data));
    }
  });
}
