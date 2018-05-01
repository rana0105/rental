// Modal edit for company information 

 $(document).on('click', 'button.company_modal', function() {
     var id = $(this).attr('data-id');
       $.get('companies-edit/'+id, function(data){
        $('#companyEditModal').find('.add-company').first().html(data);
    });
        $('#footer_action_button').text(" Update");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Edit');
        $('.deleteContent').hide();
        $('.form-horizontal').show();
        $('#fid').val($(this).data('id'));
        $('#n').val($(this).data('name'));
        $('#myModal').modal('show');
     });


// Modal edit for complex information 

$(document).on('click', 'button.complex_modal', function() {
    var id = $(this).attr('data-id');
    //alert(id);
    $.get('complexes-edit/'+id, function(data){
        $('#complexEditModal').find('.add-complex').first().html(data);
    });
        $('#footer_action_button').text(" Update");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Edit');
        $('.deleteContent').hide();
        $('.form-horizontal').show();
        $('#fid').val($(this).data('id'));
        $('#n').val($(this).data('name'));
        $('#myModal').modal('show');
    });

// Modal edit for shop information 

$(document).on('click', 'button.shop_modal', function() {
    var id = $(this).attr('data-id');
    //alert(id);
    $.get('shops-edit/'+id, function(data){
        $('#shopEditModal').find('.add-shop').first().html(data);
    });
        $('#footer_action_button').text(" Update");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Edit');
        $('.deleteContent').hide();
        $('.form-horizontal').show();
        $('#fid').val($(this).data('id'));
        $('#n').val($(this).data('name'));
        $('#myModal').modal('show');
    });

// Modal edit for tenant information 

$(document).on('click', 'button.tenant_modal', function() {
    var id = $(this).attr('data-id');
    //alert(id);
    $.get('tenants-edit/'+id, function(data){
        $('#tenantEditModal').find('.add-tenant').first().html(data);
    });
        $('#footer_action_button').text(" Update");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Edit');
        $('.deleteContent').hide();
        $('.form-horizontal').show();
        $('#fid').val($(this).data('id'));
        $('#n').val($(this).data('name'));
        $('#myModal').modal('show');
    });

// Modal edit for category information 

$(document).on('click', 'button.category_modal', function() {
    var id = $(this).attr('data-id');
    //alert(id);
    $.get('categories-edit/'+id, function(data){
        $('#categoryEditModal').find('.add-category').first().html(data);
    });
        $('#footer_action_button').text(" Update");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Edit');
        $('.deleteContent').hide();
        $('.form-horizontal').show();
        $('#fid').val($(this).data('id'));
        $('#n').val($(this).data('name'));
        $('#myModal').modal('show');
    });


// Modal edit for bank information 

$(document).on('click', 'button.bank_modal', function() {
    var id = $(this).attr('data-id');
    //alert(id);
    $.get('banks-edit/'+id, function(data){
        $('#bankEditModal').find('.add-bank').first().html(data);
    });
        $('#footer_action_button').text(" Update");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Edit');
        $('.deleteContent').hide();
        $('.form-horizontal').show();
        $('#fid').val($(this).data('id'));
        $('#n').val($(this).data('name'));
        $('#myModal').modal('show');
    });

// Modal edit for employee information 

$(document).on('click', 'button.employee_modal', function() {
    var id = $(this).attr('data-id');
    //alert(id);
    $.get('employee-edit/'+id, function(data){
        $('#employeeEditModal').find('.add-employee').first().html(data);
    });
        $('#footer_action_button').text(" Update");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Edit');
        $('.deleteContent').hide();
        $('.form-horizontal').show();
        $('#fid').val($(this).data('id'));
        $('#n').val($(this).data('name'));
        $('#myModal').modal('show');
    });

// Modal edit for expense information 

$(document).on('click', 'button.expense_modal', function() {
    var id = $(this).attr('data-id');
   // alert(id);
    $.get('expenses-edit/'+id, function(data){
        $('#expenseEditModal').find('.add-expense').first().html(data);
    });
        $('#footer_action_button').text(" Update");
        $('#footer_action_button').addClass('glyphicon-check');
        $('#footer_action_button').removeClass('glyphicon-trash');
        $('.actionBtn').addClass('btn-success');
        $('.actionBtn').removeClass('btn-danger');
        $('.actionBtn').addClass('edit');
        $('.modal-title').text('Edit');
        $('.deleteContent').hide();
        $('.form-horizontal').show();
        $('#fid').val($(this).data('id'));
        $('#n').val($(this).data('name'));
        $('#myModal').modal('show');
    });
