
/* PRODUCTLIST START*/
/* MODAL DE CONFIRMACION DE ELIMINACION DE PRODUCTOS*/
let deleteProductId = null;

function confirmDelete(id) {
    deleteProductId = id;
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    deleteModal.show();
}

document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
    if (deleteProductId !== null) {
        window.location.href = 'deleteproduct.php?id=' + deleteProductId;
    }
});
/* PRODUCTLIST END*/