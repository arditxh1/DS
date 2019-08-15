function addData(){
	for (var i = names.length-1; i >= 0; i--) {
		$("#cloneT").clone(true).appendTo("#cloneB").attr("id","M"+i);
		$("#M"+i).children("#idT").attr("id","idT"+i)
		$("#M"+i).children("#nameT").attr("id","nameT"+i)
		$("#M"+i).children("#priceT").attr("id","priceT"+i)
		$("#M"+i).children("#stockT").attr("id","stockT"+i)
		$("#M"+i).children("#categoryT").attr("id","categoryT"+i)
		$("#M"+i).children("#soldT").attr("id","soldT"+i)
		$("#M"+i).children("#btnTDt").children("#btnT").attr("id","btnT"+i)
		$("#idT"+i).text('00'+idT[i]);
		$("#nameT"+i).text(names[i]);
		$("#priceT"+i).text(prices[i]+"$");
		$("#stockT"+i).text(stocks[i]);
		$("#categoryT"+i).text(categories[i]);
		$("#soldT"+i).text(sold[i]);
	}
}

var timeoutId = 0;

$('button').on('mousedown', function() {
	if ($(this).attr('id').includes("btnT")) {
    	timeoutId = setTimeout(hold, 500, $(this).attr('id'));
    }
}).on('mouseup mouseleave', function() {
	if ($(this).attr('id').includes("btnT")) {
    	clearTimeout(timeoutId);
    }
});

var idp;
var lastChar;
var soldType;

function hold(idPP) {
	idp = idPP;
	$('#sellModal').modal();
}

$('#saleTabC').click(function(){
	lastChar = parseInt(idp.substr(-1));
	soldF(lastChar,$('#saleTab').val());
	soldType = 'multi';
})

$('button').click(function(){
	if ($(this).attr('id').includes("btnT")) {
		var btnId = $(this).attr('id');
		var lastChar = btnId.substr(-1);
		
		soldF(lastChar,1);
		soldType = 'solo';
	}
})

var days = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
var day;
var name;
var soldT;

function soldF(id,amount) {
	if($('#stockT'+id).text() >= 1) {
		$('#stockT'+id).text($('#stockT'+id).text() - amount);
		$('#soldT'+id).text(parseInt($('#soldT'+id).text()) + parseInt(amount));
		db(id);
	}
}


function db(id){
	var urlT = 'php/addSold.php';
	var prod_id = parseInt($('#idT'+id).text());
	var stockT = parseInt($('#stockT'+id).text());
	name = $('#categoryT'+id).text();
	if (soldType == "multi") {
		soldT = parseInt($('#soldT'+id).text());
		soldType = "";
	}else{
		soldT = weekData[name][new Date().getDay() - 1] + 1;
		weekData[name][new Date().getDay() - 1] += 1;
		soldType = "";
	}
	
	$.post( urlT, {stockT: stockT, soldT: soldT, prod_id: prod_id});

	urlT = 'php/soldWeek.php';
	day = days[new Date().getDay()];
	name = $('#categoryT'+id).text();

	if (usedCate.includes(name)) 
	{
		urlT = 'php/soldWeekEdit.php';
		$.post( urlT, {name: name,day: day,soldT: soldT});
	}else{
		$.post( urlT, {name: name,day: day,soldT: soldT});
	}
}

var editId;

$('tr').click(function(){
	var target = $(event.target);
	if (!target.is('button')) {
		editId = parseInt($(this).attr('id').substr(-1));
		$('#exampleModal').modal();
		$('#nameTab').attr('value', names[editId]);
		$('#priceTab').attr('value', prices[editId]);
		$('#stockTab').attr('value', stocks[editId]);
		$('#cateTab').attr('value', categories[editId]);
	}
})

var urlT;
var nameT;
var priceT;
var stockT;
var cateT;
var prod_id;

$('#editPro').click(function(){
	urlT = 'php/edit_product.php'
	nameT = $('#nameTab').val();
	priceT = $('#priceTab').val();
	stockT = $('#stockTab').val();
	cateT = $('#cateTab').val();
	prod_id = editId + 1;
	$.post( urlT, {nameT: nameT, priceT: priceT, stockT: stockT, cateT: cateT, prod_id: prod_id});
})

