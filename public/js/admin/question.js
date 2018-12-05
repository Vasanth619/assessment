 $('.summernote').summernote({
       	    placeholder: 'write here...',
		      toolbar: [
		    
		    ['para', ['style', 'ul', 'ol', 'paragraph']],
		    ['fontsize', ['fontsize']],
		    ['style', ['bold', 'italic', 'underline', 'clear']],
		    ['font', ['strikethrough', 'superscript', 'subscript']],
		    ['height', ['height']],
		    ['insert', ['link', 'picture', 'hr']],
		    ['misc', ['table','undo', 'redo', 'print', 'help', 'fullscreen']]
		  ],
      });
    //get sub category  
	$(function() {
		

		$('body').on('click', '.add_newchoice', function() {

			if(($('.question_choice').length) <= 5) {

				$('.right_choice').addClass('question_choice');
				var template = $('#choice_template').clone();
				    template.removeAttr('id');
				    template.find('.right_choice').val("");
				$('#append_template').before(template.removeAttr('style'));
				var i = 0;
				$('.correct_answer').each(function() {
					$(this).val(i++);
				});
			}
		});

		$('body').on('click', '.remove_choice', function() {
			var template = $(this).parents('.choiceTemplate');
			template.remove();
			var i = 0;
			$('.correct_answer').each(function() {
				$(this).val(i++);
			});
		});

	});

	function error_msg(error, errorText, msg){
		$('#' + errorText).empty();
		$('#' + errorText).text(msg);
		$('#' + error).show();

		setTimeout(function() {
			$('.alert-danger').hide();
		}, 3000);
	}



    //submit question
    $('body').on('click', '#submit_question', function() {
    	//validate main category
    	 if($('#main_category').val() == "") {   	 	
    	 	error_msg("error_category", "error_category_text", "Select category");
    	 	return;
    	 }
    	 else{
    	 	$('#show_error').hide();
    	 }
    	 //validate subcategory
    	 if($('#question_subcategory').val() == "") {   	 	
    	 	error_msg("error_category", "error_category_text", "Select subcategory");
    	 	return;
    	 }
    	 else {
    	 	$('#show_error').hide();
    	 }
    	 //validate question
    	 if($('#question_name').val() == "") {
    	 	error_msg("error_question", "error_question_text", "Please enter question");
    	 	return;
    	 }
         //validate choices
         var choice = [];
          $('.question_choice').each(function() {
          	 if($(this).val() == ""){
          	   error_msg("error_question", "error_question_text", "Choices should not empty");
    	 	   return;
          	 }
          	 choice.push($(this).val());
          });
          //validate correct answer
          if(document.querySelector('input[name="correct_answer"]:checked') == null) {
              error_msg("error_question", "error_question_text", "Please select correct answer");
              return;
            }

            $.ajax({
            	url: $('form').attr('action'),
            	method: 'post',
            	data: {
            		'_token': $('input[name="_token"]').val(),
            		'question_category': $('#main_category').val(),
            		'question_subcategory': $('#question_subcategory').val(),
            		'question_name': $('#question_name').val(),
            		'answer': document.querySelector('input[name="correct_answer"]:checked').value,
            		'question_choice': choice,
            		'question_status': $('#question_status').val(),
            	},
            	dataType: 'json',
            	success: function() {

            	}
            });
    });