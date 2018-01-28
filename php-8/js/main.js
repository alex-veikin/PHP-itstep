$(function () {
    $('.delete').click(function (e) {
        if (confirm("Delete item?")) {
            return true;
        } else {
            e.preventDefault();
        }
    })
});