/**
 * nightstomp medialist sorter functions
**/
jQuery.fn.sort_select_box = function(){
    // Get options from select box
    var my_options = jQuery("#" + this.attr('id') + ' option');
    // sort alphabetically
    my_options.sort(function(a,b) {
        if (a.text > b.text) return 1;
        else if (a.text < b.text) return -1;
        else return 0
    })
   //replace with sorted my_options;
   jQuery(this).empty().append( my_options );
   // clearing any selections
   jQuery("#"+this.attr('id')+" option").attr('selected', false);
}

jQuery(document).ready(function(){
  jQuery('.rex-widget-medialist').each(function(){
    jQuery(this).find('.rex-widget-column')
    .eq(1)
    .append('<a title="Liste nach Dateiname sortieren" class="rex-icon-sortmedialist medialist_sort_by_name" href="#"></a>');
  });
  
  jQuery('.medialist_sort_by_name').live('click', function(event){
    event.preventDefault();
    var selectObject = jQuery(this).closest('.rex-widget').find('select');
    jQuery(selectObject).sort_select_box();
    selectObject.find('option').eq(0).attr('selected', 'selected');
    // call a fake move to reinitalize the order
    moveREXMedialist(1,'top');
  });
});