jQuery(document).ready(function(){jQuery("#wp_keyword_tool_search_btn").click(function(){var e=jQuery("#rbkeyword_search_txt").val();if(e==""){alert("Write Keyword First");return false}jQuery.ajax({url:jQuery("#wp_keyword_tool_ajax_src").val()+"&key="+encodeURIComponent(e),context:document.body,success:function(e){jQuery("#wp_keyword_tool_ajax-loading").addClass("ajax-loading");jQuery("#wp_keyword_tool_search_btn").removeAttr("disabled");jQuery("#wp_keyword_tool_search_btn").removeClass("disabled");var t=jQuery.parseJSON(e);if(t["status"]=="success"){var n=t["words"];var r=t["volume"];for(var i=0;i<n.length;i++){jQuery("#rbkeyword_keywords").append('<div class="wp_keyword_tool_itm "><input type="checkbox" value="'+n[i]+'"><div class="wp_keyword_tool_keyword">'+n[i]+'</div><div class="wp_keyword_tool_volume">'+r[i]+'</div><div class="clear"></div></div>')}jQuery("#rbkeyword_body").slideDown()}else if(t["status"]=="Error"){var s=t["error"];jQuery("#suggestionContain").prepend('<a href="#" title="error" class="box errors corners" style="margin-top: 0pt ! important;"><span class="close">&nbsp;</span>'+s+" .</a>");activate_close()}},beforeSend:function(){jQuery("#wp_keyword_tool_ajax-loading").removeClass("ajax-loading");jQuery("#wp_keyword_tool_search_btn").addClass("disabled");jQuery("#wp_keyword_tool_search_btn").attr("disabled","disabled")}});return false});jQuery("#rbkeyword_clean").click(function(){jQuery("#rbkeyword_body").slideUp();jQuery("#rbkeyword_keywords").slideUp();jQuery("#rbkeyword_keywords").empty();jQuery("#rbkeyword_keywords").slideDown();return false});var e=0;var t="";var n="a";var r="";jQuery("#rbkeyword_more").click(function(){e=0;var i=jQuery("#rbkeyword_search_txt").val();t=i;jQuery("#rbkeyword_body").show();letters=rbkeyword_letters;for(e;e<letters.length;e++){n=letters[e];r=t+" "+n;var s="http://clients1."+rbkeyword_google+"/complete/search";if(location.protocol==="https:"){s="https://clients1."+rbkeyword_google+"/complete/search"}jQuery.get(s,"output=json&q="+r+"&client=firefox",function(e){var t=e[1];if(t.length==0){}else{jQuery(".rbkeyword_keyword_status").html(jQuery("#rbkeyword_search_txt").val());for(var n=0;n<t.length;n++){jQuery("#rbkeyword_keywords").append('<label class="wp_keyword_tool_itm "><input type="checkbox" value="'+t[n]+'">'+t[n]+"</label><br>");jQuery(".rbkeyword_count").html(jQuery("label.wp_keyword_tool_itm").length)}}},"jsonp")}});jQuery("#rbkeyword-list-wrap").dialog({autoOpen:false,dialogClass:"wp-dialog",position:"center",draggable:false,width:400,title:"Keyword List (Copy and Paste)"});jQuery("#rbkeyword_list_btn").click(function(){var e="";jQuery("#rbkeyword-list").text("");jQuery('#rbkeyword_keywords input[type="checkbox"]:checked').each(function(){e=e+jQuery(this).val()+"\n"});jQuery("#rbkeyword-list").text(e);jQuery("#rbkeyword-list-wrap").dialog("open")});jQuery("#rbkeyword_search_txt").gcomplete({style:"default",effect:false,pan:"#rbkeyword_search_txt"});jQuery("#rbkeyword_check").click(function(){if(jQuery(this).attr("checked")=="checked"){jQuery("#rbkeyword_keywords input:checkbox").attr("checked","true")}else{jQuery("#rbkeyword_keywords input:checkbox").removeAttr("checked")}})})