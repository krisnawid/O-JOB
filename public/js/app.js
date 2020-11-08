$(".custom-file input").change(function (e) {
    if (e.target.files.length) {
        $(this).next(".custom-file-label").html(e.target.files[0].name);
    }
});
