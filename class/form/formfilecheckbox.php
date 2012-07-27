<?php

class IcalendarFormFileCheckBox extends icms_form_elements_Checkbox {

	function IcalendarFormFileCheckBox($caption, $name, $value = null){
		//$this->icms_form_elements_Checkbox($caption, $name, $value);
	}

	/**
	 * prepare HTML for output
	 *
     * @return	string
	 */
	function render(){
		$ret = "";
		if ( count($this->getOptions()) > 1 && substr($this->getName(), -2, 2) != "[]" ) {
			$newname = $this->getName()."[]";
			$this->setName($newname);
		}
		foreach ( $this->getOptions() as $value => $name ) {
			$ret .= "<input type='checkbox' name='".$this->getName()."' value='".$value."'";
			$ret .= " checked='checked'";
			$ret .= $this->getExtra()." />&nbsp;".$name."<br />\n";
		}
		return $ret;
	}

}
?>