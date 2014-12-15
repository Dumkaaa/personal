
; /* Start:/bitrix/components/api/main.feedback/js/_fn.js*/
/**
 * Created by Tuning-Soft on 16.02.2014
 */
$(function(){

    // значение по умолчанию
    var defaults = { color:'#FB4D4D' };

    // актуальные настройки, глобальные
    var options;

    $.fn.validateMainFeedback = function(params){
        // при многократном вызове функции настройки будут сохранятся, и замещаться при необходимости
        options = $.extend({}, defaults, options, params);
        //console.log(this); // jQuery
        //console.log(this.length); // число элементов

        var formObj = this;
        var error = false;
        var ts_field = '[class*="ts-field-"]';
        var ts_field_error = '<span class="ts-field-error"></span>';
        var ts_field_saccess = '<span class="ts-field-saccess"></span>';
        var input_required = 'input.required';

        //Проверка отправки формы
        $(formObj).find(':submit').click(function(e){

            //input[type="text"]
            $(formObj).find(input_required).each(function(){

                if( $(this).val() == '')
                {
                    $(this).next(ts_field).remove();
                    $(this).after(ts_field_error);
                    error = true;
                }
                else
                {
                    $(this).next(ts_field).remove();
                    $(this).after(ts_field_saccess);
                    error = false;
                }


                if(error)
                    e.preventDefault();
            });
            //Проверка при изменении полей
            $(formObj).find('input.required').on('keyup change', function(e){
                if($(this).val() != '')
                {
                    $(this).next(ts_field).remove();
                    $(this).after(ts_field_saccess);
                    error = false;
                }
                else
                {
                    $(this).next(ts_field).remove();
                    $(this).after(ts_field_error);
                    error = true;
                }

                if(error)
                    e.preventDefault();
            });
            //\\input[type="text"]

            //textarea
            $(formObj).find('textarea.required').each(function(){
                if($(this).val() == '')
                {
                    //css('border-color', options.color)
                    $(this).parent().find(ts_field).remove();
                    $(this).after(ts_field_error);
                    error = true;
                }
                else
                {
                    $(this).parent().find(ts_field).remove();
                    $(this).after(ts_field_saccess);
                    error = false;
                }

                if(error)
                    e.preventDefault();

            });
            //Проверка при изменении полей
            $(formObj).find('textarea.required').on('keyup click change',function(e){
                if($(this).val() != '')
                {
                    $(this).parent().find(ts_field).remove();
                    $(this).after(ts_field_saccess);
                    error = false;
                }
                else
                {
                    $(this).parent().find(ts_field).remove();
                    $(this).after(ts_field_error);
                    error = true;
                }

                if(error)
                    e.preventDefault();
            });
            //\\textarea

            //select
            $(formObj).find('select.required').each(function(){
                if($(this).find('option:selected').length == 0)
                {
                    //css('border-color', options.color)
                    $(this).parent().find(ts_field).remove();
                    $(this).after(ts_field_error);
                    error = true;
                }
                else
                {
                    $(this).parent().find(ts_field).remove();
                    $(this).after(ts_field_saccess);
                    error = false;
                }

                if(error)
                    e.preventDefault();

            });
            //Проверка при изменении полей
            $(formObj).find('select.required').change(function(e){
                if($(this).find('option:selected').length)
                {
                    $(this).parent().find(ts_field).remove();
                    $(this).after(ts_field_saccess);
                    error = false;
                }
                else
                {
                    $(this).parent().find(ts_field).remove();
                    $(this).after(ts_field_error);
                    error = true;
                }

                if(error)
                    e.preventDefault();
            });
            //\\select


            ////////////////////////////////////////////////////////////
            //                          v1.2.9                       //
            ///////////////////////////////////////////////////////////

            //input[type="checkbox"]
            $(formObj).find('.option-qroup.required').each(function(){

                if( !$(this).find('input:checked').length)
                {
                    $(this).parent().find(ts_field).remove();
                    $(this).after(ts_field_error);
                    error = true;
                }
                else
                {
                    $(this).parent().find(ts_field).remove();
                    $(this).after(ts_field_saccess);
                    error = false;
                }


                if(error)
                    e.preventDefault();
            });
            //Проверка при изменении полей
            $(formObj).find('.option-qroup.required').on('keyup change', function(e){
                if($(this).find('input:checked').length)
                {
                    $(this).parent().find(ts_field).remove();
                    $(this).after(ts_field_saccess);
                    error = false;
                }
                else
                {
                    $(this).parent().find(ts_field).remove();
                    $(this).after(ts_field_error);
                    error = true;
                }

                if(error)
                    e.preventDefault();
            });
            //\\input[type="checkbox"]


        });

        //$(this).click(function(){
          //  $(this).css('color', options.color);
        //});

        return this;
    };

});
/* End */
;
; /* Start:/bitrix/components/api/main.feedback/js/jquery.placeholder.js*/
/*! http://mths.be/placeholder v2.0.8 by @mathias */
;(function(window, document, $) {

	// Opera Mini v7 doesn’t support placeholder although its DOM seems to indicate so
	var isOperaMini = Object.prototype.toString.call(window.operamini) == '[object OperaMini]';
	var isInputSupported = 'placeholder' in document.createElement('input') && !isOperaMini;
	var isTextareaSupported = 'placeholder' in document.createElement('textarea') && !isOperaMini;
	var prototype = $.fn;
	var valHooks = $.valHooks;
	var propHooks = $.propHooks;
	var hooks;
	var placeholder;

	if (isInputSupported && isTextareaSupported) {

		placeholder = prototype.placeholder = function() {
			return this;
		};

		placeholder.input = placeholder.textarea = true;

	} else {

		placeholder = prototype.placeholder = function() {
			var $this = this;
			$this
				.filter((isInputSupported ? 'textarea' : ':input') + '[placeholder]')
				.not('.placeholder')
				.bind({
					'focus.placeholder': clearPlaceholder,
					'blur.placeholder': setPlaceholder
				})
				.data('placeholder-enabled', true)
				.trigger('blur.placeholder');
			return $this;
		};

		placeholder.input = isInputSupported;
		placeholder.textarea = isTextareaSupported;

		hooks = {
			'get': function(element) {
				var $element = $(element);

				var $passwordInput = $element.data('placeholder-password');
				if ($passwordInput) {
					return $passwordInput[0].value;
				}

				return $element.data('placeholder-enabled') && $element.hasClass('placeholder') ? '' : element.value;
			},
			'set': function(element, value) {
				var $element = $(element);

				var $passwordInput = $element.data('placeholder-password');
				if ($passwordInput) {
					return $passwordInput[0].value = value;
				}

				if (!$element.data('placeholder-enabled')) {
					return element.value = value;
				}
				if (value == '') {
					element.value = value;
					// Issue #56: Setting the placeholder causes problems if the element continues to have focus.
					if (element != safeActiveElement()) {
						// We can't use `triggerHandler` here because of dummy text/password inputs :(
						setPlaceholder.call(element);
					}
				} else if ($element.hasClass('placeholder')) {
					clearPlaceholder.call(element, true, value) || (element.value = value);
				} else {
					element.value = value;
				}
				// `set` can not return `undefined`; see http://jsapi.info/jquery/1.7.1/val#L2363
				return $element;
			}
		};

		if (!isInputSupported) {
			valHooks.input = hooks;
			propHooks.value = hooks;
		}
		if (!isTextareaSupported) {
			valHooks.textarea = hooks;
			propHooks.value = hooks;
		}

		$(function() {
			// Look for forms
			$(document).delegate('form', 'submit.placeholder', function() {
				// Clear the placeholder values so they don't get submitted
				var $inputs = $('.placeholder', this).each(clearPlaceholder);
				setTimeout(function() {
					$inputs.each(setPlaceholder);
				}, 10);
			});
		});

		// Clear placeholder values upon page reload
		$(window).bind('beforeunload.placeholder', function() {
			$('.placeholder').each(function() {
				this.value = '';
			});
		});

	}

	function args(elem) {
		// Return an object of element attributes
		var newAttrs = {};
		var rinlinejQuery = /^jQuery\d+$/;
		$.each(elem.attributes, function(i, attr) {
			if (attr.specified && !rinlinejQuery.test(attr.name)) {
				newAttrs[attr.name] = attr.value;
			}
		});
		return newAttrs;
	}

	function clearPlaceholder(event, value) {
		var input = this;
		var $input = $(input);
		if (input.value == $input.attr('placeholder') && $input.hasClass('placeholder')) {
			if ($input.data('placeholder-password')) {
				$input = $input.hide().next().show().attr('id', $input.removeAttr('id').data('placeholder-id'));
				// If `clearPlaceholder` was called from `$.valHooks.input.set`
				if (event === true) {
					return $input[0].value = value;
				}
				$input.focus();
			} else {
				input.value = '';
				$input.removeClass('placeholder');
				input == safeActiveElement() && input.select();
			}
		}
	}

	function setPlaceholder() {
		var $replacement;
		var input = this;
		var $input = $(input);
		var id = this.id;
		if (input.value == '') {
			if (input.type == 'password') {
				if (!$input.data('placeholder-textinput')) {
					try {
						$replacement = $input.clone().attr({ 'type': 'text' });
					} catch(e) {
						$replacement = $('<input>').attr($.extend(args(this), { 'type': 'text' }));
					}
					$replacement
						.removeAttr('name')
						.data({
							'placeholder-password': $input,
							'placeholder-id': id
						})
						.bind('focus.placeholder', clearPlaceholder);
					$input
						.data({
							'placeholder-textinput': $replacement,
							'placeholder-id': id
						})
						.before($replacement);
				}
				$input = $input.removeAttr('id').hide().prev().attr('id', id).show();
				// Note: `$input[0] != input` now!
			}
			$input.addClass('placeholder');
			$input[0].value = $input.attr('placeholder');
		} else {
			$input.removeClass('placeholder');
		}
	}

	function safeActiveElement() {
		// Avoid IE9 `document.activeElement` of death
		// https://github.com/mathiasbynens/jquery-placeholder/pull/99
		try {
			return document.activeElement;
		} catch (exception) {}
	}

}(this, document, jQuery));

$(function(){
    $('input, textarea').placeholder();
});
/* End */
;; /* /bitrix/components/api/main.feedback/js/_fn.js*/
; /* /bitrix/components/api/main.feedback/js/jquery.placeholder.js*/
