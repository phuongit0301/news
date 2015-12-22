$(document).ready(function(){
    category.run();
});

var category = {

    slug: function(title, slugTextbox) {
        title.on('keyup change', function() {
            var slug = category.removeAccent(title);
            slugTextbox.val(slug.toLowerCase());
        });
    },

    removeAccent: function(title)
    {
        var slug = title.val().toLowerCase();

        slug = slug.replace(/á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
        slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
        slug = slug.replace(/í|ì|ỉ|ĩ|ị/gi, 'i');
        slug = slug.replace(/ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|ó|ò|ỏ|õ|ọ/gi, 'o');
        slug = slug.replace(/ư|ứ|ừ|ử|ữ|ự|ú|ù|ủ|ũ|ụ/gi, 'u');
        slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
        slug = slug.replace(/đ/gi, 'd');
        //Xóa các ký t? ??c bi?t
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\:|\;|_/gi, '');
        slug = slug.replace(/\'|\"/gi, "-");
        slug = slug.replace(/ /gi, "-");
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');

        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        return slug;
    },

    setup: function() {
        var title = $('#name');
        var slugTextbox = $('#slug');
        this.slug(title, slugTextbox);
    },
    run: function() {
        // Need to setup view first
        this.setup();
        // Other initialization 
    }

}