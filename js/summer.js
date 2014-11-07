jQuery(document).ready(function() {

	if( $( "#tab" ).length != 0 ){
		// alert("jQuery esta funcionando !!");
		$( "#tab" ).tabs();
	}
	
	
	$(".icon-camera").click( function(e){
	// $(".foto_perfil_boton").click( function(){
		$(".foto_perfil_caja.medium > .foto_perfil_cargar_foto").removeClass( "hidden" );
		console.log(e.currentTarget.id);
		
	});
	
	/*$("#camara_full").click( function(){
	// $(".foto_perfil_boton").click( function(){
		$(".foto_perfil_caja.full > .foto_perfil_cargar_foto").removeClass( "hidden" );
	});*/

	$(".foto_perfil_caja.medium > .foto_perfil_cargar_foto").mouseleave( function(){
		$(".foto_perfil_caja.medium > .foto_perfil_cargar_foto").addClass( "hidden" );
	});
	$(".foto_perfil_caja.full > .foto_perfil_cargar_foto").mouseleave( function(){
		$(".foto_perfil_caja.full > .foto_perfil_cargar_foto").addClass( "hidden" );
	});

	$(".foto_perfil_boton_tomar").click( function(){
		$(".popup_overlay").removeClass("hidden")
	});
	$("#popup_close").click( function(){
		$(".popup_overlay").addClass("hidden");
	});
	
});