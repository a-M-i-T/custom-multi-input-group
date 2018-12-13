<!DOCTYPE html>
<html>
<head>
<title></title>
<script
src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
</head>
<body>
<form method="post">
<div class='input-form'>
<label>School</label>
<div class="school">
<input type='button' class='btnAdd' value='Add new'>
<div class="append_school">
<input type='text' placeholder='Enter name' name='school[]' id='POST_name' class='txt' >
</div>
</div>
<label>High School</label>
<div class="high_school">
<input type='button' class='btnAdd' value='Add new'>
<div class="append_high_school">
<input type='text' placeholder='Enter name' name='high_school[]' id='POST_name' class='txt' >
</div>
</div>
</div>
<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>

<?php 
if(isset($_POST['submit'])) {
var_dump($_POST);
}
?>

<script type="text/javascript">

$(document).ready(function(){


$('.btnAdd').click(function(){

var me = $(this), className = me.parent().prop('className');
var counter = $('.'+ className +' .txt').length,
limit = 3;

//debugger;
console.log(counter);

counter++;
if(counter <= limit) {

var school_html = "<div class='clone'><input type='text' placeholder='Enter name' name='school[]' id='POST_name' class='txt' ><button type='button' class='remove'>x</button></div>";
var high_school_html = "<div class='clone'><input type='text' placeholder='Enter name' name='high_school[]' id='POST_name' class='txt' ><button type='button' class='remove'>x</button></div>";

if(className == 'school') {
html = school_html;
}else if(className == 'high_school'){
html = high_school_html;
}else{
html = "";
}

$('.append_'+className).append(html);
}

});

$('body').on('click','.remove',function(e) {
var me = $(this);
me.parent('.clone').remove();
});

});
</script>
