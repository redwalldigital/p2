<?php
/**
 * Unit detailform
 * @author Ilja Tihhanovski <ilja.tihhanovski@gmail.com>
 * @copyright (c) Ilja Tihhanovski
 *
 */


	echo simpleform(array(
			textbox($obj, "name", "Name"),
			textarea($obj, "memo"),
		));


