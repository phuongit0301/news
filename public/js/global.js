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
        //??i k� t? c� d?u th�nh kh�ng d?u
        slug = slug.replace(/�|�|?|?|�|?|?|?|?|?|?|�|?|?|?|?|?/gi, 'a');
        slug = slug.replace(/�|�|?|?|?|�|?|?|?|?|?/gi, 'e');
        slug = slug.replace(/i|�|�|?|?|?/gi, 'i');
        slug = slug.replace(/�|�|?|�|?|�|?|?|?|?|?|?|?|?|?|?|?/gi, 'o');
        slug = slug.replace(/�|�|?|?|?|?|?|?|?|?|?/gi, 'u');
        slug = slug.replace(/�|?|?|?|?/gi, 'y');
        slug = slug.replace(/?/gi, 'd');
        //X�a c�c k� t? ??t bi?t
        slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
        //??i kho?ng tr?ng th�nh k� t? g?ch ngang
        slug = slug.replace(/ /gi, " - ");
        //??i nhi?u k� t? g?ch ngang li�n ti?p th�nh 1 k� t? g?ch ngang
        //Ph�ng tr??ng h?p ng??i nh?p v�o qu� nhi?u k� t? tr?ng
        slug = slug.replace(/\-\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-\-/gi, '-');
        slug = slug.replace(/\-\-\-/gi, '-');
        slug = slug.replace(/\-\-/gi, '-');
        //X�a c�c k� t? g?ch ngang ? ??u v� cu?i
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