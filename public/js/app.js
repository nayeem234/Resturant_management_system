$(".editProduct").click(function () {
    let id = $(this).data("id");
    $("#editProduct").modal("show");

    axios.get("editProductPreview/"+id).then(function (response) {
            let data = response.data;
            console.log(data);
            $("#name").val(data[0].name);
            $("#title").val(data[0].title);
            $("#price").val(data[0].price);
            $("#quantity").val(data[0].quantity);
            $("#editId").val(data[0].id);
        })
        .catch(function (error) {
            console.log(error);
        });
});
