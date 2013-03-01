

$(document).ready(function() {
	var subtotal = "0.00";
	var locations = ["39470", "Main Street, Poplarville", "39401", "Hardy Street, Hattiesburg"];
	var index = "";
	var popup = function() {
		$("#popup").hide();
		$("#thanks").hide();

		$("#close").click(function(){
			$("#popup").hide();
			$("#thanks").hide();
			$("#popshow").show();
		}); 

		$("#placeorder").click(function(event){
			event.preventDefault();
			$("#thanks").show();
			if( parseInt( $("#amount").attr("value") ) < 0 ) {
				alert("Amount must be greater than 0!");
			} else {
				if( isNaN( $("#amount").attr("value") ) ) {
					alert("Please enter a number!");
				} else {
					var total = $("#amount").attr("value") * $("#prices").attr("value");
					$("#total").attr("value", total);
				}
			}
		});

		$("#order").click(function(event){
			event.preventDefault();
			$("#popup").show();
			$("#popshow").hide();
		});

		$("#email").click(function(event){
			event.preventDefault();
			$("#popup").show();
			$("#popshow").hide();
		});

		$("#sendmsg").click(function(event){
			event.preventDefault();
			$("#thanks").show();
		});

		$("#find").click(function(event){
			event.preventDefault();
			$("#popup").show();
			$("#popshow").hide();
		});

		$("#search").click(function(event){
			event.preventDefault();
			if( $("#zip").attr("value") == "" || !$("#zip").attr("value") ) {
				alert("Please Enter a ZipCode!");
			} else {
				if( isNaN( $("#zip").attr("value") ) ) {
					alert("Please Enter Numbers!");
				} else {
					if( $("#zip").attr("value").length < 4 ) {
						alert("Please Enter at least 5 Digits!");
					} else {
						index = locations.indexOf( $("#zip").attr("value") );
						//if() {alert there was nothing found} else {finish and show it}
							$("#thanks").text(locations[++index]);
							$("#thanks").show();
					}
				}
			}
		});
	};

	popup();
});

