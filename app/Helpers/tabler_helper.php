<?php

function tabler_iframe_tabs($data)
{
    return view_cell('\App\Libraries\Tabler::iframeTabs', $data);
}

function tabler_card($data)
{
    return view_cell('\App\Libraries\Tabler::card', ['cardData' => $data]);
}

function tabler_card_start()
{
    return implode('', [
        '<div class="container-xl">',
        '<div class="row row-cards">',
        '<div class="col-md-12">',
        '<div class="card">',
        '<div class="card-body">',
    ]);
}

function tabler_card_end()
{
    return implode('', [
        '</div>', '</div>', '</div>', '</div>', '</div>'
    ]);
}

function tabler_page_title($data)
{
    return view_cell('\App\Libraries\Tabler::pageTitle', ['pageTitle' => $data]);
}

function get_last_query($replace = true)
{
    $db = db_connect();

    return "\n* Query : " . ($replace ? str_replace("\n", ' ', $db->getLastQuery()) : $db->getLastQuery());
}
