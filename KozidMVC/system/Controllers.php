<?php
namespace rifatMVC;

class Controllers
{
    public function do_requested($segments)
    {
        if($segments == []) $this->index();
        else
        {
            $method = array_shift($segments);
            $method = strtolower($method);
            
            if(count($segments) == 1) $segments = $segments[0];
            
            if($method == '') $method = 'index';
            $this->{$method}($segments);
        }
    }
}
