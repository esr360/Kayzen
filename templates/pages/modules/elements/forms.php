<?php 
	include ('../../../app.php');
	// page config
	$title = 'HTML5 Forms';
	$tagLine = 'assets/modules/elements/accordions';
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
					<li class="plain"><span>_forms.scss</span></li>
					<li class="plain"><span>forms.js</span></li>	
					<li class="plain"><span>README.md</span></li>	
				</ul>
                
				<p class="alert-bar-info"><strong>Github Page</strong> (customers only):  <a href="https://github.com/esr360/Kayzen/tree/master/assets/modules/elements/forms" target="blank">https://github.com/esr360/Kayzen/tree/master/assets/modules/elements/forms</a></p>
				
				<h2 class="heading-light-size-5">Module Overview</h2>
                
                <div class="well">
                    <ul class="list-reset">
                        <li><b>Name:</b> <code>form</code></li>
                        <li><b>Components:</b> <code>group[small, compound, hasIcon]</code>, <code>icon</code>, <code>input[plain, bg, quantity]</code></li>
                        <li><b>Modifiers:</b> <code>fauxPlaceholders</code>, <code>html5</code></li>
                    </ul>
                </div>
                
				<h2 class="heading-light-size-5">Examples</h2>
                
                <form class="form">
                    <div class="span-4">
                        <div class="form_group">
                            <label>Your Name</label>
                            <input type="text" class="form_input" placeholder="E.g. John Doe">
                        </div>
                        <div class="form_group">
                            <label>Your Message</label>
                            <textarea class="form_input" placeholder="Enter your message..."></textarea>
                        </div>
                        <button type="submit" class="button-primary">Submit</button>
                    </div>
                </form>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;form class="form">
    &lt;div class="form_group">
        &lt;label>Your Name&lt;/label>
        &lt;input type="text" class="form_input" placeholder="E.g. John Doe">
    &lt;/div>
    &lt;div class="form_group">
        &lt;label>Your Message&lt;/label>
        &lt;textarea class="form_input" placeholder="Enter your message...">&lt;/textarea>
    &lt;/div>
    &lt;button type="submit" class="button-primary">Submit&lt;/button>
&lt;/form>
</pre>
                <p class="alert-bar-help"><b>Tip:</b> Use the <a href="<?php pageLink('modules/utilities/grid.php') ?>">Grid System</a> classes to structure your forms.</p>

                <h3 class="heading-size-3">Faux Placeholders</h3>
                
                <p>Faux placeholders are <code>label</code> elements positioned to look like a placeholder, which animate to above the field when focused.</p>
                
                <form class="form-fauxPlaceholders">
                    <div class="span-4">
                        <div class="form_group">
                            <input id="oiOELS0APA" type="text" class="form_input" placeholder="E.g. John Doe">
                            <label for="oiOELS0APA">Your Name</label>
                        </div>
                        <div class="form_group">
                            <textarea id="5zccFgPDfL" class="form_input" placeholder="Enter your message..."></textarea>
                            <label for="5zccFgPDfL">Your Message</label>
                        </div>
                        <button type="submit" class="button-primary">Submit</button>
                    </div>
                </form>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;form class="form-fauxPlaceholders">
    &lt;div class="form_group">
        &lt;input type="text" class="form_input" placeholder="E.g. John Doe">
        &lt;label>Your Name&lt;/label>
    &lt;/div>
    &lt;div class="form_group">
        &lt;textarea class="form_input" placeholder="Enter your message...">&lt;/textarea>
        &lt;label>Your Message&lt;/label>
    &lt;/div>
    &lt;button type="submit" class="button-primary">Submit&lt;/button>
&lt;/form>
</pre>

                <p>To use faux placeholders, add the <code>fauxPlaceholders</code> modifier to your <code>form</code> module: <code>form-fauxPlaceholders</code>. Also ensure that your elements are structured as above.</p>

                <p class="alert-bar-info">Ensure that your inputs and labels have appropriate pairing attributes (not shown in above code).</p>
                
                <h3 class="heading-size-3">HTML5 Validation <span class="heading-light">(with Faux Placeholders)</span></h3>
                
                <p>These forms use HTML5's form validation and CSS3's pseudo selectors to style valid/invalid fields, letting your users know immedietly whether their input is valid.</p>
                
                <form class="form-html5-fauxPlaceholders">
                    <div class="span-4">
                        <div class="form_group">
                            <input required id="QnU6XR5gUG" type="text" class="form_input" placeholder="E.g. John Doe">
                            <label for="QnU6XR5gUG">Your Name</label>
                        </div>
                        <div class="form_group">
                            <textarea id="e6DQTI8ezU" class="form_input" placeholder="Enter your message..."></textarea>
                            <label for="e6DQTI8ezU">Your Message</label>
                        </div>
                        <button type="submit" class="button-primary">Submit</button>
                    </div>
                </form>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;form class="form-html5-fauxPlaceholders">
    &lt;div class="form_group">
        &lt;input required type="text" class="form_input" placeholder="E.g. John Doe">
        &lt;label>Your Name&lt;/label>
    &lt;/div>
    ...
&lt;/form>
</pre>
                <p class="alert-bar-info">Notice the 'required' attribute on line 3. <a href="http://www.sitepoint.com/html5-form-validation/" target="blank">Learn more<a> about HTML5 validation</a>.</p>
                
                <h3 class="heading-size-3">Form Group With Icon</h3>
                
                <form class="form">
                    <div class="span-4">
                        <label for="HoAbPWSzLz">Username</label>
                        <div class="form_group-has-icon">
                            <input type="text" class="form_input" id="HoAbPWSzLz" placeholder="Ex: SkyUX">
                            <i class="form_icon fa fa-user"></i>
                        </div>
                    </div>
                </form>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;form class="form">
    &lt;label>Username&lt;/label>
    &lt;div class="form_group-has-icon">
        &lt;input type="text" class="form_input" placeholder="Ex: SkyUX">
        &lt;i class="form_icon fa fa-user">&lt;/i>
    &lt;/div>
&lt;/form>
</pre>

                <p>To crete an input group with an icon, add the <code>hasIcon</code> modifier to your <code>form_group</code> component: <code>form_group-hasIcon</code>, and place your desired icon (using <a href="https://fortawesome.github.io/Font-Awesome/icons/" target="blank">Font Awesome</a> icons) underneath the input field as shown above.</p>
                
                <h4 class="heading-size-2-uppercase">With Faux Placeholder</h4>
                
                <form class="form-fauxPlaceholders">
                    <div class="span-4">
                        <div class="form_group-has-icon">
                            <input id="TrMSL0uY3c" type="text" class="form_input" placeholder="Ex: SkyUX">
                            <i class="form_icon fa fa-user"></i>
                            <label for="TrMSL0uY3c">Username</label>
                        </div>
                    </div>
                </form>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;form class="form-fauxPlaceholders">
    &lt;div class="form_group-has-icon">
        &lt;input type="text" class="form_input" placeholder="Ex: SkyUX">
        &lt;i class="form_icon fa fa-user">&lt;/i>
        &lt;label>Username&lt;/label>
    &lt;/div>
&lt;/form>
</pre>

                <h3 class="heading-size-3">Small Form Groups</h3>
                
                <form class="form">
                    <div class="span-4">
                        <label class="heading-light-size-2" for="61dXM18lST">Username</label>
                        <div class="form_group-small">
                            <input type="text" class="form_input" id="61dXM18lST" placeholder="Ex: SkyUX">
                        </div>
                    </div>
                </form>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;form class="form">
    &lt;label class="heading-light-size-2">Username&lt;/label>
    &lt;div class="form_group-small">
        &lt;input type="text" class="form_input" placeholder="Ex: SkyUX">
    &lt;/div>
&lt;/form>
</pre>

                <p>To create a small form group, add the <code>small</code> modifier to your <code>form_group</code> component: <code>form_group-small</code>. To ensure any labels you use are the appropriate size, you can use one of the various <b><a href="<?php pageLink('modules/elements/headings.php') ?>">heading</a></b> classes, e.g. <code>heading-size-2</code>.</p>

                <h3 class="heading-size-3">Tighter Form Groups <span class="heading-light">(with icons)</span></h3>

                <form class="form">
                    <div class="span-4">
                        <div class="form_group-compound-has-icon">
                            <input type="text" class="form_input" placeholder="Username">
                            <i class="form_icon fa fa-user"></i>
                        </div>
                        <div class="form_group-compound-has-icon">
                            <input type="password" class="form_input" placeholder="••••••••">
                            <i class="form_icon fa fa-key"></i>
                        </div>
                    </div>
                </form>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;form class="form">
    &lt;div class="form_group-compound-has-icon">
        &lt;input type="text" class="form_input" placeholder="Username">
        &lt;i class="form_icon fa fa-user">&lt;/i>
    &lt;/div>
    &lt;div class="form_group-compound-has-icon">
        &lt;input type="password" class="form_input" placeholder="••••••••">
        &lt;i class="form_icon fa fa-key">&lt;/i>
    &lt;/div>
&lt;/form>
</pre>
                
                <p>To create form groups that sit tighter with each other, use the <code>compound</code> modifier on your <code>form_group</code> component: <code>form_group-compound</code>.</p>

                <h3 class="heading-size-3">Plain Input Fields</h3>

                <form class="form well-dark">
                    <div class="span-4">
                        <label for="Uas3LntMS3">Username</label>
                        <div class="form_group">
                            <input type="text" class="form_input-plain" id="Uas3LntMS3" placeholder="Ex: SkyUX">
                        </div>
                    </div>
                </form>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;form class="form well-dark">
    &lt;label>Username&lt;/label>
    &lt;div class="form_group">
        &lt;input type="text" class="form_input-plain" placeholder="Ex: SkyUX">
    &lt;/div>
&lt;/form>
</pre>

                <p>To create a plain input field with no border, use the <code>plain</code> modifier on your <code>form_input</code> component: <code>form_input-plain</code>.</p>

                <h3 class="heading-size-3">Input Field With Opaque Background</h3>

                <form class="form well">
                    <div class="span-4">
                        <label for="XiedjKOkec">Username</label>
                        <div class="form_group">
                            <input type="text" class="form_input-bg" id="XiedjKOkec" placeholder="Ex: SkyUX">
                        </div>
                    </div>
                </form>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;form class="form well">
    &lt;label>Username&lt;/label>
    &lt;div class="form_group">
        &lt;input type="text" class="form_input-bg" placeholder="Ex: SkyUX">
    &lt;/div>
&lt;/form>
</pre>

                <p>To create an input field with an opaque background, use the <code>bg</code> modifier on your <code>form_input</code> component: <code>form_input-bg</code>.</p>
                
                <h2 class="heading-light-size-5">Practical Examples</h2>

                <h3 class="heading-size-3">Form - Choose Quantity</h3>

                <form class="form object">
                    <div class="span">
                        <input class="button-border-grey-3" type="button" value="-">
                        <input class="form_input-quantity" type="text" step="1" min="1" name="quantity" value="1" title="quantity">
                        <input class="button-border-grey-3" type="button" value="+">
                    </div>
                    <button class="button-primary" type="subtmi">Add To Cart</button>
                </form>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;form class="form">
    &lt;div class="span">
        &lt;input class="button-border-grey-3" type="button" value="-">
        &lt;input class="form_input-quantity" type="text" step="1" min="1" name="quantity" value="1" title="quantity">
        &lt;input class="button-border-grey-3" type="button" value="+">
    &lt;/div>
    &lt;button class="button-primary" type="subtmi">Add To Cart&lt;/button>
&lt;/form>
</pre>

                <h3 class="heading-size-3">Login Form</h3>

                <form class="form-fauxPlaceholders-html5">
                    <div class="span-5">
                        <div class="form_group-compound-has-icon">
                            <input required type="text" class="form_input" id="HZuqqYLurH" placeholder="Ex: SkyUX">
                            <i class="form_icon fa fa-user"></i>
                            <label for="HZuqqYLurH">Username</label>
                        </div>
                        <div class="form_group-compound-has-icon">
                            <input required class="form_input" id="cBDwavRnPC" placeholder="••••••••">
                            <i class="form_icon fa fa-key"></i>
                            <label for="cBDwavRnPC">Password</label>
                        </div>
                        <div class="row">
                            <div class="span-8 va-middle">
                                <input id="RALFswdvwP" type="checkbox"> 
                                <label for="RALFswdvwP">Remember Me?</label>
                            </div>
                            <div class="span-4 va-middle">
                                <button type="submit" class="button-block-primary">Login</button>
                            </div>
                        </div>
                    </div>
                </form>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;form class="form-fauxPlaceholders-html5">
    &lt;div class="form_group-compound-has-icon">
        &lt;input required type="text" class="form_input" placeholder="Ex: SkyUX">
        &lt;i class="form_icon fa fa-user">&lt;/i>
        &lt;label>Username&lt;/label>
    &lt;/div>
    &lt;div class="form_group-compound-has-icon">
        &lt;input required type="password" class="form_input" placeholder="••••••••">
        &lt;i class="form_icon fa fa-key">&lt;/i>
        &lt;label>Password&lt;/label>
    &lt;/div>
    &lt;div class="row">
        &lt;div class="span-8 va-middle">
            &lt;input type="checkbox"> 
            &lt;label>Remember Me?&lt;/label>
        &lt;/div>
        &lt;div class="span-4 va-middle">
            &lt;button type="submit" class="button-block-primary">Login&lt;/button>
        &lt;/div>
    &lt;/div>
&lt;/form>
</pre>

                <h3 class="heading-size-3">Contact Us Form</h3>
                
                <form class="form-fauxPlaceholders-html5">
                    <div class="span-8">
                        <div class="row-flow">
                            <div class="form_group span-6">
                                <input type="text" class="form_input-bg" id="fullName" placeholder="Ex: John Smith" required="">
                                <label for="fullName">Full Name</label>
                            </div>
                            <div class="form_group span-6">
                                <input type="email" class="form_input-bg" id="emailAddress" placeholder="john@smith.com" required="">
                                <label for="emailAddress">Email Address</label>
                            </div>
                        </div>
                        <div class="form_group">
                            <textarea class="form_input-bg" placeholder="We aim to respond to all messages within 24 hours." id="yourMessage" rows="8" required=""></textarea>
                            <label for="yourMessage">Your Message</label>
                        </div>
                        <button type="submit" class="button-block-primary-size-3">Submit Message</button>
                    </div>
                </form>
                
<pre data-enlighter-language="html" class="EnlighterJSRAW">
&lt;form class="form-fauxPlaceholders-html5">
    &lt;div class="span-8">
        &lt;div class="row-flow">
            &lt;div class="form_group span-6">
                &lt;input type="text" class="form_input-bg" id="fullName" placeholder="Ex: John Smith" required="">
                &lt;label for="fullName">Full Name&lt;/label>
            &lt;/div>
            &lt;div class="form_group span-6">
                &lt;input type="email" class="form_input-bg" id="emailAddress" placeholder="john@smith.com" required="">
                &lt;label for="emailAddress">Email Address&lt;/label>
            &lt;/div>
        &lt;/div>
        &lt;div class="form_group">
            &lt;textarea 
                class="form_input-bg" 
                placeholder="We aim to respond to all messages within 24 hours." 
                id="yourMessage" 
                rows="8" 
                required=""
            >&lt;/textarea>
            &lt;label for="yourMessage">Your Message&lt;/label>
        &lt;/div>
        &lt;button type="submit" class="button-block-primary-size-3">Submit Message&lt;/button>
    &lt;/div>
<&lt;form>
</pre>

                <h2 class="heading-light-size-5">Customizing</h2>
                
                <p>The forms can be customized using the following options:</p>
                
                <p class="alert-bar-help">Read the <a href="configuration.html">Configuration</a> page to learn more about a module's configuration.</p>
                
                <table class="table-style-1-small">
					<thead>
						<tr>
							<th>Property Name</th>
							<th>Default Value</th>
							<th>Description</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><code>weight</code></td>
							<td><code class="value">lighter</code></td>
							<td>The font-weight of all form modules.</td>
						</tr>
						<tr>
							<td><code>input-color</code></td>
							<td><code class="value">base('text-color')</code></td>
							<td>The text color of form input components.</td>
						</tr>
						<tr>
							<td><code>input-border</code></td>
							<td><code class="value">1px solid color('greyscale', 'grey-3')</code></td>
							<td>The border of form input components.</td>
						</tr>
						<tr>
							<td><code>input-padding</code></td>
							<td><code class="value">0.65em</code></td>
							<td>The padding of form input components.</td>
						</tr>
						<tr>
							<td><code>bg-color</code></td>
							<td><code class="value">rgba(black, 0.025)</code></td>
							<td>The background color of form input components with the <code>bg</code> modifier.</td>
						</tr>
						<tr>
							<td><code>bg-focus-color</code></td>
							<td><code class="value">white</code></td>
							<td>The background color of form input components with the <code>bg</code> modifier when focused.</td>
						</tr>
						<tr>
							<td><code>valid-color</code></td>
							<td><code class="value">color('validation', 'valid')</code></td>
							<td>The color for when an HTML5 form group is valid.</td>
						</tr>
						<tr>
							<td><code>invalid-color</code></td>
							<td><code class="value">color('validation', 'invalid')</code></td>
							<td>The color for when an HTML5 form group is invalid.</td>
						</tr>
						<tr>
							<td><code>group-small-size</code></td>
							<td><code class="value">font-size('size-2')</code></td>
							<td>The font-size of form group components with the <code>small</code> modifier.</td>
						</tr>
                    </tbody>
                </table>
                
				<p>To change one of the above values, pass your new value(s) to the <code>forms()</code> mixin in your theme file (e.g. assets/themes/Kayzen/_kayzen.scss).</p>
                		
<pre data-enlighter-language="css" class="EnlighterJSRAW">
@include forms((
	'valid-color'   : #00ace5,
	'invalid-color' : black
));
</pre>

                <form class="form-fauxPlaceholders-html5" id="form-demo">
                    <div class="span-4">
                        <div class="form_group-has-icon">
                            <input id="HIX2x1PoIE" type="text" class="form_input" placeholder="Ex: SkyUX" required>
                            <i class="form_icon fa fa-user"></i>
                            <label for="HIX2x1PoIE">Username</label>
                        </div>
                    </div>
                    <style>
                        #form-demo input:focus:valid {
                            color: #00ace5;
                            border-color: #00ace5;
                        }
                        #form-demo input:focus:valid ~ label,
                        #form-demo input:focus:valid ~ .fa {
                            color: #00ace5;
                        }
                        #form-demo input:focus:invalid {
                            color: black;
                            border-color: black;
                        }
                        #form-demo input:focus:invalid::-webkit-input-placeholder,
                        #form-demo input:focus:invalid ~ label,
                        #form-demo input:focus:invalid ~ .fa {
                            color: black;
                        }
                    </style>
                </form>
                
			</div><!-- container-small -->
			
		</section>

		<?php appFooter() ?>

    </div><!-- Site Canvas -->

    <?php include (ROOT.'/includes/ui-enhancements.php'); ?>

    <?php scripts() ?>
		
    <?php include (ROOT.'/includes/syntax-highlighter.php'); ?>

</body>
</html>