<?php 
	include ('../../../app.php');
	// page config
	$title = 'Helpers';
	$tagLine = 'assets/modules/utilities/helpers';
?>

<!DOCTYPE html>
<html class="no-js">

<?php head() ?>

<body>

    <!-- Site Canvas -->
    <div id="site-content">
		
		<?php 
        
            topbar();

            appHeader(array(
                'modifiers' => 'bar-absolute-opaque-sticky'
            ));

            billboard([
                'title'    => [
                    'text' => $title
                ],
                'tag-line' => $tagLine
            ]);
            
        ?>
		
		<section class="section-primary">
			
			<div class="container-small">
				
				<h2 class="heading-light-size-5">Files</h2>
				
				<ul class="list-tags">
					<li class="plain"><span>_helpers.scss</span></li>
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/utilities/helpers" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/utilities/helpers</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <p>At one point, a long time ago, Kayzen was built off the popular <a href="https://html5boilerplate.com/" target="blank">HTML5 Boilerplate</a>. There are still some remnants left over which Kayzen utilizes, namely its helper classes.</p>
                
				<table class="table-small">
					<thead>
						<tr>
							<th>Helper Class</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><code>.hidden</code></td>
							<td>Hide element visually and also from screen readers.</td>
						</tr>
						<tr>
							<td><code>.visually-hidden</code></td>
							<td>Hide element only visually, but keep for screen readers.</td>
						</tr>
						<tr>
							<td><code>.invisible</code></td>
							<td>Hide element visually and from screen readers, but keep element in the layout flow.</td>
						</tr>
						<tr>
							<td><code>.hide-overflow</code></td>
							<td>Hide an element's overlow.</td>
						</tr>
						<tr>
							<td><code>.clearfix, .cf</code></td>
							<td>The good old clearfix hack to contain floated elements.</td>
						</tr>
						<tr>
							<td><code>.relative</code></td>
							<td>Sets an element's position to <code>relative</code>.</td>
						</tr>
						<tr>
							<td><code>.flush</code></td>
							<td>Remove's the top margin from an element.</td>
						</tr>
						<tr>
							<td><code>.sink</code></td>
							<td>Remove's the bottom margin from an element.</td>
						</tr>
						<tr>
							<td><code>%greyscale, .greyscale</code></td>
							<td>Turn any element greyscale (extend using the % placeholder).</td>
						</tr>
						<tr>
							<td><code>%disabled, .disabled</code></td>
							<td>This extends the above <code>%greyscale</code> placeholder and also reduce the opacity.</td>
						</tr>
						<tr>
							<td><code>.text-left</code></td>
							<td>Align an element's text to the left.</td>
						</tr>
						<tr>
							<td><code>.text-center</code></td>
							<td>Align an element's text to the middle.</td>
						</tr>
						<tr>
							<td><code>.text-right</code></td>
							<td>Align an element's text to the right.</td>
						</tr>
						<tr>
							<td><code>.text-justify</code></td>
							<td>Align an element's text to be justified.</td>
						</tr>
						<tr>
							<td><code>.object-center</code></td>
							<td>Center an element.</td>
						</tr>
						<tr>
							<td><code>.va-top</code></td>
							<td>Sets an element's vertical align property to <code>top</code>.</td>
						</tr>
						<tr>
							<td><code>.va-middle</code></td>
							<td>Sets an element's vertical align property to <code>middle</code>.</td>
						</tr>
						<tr>
							<td><code>.va-bottom</code></td>
							<td>Sets an element's vertical align property to <code>bottom</code>.</td>
						</tr>
						<tr>
							<td><code>.v-center</code></td>
							<td>Vertically center an element.</td>
						</tr>
						<tr>
							<td><code>.bg-cover</code></td>
							<td>Set an element's background-size to 'cover'.</td>
						</tr>
						<tr>
							<td><code>.bg-[social colors]</code></td>
							<td>For each color in the social palette, you can use the <code>.bg-facebook</code> class, replacing 'facebook' with your desired color. This will set the element's background to that color.</td>
						</tr>
						<tr>
							<td><code>.max-[breakpoints]</code></td>
							<td>For each value in the breakpoints map, you can use the <code>.max-break-3</code> class, replacing 'break-3' with your desired breakpoint. This will show the element only when the resolution is at most the value you specify.</td>
						</tr>
						<tr>
							<td><code>.min-[breakpoints]</code></td>
							<td>For each value in the breakpoints map, you can use the <code>.min-break-3</code> class, replacing 'break-3' with your desired breakpoint. This will show the element only when the resolution is at least the value you specify.</td>
						</tr>
                    </tbody>
                </table>
                
			</div><!-- container-small -->
			
		</section>

		<?php appFooter() ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts() ?>
		
    <?php include (ROOT.'/includes/syntax-highlighter.php'); ?>

</body>
</html>