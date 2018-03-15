<?php require 'header.php'; require 'required/functions.php'; require 'required/lang.php';iNotConnected(); ?>

<?php 
	if (!isset($_SESSION['search']))
		$_SESSION['search'] = "";
	if (!empty($_POST))
		$_SESSION['search'] = $_POST['search'];
	else
		$_SESSION['search'] = "";

?>
<div class="container">
	<div class="tools_nav">
		<div class="input-group tools_nav_searchbar">
		<form class="form-control" method="POST">
		  <input class="form-control" style="width: 95%" placeholder="High School DxD" name="search" id="search">
		</form>
		  <div class="input-group-addon" ><i class="fa fa-search"></i></div>
		</div>
	</div>
	<br>
	<form id="myForm">
		<label class="btn btn-primary">
			<input type="radio" name="radioName" value="1080p" checked/> 1080p
		</label>
		<label class="btn btn-primary">
			<input type="radio" name="radioName" value="720p" /> 720p
		</label>
		<label class="btn btn-primary">
			<input type="radio" name="radioName" value="480p" /> 480p
		</label>
	</form>
	<form id="order_form">
		<label class="btn btn-primary">
			<input type="radio" name="order" value="NO" checked/> Recent <i class="fas fa-clock"></i>
		</label>
		<label class="btn btn-primary">
			<input type="radio" name="order" value="ASC" /> <?php echo $biblio[$_SESSION['lang']]['title']; ?> <i class="fas fa-caret-down"></i>
		</label>
		<label class="btn btn-primary">
			<input type="radio" name="order" value="DESC" /> <?php echo $biblio[$_SESSION['lang']]['title']; ?> <i class="fas fa-caret-up"></i>
		</label>
	</form>
	<br>
	<div id="divanim" class="row">
    	
	</div>
	<br>
	<div class="pages_selec">
		<button id="prev" name="prev" class="btn btn-primary"><?php echo $biblio[$_SESSION['lang']]['previous']; ?></button>
		<button id="next" name="next" class="btn btn-primary"><?php echo $biblio[$_SESSION['lang']]['next']; ?></button>
	</div>
</div>
<br>

<script>
var page = 1;
var res = "1080p";
var order = "NO";

function load_content(){
	$.ajax({
       url : '../action/load_anim.php',
       type : 'POST',
       data : 'page=' + page + "&res=" + res + "&order=" + order,
       dataType : 'html',
       success : function(code_html, statut){
           $("#divanim").html(code_html);
           window.scrollTo(0, 0);
       }
    });
}
$("input[name='radioName']").change(function(e){
	res = $(this).val();
	page = 1;
	load_content();
});

$("input[name='order']").change(function(e){
	order = $(this).val();
	page = 1;
	load_content();
});

$(document).ready(function(){ 
    load_content();
});

$("#next").click(function(){
	page = page + 1;
	load_content();
});

$("#prev").click(function(){
	if (page > 1)
		page = page - 1;
	load_content();
});

</script>
<script>
	$(document).ready(function(){ 
	    $("#search").autocomplete({source: "action/search.php"}); 
	});
</script>
