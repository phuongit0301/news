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
        var slug = title.val();
        //??i ký t? có d?u thành không d?u
        slug = slug.replace(/á|à|?|?|ã|?|?|?|?|?|?|â|?|?|?|?|?/gi, 'a');
        slug = slug.replace(/é|è|?|?|?|ê|?|?|?|?|?/gi, 'e');
        slug = slug.replace(/i|í|ì|?|?|?/gi, 'i');
        slug = slug.replace(/ó|ò|?|õ|?|ô|?|?|?|?|?|?|?|?|?|?|?/gi, 'o');
        slug = slug.replace(/ú|ù|?|?|?|?|?|?|?|?|?/gi, 'u');
        slug = slug.replace(/ý|?|?|?|?/gi, 'y');
        slug = slug.replace(/?/gi, 'd');
        //Xóa các ký t? ??t bi?t
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //??i kho?ng tr?ng thành ký t? g?ch ngang
        slug = slug.replace(/ /gi, " - ");
        //??i nhi?u ký t? g?ch ngang liên ti?p thành 1 ký t? g?ch ngang
        //Phòng tr??ng h?p ng??i nh?p vào quá nhi?u ký t? tr?ng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //Xóa các ký t? g?ch ngang ? ??u và cu?i
        slug = '@' + slug + '@';
        slug = slug.replace(/\@\-|\-\@|\@/gi, '');
        return $slug;
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