<?php

return function()
{
    $this->_data['config'] = $this->{'fqtl/config'}();
    $this->{'fqtl/dispatch'}();
};
