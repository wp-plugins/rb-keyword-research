<div class="wrap">

<h1>RB Keyword Research</h1>

	<p>RB Keyword research, gathers what people are searching for in Google's auto-suggest tool, these keywords are great for building your keyword list.</p>
	<p>For support or questions, please visit me at <a href="http://www.ronniebailey.net" target="_blank">http://www.ronniebailey.net</a></p>

<h2>Step #1) Set Country:</h2>

<form method="post" action="">
<select name="google">
	<option value="google.com" selected>United States</option>
	<option value="google.com.af">Afghanistan</option>
	<option value="google.com.ag">Antigua</option>
	<option value="google.com.au">Australia</option>
	<option value="google.at">Austria</option>
	<option value="google.bs">Bahamas</option>
	<option value="google.be">Belgium</option>
	<option value="google.bt">Bhutan</option>
	<option value="google.com.bo">Bolivia</option>
	<option value="google.com.br">Brazil</option>
	<option value="google.com.kh">Cambodia</option>
	<option value="google.ca">Canada</option>
	<option value="google.cl">Chile</option>
	<option value="google.cn">China</option>
	<option value="google.com.co">Colombia</option>
	<option value="google.co.cr">Costa Rica</option>
	<option value="google.cz">Czech Republic</option>
	<option value="google.dk">Denmark</option>
	<option value="google.com.eg">Egypt</option>
	<option value="google.fi">Finland</option>
	<option value="google.fr">France</option>
	<option value="google.de">Germany</option>
	<option value="google.com.gh">Ghana</option>
	<option value="google.com.hk">Hong Kong</option>
	<option value="google.co.in">India</option>
	<option value="google.co.id">Indonesia</option>
	<option value="google.it">Italy</option>
	<option value="google.co.jp">Japan</option>
	<option value="google.co.ke">Kenya</option>
	<option value="google.com.my">Malaysia</option>
	<option value="google.com.mx">Mexico</option>
	<option value="google.nl">Netherlands</option>
	<option value="google.co.nz">New Zealand</option>
	<option value="google.com.ph">Philippines</option>
	<option value="google.pl">Poland</option>
	<option value="google.ru">Russia</option>
	<option value="google.com.sa">Saudi Arabia</option>
	<option value="google.com.sg">Singapore</option>
	<option value="google.co.za">South Africa</option>
	<option value="google.es">Spain</option>
	<option value="google.ch">Switzerland</option>
	<option value="google.se">Sweden</option>
	<option value="google.co.th">Thailand</option>
	<option value="google.com.tr">Turkey</option>
	<option value="google.co.uk">United Kingdom</option>
</select>
<input type="submit" value="Set Country"/>
</form>
</p>

<?php 
$google = $_POST['google'];

if ($google == "")
	{
		echo '<span class="rbkred">Set Your Country!</span>';
	}
	else
	{
		$rbkeywordres_gg = get_option('rbkeywordres_gg' , ''.$google.'');
		echo '<span class="rbkred">Set: '.$google.'</span>';
	}

		$rbkeyword_alphabets = get_option('rbkeyword_alphabets' , 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z');
		$letters_arr = explode(',', trim($rbkeyword_alphabets));
		$letters = array_filter($letters_arr);
 ?>
<h2>
	Step #2) Enter the Keyword:
</h2>
	<table class="rbkeytable">

		<tbody>

		<tr>	

			<td><input style="width:100%" type="text" value="" autocomplete="off" placeholder="Keyword..." size="14" class="newtag form-input-tip" id="rbkeyword_search_txt"></td>

			<td style="width: 135px;" ><input style="width:100%"  type="button" tabindex="3" value="Search" class="button" id="rbkeyword_more"></td>

			<td style="width: 38px;"><input style="width:100%"  type="button" tabindex="3" value="x" class="button tagadd" id="rbkeyword_clean"></td>

		</tr>

		<tr><td colspan="3">

			<div class="hidden" id="rbkeyword_body">

				<div id="rbkeyword_keywords" class="wp-tab-panel"></div>		

				<div class="rbkeywordcheckbox"><label><input type="checkbox" id="rbkeyword_check" value="s">Check/uncheck all</label></div>

				<input type="button" value="My keyword list" class="button" id="rbkeyword_list_btn">

				<p><h2>RB Keyword Research found (<b><i><u><span class="rbkeyword_count"></span></u></i></b>) keywords for the term

				(<b><i><u><span class="rbkeyword_keyword_status"></span></u></i></b>) </h2>

				</p>

			</div>

		</td></tr>

		</tbody>

	</table>

		<div style="display: none"  id="rbkeyword-list-wrap">

		<textarea style="width:100%;height: 300px;" id="rbkeyword-list"></textarea>

	</div>
	</div>

	<script type="text/javascript">

		var rbkeyword_google = '<?php echo $rbkeywordres_gg ?>';

		var rbkeyword_letters = <?php echo json_encode($letters) ?> ;

	</script>