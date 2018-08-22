(function ($) {
    'use strict';

    /**
     * All of the code for your admin-facing JavaScript source
     * should reside in this file.
     *
     * Note: It has been assumed you will write jQuery code here, so the
     * $ function reference has been prepared for usage within the scope
     * of this function.
     *
     * This enables you to define handlers, for when the DOM is ready:
     */
    $(function () {
        

        // Category Mapping (Auto Field Populate)
        $(".treegrid-parent").on('change keyup', function () {
            var val = $(this).val();
            var parent = $(this).attr('classval');

            $(".treegrid-parent-" + parent).val(val);
        });

        // Generate Feed Add Table Row
        $(document).on('click', '#wf_newRow', function () {
            $("#table-1 tbody tr:first").clone().find('input').val('').end().find("select:not('.wfnoempty')").val('').end().insertAfter("#table-1 tbody tr:last");

            $('.outputType').each(function (index, element) {
                //do stuff to each individually.
                $(this).attr('name', "output_type[" + index + "][]"); //sets the val to the index of the element, which, you know, is useless
            });
        });

        // XML Feed Wrapper
        $(document).on('change', '#feedType', function () {
            var type = $(this).val();
            var provider = $("#provider").val();
            console.log(type);
            console.log(provider);
            if (type == 'xml') {
                $(".itemWrapper").show();
                $(".wf_csvtxt").hide();
            } else if (type == 'csv' || type == 'txt') {
                $(".wf_csvtxt").show();
                $(".itemWrapper").hide();
            } else if (type == '') {
                $(".wf_csvtxt").hide();
                $(".itemWrapper").hide();
            }

            if (provider == 'google' || provider == 'facebook' && type != "") {
                $(".itemWrapper").hide();
            } else {
                //$(".itemWrapper").hide();
            }
        });
        

        // Tooltip only Text
        $('.wfmasterTooltip').hover(function () {
            // Hover over code
            var title = $(this).attr('wftitle');
            $(this).data('tipText', title).removeAttr('wftitle');
            $('<p class="wftooltip"></p>')
                .text(title)
                .appendTo('body')
                .fadeIn('slow');
        }, function () {
            // Hover out code
            $(this).attr('wftitle', $(this).data('tipText'));
            $('.wftooltip').remove();
        }).mousemove(function (e) {
            var mousex = e.pageX + 20; //Get X coordinates
            var mousey = e.pageY + 10; //Get Y coordinates
            $('.wftooltip')
                .css({top: mousey, left: mousex})
        });

        // Dynamic Attribute Add New Condition
        $(document).on('click', '#wf_newCon', function () {
            $("#table-1 tbody tr:first").show().clone().find('input').val('').end().insertAfter("#table-1 tbody tr:last");
            $(".fsrow:gt(5)").prop('disabled', false);
            $(".daRow:eq(0)").hide();

        });


        // Add New Condition for Filter
        $(document).on('click', '#wf_newFilter', function () {
            $("#table-filter tbody tr:eq(0)").show().clone().find('input').val('').end().find('select').val('').end().insertAfter("#table-filter tbody tr:last");
            $(".fsrow:gt(2)").prop('disabled', false);
            $(".daRow:eq(0)").hide();
        });

        // Attribute type selection
        $(document).on('change', '.attr_type', function () {
            var type = $(this).val();
            $(this).closest('tr').find('.wf_attr').prop('required',false);
            $(this).closest('tr').find('.wf_default').prop('required',false);
            if (type == 'pattern') {
                $(this).closest('tr').find('.wf_attr').hide();
                $(this).closest('tr').find('.wf_attr').val('');
                $(this).closest('tr').find('.wf_default').show();
                //$(this).closest('tr').find('.wf_default').prop('required',true);
            } else {
                //$(this).closest('tr').find('.wf_attr').prop('required',true);
                $(this).closest('tr').find('.wf_attr').show();
                $(this).closest('tr').find('.wf_default').hide();
                $(this).closest('tr').find('.wf_default').val('');
            }
        });

        // Attribute type selection for dynamic attribute
        $(document).on('change', '.dType', function () {
            var type = $(this).val();
            if (type == 'pattern') {
                $(this).closest('tr').find('.value_attribute').hide();
                $(this).closest('tr').find('.value_pattern').show();
            } else if (type == 'attribute') {
                $(this).closest('tr').find('.value_attribute').show();
                $(this).closest('tr').find('.value_pattern').hide();
            } else if (type == 'remove') {
                $(this).closest('tr').find('.value_attribute').hide();
                $(this).closest('tr').find('.value_pattern').hide();
            }
        });

        // Generate Feed Table Row Delete
        $(document).on('click', '.delRow', function (event) {
            $(this).closest('tr').remove();
        });

        //Expand output type
        $(document).on('click', '.expandType', function () {
            $('.outputType').each(function (index, element) {
                //do stuff to each individually.
                $(this).attr('name', "output_type[" + index + "][]");
            });
            $(this).closest('tr').find('.outputType').attr('multiple', 'multiple');
            $(this).closest('tr').find('.contractType').show();
            $(this).hide();
            console.log('clicked');
        });

        //Contract output type
        $(document).on('click', '.contractType', function () {
            $('.outputType').each(function (index, element) {
                //do stuff to each individually.
                $(this).attr('name', "output_type[" + index + "][]");
            });
            $(this).closest('tr').find('.outputType').removeAttr('multiple');
            $(this).closest('tr').find('.expandType').show();
            $(this).hide();
        });

        // Generate Feed Form Submit
        $(".generateFeed").validate();
        $(document).on('submit', '#generateFeed', function (event) {
            $(".makeFeedResponse").html("<b style='color: darkblue;'><i class='dashicons dashicons-sos wpf_sos'></i> Processing...</b>");
            //event.preventDefault();
            // Feed Generating form validation
            $(this).validate();
            var this2 = this;
            if ($(this).valid()) {

            }
        });
        // Update Feed Form Submit
        $(".updatefeed").validate();
        $(document).on('submit', '#updatefeed', function (event) {
            $(".makeFeedResponse").html("<b style='color: darkblue;'><i class='dashicons dashicons-sos wpf_sos'></i> Processing...</b>");
            //event.preventDefault();
            // Feed Generating form validation
            $(this).validate();
            var this2 = this;
            if ($(this).valid()) {

            }
        });
        // Get Merchant View
        $("#provider").on('change', function (event) {
            event.preventDefault();
            $("#providerPage").html("<h3>Loading...</h3>");
            var merchant = $(this).val();
            var this2 = this;                  //use in callback
            $('#feedType').trigger('change');
            $.post(wpf_ajax_obj.wpf_ajax_url, {     //POST request
                _ajax_nonce: wpf_ajax_obj.nonce, //nonce
                action: "get_feed_merchant",        //action
                merchant: merchant              //data
            }, function (data) {                //callback
                //console.log(data);          //insert server response
                $("#providerPage").html(data);

                // Select options selectization
                $('.googleTaxonomyId').selectize({
                    plugins: ['remove_button'],
                    render: {
                        item: function(data, escape) {
                            return '<div class="item webappick_selector">'+ escape(data.text) + '</div>';
                        }
                    }
                });
                //For getting Google taxonomy
                $(document).on("focus","#wf_google_taxonomy_input_modal",function(e){
                   e.preventDefault();
                    showGoogleTaxonomyInputModal(); //call modal
                    //alert("Hi");
                });
                //modal show for getting google taxonomy
                function showGoogleTaxonomyInputModal() {
                    $('#wf_google_taxonomy_modal').fadeIn(100);
                    $('#wf_google_taxonomy_modal_submit_button').on('click',function(e){
                        var taxonomy_value = $('#googleTaxonomyId').val();
                        $('#wf_google_taxonomy_input_modal').val(taxonomy_value);
                        //reset form and modal fadeout
                        $('#wf_google_taxonomy_modal').fadeOut(200);
                        $('#google_taxonomy_error_message').text('');

                        return false;
                    });
                    //cancel Taxonomy Modal
                    //-----  close google taxonomy modal
                    $('[data-popup-close]').on('click', function(e)  {
                        $('#wf_google_taxonomy_modal').fadeOut(200);
                        e.preventDefault();
                    });
                    //cancel Google taxonomy
                    $('#wf_google_taxonomy_modal_cancel_button').on('click',function(){
                        $('#wf_google_taxonomy_modal').fadeOut(200);
                        $('#wf_google_taxonomy_input_modal').text('');
                    });
                }

                // Generate Feed Table row shorting
                $('.sorted_table').sortablesd({
                    containerSelector: 'table',
                    itemPath: '> tbody',
                    itemSelector: 'tr',
                    placeholder: '<tr class="placeholder"/>',
                    // set $item relative to cursor position
                    onDragStart: function ($item, container, _super, event) {
                        $item.css({
                            height: $item.outerHeight(),
                            width: $item.outerWidth()
                        });
                        $item.addClass(container.group.options.draggedClass);
                        $("body").addClass(container.group.options.bodyClass);
                    },
                    onDrag: function ($item, position, _super, event) {
                        $item.css(position)
                    },
                    onMousedown: function ($item, _super, event) {
                        console.log(event);
                        if (!event.target.nodeName.match(/^(input|select|textarea|option)$/i) && event.target.classList[0] != 'delRow' && event.target.classList[2] != 'expandType' && event.target.classList[0] != 'delRow' && event.target.classList[2] != 'expandType' && event.target.classList[2] != 'contractType') {
                            event.preventDefault();
                            return true
                        }
                    }
                });
            });
        });

        //-------------Serialization and modal edit  without ajax call------------
        $('.googleTaxonomyId').selectize({
            plugins: ['remove_button'],
            render: {
                item: function(data, escape) {
                    return '<div class="item webappick_selector">'+ escape(data.text) + '</div>';
                }
            }
        });
        //For getting Google taxonomy edit
        $(".wf_google_taxonomy_input_modal_edit").on("focus",function(e){
            e.preventDefault();
            showGoogleTaxonomyInputModal(); //call modal
        });
        //modal show for getting google taxonomy
        function showGoogleTaxonomyInputModal() {
            $('#wf_google_taxonomy_modal_edit').fadeIn(100);
            $('#wf_google_taxonomy_modal_submit_button_edit').on('click',function(e){
                var taxonomy_value = $('#googleTaxonomyIdEdit').val();
                //console.log('okkss'+ taxonomy_value);
                $('.wf_google_taxonomy_input_modal_edit').val(taxonomy_value);
                //reset form and modal fadeout
                $('#wf_google_taxonomy_modal_edit').fadeOut(200);
                return false;
            });
            //cancel Taxonomy Modal
            //-----  close google taxonomy modal
            $('#wf_google_taxonomy_modal_popup_close').on('click', function(e)  {
                $('#wf_google_taxonomy_modal_edit').fadeOut(200);
                e.preventDefault();
            });
            //cancel Google taxonomy
            $('#wf_google_taxonomy_modal_cancel_button_edit').on('click',function(){
                $('#wf_google_taxonomy_modal_edit').fadeOut(200);
                $('#wf_google_taxonomy_input_modal_edit').text('');
            });
        }
//--------end serialization and modal edit without ajax call---------

        // Initialize Table Sorting
        $('.sorted_table').sortablesd({
            containerSelector: 'table',
            itemPath: '> tbody',
            itemSelector: 'tr',
            placeholder: '<tr class="placeholder"/>',
            // set $item relative to cursor position
            onDragStart: function ($item, container, _super, event) {
                $item.css({
                    height: $item.outerHeight(),
                    width: $item.outerWidth()
                });
                $item.addClass(container.group.options.draggedClass);
                $("body").addClass(container.group.options.bodyClass);
            },
            onDrag: function ($item, position, _super, event) {
                $item.css(position)
            },
            onMousedown: function ($item, _super, event) {
                console.log(event);
                if (!event.target.nodeName.match(/^(input|select|textarea|option)$/i) && event.target.classList[0] != 'delRow' && event.target.classList[2] != 'expandType' && event.target.classList[2] != 'contractType') {
                    event.preventDefault();
                    return true
                }
            }
        });

        // Feed Active and Inactive status change via ajax
        $('.woo_feed_status_input').on('change',function(){
            var  counter;
            var  $feedName = $(this).val();
            if($(this)[0].checked){
                counter = 1;
            }else {
                counter = 0;
            }
            $.post(wpf_ajax_obj.wpf_ajax_url, {     //POST request
                _ajax_nonce: wpf_ajax_obj.nonce, //nonce
                action: "update_feed_status",        //action
                feedName: $feedName,
                status: counter
            }, function (data) {                //callback
            });
        });

    });

    /** When the window is loaded: */

    $(window).load(function () {

    });
    /**
     * ...and/or other possibilities.
     *
     * Ideally, it is not considered best practise to attach more than a
     * single DOM-ready or window-load handler for a particular page.
     * Although scripts in the WordPress core, Plugins and Themes may be
     * practising this, we should strive to set a better example in our own work.
     */

})(jQuery);

// Plugin deactivation pop up
(function($) {
    $(function() {
        var modal = $( '#wpf_deactive_plugin-modal' );
        var deactivateLink = '';

        $( '#the-list' ).on('click', 'a.wpf-deactivate-link', function(e) {
            e.preventDefault();
            modal.addClass('modal-active');
            deactivateLink = $(this).attr('href');
            modal.find('a.dont-bother-me').attr('href', deactivateLink).css('float', 'left');
        });

        modal.on('click', 'button.button-primary', function(e) {
            e.preventDefault();

            modal.removeClass('modal-active');
        });

        modal.on('click', 'input[type="radio"]', function () {
            var parent = $(this).parents('li:first');

            modal.find('.reason-input').remove();

            var inputType = parent.data('type'),
                inputPlaceholder = parent.data('placeholder'),
                reasonInputHtml = '<div class="reason-input">' + ( ( 'text' === inputType ) ? '<input type="text" size="40" />' : '<textarea rows="5" cols="45"></textarea>' ) + '</div>';

            if ( inputType !== '' ) {
                parent.append( $(reasonInputHtml) );
                parent.find('input, textarea').attr('placeholder', inputPlaceholder).focus();
            }
        });

        modal.on('click', 'button.button-secondary', function(e) {
            e.preventDefault();

            var button = $(this);

            if ( button.hasClass('disabled') ) {
                return;
            }

            var $radio = $( 'input[type="radio"]:checked', modal );

            var $selected_reason = $radio.parents('li:first'),
                $input = $selected_reason.find('textarea, input[type="text"]');

            $.ajax({
                url: ajaxurl,
                type: 'POST',
                data: {
                    action: 'submit-uninstall-reason',
                    reason_id: ( 0 === $radio.length ) ? 'none' : $radio.val(),
                    reason_info: ( 0 !== $input.length ) ? $input.val().trim() : ''
                },
                beforeSend: function() {
                    button.addClass('disabled');
                    button.text('Processing...');
                },
                complete: function(data) {
                    // console.log(data);
                    window.location.href = deactivateLink;
                },error:function(data){
                    // console.log(data);
                }
            });
        });
    });
}(jQuery));




