$(document).ready(function(){
    feature.run();
});

var feature = {
	setup: function(){
        // name drop down child
        var selectBoxSource      = $('#athleteSource');
        var selectBoxDestination = $('#athleteDestination');
        // id button compare submit
        var btnCompare = $('#btnCompare');
        // id drop down parent
        var idSelectBox = $('#athleteSource option:selected').val();

        //this.ajaxGetDataList(selectBoxDestination, idSelectBox);
        this.renderData();
        this.checkDropDown(selectBoxSource, selectBoxDestination, btnCompare);
        this.getDataListSelected(selectBoxSource, selectBoxDestination);
        this.compareData(btnCompare);
    },
    run: function(){
        // Need to setup view first
        this.setup();
        // Other initialization 
    }

}