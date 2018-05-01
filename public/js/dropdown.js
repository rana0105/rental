
$(".livesearch").chosen();

// Start Shop add dependent dropdown >>>>>>>>>>>>>>>>>>
$(document).ready(function() {
    //this is onchange for company -> when create
        $('select[name="company_i"]').on('change', function()  {

            var shopID = $(this).val();
            if(shopID) {
                $.ajax({
                    url: '/getshopDrop/'+shopID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        
                        $('select[name="complex_i"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="complex_i"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                    }
                });
            }else{
                $('select[name="complex_i"]').empty();
            }
        });

    // Shop edit modal dependent drop down 
        $('#shopEditModal').on('change', 'select[name="company_id"]', function() {

            var shopID = $(this).val();
            if(shopID) {
                $.ajax({
                    url: '/getshopDrop/'+shopID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {

                        $('#shopEditModal').find('select[name="complex_id"]').empty();
                        $.each(data, function(key, value) {
                            $('#shopEditModal').find('select[name="complex_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                    }
                });
            }else{
                $('select[name="complex_id"]').empty();
            }
        });  

        // Expense edit modal dependent drop down 
        $('#expenseEditModal').on('change', 'select[name="company_id"]', function() {
         
            var exID = $(this).val();
           //alert(exID);
            if(exID) {
                $.ajax({
                    url: '/getshopDrop/'+exID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        //alert(data);
                        $('#expenseEditModal').find('select[name="complex_id"]').empty();
                        $.each(data, function(key, value) {
                            $('#expenseEditModal').find('select[name="complex_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                    }
                });
            }else{
                $('select[name="complex_id"]').empty();
            }
        }); 

    //shop booking dependent drop down 
        $('select[name="company_name"]').on('change', function() {
            var complexID = $(this).val();
            if(complexID) {
                $.ajax({
                    url: '/getDropCompbook/'+complexID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                      
                        $('select[name="complex_name"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="complex_name"]').append('<option value="'+ key +'">'+ value +'</option>').trigger('change');
                        });
                    }
                });
            }else{
                $('select[name="complex_name"]').empty();
            }
        });
        $('select[name="complex_name"]').on('change', function() {
            var shopID = $(this).val();
            if(shopID) {
                $.ajax({
                    url: '/getDropShopbook/'+shopID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        
                        $('select[name="shop_id"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="shop_id"]').append('<option value="'+ key +'">'+ value +'</option>').trigger('change');
                        });
                    }
                });
            }else{
                $('select[name="shop_id"]').empty();
            }
        });

    // Rent collection dependent dorpdown 
        $('select[name="company_id"]').on('change', function() {
            var complexID = $(this).val();
            if(complexID) {
                $.ajax({
                    url: '/getDropComplex/'+complexID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                      
                        $('select[name="complex_id"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="complex_id"]').append('<option value="'+ key +'">'+ value +'</option>').trigger('change');
                        });
                    }
                });
            }else{
                $('select[name="complex_id"]').empty();
            }
        });
        $('select[name="complex_id"]').on('change', function() {
            var shopID = $(this).val();
            if(shopID) {
                $.ajax({
                    url: '/getDropShop/'+shopID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                       // console.log(data);
                        $('select[name="shop_no"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="shop_no"]').append('<option value="'+ key +'">'+ value +'</option>').trigger('change');
                        });
                    }
                });
            }else{
                $('select[name="shop_no"]').empty();
            }
        });
        
        $('select[name="shop_no"]').on('change', function() {
            var tenantID = $(this).val();
            if(tenantID) {
                $.ajax({
                    url: '/getDropShoptenant/'+tenantID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                         //console.log(data);
                        $('select[name="tenant_id"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="tenant_id"]').append('<option value="'+ value['id'] +'">'+ value['name'] +'</option>').trigger('change');
                        });
                    }
                });
            }else{
                $('select[name="tenant_id"]').empty();
            }
        });
        
        // End Rent collection dependent drop down
        
    // Start Rent collection report drop down 

    $('#company-id').change(function()  {
            var coplID = $(this).val();
            if(coplID) {
                $.ajax({
                    url: '/getcomplexReportshow/'+coplID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                       // console.log(data);
                        $('select[name="complex"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="complex"]').append('<option value="'+ key +'">'+ value +'</option>').trigger('change');
                        });
                    }
                });
            }else{
                $('select[name="complex"]').empty();
            }
        });

    $('#complex-id').change(function()  {
        // change complex then will be shop no
        var coplID = $(this).val();
        if(coplID) {
            $.ajax({
                url: '/getrentReportshow/'+coplID,
                type: "GET",
                dataType: "json",
                success:function(data) {
                   // console.log(data);
                    $('select[name="shop"]').empty();
                    $.each(data, function(key, value) {
                        $('select[name="shop"]').append('<option value="'+ key +'">'+ value +'</option>');
                    });
                }
            });
        }else{
            $('select[name="shop"]').empty();
        }
    });

    // End Rent collection report drop down 

    // Start Expense report drop down 

    $('select[name="company_exp"]').on('change', function() {
            var plexID = $(this).val();

            if(plexID) {
                $.ajax({
                    url: '/getexptRepor/'+plexID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                         //console.log(data);
                        $('select[name="complex_exp"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="complex_exp"]').append('<option value="'+ value['id'] +'">'+ value['name'] +'</option>').trigger('change');
                        });
                    }
                });
            }else{
                $('select[name="complex_exp"]').empty();
            }
        });

    $('select[name="complex_exp"]').on('change', function() {
            var excatID = $(this).val();
            
            if(excatID) {
                $.ajax({
                    url: '/getexptReporcat/'+excatID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                         //console.log(data);
                        $('select[name="category_exp"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="category_exp"]').append('<option value="'+ value['id'] +'">'+ value['name'] +'</option>').trigger('change');
                        });
                    }
                });
            }else{
                $('select[name="category_exp"]').empty();
            }
        });

    // End Expense report drop down 

    // start utility report dependet drop down
    $('select[name="company_uti"]').on('change', function() {
            var uticomID = $(this).val();
            //alert(uticomID);
            if(uticomID) {
                $.ajax({
                    url: '/getutidropReport/'+uticomID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                         //console.log(data);
                        $('select[name="complex_uti"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="complex_uti"]').append('<option value="'+ value['id'] +'">'+ value['name'] +'</option>');
                        });
                    }
                });
            }else{
                $('select[name="complex_uti"]').empty();
            }
        });

    // end utility report dependet drop down 

    // start tenant due report dependet drop down
    $('select[name="company_due"]').on('change', function() {
            var uticomID = $(this).val();
            //alert(uticomID);
            if(uticomID) {
                $.ajax({
                    url: '/getTenantDuedrop/'+uticomID,
                    type: "GET",
                    dataType: "json",
                    success:function(data) {
                        // alert(data);
                        $('select[name="complex_due"]').empty();
                        $.each(data, function(key, value) {
                            $('select[name="complex_due"]').append('<option value="'+ key +'">'+ value +'</option>');
                        });
                    }
                });
            }else{
                $('select[name="complex_due"]').empty();
            }
        });

    // end tenant due report dependet drop down 
});






