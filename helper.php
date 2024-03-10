<?php
function validate_input_text($textValue){
    if(!empty($textValue)){
        $trim_text=trim($textValue);
        $sanitize_str=filter_var($trim_text,FILTER_SANITIZE_STRING);
        return $sanitize_str;

    }
}
function validate_input_email($textValue){
    if(!empty($textValue)){
        $trim_text=trim($textValue);
        $sanitize_str=filter_var($trim_text,FILTER_SANITIZE_EMAIL);
        return $sanitize_str;

    }
}


