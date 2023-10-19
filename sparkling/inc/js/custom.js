;var wp_custom;

(function($) {
	'use strict';

	wp_custom = {

		init: function() {
			this.uploadfileRequire();
			this.readMoreButtonForConsultantExperience();
			this.readMoreKeySkillsTools();
            this.addButtonPost();
		},
        addButtonPost:function(){
        	window.addEventListener('load', function() {
                    var h3Element = document.querySelector('.single-post main.page.page--post .post__content h3.has-text-align-center');
                if (h3Element) {
                    var divElement = document.createElement('div');
                    divElement.className = 'block-post-button';
                    var aElement = document.createElement('a');
                    aElement.setAttribute('class', 'button-post-h3');
                    aElement.textContent = 'Start Selection';
                    aElement.setAttribute('href', '/#contact'); // Установите атрибут href
                    h3Element.parentNode.insertBefore(divElement, h3Element.nextSibling);
                    divElement.appendChild(aElement);
                }
            });
        },
		uploadfileRequire: function() {
            const form = document.querySelector('form'),
                  span = document.createElement("span"),
                  text = document.createTextNode("The field is required."),
                  file = document.getElementById('upload');
                  
            // Проверка наличия элемента с id "upload"
            if (!file) {
                console.log("Element with id 'upload' not found.");
                return;
            }
        
            form.addEventListener('submit', (e) => {
                if ((file.value === '') && (file.hasAttribute('aria-required'))) {
                    e.preventDefault();
                    const parent = file.parentNode;
                    if (parent) {
                        parent.insertBefore(span, file);
                        span.appendChild(text);
                    }
                } else {
                    e.preventDefault();
                    const parent = file.parentNode;
                    if (parent) {
                        parent.insertBefore(span, file);
                        $('.file .custom_file span.wpcf7-form-control-wrap span').empty();
                    }
                }
            });
        },
		readMoreButtonForConsultantExperience:function(){
			window.onload = function() {
				var readMoreButtons = document.querySelectorAll('.read-more');
			    readMoreButtons.forEach(function(button) {
			        button.addEventListener('click', function() {
			            var shortDescription = this.parentElement.querySelector('.short-description');
			            var fullDescription = this.parentElement.querySelector('.full-description');

			            if (shortDescription && fullDescription) {
			                shortDescription.style.display = 'none';
			                fullDescription.style.display = 'inline';
			                this.style.display = 'none'; // Скрыть кнопку после раскрытия текста
			            }
			        });
			    });
			};
		},
		readMoreKeySkillsTools:function(){
            window.addEventListener('load', function() {
                const readMoreButton = document.querySelector('.read-more-button');
                const hiddenItems = document.querySelector('.hidden-items');
        
                if (readMoreButton) {
                    readMoreButton.addEventListener('click', function() {
                        hiddenItems.style.display = 'block';
                        readMoreButton.style.display = 'none';
                    });
                }
            });
        },

	};

	$(document).ready(function(){
		wp_custom.init();
	})

}(jQuery));