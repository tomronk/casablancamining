<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">
  <!--
  
  
  
  



      Digitally crafted using perfect pixels
      with some bits and bytes by wunderkids
      at Ten Seven Interactive. Shaa-zaaamm!

     ______          _____                    
    /_  __/__  ____ / ___/___ _   _____  ____ 
     / / / _ \/ __ \\__ \/ _ \ | / / _ \/ __ \
    / / /  __/ / / /__/ /  __/ |/ /  __/ / / /
   /_/  \___/_/ /_/____/\___/|___/\___/_/ /_/ 


          http://ten7i.com/shaa-zaaamm
                   1256732626




  
  
  
  
  
  -->	
	<head>

		<meta name="author" content="Ten Seven, Interactive. LLC -- http://www.tenseveninteractive.com/" />
		<title><?php print $head_title; ?></title>
		<?php print $head; ?>
		<?php print $styles; ?>
		<?php print $scripts; ?>
		<script type="text/javascript" src="http://use.typekit.com/fxi5fni.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	</head>
	<body class="<?php print $body_classes; ?>">

		<!-- Mr. Main Container! -->
		<div id="t7_container">

			
			<!-- header -->
			<div id="t7_header">
				
				<div id="t7_logo">
				<a href="/"><img src="/sites/all/themes/casablancamining/images/casablanca-logo.png" /></a>
				</div>
				
				<?php print $header; ?>
				<table>
					<tr>
						<td>EGO (NYSE)</td><td>US$ <?php print getquote("EGO") ?></td>
					</tr>
					<tr>
						<td>ELD (TSX)</td><td>US$ <?php print getquote("GCN11.CMX") ?></td>
					</tr>
					<tr>
						<td>EAU (ASX)</td><td>US$ <?php print getquote("HGN11.CMX") ?></td>
					</tr>
				</table>
				

				
				
				<?php print $navbar; ?>
				
			</div>
			


			<?php if ($content_top): ?>
			<!-- top content container -->
			<div id="t7_content_top">
				<?php print $content_top; ?>
			</div> 
			<?php endif; ?>


					
			<!-- main content -->
			<div id="t7_content">
				

				<?php if ($messages): ?>				
					<?php print $messages; ?>
				<?php endif; ?>

				<?php if ($tabs): ?>
					<div class="tabs"><?php print $tabs; ?></div>
				<?php endif; ?>
				
				<?php if ($help): ?>				
					<?php print $help; ?>
				<?php endif; ?>

				<div class="t7_video">
				
					<?php if (isset($node->content["field_full_width"]["field"]["items"][0]["#item"]["filepath"]))	{
					
						echo '<img src="/'.$node->content["field_full_width"]["field"]["items"][0]["#item"]["filepath"].'" width="941" />';
						
						//print_r($node);
						}
						
					?>
				
				</div>
				
				
				<div class="t7_rapper" style="min-height:320px;">
				
				
					<div class="t7_vanski">
											
											
											
															
												<div id="t7_subnav">
													<h2 class="breadcrumb">Terms of Use</h2>
													<?php
													
													if (isset($thirdlvl[0]["safe"]["title"])) {
													
														echo "<ul>";
														
														$tnodes = "";
														$j=0;
														
														foreach ($thirdlvl as $mnu) {
														
															$tnode = node_load($mnu["nid"]);
															
															//print_r($tnode);
														
															print "<li><a class='t7_closer' rel='$j' href='#".mkspiffy($mnu["safe"]["title"])."'>".$mnu["safe"]["title"]."</a></li>";
															$tnodes .= "\n\n\n\n\n\n\n\n<div rel='$j' title='".mkspiffy($mnu["safe"]["title"])."' class='it7_detail_pg ".mkspiffy($mnu["safe"]["title"])."'>";


															$tnodes .= '<div class="nav">';
															$tnodes .= '<div class="prev">';
															$tnodes .= '<a href="#"><img src="/sites/all/themes/casablancamining/images/nav_prev_on.png" width="38" height="62" alt="previous" /></a>';
															$tnodes .= '</div>';
															$tnodes .= '<div class="next">';
															$tnodes .= '<a href="#"><img src="/sites/all/themes/casablancamining/images/nav_next_on.png" width="38" height="62" alt="next" /></a>';
															$tnodes .= '</div>';
															$tnodes .= '</div>';
	
															if (isset($tnode->field_image1[0]["filepath"])) {
																
																$tnodes .= '<div class="t7_text"><h2>'.$tnode->title.'</h2>';
																$tnodes .= $tnode->body;
																$tnodes .= '</div>';		 
																
																$tnodes .= '<img src="/'.$tnode->field_image1[0]["filepath"].'" width="360" height="335" />';
																		
															} else {
																
																$tnodes .= '<div class="t7_text_wide"><h2>'.$tnode->title.'</h2>';
																$tnodes .= $tnode->body;
																$tnodes .= '</div>';
																
															}
																		
															$tnodes .= '</div>';

															$j++;
														
														}
														
														echo "</ul>";
													
													}
													
													?>
													
													
						
													
													</div>
												</div>
											
											
											
										<?php 
										
										
										if (isset($node->content["field_image1"]["field"]["items"][0]["#item"]["filepath"]))	{
											
											
											echo '<div class="t7_body">'.$node->content["body"]["#value"].'</div>';
											echo '<div class="t7_nav_container"><div class="t7_rt_sidebar" id="t7cycle">';
											
											if (isset($node->content["field_image1"]["field"]["items"][0]["#item"]["filepath"]))	{
												echo '<div class="t7_titleprint"><h2>'.$node->content["field_image1"]["field"]["items"][0]["#item"]["data"]["title"].'</h2><img src="/'.$node->content["field_image1"]["field"]["items"][0]["#item"]["filepath"].'" width="240" height="102" alt="'.$node->content["field_image1"]["field"]["items"][0]["#item"]["data"]["title"].'" /><p>'.$node->content["field_image1"]["field"]["items"][0]["#item"]["data"]["description"].'</p></div>';
											}
											
											if (isset($node->content["field_image2"]["field"]["items"][0]["#item"]["filepath"]))	{
												echo '<div class="t7_titleprint"><h2>'.$node->content["field_image2"]["field"]["items"][0]["#item"]["data"]["title"].'</h2><img src="/'.$node->content["field_image2"]["field"]["items"][0]["#item"]["filepath"].'" width="240" height="102" alt="'.$node->content["field_image1"]["field"]["items"][0]["#item"]["data"]["title"].'" /><p>'.$node->content["field_image2"]["field"]["items"][0]["#item"]["data"]["description"].'</p></div>';
											}
											
											if (isset($node->content["field_image3"]["field"]["items"][0]["#item"]["filepath"]))	{
												echo '<div class="t7_titleprint"><h2>'.$node->content["field_image3"]["field"]["items"][0]["#item"]["data"]["title"].'</h2><img src="/'.$node->content["field_image3"]["field"]["items"][0]["#item"]["filepath"].'" width="240" height="102" alt="'.$node->content["field_image1"]["field"]["items"][0]["#item"]["data"]["title"].'" /><p>'.$node->content["field_image3"]["field"]["items"][0]["#item"]["data"]["description"].'</p></div>';
											}
											
											if (isset($node->content["field_image4"]["field"]["items"][0]["#item"]["filepath"]))	{
												echo '<div class="t7_titleprint"><h2>'.$node->content["field_image4"]["field"]["items"][0]["#item"]["data"]["title"].'</h2><img src="/'.$node->content["field_image4"]["field"]["items"][0]["#item"]["filepath"].'" width="240" height="102" alt="'.$node->content["field_image1"]["field"]["items"][0]["#item"]["data"]["title"].'" /><p>'.$node->content["field_image4"]["field"]["items"][0]["#item"]["data"]["description"].'</p></div>';
											}
											
											if (isset($node->content["field_image5"]["field"]["items"][0]["#item"]["filepath"]))	{
												echo '<div class="t7_titleprint"><h2>'.$node->content["field_image5"]["field"]["items"][0]["#item"]["data"]["title"].'</h2><img src="/'.$node->content["field_image5"]["field"]["items"][0]["#item"]["filepath"].'" width="240" height="102" alt="'.$node->content["field_image1"]["field"]["items"][0]["#item"]["data"]["title"].'" /><p>'.$node->content["field_image5"]["field"]["items"][0]["#item"]["data"]["description"].'</p></div>';
											}
											
											
											echo '</div></div>';
											
											
											
										
										} 	else	{
											
											echo '<div class="t7_body_full">'.$node->content["body"]["#value"].'</div>';
												
										}
										
										?>
				
					</div>
					
					
					<?php
					
					print "\n\n\n\n<div id='t7children'>";
					print $tnodes;
					print "</div>"
					
					
					?>
					
				
				</div>
				
			</div> 


			


			<?php if ($content_bottom): ?>
			<!-- bottom content container -->
			<div id="t7_content_bottom">
				<?php print $content_bottom; ?>
			</div> 
			<?php endif; ?>
			

			
			<!-- footer -->
			<div id="t7_footer">
				
				<div class="right">
					<?php print $contact; ?>
				</div>
				
				<div class="left">
					<p><?php print $footer_message; ?></p>
					<?php print $footer; ?>
				</div>
							
				<div class="all">
					<p>
Cautionary Note to U.S. Investors: The United States Securities and Exchange
Commission limits disclosure for U.S. reporting purposes to mineral deposits
that a company can economically and legally extract or produce.
We use
certain terms on this web site, such as “reserves,” “resources,” “geologic
resources,” “proven,” “probable,” “measured,” “indicated,” or “inferred,” which may not
be consistent with the reserve definitions established by the SEC. U.S. investors are
urged to consider closely the disclosures in our Form 10-K. You can review and obtain
copies of these filings from the SEC website at http://www.sec.gov/edgar.html.
					</p>
				</div>
			</div> 
					
			
			
			<div id="t7_extender"><!-- Test page-terms-of-use --></div>


		</div>


		<?php print $closure; ?>

	</body>
	
</html>
