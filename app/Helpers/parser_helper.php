<?php

function parser(string $name, array $data = [], array $options = []): string
{
    if (array_key_exists('saveData', $options)) {
        $saveData = (bool) $options['saveData'];
        unset($options['saveData']);
    } else {
        $saveData = null;
    }

    return \Config\Services::parser()
        ->setData($data)
        ->renderString(\Config\Services::renderer()->setData($data, 'raw')->render($name, $options, $saveData), $options, $saveData);
}
