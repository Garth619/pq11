function loadBillingLength(n){var e=window[n+"_intervals"];if(e){for(var s=jQuery("#"+n+"_unit").val(),i=e[s].min,c=e[s].max,r=jQuery("#"+n+"_length"),a=r.val(),t="",o=i;o<=c;o++){t+="<option value='"+o+"' "+(a==o?"selected='selected'":"")+">"+o+"</option>"}r.html(t)}}function cancel_subscription(n){confirm(gaddon_payment_strings.subscriptionCancelWarning)&&(jQuery("#subscription_cancel_spinner").show(),jQuery("#cancelsub").prop("disabled",!0),jQuery.post(ajaxurl,{action:"gaddon_cancel_subscription",entry_id:n,gaddon_cancel_subscription:gaddon_payment_strings.subscriptionCancelNonce},(function(n){jQuery("#subscription_cancel_spinner").hide(),!0===n.success?(jQuery("#gform_payment_status").html(gaddon_payment_strings.subscriptionCanceled),jQuery("#cancelsub").hide()):(jQuery("#cancelsub").prop("disabled",!1),!1===n.success&&alert(gaddon_payment_strings.subscriptionError))})))}