<?
	$gray=true; require_once("../site/header.php");
?>

<div class="whitepage" style="padding-left: 10%; padding-right: 10%">
<h4 class="alert alert-warning">Attention! Polycode is in BETA! Crashes and bugs may occur!</h4>

<div class="" style="width: 100%">
<p>Polycode is free software. However, if you want to support Polycode's development, you can make a donation. <a href="/getinvolved/#donate">Learn more about how donation money is used.</a></p>

<div style="width: 400px; display: block; margin:30px auto 20px auto">

<script src="https://checkout.stripe.com/checkout.js"></script>

<div class="btn-group" style="margin-bottom: 10px">
  <button id="donatefive" type="button" class="btn btn-default">Donate $5</button>
  <button type="button" class="btn btn-default">Donate $10</button>
  <button type="button" class="btn btn-default">Donate $20</button>
  <button type="button" class="btn btn-default">Donate $50</button>
</div>

    <div class="input-group">
	<span class="input-group-btn">
        	<button class="btn btn-default" type="button">Donate custom amount:</button>
      	</span>
      <input type="text" class="form-control" value="$20.00" style="width:205px">
	</div>
</div>

<script>
  var handler = StripeCheckout.configure({
    key: 'pk_test_rdiijkj1vsuM6SRB1A13uF6D',
    image: '/square-image.png',
    token: function(token) {
    }
  });

  document.getElementById('donatefive').addEventListener('click', function(e) {
    handler.open({
      name: 'Donate to Polycode',
      description: '$5 Donation',
      allowRememberMe: false,
      panelLabel: "Donate",
      image: "/images/logo.svg",
      zipCode: true,
      amount: 500
    });
    e.preventDefault();
  });
</script>



	  <div class="row" style="margin: 30px 0px 50px 0px">
		<div class="col-md-4" style="text-align: right">
			<img src="/images/polycode_box.svg" height="200"/>
		</div>
		<div class="col-md-6">
			<div class="list-group" style="padding-top: 10px">
				<a href="#" class="list-group-item download-item"><span class="glyphicon glyphicon-download"></span> Polycode 0.8.4 for Windows (32-bit)</a>
				<a href="#" class="list-group-item download-item"><span class="glyphicon glyphicon-download"></span> Polycode 0.8.4 for MacOS X 10.7+ (64-bit)</a>
				<a href="#" class="list-group-item download-item"><span class="glyphicon glyphicon-download"></span> Polycode 0.8.4 for Linux (64-bit)</a>
				<a href="#" class="list-group-item download-item"><span class="glyphicon glyphicon-download"></span> Polycode 0.8.4 source code</a>
			</div>
		</div>
	  </div>

	<div class="panel panel-default" style="margin: 0px 0px 50px 0px"> 
		<div class="panel-body">
			 The latest Polycode source code can be found on Github: <a href="https://github.com/ivansafrin/Polycode">https://github.com/ivansafrin/Polycode</a>
		</div>
	</div>

</div>

<?
	require_once("../site/footer.php");
?>
