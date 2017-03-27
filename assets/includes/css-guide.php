
<style>

	form ol {
		list-style-type:none;
		margin:0;
		padding:0;
	}
	
	h2[id] {
		border-top:solid 2px #5AA63D;				
		margin-top:2em;
		padding-top:.5em;
	}
	
	.html-tag dt {
		color:#990000;
		display:inline-block;
		float:left;
		font-weight:normal;
		margin-right:1em;
		text-align:right;
		width:7em;
	}
	
	.html-tag dd {
		overflow:hidden;
	}
	
	.html-tags,
	.html-tags a,
	.html-tag a {
		color:#990000;
		border-bottom-color:#e8baba;
	}
	
	.top {
		margin-left:-4em;
		position: fixed;
		top:1em;
	}
	
	.use {
		font-family:"Courier New", Courier, monospace;
	}

</style>
<a class="top" href="#">[top]</a>

<h2>Contents</h2>
<ol>
	<li><a href="#headings">Headings</a></li>
	<li><a href="#imgages">Images</a></li>
	<li><a href="#form-elements">Form Elements</a></li>
	<li><a href="#list-types">List Types</a></li>
	<li><a href="#tables">Tables</a></li>
	<li><a href="#text-level">Text-level</a></li>
	<li><a href="#special-cases">Special Cases</a></li>
</ol>
<!-- Sample Content to Plugin to Template -->

<h2 id="headings">Headings</h2>

<p class="html-tags"><?php echo htmlTag(array(tag=>'h1')); ?>, <?php echo htmlTag(array(tag=>'h2')); ?>, <?php echo htmlTag(array(tag=>'h3')); ?>, <?php echo htmlTag(array(tag=>'h4')); ?>, <?php echo htmlTag(array(tag=>'h5')); ?>, <?php echo htmlTag(array(tag=>'h6')); ?></p>
<h1>Heading 1</h1>
<p>This is a paragraph. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</p>
<h2>Heading 2</h2>
<p>This is a paragraph.Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</p>
<h3>Heading 3</h3>
<p>This is a paragraph. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</p>
<h4>Heading 4</h4>
<p>This is a paragraph. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</p>
<h5>Heading 5</h5>
<p>This is a paragraph. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</p>
<h5>Heading 5 Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</h5>
<p>This is a paragraph. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</p>
<h6>Heading 6</h6>
<p>This is a paragraph. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</p>
<h6>Heading 6 Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</h6>
<p>This is a paragraph. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</p>

<h2 id="imgages">Images</h2>

<p class="html-tags">.figure, .figcaption,  <?php echo htmlTag(array(tag=>'img')); ?> DO NOT STYLE: <?php echo htmlTag(array(tag=>'figure')); ?>, <?php echo htmlTag(array(tag=>'figcaption')); ?></p>

<h3>.image-left</h3>
<img alt="Maisry MacCracken in her senior year" src="http://vcencyclopedia.vassar.edu/images/f/fe/Maisry1.jpg" class="image image-left" width="176"/>
<p>This is a paragraph. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>

<h3>.image-right</h3>
<img alt="Presidents Roosevelt and MacCracken at Vassar" src="http://vcencyclopedia.vassar.edu/images/f/fe/Maisry1.jpg" class="image image-right" width="176"/>
<p>This is a paragraph. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>

<h3>.image-center</h3>
<img alt="Maisry MacCracken in her senior year" src="http://vcencyclopedia.vassar.edu/images/f/fe/Maisry1.jpg" class="image image-center" width="176"/>
<p>This is a paragraph. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

<h3>.figure-left</h3>
<figure>
	<div class="figure figure-left">
		<img alt="" src="http://vcencyclopedia.vassar.edu/images/4/48/Fdrprexy.jpg" width="264"/>
		<figcaption>
			<div class="figcaption">Presidents Roosevelt and MacCracken at Vassar.</div>
		</figcaption>
	</div>
</figure>
<p>This is a paragraph. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>

<h3>.figure-right</h3>
	<figure>
	<div class="figure figure-right">
		<img alt="" src="http://vcencyclopedia.vassar.edu/images/4/48/Fdrprexy.jpg" width="264"/>
		<figcaption>
			<div class="figcaption">Presidents Roosevelt and MacCracken at Vassar.</div>
		</figcaption>
	</div>
</figure>
<p>This is a paragraph. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>

<h3>.figure-center</h3>
<figure>
	<div class="figure figure-center">
		<img alt="" src="http://vcencyclopedia.vassar.edu/images/4/48/Fdrprexy.jpg" width="264"/>
		<figcaption>
			<div class="figcaption">Presidents Roosevelt and MacCracken at Vassar.</div>
		</figcaption>
	</div>
</figure>
<p>This is a paragraph. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

<h2 id="form-elements">Form Elements</h2>

<p class="html-tags"><?php echo htmlTag(array(tag=>'button')); ?>, <?php echo htmlTag(array(tag=>'fieldset')); ?>, <?php echo htmlTag(array(tag=>'form')); ?>, <?php echo htmlTag(array(tag=>'input')); ?>, <?php echo htmlTag(array(tag=>'label')); ?>, <?php echo htmlTag(array(tag=>'legend')); ?>, <?php echo htmlTag(array(tag=>'option')); ?>, <?php echo htmlTag(array(tag=>'optgroup')); ?>, <?php echo htmlTag(array(tag=>'select')); ?>, <?php echo htmlTag(array(tag=>'textarea')); ?></p>

<form>
	<fieldset>
		<legend>Fieldset with a Legend</legend>
		<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui.</p>
		<ol>
			<li>
				<label for="text-field">Text input</label>
				<input type="text" id="text-field" />
			</li>
			<li>
				<label for="text-area">Textarea</label>
				<textarea id="text-area"></textarea>
			</li>
			<li>
				<label for="select-element">Select box</label>
				<select name="select-element" id="select-element">
					<optgroup label="Option Group 1">
						<option value="1">Option 1</option>
						<option value="2">Option 2</option>
						<option value="3">Option 3</option>
					</optgroup>
					<optgroup label="Option Group 2">
						<option value="1">Option 1</option>
						<option value="2">Option 2</option>
						<option value="3">Option 3</option>
					</optgroup>
				</select>
			</li>
			<li>
				<h6>Radio buttons</h6>
				<input id="radio-1" name="radio-button" type="radio" value="radio-1"/>
				<label for="radio-1">Radio 1</label>
				<input id="radio-2" name="radio-button" type="radio" value="radio-2"/>
				<label for="radio-2">Radio 2</label>
				<input id="radio-3" name="radio-button" type="radio" value="radio-3"/>
				<label for="radio-3">Radio 3</label>
			</li>
			<li>
				<h6>Checkboxes</h6>
				<input id="check-1" name="checkboxes" type="checkbox" value="check-1"/>
				<label for="check-1"> Checkbox 1</label>
				<input id="check-2" name="checkboxes" type="checkbox" value="check-2"/>
				<label for="check-2"> Checkbox 2</label>
				<input id="check-3" name="checkboxes" type="checkbox" value="check-3"/>
				<label for="check-3"> Checkbox 3</label>
			</li>
			<li>
				<label for="password">Password</label>
				<input name="password" type="password"/>
			</li>
			<li>
				<label for="file">File Input</label>
				<input name="file" type="file"/>
			</li>
			<li>
				<input type="submit" value="Submit"/>
			</li>
			<li>
				<button>Button</button>
			</li>
		</ol>
	</fieldset>
</form>

<h2 id="list-types">List Types</h2>

<h3>Definition List</h3><p class="html-tags"><?php echo htmlTag(array(tag=>'dl')); ?>, <?php echo htmlTag(array(tag=>'dt')); ?>, <?php echo htmlTag(array(tag=>'dd')); ?></p>
<dl>
	<dt>Definition Term</dt>
	<dd>Definition data. Lorem ipsum dolor sit amet, emphasis consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</dd>
	<dt>Definition Term</dt>
	<dd>Definition data. Lorem ipsum dolor sit amet, emphasis consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</dd>
</dl>

<h3>Ordered List</h3><p class="html-tags"><?php echo htmlTag(array(tag=>'ol')); ?>, <?php echo htmlTag(array(tag=>'li')); ?></p>
<ol>
	<li>List Item 1</li>
	<li>List Item 2</li>
	<li>List Item 3</li>
</ol>

<h3>Unordered List</h3><p class="html-tags"><?php echo htmlTag(array(tag=>'ul')); ?>, <?php echo htmlTag(array(tag=>'li')); ?></p>
<ul>
	<li>List Item 1</li>
	<li>List Item 2</li>
	<li>List Item 3</li>
</ul>

<h3>Nested Lists</h3>
<ol>
	<li>this is an ordered list item. It's just something I threw together. In the beginning was the word. And the word wrapped.</li>
	<li>this is another ordered list item
		<ul>
			<li>This is an unordered list within an ordered one.</li>
			<li>This is another unordered list item.
				<ol>
					<li>Just to be mean, here's another ordered list - inside the unordered list.</li>
					<li>...and another list item, to fill space.</li>
				</ol>
			</li>
			<li>This is a third item in that unordered list.</li>
			<li>This is a fourth.</li>
		</ul>
	</li>
	<li>This is item 3 in the initial ordered list.</li>
	<li>This is item 4.</li>
</ol>
<ol>
	<li>this is an ordered list item. It's just something I threw together. In the beginning was the word. And the word wrapped.
		<ol>
			<li>Here's another ordered list - inside the ordered list.
				<ol>
					<li>Here's yet another ordered list - nested deeper.</li>
					<li>...and another list item, to fill space.</li>
				</ol>
			</li>
			<li>...and another list item, to fill space.</li>
		</ol>
	</li>
	<li>this is another ordered list item</li>
</ol>

<h2 id="tables">Tables</h2>

<p class="html-tags"><?php echo htmlTag(array(tag=>'caption')); ?>, <?php echo htmlTag(array(tag=>'table')); ?>, <?php echo htmlTag(array(tag=>'tbody')); ?>, <?php echo htmlTag(array(tag=>'td')); ?>, <?php echo htmlTag(array(tag=>'tfoot')); ?>, <?php echo htmlTag(array(tag=>'th')); ?>, <?php echo htmlTag(array(tag=>'tr')); ?></p>
<table>
	<caption>Table caption</caption>
	<thead>
		<tr>
			<td colspan="5">Table Header</td>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<td colspan="5">Table Footer</td>
		</tr>
	</tfoot>
	<tbody>
		<tr>
			<th>Header Cell 1</th>
			<th>Header Cell 2</th>
			<th>Header Cell 3</th>
			<th>Header Cell 4</th>
			<th>Header Cell 5</th>
		</tr>
		<tr>
			<th>Header Cell 1</th>
			<td>Some kind</td>
			<td>of value</td>
			<td>in each</td>
			<td>row of the table</td>
		</tr>
		<tr>
			<th>Header Cell 2</th>
			<td>Just to show</td>
			<td>how it all</td>
			<td>might</td>
			<td>appear to users</td>
		</tr>
		<tr>
			<th>Header Cell 3</th>
			<td>$1,456.99</td>
			<td>489</td>
			<td>2,387</td>
			<td>January 1, 2012</td>
		</tr>
	</tbody>
</table>		

<h2 id="text-level">Text-level</h2>

<p class="html-tags"><?php echo htmlTag(array(tag=>'a')); ?>, <?php echo htmlTag(array(tag=>'blockquote')); ?>, <?php echo htmlTag(array(tag=>'em')); ?>, <?php echo htmlTag(array(tag=>'hr')); ?>, <?php echo htmlTag(array(tag=>'p')); ?>, <?php echo htmlTag(array(tag=>'strong')); ?></p>
<p>This is a paragraph, <a href="#">test link</a> adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl. Praesent mattis, <a class="offsite" href="http://www.google.com/">an offsite link</a> massa quis luctus fermentum, turpis mi volutpat justo, eu volutpat enim diam eget metus. </p>
<blockquote>This is a blockquote. Lorem ipsum dolor sit amet, emphasis consectetuer adipiscing elit. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</blockquote>
<p>This is a paragraph. Nullam dignissim convallis est. Quisque aliquam. Donec faucibus. Nunc iaculis suscipit dui. Nam sit amet sem. Aliquam libero nisi, imperdiet at, tincidunt nec, gravida vehicula, nisl.</p>

<p>This sentence contains <em>an emphasized phrase</em>.<br/>
This sentence contains something of <strong>importance</strong>.<br/>
<em>This sentence is emphasized and <strong>this has importance</strong> within it</em>.<br/>
<em>This sentence is emphasized and <em>this is emphazied</em> within it</em>.</p>

<p>Here is a horizontal rule...</p>
<hr />
<p>...did you notice the horizontal rule?</p>		

<h3>More Text-level</h3>
<dl class="html-tag">
	<dt><?php echo htmlTag(array(tag=>'abbr')); ?></dt>
	<dd>124 Raymond <abbr title="Avenue">Ave.</abbr> Hover for expansion of abbreviation.</dd>
	<dt><?php echo htmlTag(array(tag=>'address')); ?></dt>
	<dd>
		<address>
				This document was written by:<br/>
				<a href="mailto:homer@example.com">Homer Simpson</a>
				</address>
	</dd>
	<dt><?php echo htmlTag(array(tag=>'code')); ?></dt>
	<dd>To create a new array, type the following: <code>var faq = new Array(3)</code>.</dd>
	<dt><?php echo htmlTag(array(tag=>'del')); ?></dt>
	<dd>I am <del>very</del> happy that you visited this page :).</dd>
	<dt><?php echo htmlTag(array(tag=>'dfn')); ?></dt>
	<dd><dfn>Definition</dfn>: To define the meaning of a word, phrase or term.</dd>
	<dt><?php echo htmlTag(array(tag=>'ins')); ?></dt>
	<dd>I am <del>very</del> <ins>extremely</ins> happy that you visited this page :).</dd>
	<dt><?php echo htmlTag(array(tag=>'kbd')); ?></dt>
	<dd>Type <kbd>www.quackit.com</kbd> into your browser address bar.</dd>
	<dt><?php echo htmlTag(array(tag=>'mark')); ?></dt>
	<dd>Despite the stockmarket crash in 2008, the value of my share portfolio <mark>increased by 100 percent</mark>.</dd>
	<dt><?php echo htmlTag(array(tag=>'pre')); ?></dt>
	<dd>
		<pre>The brower should
display all white space
		  as it was entered.
</pre>
	</dd>
	<dt><?php echo htmlTag(array(tag=>'s')); ?></dt>
	<dd>Purchase your very own beach shack from just <s>$2.5 million</s> $1.9 million.</dd>
	<dt><?php echo htmlTag(array(tag=>'samp')); ?></dt>
	<dd>When you click the <kbd>Delete</kbd> button, you will be asked <samp>Are you sure you want to delete 9 to 5 job?</samp> Click <kbd>Yes</kbd> to continue.</dd>
	<dt><?php echo htmlTag(array(tag=>'sub')); ?></dt>
	<dd>This is <sub>subscripted</sub> text.</dd>
	<dt><?php echo htmlTag(array(tag=>'sup')); ?></dt>
	<dd>This is <sup>superscripted</sup> text.</dd>
	<dt><?php echo htmlTag(array(tag=>'var')); ?></dt>
	<dd>At the bottom of the search results screen, we have added "Next <var>n</var>" functionality to allow the user to view more than one screen of search results.
</dl>

<h4>Backwards compatibility</h4>
<h5><a href="http://www.w3.org/TR/html5/obsolete.html#non-conforming-features">Obsolete</a> - do not use</h5>
<dl class="html-tag">
	<dt>&lt;acronym&gt;</dt>
	<dd><acronym title="National Basketball Association">NBA</acronym>. Hover for full description. <br/> <span class="use">Use &lt;abbr&gt; instead</span></dd>
	<dt>&lt;big&gt;</dt>
	<dd>This is <big>big</big> text.<br/> <span class="use">Use &lt;h1-6&gt;, &lt;mark&gt;, or &lt;strong&gt; instead</span></dd>
	<dt>&lt;tt&gt;</dt>
	<dd>This is <tt>teletype</tt> text.<br/> <span class="use">Use &lt;kbd&gt; instead</span></dd>
</dl>

<h5><a href="http://www.w3.org/TR/html5-diff/#changed-elements">Redefined</a> - do not use in traditional way</h5>
<dl class="html-tag">
	<dt><?php echo htmlTag(array(tag=>'b')); ?></dt>
	<dd>The <b>bold element</b> draws attention without extra importance and no alternate voice or mood.<br/><span class="use">Use &lt;strong&gt; for importance</span></dd>
	<dt><?php echo htmlTag(array(tag=>'cite')); ?></dt>
	<dd>My favorite book is <cite>The Reality Dysfunction</cite> by Peter F. Hamilton.</dd>	
	<dt><?php echo htmlTag(array(tag=>'i')); ?></dt>
	<dd>The <i>italic element</i> denotes an alternate voice or mood, or a different quality of text.<br/><span class="use">Use &lt;em&gt; for emphasis</span></dd>
	<dt><?php echo htmlTag(array(tag=>'small')); ?></dt>
	<dd><small>© Copyright 2058, Example Corporation</small>.</dd>
	<dt><?php echo htmlTag(array(tag=>'u')); ?></dt>
	<dd>How does one <u>mispell</u> the word misspell.</dd>						
</dl>

<h2 id="special-cases">Special Cases</h2>

Improperly marked paragraph with no <code>&lt;P&gt;</code>.
<hr/>
<div>Div preceded by a horizontal rule, which might be hidden.</div>
<div>
	<p>Paragraph within a div.</p>
</div>

<?php

function htmlTag ($parameters) {
	$tag = $parameters['tag'];
	switch($tag) {
		case 'h1': case 'h2': case 'h3': case 'h4': case 'h5': case 'h6':
			$s = 's';
			$taglink = 'h1-h2-h3-h4-h5-and-h6';
			break;
		case 'sub': case 'sup':
			$s = 's';
			$taglink = 'sub-and-sup';
			break;
		default:
			$s = '';
			$taglink = $tag;			
	}
	$link = $parameters['tag'] ? $parameters['tag'] : true;	
	if ($link) {
		$linkPre = '<a href="http://dev.w3.org/html5/spec/the-'.$taglink.'-element'.$s.'.html#the-'.$taglink.'-element'.$s.'">';
		$linkPost = '</a>';
	}
	else {
		$linkPre = '';
		$linkPost = '';
	}
	return $linkPre.'&lt;'.$tag.'&gt;'.$linkPost;
}