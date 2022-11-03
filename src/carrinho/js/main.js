// Remove Items From Cart
$("a.remove").click(function () {
  event.preventDefault();
  $(this).parent().parent().parent().hide(400);
});

// Just for testing, show all items
$("a.btn.continue").click(function () {
  $("li.items").show(400);
});

function myFunction() {
  alert("Pedido concluído com sucesso!\nObrigado pela preferência.");
}

function removeProd() {
  var excluir = confirm('Deseja excluir este produto?');

  if(excluir == true){
    alert('')
  }else if(excluir == false){
    alert('')
  }
}

