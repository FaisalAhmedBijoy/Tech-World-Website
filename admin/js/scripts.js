ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );


$(document).ready(function(){


	$('#selectAllBoxes').click(function(event){

		if (this.checked) {
			$('.checkboxes').each(function(){
				this.checked =true ;
			});
		}
		else
		{
				$('.checkboxes').each(function(){
				this.checked =false ;
			});

		}

	});
});