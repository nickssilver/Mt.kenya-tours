<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $bsiCore->config['conf_hotel_name']; ?></title>
<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="css/bootstrap-responsive.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="css/datepicker1.css" type="text/css" media="screen"/>
<link rel="stylesheet" href="css/style.css" type="text/css" media="screen"/>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>

<script>
		$(function(){
// disabling dates
		var nowTemp = new Date();
		var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

		var checkin = $('#dpd1').datepicker({
		onRender: function(date) {
		return date.valueOf() < now.valueOf() ? 'disabled' : '';
		}
		}).on('changeDate', function(ev) {
		if (ev.date.valueOf() > checkout.date.valueOf()) {
		var newDate = new Date(ev.date)
		newDate.setDate(newDate.getDate() + <?php echo  $bsiCore->config['conf_min_night_booking']; ?>);
		checkout.setValue(newDate);
		//alert(newDate);
		//alert(checkout.setValue(newDate));
		}
		checkin.hide();
		$('#dpd2')[0].focus();
		}).data('datepicker');
		var checkout = $('#dpd2').datepicker({
		onRender: function(date) {
		var checkoutdt= parseInt(checkin.date.valueOf())+(60*60*24*1000*<?php echo  ($bsiCore->config['conf_min_night_booking']-1); ?>);

		return date.valueOf() <= checkoutdt ? 'disabled' : '';

		}
		}).on('changeDate', function(ev) {
		checkout.hide();
		}).data('datepicker');

		});
	</script>


</head>
<body>

    	<div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                	<div id="body-div">
                	<div class="select-language">
                        <select class="input-medium" onChange="langchange(this.value)">
                           <?php echo $lang_dd; ?>
                         </select>
                  	</div>
                    <h1 style="padding-top:10px;"><?php echo $bsiCore->config['conf_hotel_name']; ?> </h1>
                     <div class="wizard">
                     	<div class="step1 yellowStep"><img src="images/wizard/1.png" alt="" /><p><?php echo SELECT_DATES_TEXT; ?></p></div>
                        <div class="step2 grayStep"><img src="images/wizard/2.png" alt="" /><p><?php echo ROOMS_TEXT; ?> &amp; <?php echo RATES_TEXT; ?></p></div>
                        <div class="step3 grayStep"><img src="images/wizard/3.png" alt="" /><p><?php echo YOUR_DETAILS_TEXT; ?></p></div>
                        <div class="step4 grayStep"><img src="images/wizard/4.png" alt="" /><p><?php echo PAYMENT_TEXT; ?></p></div>
                        <div class="step5 grayLastStep"><img src="images/wizard/5.png" alt="" /><p><?php echo CONFIRM_TEXT; ?></p></div>
                     </div>
                     <div class="progress">
						 <div class="bar bar-warning" style="width: 20%;"></div>
                     </div>

                    <div class="wrapper">
                    	<h2><?php echo ONLINE_BOOKING_TEXT; ?></h2>
                        <form class="form-horizontal" style="width: 95%; margin:0 2.5% 2.5%" action="booking-search.php" method="post">
                        <div class="control-group">
                            <label class="control-label" for="checkInDate"><?php echo CHECK_IN_DATE_TEXT; ?>:</label>
                            <div class="controls">



                                    <input class="input-small" type="text" readonly   size="16" id="dpd1"  name="check_in"  data-date-format="<?php echo $bsiCore->bt_date_format(); ?>">


                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="checkOutDate"><?php echo  CHECK_OUT_DATE_TEXT; ?>:</label>
                            <div class="controls">

                                    <input class="input-small" type="text" readonly   size="16" id="dpd2"  name="check_out" data-date-format="<?php echo $bsiCore->bt_date_format(); ?>">

                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="checkInDate"><?php echo ADULT_OR_ROOM_TEXT; ?>:</label>
                            <div class="controls">
                            	<?php echo $bsiCore->capacitycombo();?>
                            </div>
                        </div>
                        <?php echo $bsiCore->getChildcombo();?>

                       <?php echo $bsiCore->get_currency_combo3($bsiCore->currency_code()); ?>

                        <!--<button id="btn_room_search" class="sear-btn" type="submit" onClick="window.location.href ='search-result.html'">Search</button>-->
                        <button id="btn_room_search" class="sear-btn" type="submit" ><?php echo SEARCH_TEXT; ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
