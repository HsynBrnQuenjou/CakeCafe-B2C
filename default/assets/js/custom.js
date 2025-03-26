document.addEventListener('DOMContentLoaded', function() {
    const categoryItems = document.querySelectorAll('.category-filter');
    const productItems = document.querySelectorAll('.product-item');

    categoryItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            const categoryId = this.getAttribute('data-category-id');

            // Remove active class from all categories
            categoryItems.forEach(cat => cat.closest('.categories__item').classList.remove('active'));

            // Add active class to selected category
            this.closest('.categories__item').classList.add('active');

            // Filter products
            productItems.forEach(product => {
                const productCategoryId = product.getAttribute('data-category-id');

                if (categoryId === '' || productCategoryId === categoryId) {
                    product.style.display = 'block';
                } else {
                    product.style.display = 'none';
                }
            });
        });
    });
});

var url = 'http://localhost/CakeCafe-B2C';

/* BIR TURLU BECEREMEDIM PROJE BITIMI BAKARIZ VIDEO 10-11-12 */
/* function sendmessage(){

    $("#sendbutton").prop('disabled',true);

    var data = $("#contact-form").serialize();
    $.ajax({
        type : "POST",
        data : data,
        url  : url + "/pages/sendmessage",
        success : function(result){
            var obj = JSON.parse(result);
            swal.fire({
                title : obj.title,
                text  : obj.text,
                icon  : obj.icon
            });

            if(obj.icon == "success"){
                $("input[name=name]").val('');
                $("input[name=subject]").val('');
                $("input[name=email]").val('');
                $("textarea[name=message]").val('');
            }else{
                $("#sendbutton").prop('disabled',false);
            }

        }
    })

} */