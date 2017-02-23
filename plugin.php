<?php

class FormPlaceholdersPlugin extends KokenPlugin
{
	function __construct()
	{
		$this->register_filter('site.output', 'placehold');
	}

    /**
     * Add the text from a label as input placeholder text in Koken shortcode contact forms.
     *
     * @param  string $content
     *
     * @return string
     */
	public function placehold($content)
    {
        return preg_replace(
            '/<label(.*?)>(.*?)<\/label>\R\s<(.*?)(\s)id="k-contact-form/',
            '<label$1>$2</label>'."\n".'<$3 placeholder="$2" id="k-contact-form', 
            $content
        );
	}
}
