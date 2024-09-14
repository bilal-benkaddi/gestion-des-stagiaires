// $(document).ready(function() {
//   $('.editer').click(function() {
//     var filiere_id = $(this).siblings("#filiere_id").val();
//     var user_id = $(this).siblings("#ID").val();
//     $.ajax({
//       url: "editer.php?id=" + user_id + "&filiere_id=" + filiere_id,
//       type: 'GET',
//       data: 'post_id=' + user_id,
//       success: function(response) {
//         $('#editer_form').html(response);
//         $('html, body').animate({
//           scrollTop: $('#editer_form').offset().top
//         }, 500); 
//       },
//       error: function() {
//         console.log('Error loading content.');
//       }
//     });
//   });
// });
  

// $(document).ready(function() {
//   $('.editer').click(function() {
//     var filiere_id = $(this).siblings("#filiere_id").val();
//     var user_id = $(this).siblings("#ID").val();
//     var button = this;
//     $.ajax({
//       url: "editer.php",
//       type: 'GET',
//       data: {
//         id: user_id,
//         filiere_id: filiere_id,
//         post_id: user_id
//       },
//       success: function(response) {
//         var tr = $("<tr>");
//         var td = $("<td>");
//         td.attr("colspan", "6");
//         td.html(response);
//         tr.append(td);
//         var parentTd = $(button).parent().parent().parent();
//         parentTd.after(tr);
//       },
//       error: function() {
//         console.log('Error loading content.');
//       }
//     });
//   });
// });


// $(document).ready(function() {
//   $('.editer').one('click', function() {
//     var filiere_id = $(this).siblings("#filiere_id").val();
//     var user_id = $(this).siblings("#ID").val();
//     var button = this;
//     var executedScript = false;
//     $.ajax({
//       url: "index.php?action=editer",
//       type: 'GET',
//       data: {
//         id: user_id,
//         filiere_id: filiere_id,
//         post_id: user_id
//       },
//       success: function(response) {
//         if (!executedScript) {
//           executedScript = true;
//           var tr = $("<tr>")
//           //.css("background-color", "#79E0EE");;
//           var td = $("<td>").attr("colspan", "6");
//           td.html(response);
//           tr.append(td);
//           var parentTd = $(button).parent().parent().parent();
//           parentTd.after(tr);
//           $('html, body').animate({
//             scrollTop: $(tr).offset().top - ($(window).height() /3.8)
//           }, 500);
//         }
//       },
//       error: function() {
//         console.log('Error loading content.');
//       }
//     });
//   });
// });

$(document).ready(function() {
  $('.editer').one('click', function() {
    var filiere_id = $(this).siblings("#filiere_id").val();
    var user_id = $(this).siblings("#ID").val();
    var button = this;
    var executedScript = false;
    $.ajax({
      url: "./views/editer.php",
      type: 'GET',
      data: {
        id: user_id,
        filiere_id: filiere_id,
      },
      success: function(response) {
        if (!executedScript) {
          executedScript = true;
          var tr = $("<tr>");//$('<td colspan="6"></td>')
          var td = $("<td>").attr("colspan", "6");
          td.html(response);
          tr.append(td);
          //var parentTd = $(button).parent().parent().parent();
          var trr=$(button).closest('.data-row');
          trr.html(tr.html());
          //parentTd.after(tr);
          $('html, body').animate({
            scrollTop: $(trr).offset().top
          }, 500);
        }
      },
      error: function() {
        console.log('Error loading content.');
      }
    });
  });
});






