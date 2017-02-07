$(document).ready(funcionPrincipal);


function getBaseURL() {
   //return location.protocol + "//" + location.hostname + (location.port && ":" + location.port) + "/";
   return location.hostname + (location.port && ":" + location.port) + "/";
}

function funcionPrincipal()
{
	$("#selectType").change(getProducts);
	$("#selectProductSale").change(getProductValues);
	$("#selectProductBuy").change(getProductValues);
	$("#filtrarTipo").change(getProductsFilter);
	$("#filtrarEstado").change(getComisionesFilter);
	$("#saveSale").click(saveSale);
	$("#saveBuy").click(saveBuy);
	$(".modalWindowSale").click(insertDataModalSale);
	$(".modalWindowBuy").click(insertDataModalBuy);
	$(".confirmarEliminar").click(confirmarEliminar);
	$(".confirmarAnular").click(confirmarAnular);

}