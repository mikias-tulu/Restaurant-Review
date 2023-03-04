function validateUserName(){
	let patt=/[0-9]+/;
	if( document.myForm.u_name.value == "" )
         {
            alert( "Please provide your name!" );
            document.myForm.u_name.focus() ;
            return false;
         }
       if( document.myForm.u_name.value.length<2 )
         {
            alert( " name cannot be less 6!" );
            document.myForm.u_name.focus() ;
            return false;
         }
    if( document.myForm.userName.value.match(patt) )
         {
            alert( " name cannot contain a number!" );
            document.myForm.u_name.focus() ;
            return false;
         }
	return true;	 
	}

