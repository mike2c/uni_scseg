<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<button id="btnFooter" class="pull-right">
					<span class="glyphicon glyphicon-chevron-up"></span>
				</button>
			</div>
		</div>
	</div>			
		<div class="hidden-content" id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p class="text-center">
						Sistema para le control y seguimiento de egresados y graduados - Universidad Nacional de Ingenieria, 2014 - 2016.
						</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<h4><strong>RECINTOS</strong></h4>
						<a href="http://www.norte.uni.edu.ni">Augusto César Sandino</a>
					</div>
					<div class="col-md-4">
						
					</div>
					<div class="col-md-4">
						
					</div>
				</div>
			</div>
		</div>
</footer>
<script	type="text/javascript" src="<?=base_url('plugins/jquery-ui/jquery-ui.js')?>"></script>

<script type="text/javascript">
	
	var collapse = true;
	
	$("#btnFooter").click(function (){
		if(collapse){
			collapse = false;
			$("#footer").slideDown("fast");
			$("#btnFooter").find("span").removeClass("glyphicon glyphicon-chevron-up");	
			$("#btnFooter").find("span").addClass("glyphicon glyphicon-chevron-down");	
		}else{
			collapse = true;
			$("#footer").slideUp("fast");
			$("#btnFooter").find("span").removeClass("glyphicon glyphicon-chevron-down");	
			$("#btnFooter").find("span").addClass("glyphicon glyphicon-chevron-up");	
		}		
	});
	
</script>