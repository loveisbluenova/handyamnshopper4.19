$(document).ready(function(){
		    $(".list-group-item.cat-list.changepic").click(function(){
				$('.form-changepicture input[type="file"]').click();	    
			});
		});

	    $('.form-changepicture input[type="file"]').change(function() {
	        $('.form-changepicture').submit();
	    });