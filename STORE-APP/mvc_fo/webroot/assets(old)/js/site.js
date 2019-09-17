$('[data-product]').on('click', function(){
    $('#productModal').find("#productId").val($(this).data('product'));
    $('#productModal').find("#productName").text($(this).data('name'));
    $('#productModal').find("#productSub").text($(this).data('sub'));
    $('#productModal').find("#productDescr").text($(this).data('descr'))
    $('#').find("#cat").text($(this).data('cat'))
    $('#productModal').find("#productPrice").text($(this).data('price') + ' €');
    if($(this).data('qte')){
        $('#productModal').find("#qte").val($(this).data('qte'));
    }
});