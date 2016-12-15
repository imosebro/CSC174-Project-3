<?php include"inc/header.inc" ?>

<?php include"inc/nav.inc" ?>


      <script type="text/javascript">
           <!--
      // Form validation code will come here.
      function validate()
      {
      
         if( document.myForm.name.value == "" )
         {
            alert( "Please provide your name!" );
            document.myForm.name.focus() ;
            return false;
         }
         
         if( document.myForm.tele.value == "" )
         {
            alert( "Please provide your Email!" );
            document.myForm.tele.focus() ;
            return false;
         }

         if( document.myForm.mess.value == "" )
         {
            alert( "Please provide a Message!" );
            document.myForm.mess.focus() ;
            return false;
         }

         var emailID = document.myForm.email.value;
         atpos = emailID.indexOf("@");
         dotpos = emailID.lastIndexOf(".");
         
         if (atpos < 1 || ( dotpos - atpos < 2 )) 
         {
            alert("Please enter correct email ID");
            document.myForm.email.focus() ;
            return false;
         }
         return( true );
      }
   //-->
      </script>


<div class="container formArea">

<form  name="myForm" onsubmit="return validate()" method="post" action="database-write.php">

	<div>
		<label for="name">Name:</label>
			<input name="name" id="name">
			<br><br>
	</div>
	<div>
		<label for="email">Email:</label>
			<input name="email" id="email">
			<br><br>
	</div>
	<div>
		<label for="tele">Telephone:</label>
			<input name="tele" id="tele">
			<br><br>
	</div>

	<div>
		<label for="mess">Message:</label>
			<textarea name="mess" id="mess"></textarea>
			<br><br>
	</div>

		<input type="submit" name="submit" id="submit" value="submit">

	</form>

</div>

<?php include"inc/footer.inc" ?>