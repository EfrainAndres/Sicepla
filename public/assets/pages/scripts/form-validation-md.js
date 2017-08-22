/**
 * Created by migue on 24/05/2017.
 */
var FormValidationMd = function() {

    var handleValidation = function(form, rules, messages) {

        var error = $('.alert-danger', form);
        var success = $('.alert-success', form);

        form.validate({
            errorElement: 'span',
            errorClass: 'help-block help-block-error',
            focusInvalid: false,
            ignore: "",
            messages: messages,
            rules: rules,

            invalidHandler: function(event, validator) {
                success.hide();
                error.show();
                App.scrollTo(error, -200);
            },

            errorPlacement: function(error, element) {
                if (element.is(':checkbox')) {
                    error.insertAfter(element.closest(".md-checkbox-list, .md-checkbox-inline, .checkbox-list, .checkbox-inline"));
                } else if (element.is(':radio')) {
                    error.insertAfter(element.closest(".md-radio-list, .md-radio-inline, .radio-list,.radio-inline"));
                } else {
                    error.insertAfter(element);
                }
            },

            highlight: function(element) {
                $(element)
                    .closest('.form-group').addClass('has-error'); // set error class to the control group
            },

            unhighlight: function(element) { // revert the change done by hightlight
                $(element)
                    .closest('.form-group').removeClass('has-error'); // set error class to the control group
            },

            success: function(label) {
                label
                    .closest('.form-group').removeClass('has-error'); // set success class to the control group
            },

            submitHandler: function(form) {
                //success.show();
                //error.hide();
                form.submit();
            }
        });
    };


    return {
        init: function(form, rules, messages) {
            handleValidation(form, rules, messages);
        }
    };
}();

var ComponentsBootstrapMaxlength = function () {

    var handleBootstrapMaxlength = function() {
        $('input[maxlength], textarea[maxlength]').maxlength({
            limitReachedClass: "label label-danger",
            alwaysShow: true,
        });
    };

    return {
        //main function to initiate the module
        init: function () {
            handleBootstrapMaxlength();
        }
    };

}();

jQuery(document).ready(function() {
    ComponentsBootstrapMaxlength.init();
});