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
		<title>Casablanca Mining</title>
		<?php print $head; ?>
		<?php print $styles; ?>
		<?php print $scripts; ?>
		
		<script type="text/javascript" src="http://use.typekit.com/fxi5fni.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	</head>
	<body class="t7_front">

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
				
				<!--
<table>
					<tr>
						<td>EGO (NYSE)</td><td>US$ 30</td>
					</tr>
					<tr>
						<td>ELD (TSX)</td><td>US$ 30</td>
					</tr>
					<tr>
						<td>EAU (ASX)</td><td>US$ 30</td>
					</tr>
				</table>
-->
				
				<?php print $navbar; ?>
				
			</div>
			


			<?php if ($content_top): ?>
			<!-- top content container -->
			<div id="t7_content_top">
				<?php print $content_top; ?>
			</div> 
			<?php endif; ?>


			<?php if ($left): ?>
			<!-- left navigation -->
			<div id="t7_nav_left">
				<?php print $left; ?>
			</div>
			<?php endif; ?>
					
			<!-- main content -->
			<div id="t7_content_front">

				

				<?php if ($messages): ?>				
					<?php print $messages; ?>
				<?php endif; ?>

				<?php if ($tabs): ?>
					<div class="tabs"><?php print $tabs; ?></div>
				<?php endif; ?>
				
				<?php if ($help): ?>				
					<?php print $help; ?>
				<?php endif; ?>

				
				<img src="/sites/all/themes/casablancamining/images/fpo_video_home_new.jpg" width="1040" height="686" />
				
				<div id="t7_text_overlay">
				<?php print $subhead; ?>
				
				<?php print $content; ?>

				<h1><?php print $title; ?></h1>
				
				<!-- <img src="/sites/all/themes/casablancamining/images/thesource.png" /> -->
				
				<div style="float:right;"><h3 style="text-align:right;"><a href="operations">Explore ></a></h3></div>
				
				<div style="float:right;clear:both;width:500px;"><!--p id="t7_shadow" style="text-align:right;width:auto;margin-top:0px;"><em>We're undertaking an ambitious investment, construction and exploration campaign that will generate more than $45 million in revenue in 2012.</em></p--></div>
				
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
					
			
			
			<div id="t7_extender"><!-- Test page-front --></div>

		</div>


		<?php print $closure; ?>

	</body>
	
</html>
