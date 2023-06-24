<?php

use AdrianDev374\Apps\Template\TemplateKernel;

require_once dirname(__DIR__) . '/../bootstrap.php';

return function (array $context) {
    return new TemplateKernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
