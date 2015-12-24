<?php namespace KhairulImam\Installer\Compilers;

/**
* TemplateCompiler class
*/
class TemplateCompiler implements Compiler {

	private $data;
	private $template;

	public function __construct($data, $template)
	{
		$this->data = $data;
		$this->template = $template;
	}

	/**
	 * compile template action
	 */
	public function compile() {
		if(file_exists($this->template))
		{
			$templ = file_get_contents($this->template);
			foreach ($this->data as $key => $value) {
				$compiled = preg_replace("/\\$$key\\$/i", $value, $templ);
				$templ = $compiled;
			}
			return $compiled;
		}else
		{
			return 'File tidak ditemukan file = '.$this->template;
		}
	}
}