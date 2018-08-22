(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 */
	  $(function() {
	 		//alert("HI");
	  });
	 /**
	 * When the window is loaded:
	 */
	$( window ).load(function() {

		// Initialize Variable
		var feeds=[];
		var feedCount=0;
		var fileName="";
		
		$.ajax({
			url : wpf_ajax_obj.wpf_ajax_url,
			type : 'get',
			data : {
				_ajax_nonce: wpf_ajax_obj.nonce,
				action: "getFeedInfoForCronUpdate"
			},
			success : function(response) {
				console.log(response.data); 

				var arr = Object.keys(response.data).map(function(k,i) {
					return feeds[i]=k
				});

				console.log(feeds);
				if(feeds.length>0){
					fileName=feeds[feedCount];
					generate_feed(feeds[feedCount]);
				}
			}
		});
	

		/*#######################################################
		 #######-------------------------------------------#######
		 #######    Ajax Feed Making Functions Start       #######
		 #######-------------------------------------------#######
		 #########################################################
		 */

		function generate_feed(fileName) {

			$.ajax({
				url : wpf_ajax_obj.wpf_ajax_url,
				type : 'post',
				data : {
					_ajax_nonce: wpf_ajax_obj.nonce,
					action: "get_product_information",
					feed: fileName
				},
				success : function(response) {
					//console.log(response);
					if(response.success) {
						$(".feed-progress-container2").text("Delivering Feed Configuration.");
						var products=parseInt(response.data.product);
						console.log("Counting Total Products");
						console.log("Total "+products+" products found.");

						if(products>200){
							processFeed(2000);
							setTimeout(function(){
								$(".feed-progress-container2").text("Total 2000 products will be processed.");
							}, 3000);
						}else{
							processFeed(products);
						}

					}else{
						console.log(response.data.message);

					}
				}
			});


		}


		function processFeed(n,offset,batch) {
			if (typeof(offset)==='undefined') offset = 0;
			if (typeof(batch)==='undefined') batch = 0;

			var batches =Math.ceil(n/200);
			var limit=200;
			var progressBatch=90/batches;

			var currentProducts=limit*batch;


			if(batch<batches){
				$.ajax({
					url : wpf_ajax_obj.wpf_ajax_url,
					type : 'post',
					data : {
						_ajax_nonce: wpf_ajax_obj.nonce,
						action: "make_batch_feed",
						limit:limit,
						offset:offset,
						feed: fileName
					},
					success : function(response) {
						console.log(response);
						if(response.success) {
							if(response.data.products=="yes"){
								offset=offset+200;
								batch++;
								processFeed(n,offset,batch);
							}else if(n>offset){
								offset=offset+200;
								batch++;
								setTimeout(function(){
									processFeed(n,offset,batch);
								}, 2000);

							}else{
								console.log("Saving feed file.");
								return save_feed_file();
							}
						}
					},
					error:function (response) {
						console.log(response);
						return false;
					}
				});
			}else{
				console.log("Saving feed file.");
				return save_feed_file();
			}
		}


		/**
		 * Save feed file into WordPress upload directory
		 * after successfully processing the feed
		 */
		function save_feed_file(){
			$.ajax({
				url : wpf_ajax_obj.wpf_ajax_url,
				type : 'post',
				data : {
					_ajax_nonce: wpf_ajax_obj.nonce,
					action: "save_feed_file",
					feed:fileName
				},
				success : function(response) {
					console.log(response);
					if(response.success) {
						console.log("Feed "+feedCount+" Generated Successfully.");
						feedCount++;
						if(feeds[feedCount] != undefined){
							fileName=feeds[feedCount];
							generate_feed(feeds[feedCount])
						}
					//return true;
					//window.location.href = "<?php echo admin_url('admin.php?page=woo_feed_manage_feed'); ?>";
					}else{
					}
				},
				error:function (response) {
					console.log(response);
					return false;
				}
			});
		}

		/*########################################################
		 #######-------------------------------------------#######
		 #######    Ajax Feed Making Functions End         #######
		 #######-------------------------------------------#######
		 #########################################################
		 */
	});
	 /**
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */

})( jQuery );
