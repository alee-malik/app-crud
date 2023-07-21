$(document).ready(function() {
    // Edit Product
    $('.edit-product').click(function(e) {
      e.preventDefault();
      var url = $(this).attr('href');
      
      // Send AJAX GET request to fetch the edit form
      $.get(url, function(response) {
        $('#edit-product-modal .modal-body').html(response);
        $('#edit-product-modal').modal('show');
      });
    });
  
    // Delete Product
    $('.delete-product').click(function(e) {
      e.preventDefault();
      var form = $(this).closest('form');
      var url = form.attr('action');
  
      // Send AJAX DELETE request to delete the product
      if (confirm('Are you sure you want to delete this product?')) {
        $.ajax({
          url: url,
          type: 'DELETE',
          data: form.serialize(),
          success: function(response) {
            // Remove the product row from the table
            form.closest('tr').remove();
          }
        });
      }
    });
  });
  