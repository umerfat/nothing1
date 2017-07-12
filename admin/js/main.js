$(document).ready(function () {

    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
    }, 2000);

    $(".delete_post_link").on('click', function () {

        var user_id = $(this).attr('rel');
        var delete_user_url = "users.php?delete="+ user_id +"";
        $(".modal_delete_link").attr("href", delete_user_url);
    });

    $(".delete_user").on('click', function () {

        var user_id = $(this).attr('rel');
        var delete_user_url = "users.php?delete="+ user_id +"";
        $(".modal_delete_link").attr("href", delete_user_url);
    });

    $(function() {
        $('textarea').froalaEditor({
            toolbarButtons: ['fullscreen', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', '|', 'fontFamily', 'fontSize', 'color', 'inlineStyle', 'paragraphStyle', '|', 'paragraphFormat', 'align', 'formatOL', 'formatUL', 'outdent', 'indent', 'quote', '-', 'insertLink', 'insertImage', 'insertVideo', 'insertFile', 'insertTable', '|', 'emoticons', 'specialCharacters', 'insertHR', 'selectAll', 'clearFormatting', '|', 'print', 'help', 'html', '|', 'undo', 'redo'],
            pluginsEnabled: null
        })
    });

    var showChar = 20;
    var ellipsestext = "...";
    var moretext = "more";
    var lesstext = "less";
    $('.more').each(function() {
        var content = $(this).html();

        if(content.length > showChar) {

            var c = content.substr(0, showChar);
            var h = content.substr(showChar-1, content.length - showChar);

            var html = c + '<span class="moreelipses">'+ellipsestext+'</span>&nbsp;<span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">'+moretext+'</a></span>';

            $(this).html(html);
        }

    });

    $(".morelink").click(function(){
        if($(this).hasClass("less")) {
            $(this).removeClass("less");
            $(this).html(moretext);
        } else {
            $(this).addClass("less");
            $(this).html(lesstext);
        }
        $(this).parent().prev().toggle();
        $(this).prev().toggle();
        return false;
    });

    $('#selectAllBoxes').click(function (event) {
        if (this.checked){
            $('.checkBoxes').each(function () {
                this.checked = true;
            });
        }
        else {
            $('.checkBoxes').each(function () {
                this.checked = false;
            });
        }
    });
    $("#tags").append(" ");
});