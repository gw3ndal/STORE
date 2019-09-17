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
function frais(){
    var valeur= document.querySelector('input[name=logistic_type]:checked').value;
    var total= document.querySelector('input[name=total]').value;
    if(valeur==1){
        document.getElementById('livraison').innerHTML= Number(valeur)-1;
        document.getElementById('total').innerHTML= (Number(total)+Number(valeur)-1).toFixed(2);
    }else if(valeur==2){
        document.getElementById('livraison').innerHTML= Number(valeur)+1;
        document.getElementById('total').innerHTML= (Number(total)+Number(valeur)+1).toFixed(2);
    }else{
        document.getElementById('livraison').innerHTML= Number(valeur)+2;
        document.getElementById('total').innerHTML= (Number(total)+Number(valeur)+2).toFixed(2);
     
    }
}