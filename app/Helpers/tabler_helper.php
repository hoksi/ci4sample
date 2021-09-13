<?php
function tabler_iframe_tabs($data) {
    return view_cell('\App\Libraries\Tabler::iframeTabs', $data);
}

function tabler_card($data) {
    return view_cell('\App\Libraries\Tabler::card', ['cardData' => $data]);
}

function tabler_page_title($data) {
    return view_cell('\App\Libraries\Tabler::pageTitle', ['pageTitle' => $data]);
}

