
totalRows=0;
jQuery(document).ready(function(){	
	var baze = {
		'action': 'data_wpcalc_potolock'
	};
	jQuery.post(data_potolock.ajaxurl, baze, function(msg) {			
		price_fix = msg.fix;
		price_hole = msg.hole;
		course = msg.course;
		currency = msg.currency;
		width = msg.width;
		text_long = msg.text_long;
		type = msg.type;
		quantity = msg.quantity;
		add = msg.add;
		calc = msg.calc;
		text_calc = msg.text_calc;
		text_call = msg.text_call;
		typeceil = jQuery("#selceil").html();
		ac_addRow();		
		
	});			
			
		});
		
		
	
		function ac_addRow(){
			
			Row=totalRows;			
			totalRows++;
			if (Row>0){
			var delidrow = '<input onclick="delrow('+Row+');" id="del_button" type="button" value="X"/>';
			}
			else {
			    var delidrow = '';
			}
			jQuery("#frends").append('<div class="wpcalc-col" id="tr'+Row+'"><div class="wpcalc-col-3"><input type="text" id="ac_width_'+Row+'" placeholder="'+width+'"></div> <div class="wpcalc-col-3"><input type=text id="ac_long_'+Row+'" placeholder="'+text_long+'"></div> <div class="wpcalc-col-3"><select id="ac_type_'+Row+'"><option value=0>'+type+'</option>'+typeceil+'</select></div> <div class="wpcalc-col-3">'+delidrow+'</div></div>');			
			
			jQuery("#ac_type_"+Row).change(function(){change_atr()});			
							
			jQuery("#ac_long_"+Row).keyup(function(){
				jQuery(this).val(jQuery(this).val().replace(/,/,".").replace(/[A-Za-zА-Яа-яЁё!@#%&_='"`\\\/<> ]/,""));				
				});			
			
			jQuery("#ac_width_"+Row).keyup(function(){
				jQuery(this).val(jQuery(this).val().replace(/,/,".").replace(/[A-Za-zА-Яа-яЁё!@#%&_='"`\\\/<> ]/,""));				
				});
				
			jQuery("#ac_long_"+Row).change(function(){change_atr()});
			
			jQuery("#ac_width_"+Row).change(function(){change_atr()});
			
			jQuery("#tr"+Row).fadeIn("slow")				
			
		}
			
	function change_atr(){		    
		    var al = jQuery("#ac_long_"+Row).val();
		    var aw = jQuery("#ac_width_"+Row).val();
		    var at = jQuery("#ac_type_"+Row).val().split(':')[0];
		     		   
		    if(al>0 && aw>0 && at>0){
			  jQuery("#add_button").removeAttr("disabled");			  
			  jQuery("#del_button").removeAttr("disabled");
			  jQuery("#calc_button").removeAttr("disabled");			  
			  }  	    		    
		}
		
		function ac_calcAll(){
		    tt=0;
		    text_rr = '';
				rr=0;				
				
					for(i=0;i<totalRows;i++){
					    if (jQuery("div").is("#tr"+i)){
						ac_width=eval(jQuery("#ac_width_"+i).val());						
						ac_long=eval(jQuery("#ac_long_"+i).val());												
						ac_type_1=eval(jQuery("#ac_type_"+i).val().split(':')[0]);
						ac_type_2=eval(jQuery("#ac_type_"+i).val().split(':')[1]);
						ac_type_text=jQuery("#ac_type_"+i+" :selected").text();					
						
						if(ac_width == null){
						    jQuery("#ac_width_"+i).addClass('error');
						    jQuery("#ac_width_"+i).focus();
						    return;					    
						}						
						if(ac_long == null){
						    jQuery("#ac_long_"+i).addClass('error');
						    jQuery("#ac_long_"+i).focus();
						    return;						    
						
						}
						if(ac_type_1 == '0'){
						    jQuery("#tr"+i).addClass('err');
						    jQuery("#ac_type_"+i).focus();
						    return;					    
						}	
						jQuery("#tr"+i).removeClass('err');
						text_r = i+1+'. '+width+': '+ ac_width+' ;' + text_long+': '+ac_long +' ;'+type+': ' +ac_type_text+'<br/>';  
						r = ac_width*ac_long*ac_type_2+(ac_width*2+ac_long*2)*ac_type_1;
					    }
					    else {
					        r=0;
					        }
						rr+=eval(r);
						text_rr+=text_r;
						}
			
			var kolvo = jQuery("#kolvo").val();
			var price_potolock = (rr + kolvo*price_hole + price_fix*1)*course;
			function numFormat(price_potolock) { return price_potolock.toFixed(0).replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ') } 
			var result = '<div class="wpcalc-col"><div class="wpcalc-col-6 wpcb">'+text_calc+'</div><div class="wpcalc-col-6 wpcalcresult">'+numFormat(price_potolock)+' '+currency+'</div></div>';						
			jQuery("#ac_result").html(result);
			jQuery('#callspec').css('display', '');
			
			content_calc = text_rr+quantity+': '+kolvo+'; <br/>'+text_calc+' - '+numFormat(price_potolock)+' '+currency;
			
			
			
			};
			 function delrow(idrow) {			     
			     jQuery("#tr"+idrow).remove();	
		 }