<script>
// JavaScript Document
$(document).ready(function() {
   var delay = 2000;
   $('#contactseytoo').click(function(e){
   e.preventDefault();
   var nom = $('#contactnom').val();
   if(nom == ''){
   $('.message_box').html('<div class="alertred" style="width:100%; display:inline-flex; justify-content: center; align-items:top; padding:10px;"><div style="width:85%; text-align:left;">Veuillez saisir votre nom.</div><div style="width:15%;"><span onclick="myFunction()" style="float:right; font-weight:bold; font-size:20px; padding-right:15px; cursor:pointer;">x</span></div></div>');
   $('#contactnom').focus();
   return false;
   }
   
   var email = $('#contactemail').val();
   if(email == ''){
   $('.message_box').html('<div class="alertred" style="width:100%; display:inline-flex; justify-content: center; align-items:top; padding:10px;"><div style="width:85%; text-align:left;">Veuillez saisir votre email.</div><div style="width:15%;"><span onclick="myFunction()" style="float:right; font-weight:bold; font-size:20px; padding-right:15px; cursor:pointer;">x</span></div></div>');
   $('#contactemail').focus();
   return false;
   }
   if( $("#contactemail").val()!='' ){
   if( !isValidEmailAddress( $("#contactemail").val() ) ){
   $('.message_box').html('<div class="alertred" style="width:100%; display:inline-flex; justify-content: center; align-items:top; padding:10px;"><div style="width:85%; text-align:left;">Veuillez saisir une adresse email valide.</div><div style="width:15%;"><span onclick="myFunction()" style="float:right; font-weight:bold; font-size:20px; padding-right:15px; cursor:pointer;">x</span></div></div>');
   $('#contactemail').focus();
   return false;
   }
   }
   
   var message = $('#contactmessage').val();
   if(message == ''){
   $('.message_box').html('<div class="alertred" style="width:100%; display:inline-flex; justify-content: center; align-items:top; padding:10px;"><div style="width:85%; text-align:left;">Veuillez saisir votre message.</div><div style="width:15%;"><span onclick="myFunction()" style="float:right; font-weight:bold; font-size:20px; padding-right:15px; cursor:pointer;">x</span></div></div>');
   $('#contactmessage').focus();
   return false;
   }
   
   
   $.ajax
   ({
   type: "POST",
   url: "contact2.php",
   data: "nom="+nom+"&email="+email+"&message="+message,
   beforeSend: function() {
   $('.message_box').html(
   '<div id="loader"><div></div></div>'
   );
   }, 
   success: function(data)
   {
   setTimeout(function() {
   $('.message_box').html(data);
   $( '#contactform' ).each(function(){
   this.reset();
   });
   }, delay);
   }
   });
   });
 
});
</script>
<div style="text-align:center; padding:10px;"><h1><h3><span>Contacter Seytoo</span></h3></h1></div>
<form id="contactform" name="contactPubArticles" method="post" action="" class="body">
            <table width="100%" cellpadding="5" align="center">
              <tr>
                <td align="left"><span style="font-size:5px;"><br />
                  </span>
                    <div class="input-field">
                      <input class="input-form" name="contactnom"  id="contactnom" type="text"  style="width:100%;" onkeydown="limitText(this,20);" onkeyup="limitText(this,20);" value="" required="required" />
                      <label for="contactnom"><span class="labelspam">Saisissez votre nom</span></label>
                    </div></td>
              </tr>
              <tr>
                <td align="left"><div class="input-field">
                  <input class="input-form" name="contactemail" id="contactemail" type="email" style="width:100%;" onkeydown="limitText(this,20);" onkeyup="limitText(this,20);" value=""  required="required" />
                  <label for="contactemail"><span class="labelspam">Saisissez votre email</span></label>
                </div></td>
              </tr>
              <tr>
                <td align="left"><span style="font-size:5px;"><br />
                  </span>
                    <div class="input-field">
                      <textarea class="input-form" name="contactmessage" id="contactmessage" style="width:100%;" required="required" /></textarea>
                      </textarea>
                      <label for="contactmessage"><span class="labelspam">Saisissez votre message...</span></label>
                    </div></td>
              </tr>
              <tr>
                <td align="left"><button id="contactseytoo" type="submit" class="btn btn-default" style="cursor:pointer; width:100%;">J'envoie mon message</button>
                    <span style="font-size:5px;"><br />
                    </span></td>
              </tr>
              <tr>
                <td></div></td>
              </tr>
            </table>
        </form>