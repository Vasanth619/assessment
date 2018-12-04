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
			var template = $('#choice_template').clone();
			    template.removeAttr('id');
			$('#append_template').before(template.removeAttr('style'));
			var i = 0;
			$('.correct_answer').each(function() {
				$(this).val(i++);
			});
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
        
    });
    

