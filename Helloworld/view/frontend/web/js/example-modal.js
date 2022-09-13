require(
    [
        'jquery',
        'Magento_Ui/js/modal/modal'
    ],
    function(
        $,
        modal
    ) {
        var options = {
            type: 'popup',
            responsive: true,
            innerScroll: true,
            modalClass: 'custom-popup-modal',
            buttons: [{
                text: $.mage.__('close'),
                class: '',
                click: function () {
                 
                   this.closeModal();
                 
                }
            }]
        };
         var popup = modal(options, $('#custom-popup-modal'));
      
        $( document).ready(function() {
            $('#custom-popup-modal').modal('openModal');
        });     
    }
);