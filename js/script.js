// Получаем все кнопки с классом "showFormButton"
var showFormButtons = document.querySelectorAll('.shop_button');

showFormButtons.forEach(function(button) {
  button.addEventListener('click', function() {
    console.log(button.dataset.productId)
    document.getElementById('myForm').style.display = 'block';
    document.getElementById('product_id').value = button.dataset.productId;
  });
});

document.getElementById('closeFormButton').addEventListener('click', function() {
  document.getElementById('myForm').style.display = 'none';
});
