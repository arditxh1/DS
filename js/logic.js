var categorys = [];
var categoryVal = {};
var cate = false;
var inputName = '#Cate';
var colors = ["#00a8ff","#9c88ff","#fbc531","#4cd137","#e84118","#273c75","#353b48","#0097e6","#8c7ae6","#e1b12c","#44bd32","#40739e","#c23616","#192a56"];
var lastColor = 0;
//!--MODAL INPUT ADD CATEGORY
$('#addCate').click(function(){
	categorys.push($('#inputCate').val())
	$('#Cate').clone(true).appendTo('#listCate').text($('#inputCate').val()).attr("id", 'rCate');
	$('#Cate').attr("id", 'hCate');
	$('#inputCate').val('');
	inputName = '#hCate';
	cate = true;
})

$(document).on( "click", "#rCate", function() {
	$('#inputCate').val($(this).text())
});

//!--MODAL ADD PROUCT
var url = 'php/add_records_ajax.php';
var product;
var price;
var stock;
var category;

$('#addPro').click(function(){
	categoryVal[$('#inputCate').val()] = $('#stockPro').val();

	if (cate == false) {
		categorys.push($('#inputCate').val())
		$(inputName).clone(true).appendTo('#listCate').text($('#inputCate').val()).attr("id", 'rCate');
		$('#Cate').attr("id", 'hCate');
	}else{
		cate == false;
	}

	products[$('#namePro').val()] = ({
	  "Price": $('#pricePro').val(),
	  "Stock": $('#stockPro').val(),
	  "Category": $('#inputCate').val()
	})

	//!--CHANGE CHART DETAILS
	addChartOneList();

	charts();

	//!---------------------DATABASE
	
    product = $('#namePro').val();
    price   = $('#pricePro').val();
    stock = $('#stockPro').val();
    category = $('#inputCate').val();
	   if(!product || !price || !category || !stock){
	     alert("fill all");
	   }else{
	     $.post( url, {product: product, price: price, category: category, stock: stock, cUser: cUser });
	  }
	$('#namePro').val('')
	$('#pricePro').val('')
	$('#stockPro').val('')
	$('#inputCate').val('')

})

function createChartOneList(){
	for (var i = 0; i < Object.keys(products).length; i++) {
		$('#charCloneD').clone(true).appendTo('#charAppendD').attr("id", 'charRealD'+i).children("#charChangeD").text(Object.keys(products)[i]);
		$('#charRealD'+i).children('.dot').attr("class", "dot").css('background', colors[i]);
		lastColor = i+1;
	}
}

function addChartOneList(){
	chartOneValues.push($('#stockPro').val());
	$('#charCloneD').clone(true).appendTo('#charAppendD').attr("id", 'charRealD'+lastColor).children("#charChangeD").text(Object.keys(products)[lastColor]);
	$('#charRealD'+lastColor).children('.dot').attr("class", "dot").css('background', colors[lastColor]);
	lastColor++;
}