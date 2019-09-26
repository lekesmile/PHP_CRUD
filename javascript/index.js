



$(document).on('click', '.edit-object', function() {

    var id = $(this).attr('edit-id');
   
    bootbox.confirm({
      message: "<h4>Oletko varma?</h4>",
      buttons: {
        confirm: {
          label: '<i class="fa fa-check"></i>Kyllä',
          className: 'btn-danger'
        },
        cancel: {
          label: '<i class="fa fa-check"></i>Ei',
          className: 'btn-primary'
        }
      },
      callback: function(result) {
        // Painettiinko Kyllä-painiketta?
        if(result == true) {
          // Kyllä painettiin, joten siirrytään muuta-sivulle
          var url = "edit.php?id=" + id;
          $(location).attr('href', url);
        }
      }
    })
  })
  // Siirry poista-sivulle
  $(document).on('click', '.delete-object', function() {
    var id = $(this).attr('delete-id');
    bootbox.confirm({
      message: "<h4>Are you sure ?</h4>",
      buttons: {
        confirm: {
          label: '<i class="fa fa-check"></i>Kyllä',
          className: 'btn-danger'
        },
        cancel: {
          label: '<i class="fa fa-check"></i>Ei',
          className: 'btn-primary'
        }
      },
      callback: function(result) {
        // If yes? delect user from db
        if(result == true) {
          //if no ...no delect is carried out
          var url = "delete.php?id=" + id;
          $(location).attr('href', url);
        }
      }
    })
    return false;
  })


