<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<h1>BBS View page</h1>

<div id="body">
	<p>It's test page. If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>

	<p>If you would like to edit this page you'll find it located at:</p>
	<code>application/views/bbs_view.php</code>

	<p>The corresponding controller for this page is found at:</p>
	<code>application/controllers/bbs.php</code>

	<p>Returning segment:</p>
	<code><?php print_r($SEGS) ?></code>

	<h2 style="font-weight: normal;">Content:</h2>
	<div>
		제목: <?= $bbs_view->title ?><br>
		작성일: <?= $bbs_view->date ?><br>
		본문: <?= $bbs_view->contents ?>
	</div>
</div>
