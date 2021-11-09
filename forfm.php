<html>
<head>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>


</head>

<body>





<form align="center">
<h2>Form</h2>

Name: <input type="text" name="name"><br><br>
E-mail: <input type="text" name="email"><br>

<label for="start"><br>
        Date of Birth:
    </label>
  
    <input type="date" name="begin" 
        placeholder="dd-mm-yyyy" value=""
        min="1997-01-01" max="2030-12-31"><br><br>
        About yourself: <textarea name="message" rows="5" cols="30">
</textarea> <br><br>
<div align="center" class="g-recaptcha" data-sitekey="6LeftiIdAAAAAMfVsRyJ0jkY9O59L-z5VRscm7av"></div>
<br><br>        
<input type="submit">

</form>


</body>
</html>