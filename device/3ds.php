<?php include('../module/head.php');?>

<body class="section-device">

<?php include('../module/nav-primary.php');?>

<section class="container-fluid">
	
	<div class="row-fluid">
		
		<div class="span3">
			<?php include('../module/nav-secondary.php');?>
		</div>
		
		<div class="span9">
		
			<h1 class="page-header">Nintendo 3DS</h1>
			
			<p class="alert alert-info">Many thanks to <a href="http://shaundunne.com">Shaun Dunne</a> for doing the research for this console browser.</p>
			
			<p class="lead browser browser-webkit">Identifies itself as Mozilla 5.0, but is actually a Webkit version of NetFront.</p>
		
			<div class="row-fluid">
			
				<div class="span6">
				
					<p>Image coming shortly.</p>
				
					<?php/*<img src="../image/3dsxl-controller.png" alt="diagram of the 3DS XL controller" />*/?>
								
				</div>
				
				<div class="span6">
					
					<p>Features three cameras: two on the back for taking 3D photos and video and one forward-facing one on the front.</p>
					
					<p>3D images cannot be viewed within the browser: they need to be downloaded first. They are saved in MPO format which is 2 JPEGs layered on top of each other, which falls back to a single JPEG where 3D images aren't supported.</p>
					
					<aside><p><a href="http://en.wikipedia.org/wiki/Nintendo_3DS">More about the 3DS on Wikipedia</a></p></aside>
				
				</div>
			
			</div>
			
			<div class="row-fluid">
			
				<div class="span6 well">
					<h3>HTML5 Test: 109/500</h3>
					<div class="progress progress-danger">
					  <div class="bar" style="width: 21.8%"></div>
					</div>
					<p>As of February 2013. Source: <a href="http://html5test.com">html5test.com</a></p>
				</div>
				
				<div class="span6 well">
					<h3>CSS3 Test: 64%</h3>
					<div class="progress progress-info">
					  <div class="bar" style="width: 64%"></div>
					</div>
					<p>As of February 2013. Source: <a href="http://css3test.com">css3test.com</a></p>
				</div>
			
			</div>
			
			<h2 class="page-header">Support Details</h2>
			
			<aside><p>Source: <a href="http://supportdetails.com/">Support Details by Imulus</a>, February 2013</p></aside>
			
			<table class="table table-striped">
				<tr>
					<th>Operating System</th>
					<td>unknown</td>
				</tr>
				<tr>
					<th>Screen Resolution</th>
					<td>320 x 240</td>
				</tr>
				<tr>
					<th>Web Browser</th>
					<td>unknown <span class="muted">Actually NetFront</span></td>
				</tr>
				<tr>
					<th>Browser Size</th>
					<td>320 x 369</td>
				</tr>
				<tr>
					<th>Color Depth</th>
					<td>16</td>
				</tr>
				<tr>
					<th>Javascript</th>
					<td>Enabled</td>
				</tr>
				<tr>
					<th>Flash Version</th>
					<td>Not Installed</td>
				</tr>
				<tr>
					<th>Cookies</th>
					<td>Enabled</td>
				</tr>
				<tr>
					<th>User Agent</th>
					<td><code>Mozilla/5.0 (Nintendo 3DS; U; ; en) Version/1.7498.EU</code></td>
				</tr>
			</table>
			
			<?php/*<h2 class="page-header">Controls</h2>
					
			<figure>
				<a href="../image/diagram-3dsxl-controller.png">
					<img src="../image/diagram-3dsxl-controller.png" alt="diagram of the controls on the 3DS XL" />
					<figcaption>
						<p><i class="icon icon-resize-full"></i> See big version</p>
					</figcaption>
				</a>
			</figure>*/?>
			
			<h2 class="page-header">Tests</h2>
			
			<h3>Media query tests</h3>
			
			<aside><p>Source: <a href="http://www.jordanm.co.uk/palmreader">Palm Reader</a></p></aside>
			
			<div class="row-fluid">
				<div class="span4">
					<h4>What the device can read:</h4>
					<ul>
						<li><code>screen</code></li>
						<li><code>color</code></li>
						<li><code>(orientation : portrait)</code></li>
						<li><code>(min-device-width)</code></li>
						<li><code>(max-device-width)</code></li>
						<li><code>(min-device-heigh)</code></li>
						<li><code>(max-device-height)</code></li>
						<li><code>(min-width)</code></li>
						<li><code>(max-width)</code></li>
						<li><code>(min-height)</code></li>
						<li><code>(max-height)</code></li>
					</ul>
				</div>
				<div class="span4">
					<h4>What the device says it isn't:</h4>
					<ul>
						<li><code>print</code></li>
						<li><code>tv</code></li>
						<li><code>monochrome</code></li>
						<li><code>handheld</code></li>
						<li><code>projection</code></li>
						<li><code>(-webkit-min-device-pixel-ratio: 2)</code></li>
					</ul>
				</div>
				<div class="span4">
					<h4>Device doesn't recognise:</h4>
					<ul>
						<li><code>(pointer:coarse)</code></li>
						<li><code>(pointer:fine)</code></li>
						<li><code>(pointer:none)</code></li>
					</ul>
				</div>
			</div>
			
			<h3>device-pixel-ratio test</h3>
			
			<aside><p>Source: <a href="http://www.quirksmode.org/m/tests/dpr.html">Quirksmode</a></p></aside>
			
			<ul>
				<li>Media queries for device-pixel-ratio not supported.</li>
				<li>screen.width equals 320.</li>
				<li>Layout viewport width is 320.</li>
				<li>Expected DPR is 1.</li>
				<li>Reported DPR is 1.</li>
			</ul>
			
			<?php/*<h2 class="page-header">Photos</h2>
			
			<div class="thumbnails flickr">
				
			</div>*/?>
			
		</div><!-- .span9 -->
	
	</div><!-- .row-fluid -->

</section>

<?php include('../module/foot.php');?>

</body>

</html>